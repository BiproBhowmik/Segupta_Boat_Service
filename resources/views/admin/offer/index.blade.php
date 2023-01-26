@extends('layouts.admin_master')
@section('content')
<div class="card mb-4">
    <h1 class="container-fluid mt-4 title">Offers</h1>
    <div class="card-header">
        <a class="btn btn-primary btn-sm ml-2" href="{{ url('admin/create_offers') }}" title="create">Create Offer</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Offer</th>
                    <th>from</th>
                    <th>to</th>
                    <th>status</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($offers as $key => $offer)
                @php
                    $from = date('d/m/Y', strtotime($offer->from));
                    $to = date('d/m/Y', strtotime($offer->to));
                @endphp
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$offer->value}}</td>
                    <td>{{$from}}</td>
                    <td>{{$to}}</td>
                    <td>{{$offer->status ? 'Active' : 'Not Active'}}</td>
                    <td>
                        <a href="{{url('admin/offer_update/'.$offer->id)}}" title="edit" class="text-primary">edit</a>
                        <a onclick ="return confirm('Want to delete?')" href="{{url('admin/offer/delete/'.$offer->id)}}" title="delete" class="text-danger">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
