<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['userInfo', 'package', 'payment', 'user'])->where('status', 'pending')->get();
       return view('admin.booking.index', compact('bookings'));
    }

    public function approved()
    {
        $bookings = Booking::with(['userInfo', 'package', 'payment', 'user'])->where('status', 'approved')->get(); // approved
        return view('admin.booking.approved', compact('bookings'));
    }


    public function canceled()
    {
        $bookings = Booking::with(['userInfo', 'package', 'payment', 'user'])->where('status', 'canceled')->get(); // approved
        return view('admin.booking.canceled', compact('bookings'));
    }


    public function delete($booking_id)
    {
        $booking = Booking::find($booking_id);
        $booking->delete();
    }

    public function confirm($booking_id)
    {
        $booking = Booking::find($booking_id);
        $booking->status = 'approved';
        $booking->save();
        return back();
    }
    public function cancle($booking_id)
    {
        $booking = Booking::find($booking_id);
        $booking->status = 'canceled';
        $booking->save();
        return back();
    }

}
