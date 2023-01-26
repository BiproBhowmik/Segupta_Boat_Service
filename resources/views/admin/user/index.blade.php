
@extends('layouts.admin_master')
@section('content')
<div class="container-fluid px-4">
    <h1 class="container-fluid mt-4 title">Users</h1>

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email </th>
                        <th>phone</th>
                        <th>action/status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>#</td>
                            <td>{{$user->name}}({{$user->user_type}})</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->mobile_no}}</td>
                            <td>
                                <a onclick="return confirm('Mark the user as admin?')" href="{{url('admin/admin/admin/'.$user->id)}}" title="Confirm" class="text-primary">Admin</a>
                                <a onclick="return confirm('Mark the user as user?')" href="{{url('admin/admin/user/'.$user->id)}}" title="Cancle" class="text-danger">User</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
