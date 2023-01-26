<?php

namespace App\Http\Controllers\Admin;
use App\Models\Package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPackagesController extends Controller
{
     public function index()
    {
        $packages = Package::all();
       return view('admin.package.index', compact('packages'));
    }
    public function create()
    {
        $offers = \App\Models\Offer::all();
       return view('admin.package.create', compact('offers'));
    }
    public function store(Request $request){
//         dd($request->all());
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'weekday_price' => 'required',
            'weekend_price' => 'required',
            'image' => 'required'
        ]);

        $image = 'default.jpg';

        if ($request->hasFile('image')) {
            $extension = $request->image->extension();
            $image = 'IMG_PACKAGE_'.time().'.'.$extension;
            $path = public_path('uploads/package/');
            $request->image->move($path, $image);
        }

        Package::create([
            'name' => $request->name,
            'price' =>  $request->price,
            'offer_id' =>  $request->offer_id,
            'weekday_price' => $request->weekday_price,
            'holiday_price' => $request->weekend_price,
            'image' => $image,
            'description' => $request->description,
        ]);

           return redirect()->to('admin/packages');

    }

    public function updatePackage(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'weekday_price' => 'required',
            'weekend_price' => 'required',
            'image' => 'required'

        ]);
        $package = Package::find($request->id);

        $previousImagePath = public_path('uploads/package/'.$package->image);

        if ($request->hasFile('image')) {

            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }

            $extension = $request->image->extension();
            $image = 'IMG_PACKAGE_'.time().'.'.$extension;
            $path = public_path('uploads/package/');
            $request->image->move($path, $image);
        }

        $package->update([
            'name' => $request->name,
            'price' =>  $request->price,
            'offer_id' =>  $request->offer_id,
            'weekday_price' => $request->weekday_price,
            'image' => $image,
            'holiday_price' => $request->weekend_price,
            'description' => $request->description,
        ]);

           return redirect()->to('admin/packages');

    }

    public function update($id)
    {
        $package = Package::find($id);
        $offers = \App\Models\Offer::all();
       return view('admin.package.update', compact('package', 'offers'));
    }

    public function delete($id)
    {
        $package = Package::find($id);

        if (count($package->bookings) < 1) {
            $package->delete();
            return back()->with('success', 'Deleted');
        }




        return back()->with('error', 'This package has booking. so can not delete');
    }
}
