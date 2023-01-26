
@extends('layouts.admin_master')
@section('content')
<div class="container-fluid px-4">
    <h1 class="container-fluid mt-4 title">Users Info</h1>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>mobile_no </th>
                        <th>address</th>
                        <th>booking_id</th>
                      <!--  <th>created_at</th>
                        <th>updated_at</th>-->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user_infos as $info)
                    <tr>
                        <td>#</td>
                        <td>{{$info->name}}</td>
                        <td>{{$info->mobile_no}}</td>
                        <td>{{$info->address}}</td>
                        <td>{{$info->booking_id}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
