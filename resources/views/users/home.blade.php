@extends('layouts.master')
@section('content')
<div class="intro-section" style="background-image: url('{{asset('assets')}}/images/avijatrik.jpg');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 mx-auto text-center" data-aos="fade-up">
          <h1>Thank you for your interest to explore Tanguyar Haor</h1>
          <p>We are a premimum boat service provider in Sunamganj. We ensure to provide you a comfortable
         and secured journey in Tanguya</p>
          <p> <a href="{{ url('/contact-us') }}" class="btn btn-primary py-3 px-5"> Contact</a></p>
        </div>
      </div>
    </div>
  </div>


<!-- END slider -->



<div class="advertise" >
 <div class="container">
   <div class="row ">
    <div class="col-md-7 cart ">
      <div class="row">

        <div class="col-md-12 heading-home ">
      <h4>The Premium Houseboat in Tanguya</h4>
      <h4>About this experience</h4>
    </div>

    </div>

      <div class="row">

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


   </div>




    <div class="col-md-4 cart" style="margin-left: 20px;">
      <div class="row">
        <div class="col-md-12">
      <h4 class="heading-home">Check Availability</h4>
    </div>
  </div>
  <h4 >From  <span class="text-brand1">tk4000 </span> per  person!</h4>
    <form action="/action_page.php">
       <div class="single-contact-form">
            <div class="">
              <h5 class ="pb-10">Date</h5>
              <div class="col-10">
                <input class="form-control" type="date" value="2022-10-16" id="example-date-input">
              </div>
            </div>

        </div>
        <div class="single-contact-form js-sticky">
            <div class="contact-box">
              <h5 class="pb-10">Select Your prefered Cabins</h5>


               <div class="row">
                <div class="col-md-6">
          <input type="checkbox" id="cabin1" name="cabin1" value="Cabin-1">
          <label for="cabin-1"> Cabin no 1</label><br>
          <input type="checkbox" id="cabin3" name="cabin3" value="Cabin-3">
         <label for="cabin3"> Cabin no 3</label><br>
          <input type="checkbox" id="cabin5" name="cabin5" value="Cabin-5">
         <label for="cabin5"> Cabin no 5</label><br><br>
       </div>
         <div class="col-md-6">
          <input type="checkbox" id="cabin2" name="cabin2" value="Cabin-2">
          <label for="cabin2"> Cabin no 2</label><br>
          <input type="checkbox" id="cabin4" name="cabin4" value="Cabin-4">
         <label for="cabin4"> Cabin no 4</label><br>
          <input type="checkbox" id="cabin6" name="cabin6" value="Cabin-6">
         <label for="cabin6"> Cabin no 6</label><br><br>
       </div>
     </div>
            </div>

        </div>

        </form>
         <p><a href="#" class="btn-check btn-primary">Check Availability</a></p>
       </div>



 </div>
</div>
<section class="packages">
<div class="container">
   <p class="title-brand">Our Packages</p>
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

                   <a href="{{ url('package/details/'.$package->id) }}" >  <button >Detail</button> </a>
               </div>
               <div class="col-md-6">
                   <a href="{{ url('package/booking/'.$package->id) }}" >  <button >Book Now</button> </a>
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

<!--

<section class="vedio ">
    <div class="container">
        <p class="title-brand">More About Us</p>
        <div class="row cart_vedio">
            <div class="col-md-1"></div>

                    <div class="col-md-10 cart_booking_box">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/5Dd821urWxM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-1"></div>

        </div>

</section>
-->



<div class="site-section bg-image overlay" style="background-image: url('{{asset('assets')}}/images/hero_2.jpg');">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="text-white">Get In Touch With Us</h2>
        <p class="lead text-white">For any Query Please Contact With Us</p>
        <p class="mb-0"><a href="#" class="btn btn-warning py-3 px-5 text-white">Contact Us</a></p>
      </div>
    </div>
  </div>
</div>
@endsection
