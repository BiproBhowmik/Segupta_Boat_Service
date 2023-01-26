@extends('layouts.admin_master')
@section('content')
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Package</h3></div>
                                <div class="card-body">
                                    <form
                                        action="{{ url('admin/store_package') }}"
                                        method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputType"  name="name" value="{{old('name')}}" type="text" placeholder="name@example.com" />
                                            <label for="inputEmail">Name</label>
                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-floating mb-3">
                                            <select name="offer_id" id="" class="form-control">
                                                <option value="">Select a offer</option>
                                                @foreach ($offers as $offer)
                                                <option value="{{ $offer->id }}">{{ $offer->value }} TK</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="price" value="{{old('price')}}" id="price" type="text" placeholder="Price" />
                                            <label for="price">Price</label>
                                        </div>
                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="weekday_price" value="{{old('weekday_price')}}" id="" type="text" placeholder="Weekday_price" />

                                            <label for="weekday_price">WeekDay Price</label>
                                        </div>
                                        @error('weekday_price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="weekend_price" value="{{old('weekend_price')}}" id="" type="text" placeholder="Weekend_price" />

                                            <label for="Weekday_price">WeekEnd Price</label>
                                        </div>
                                        @error('weekday_price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="form-floating mb-3">
                                            <textarea name="description" id="description" cols="10" rows="4" class="form-control"></textarea>

                                            <label for="description">Description</label>
                                        </div>
                                        @error('weekday_price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="image" id="" type="file" required/>

                                            <label for="Weekday_price">Image</label>
                                        </div>
                                        @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                        <button class="btn btn-primary btn-sm" type="submit" title="create">Create Package</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

@endsection
