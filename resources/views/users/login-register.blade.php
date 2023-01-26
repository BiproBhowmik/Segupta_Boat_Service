@extends('layouts.master')
@section('content')
<div class="site-section sign-in-area ">
    <div class="container cart_log_in">
      <div class="row ">
        <div class="col-md-5">
          <p><img src="{{asset('assets')}}/images/pic11.jpg" alt="Image" class="img-fluid"></p>
        </div>
        <div class="col-md-7 ">
          <div class="row sign-in-content">
              <div class="col-md-6">
                  <h1>Log In</h1>
              </div>
              <div class="col-md-6">

                 <p> <span>Need an account? <a href="{{ url('/register') }}">Sign Up</a></span></p>
              </div>
          </div>

          <form action="#" class="row">
            <div class="form-group col-md-12 sign-in-form-area">
              <div class="row ">
                  <div class="col-md-4">
                       <label for="input-1">Mobile Number:</label>
                  </div>
                   <div class="col-md-8">
                     <input type="tel" id="phone" class="form-control" name="phone" placeholder="01XXX-XXXXXX" pattern="[0-9]{5}-[0-9]{6}" required><br>
                  </div>
              </div>
              <div class="row ">
                  <div class="col-md-4">
                       <label for="input-2">Password:</label>
                  </div>
                   <div class="col-md-8">
                        <input type="password" value="" id="password" required class="form-control" placeholder="Type your password here">

                  </div>



              </div>

               <div class="row">
                <div class="col-md-4"></div>
               <div class="form-group col-md-8">
              <input type="checkbox" style="text-align:right;" onclick="myFunction()">  Show Password
               </div>
             </div>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                  <div class="row">
                  <div class="form-group col-md-6 ">
                   <p> <span> <a href="{{ url('/') }}" class="btn btn-primary py-3 px-5"> Home </a></span></p>
                </div>
               <div class="form-group col-md-6">
               <button type="submit" class="btn btn-primary py-3 px-5">Login</button>
               </div>
             </div>
                </div>

              </div>
            </div>
              </form>



                </div>


        </div>
      </div>
    </div>
@endsection

<script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
