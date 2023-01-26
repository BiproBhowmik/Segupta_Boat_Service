@extends('layouts.admin_master')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 title">Dashboard</h1>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="admin-icon"><i class="fa-sharp fa-solid fa-sort"></i></div>
                <a class="deshboard-text" href="{{ route('admin.bookings') }}">Bookings</a>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-secondary text-white mb-4">
                <div class="admin-icon"><i class="fa-solid fa-money-bill-transfer"></i></div>
                <a class="deshboard-text" href="{{ route('admin.payments') }}">Payments</a>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="admin-icon"><i class="fas fa-tag"></i></div>
                <a class="deshboard-text" href="{{ route('admin.packages') }}">Packages</a>
            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-xl-4 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="admin-icon"><i class="fa fa-gift"></i></div>
                <a class="deshboard-text" href="{{ route('admin.offers') }}">Offers</a>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="admin-icon"><i class="fas fa-users"></i></div>
                <a class="deshboard-text" href="{{ route('admin.users') }}">Users</a>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="admin-icon"><i class="fas fa-users"></i></div>
                <a class="deshboard-text" href="{{ route('admin.user_info') }}">Users Info</a>
            </div>
        </div>
    </div>
</div>
@endsection
