<?php

namespace App\Http\Controllers\Admin;
use App\Models\Offer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
       return view('admin.offer.index', compact('offers'));
    }

    public function create()
    {

       return view('admin.offer.create');
    }

    public function store(Request $request)
    {
       $request->validate([
        'value' => 'required',
        'from' => 'required',
        'to' => 'required',
        'status' => 'required'
       ]);

       Offer::create([
        'value' => $request->value,
        'from' => date('Y-m-d h:i:s', strtotime($request->from)),
        'to' =>  date('Y-m-d h:i:s', strtotime($request->to)),
        'status' =>  $request->status
       ]);

       return redirect()->to('admin/offers');
    }

    public function updateOffer(Request $request){
        $request-> validate([
            'value' => 'required',
            'from' => 'required',
            'to' => 'required',
            'status' => 'required'
        ]);
        $offer = Offer::find($request->id);

        $offer->update([
            'value' => $request->value,
        'from' => date('Y-m-d h:i:s', strtotime($request->from)),
        'to' =>  date('Y-m-d h:i:s', strtotime($request->to)),
        'status' =>  $request->status
        ]);

        return redirect()->to('admin/offers');
    }

    public function update($id)
    {
        $offer = Offer::find($id);
        $offers = \App\Models\Offer::all();
       return view('admin.offer.update', compact('offer' ));
    }

    public function delete($id)
    {
        $offer = Offer::find($id);
        $offer->delete();
        return back();
    }
}
