<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index(Package $package)
    {
        return view('users.booking', compact('package'));
    }

    public function bookingStore(Request $request)
    {
        $request->validate([
            'persons' => 'required|integer|min:1',
            'date' => 'required',
            'payment_method' => 'required'
        ]);

        $package = Package::find($request->id);

        DB::transaction(function () use($request, $package){

            $booking = Booking::create([
                'booking_id' => uniqid(),
                'package_id' => $package->id,
                'user_id' => auth()->user()->id,
                'persons' => $request->persons,
                'payment_method' => $request->payment_method,
                'price' => $package->price,
                'date' => date('Y-m-d', strtotime($request->date)),
                'notes' => $request->notes
            ]);

            if ($booking) {
                $booking->userInfo()->create([
                    'name' => auth()->user()->name,
                    'mobile_no' => auth()->user()->mobile_no,
                    'address' => auth()->user()->address
                ]);

                if ($request->payment_method === 'bkash') {
                     $booking->payment()->create([
                         'user_id' => auth()->user()->id,
                         'method' => ucfirst($request->payment_method),
                         'transaction_id' => $request->transaction_id,
                         'account_no' => $request->account_no,
                         'amount' => $request->amount
                     ]);
                }
            } else {
                return redirect()->back()->with('message', 'Some thing went wrong');
            }

        });

        return redirect('/');
    }
}
