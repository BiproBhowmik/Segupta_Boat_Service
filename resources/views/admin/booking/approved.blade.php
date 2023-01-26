@extends('layouts.admin_master')
@section('content')
<div class="card mb-4">
    <h1 class="container-fluid mt-4 title">Approved Bookings</h1>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>booking_id</th>
                    <th>package</th>
                    <th>persons</th>
                    <th>price</th>
                    <th>User Info</th>
                    <th>Date</th>
                    <th>payment Details</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>
                @foreach($bookings as $key => $booking)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>#{{ $booking->booking_id }}</td>
                        <td>{{ $booking->package->name }}</td>
                        <td>{{ $booking->persons }}</td>
                        <td>Tk. {{ number_format($booking->price, 2) }}</td>
                        <td>
                            <span>{{ $booking->userInfo->name }}</span><br>
                            <span>{{ $booking->userInfo->mobile_no }}</span><br>
                            <span>{{ $booking->userInfo->address }}</span>
                        </td>
                        <td>{{ $booking->date }}</td>
                        <td>
                            <b>{{ $booking->payment_method }}</b><br>
                            @if($booking->payment)
                                <span>{{ $booking->payment->transaction_id }}</span><br>
                                <span>{{ $booking->payment->account_no }}</span><br>
                                <span>{{ $booking->payment->amount }}</span>
                            @endif
                        </td>
                        <td>
                            <a onclick="return confirm('Want to confirm?')" href="{{url('admin/booking/confirm/'.$booking->id)}}" title="Confirm" class="text-primary">Completed</a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
