@extends('layouts.master')
@section('content')
<div class="site-section registration-area ">
    <div class="container ">
      <div class="row cart_booking">
       <div class="col-md-1"></div>
        <div class="col-md-10 cart_booking_box">


          <form action="#" class="row ">
            <div class="form-group col-md-12 ">
              <div class="row">
            <div class="col-md-8">
            <h3>Welcome To Our House Boat</h3>
          <h5>Create an Account and Join with Us</h5>
          </div>

        <div class="col-md-4">
                 <p> <span>Already have any account? <a href="{{ url('/login') }}">Sign in now</a></span></p>
        </div>
          </div>

              <div class="row ">
                  <div class="col-md-2">
                       <h5>Name</h5>
                  </div>
                   <div class="col-md-5">
                     <label>First Name</label>
                     <input type="text" name="first_name" required="">

                  </div>
                   <div class="col-md-5">
                    <label>Last Name</label>
                     <input type="text" name="last_name" required="">

                  </div>
              </div>
               <div class="row ">
                  <div class="col-md-2">
                       <h5>Address</h5>
                  </div>
                   <div class="col-md-10">
                     <label>Street Address</label>
                     <input type="text" name="street_address">

                  </div>

              </div>
               <div class="row ">
                  <div class="col-md-2">

                  </div>
                   <div class="col-md-5">
                     <label>City</label>
                     <input type="text" name="city_name">

                  </div>
                  <div class="col-md-5">
                     <label>State/Province</label>
                     <input type="text" name="state_name">

                  </div>

              </div>
               <div class="row ">
                  <div class="col-md-2">
                     <h5>Mobile No</h5>
                  </div>
                   <div class="col-md-10">
                     <label>Mobile No:</label>
                    <input type="tel" id="phone" class="form-control" name="phone" placeholder="01XXX-XXXXXX" pattern="[0-9]{5}-[0-9]{6}" required><br>

                  </div>

              </div>
              <div class="row ">
                  <div class="col-md-2">
                     <h5>Email</h5>
                  </div>
                   <div class="col-md-10">
                     <label>Email:</label>
                    <input type="email" id="email" class="form-control" name="email" required><br>

                  </div>

              </div>
              <div>

              </div>

              <div class="row ">
                  <div class="col-md-2">
                     <h5>Password</h5>
                  </div>
                   <div class="col-md-10">
                    <label>Password:</label>
                        <input type="password" value="" id="password" required class="form-control" placeholder="Type your password here">

                  </div>
                   <div class="col-md-2">

                  </div>
                   <div class="col-md-10">
                    <label>Confirm Password:</label>
                        <input type="password" value="" id="password" required class="form-control" placeholder="Retype your password here">

                  </div>




              </div>

               <div class="row">
                <div class="col-md-1"></div>

               <div class="form-group col-md-4">
               <button type="submit" class="btn btn-primary py-3 px-5">Submit</button>

            </div>

          </div>
              </form>

</div>

                </div>


        </div>
      </div>
    </div>
@endsection
