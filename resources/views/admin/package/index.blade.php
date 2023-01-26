@extends('layouts.admin_master')
@section('content')
<div class="card mb-4">
    <h1 class="container-fluid mt-4 title">Packages</h1>
    <div class="card-header">
        <a class="btn btn-primary btn-sm ml-2" href="{{ url('admin/create_packages') }}" title="create">Create Package</a>
    </div>
    @if(Session::has('error'))
    <p class="alert alert-warning">{{ Session::get('error') }}</p>
    @endif
    @if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th></th>
                    <th>name</th>
                    <th>price</th>
                    <th>Description</th>
                    <th>holiday_price</th>
                    <th>weekday_price</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($packages as $key => $package)
                    @php
                    $image = $package->image === 'default.jpg'
                    ? asset('default/default.jpg')
                    : asset('uploads/package/'.$package->image)
                    ;
                    @endphp
                <tr>
                    <td>
                        <img
                            width="40"
                            height="30"
                            src="{{ $image }}"
                            alt="{{ $package->name }}">
                    </td>
                    <td>{{$package->name}}</td>
                    <td>{{number_format($package->price, 2)}} Tk</td>
                    <td>{{$package->description}}</td>
                    <td>{{number_format($package->weekday_price, 2)}} TK</td>
                    <td>{{number_format($package->holiday_price, 2)}} TK</td>

                    <td>
                        <a href="{{url('admin/package_update/'.$package->id)}}" title="edit" class="text-primary">edit</a>
                        <a onclick="return confirm('Want to delete?')" href="{{url('admin/package/delete/'.$package->id)}}" title="delete" class="text-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
