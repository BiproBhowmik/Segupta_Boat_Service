@extends('layouts.admin_master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Offer</h3></div>
                <div class="card-body">
                    <form action="{{ url('admin/offer/update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$offer->id}}">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputType" min="5" name="value" value="{{$offer->value}}" type="number" placeholder="name@example.com" />
                            <label for="inputEmail">Value</label>
                        </div>
                        @error('value')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-floating mb-3">
                            <input class="form-control" name="from" value="{{ date('Y-m-d', strtotime($offer->from)) }}" id="inputStartDate" type="date" placeholder="from" />
                            <label for="inputStartDate">From</label>
                        </div>
                        @error('from')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-floating mb-3">
                            <input class="form-control" name="to" value="{{ date('Y-m-d', strtotime($offer->to)) }}" id="inputEndtDate" type="date" placeholder="to" />
                            <label for="inputEndtDate">To</label>
                        </div>
                        @error('to')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-check mb-3">
                            <p>Active status</p>
                            <input type="radio" @if($offer->status === 1) checked @endif id="active" name="status" value="1">
                             <label for="active"> Active</label>
                            <input @if($offer->status === 0) checked @endif type="radio" id="not_active" name="status" value="0">
                              <label for="not_active"> Not Active</label>
                        </div>
                        @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button class="btn btn-primary btn-sm" type="submit" title="create">Create Offer</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
