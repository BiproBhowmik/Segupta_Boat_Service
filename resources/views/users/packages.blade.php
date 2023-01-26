@extends('layouts.master')
@section('content')
<section class="packages">
    <div class="container">
       <p class="title-brand" style="padding-top:70px;">Our Packages</p>
       <div class="row ">
           @foreach($packages as $package)
               @php
                   $image = $package->image === 'default.jpg'
                   ? asset('default/default.jpg')
                   : asset('uploads/package/'.$package->image)
                   ;
               @endphp
               <div class="col-md-12">
                   <div class="row cart">
                       <div class="col-md-5 ">
                           <p><img src="{{ $image }}" alt="Image" class="img-fluid"></p>
                       </div>
                       <div class="col-md-7">
                           <div class="row">
                               <div class="col-md-12">
            <span>
                <h4>{{ $package->name }}
                    <p style="float:right;">
                            <span class="text-brand1">TK. {{ number_format($package->price, 2) }}</span>
                        per person
                    </p>
                </h4>
            </span>
                                   <p>{{ $package->description }}</p>
                                   <div class="row">
                                       <div class="col-md-6">

                                           <a href="{{ url('/package/details/'.$package->id) }}" >  <button >Detail</button> </a>
                                       </div>
                                       <div class="col-md-6">
                                           <a href="{{ url('/package/booking/'.$package->id) }}" >  <button >Book Now</button> </a>
                                       </div>
                                   </div>

                               </div>

                           </div>
                       </div>
                   </div>
               </div>
           @endforeach
       </div>
    </div>
    </section>

@endsection
