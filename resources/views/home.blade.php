@extends('layouts.app')

@section('content')
<section class="userProfile">
<div class="container">
    <div class="row justify-content-center userProfile">
        <div class="col-md-12 ">
            <div class="profile-content ">
                    <h1>
                        Users Profile
                    </h1>
                    <h3>You are logged in</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="card mb-4">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>booking_id</th>
                                        <th>package</th>
                                        <th>persons</th>
                                        <th>price</th>
                                        <th>User Info</th>
                                        <th>Date</th>
                                        <th>payment </th>
                                        <th>Requested Date</th>
                                        <th>Status</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($bookings as $key => $booking)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>#{{ $booking->booking_id }}</td>
                                            <td>{{ $booking->package->name }}</td>
                                            <td>{{ $booking->persons }}</td>
                                            <td>Tk. per person {{ number_format($booking->price, 2) }}</td>
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
                                            <td>{{ date('Y-m-d', strtotime($booking->created_at)) }}</td>
                                            <td>
                                            @if ($booking->status == 'canceled')
                                                <span>Cancel</span>
                                            @elseif ($booking->status == 'approved')
                                                <span>Approved</span>
                                            @elseif ($booking->status == 'complete')
                                                <span>Completed</span>
                                            @else
                                                <span>Pending</span>
                                            @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</section>
@endsection
