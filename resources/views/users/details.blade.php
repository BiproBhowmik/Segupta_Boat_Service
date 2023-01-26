@extends('layouts.master')
@section('content')<div class="site-section padding" >
    <div class="container">
      <div class="row cart_booking">
        <div class="col-md-1">

          </div>

          @php
              $image = $package->image === 'default.jpg'
              ? asset('default/default.jpg')
              : asset('uploads/package/'.$package->image)
              ;
          @endphp

        <div class="col-md-10 cart_booking_box" >
            <div class="details-heading">
          <h3 class="">Details About Our Packages</h3>
          <h4>{{ $package->name}} </h4>
           <h5>Start At <span class="text-brand1">Tk {{ number_format($package->price, 2) }} </span>per person</h5></br>
            </div>

            <div class="row " style="padding-left:10px; padding-right:10px;">

                <div class="row">
            <div class="col-md-6 padding-left">
              <h5>Six Cabins and two washrooms</h5>
              <p>The premium house boat has 6 separate cabins and 2 washrooms</p>
            </div>
            <div class="col-md-6">
              <h5>Duration: Two day One night</h5>
              <p>Check in at 8am. Spend the night on houseboat and check out at 5pm</p>
            </div>
            </div>
            <div class="row">
              <div class="col-md-6 padding-left">
                <h5>Exotic and Locally Sourced Food</h5>
                <p>We have an experienced team to prepare dishes sourced from hoar and villages</p>
              </div>
               <div class="col-md-6">
                 <h5>On Board at Sunamganj</h5>
                 <p>You do not need to go further Sunamganj town. Our service starts from the bus station</p>

              </div>
            </div>
            <div class="row">
              <div class="col-md-6 padding-left">
                <h5>Proper Safety Equipment</h5>
                <p>We have life jacket and other safety equipment, and also our tour guide make sure enjoy safely.</p>
              </div>

              <div class="col-md-6">
                <h5>Make Sure Your Comfortability</h5>
                <p>Our houseboat built to make sure you can experience hoar with comfort</p>
              </div>
            </div>
          </div>
         <div class="row">
            <div class="col-md-12 details-button">

                    <a href="{{ url('/package/booking/'.$package->id) }}" >  <button >Booked Now</button> </a>

            </div>
         </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </div>
@endsection
