<!DOCTYPE html>
<html lang="en">

<head>
  <title>House Boat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Dancing+Script:400,700|Muli:300,400" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="{{asset('assets')}}/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="{{asset('assets')}}/css/aos.css">
  <link href="{{asset('assets')}}/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/fontawesome.min.css">

  <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
  <link rel="stylesheet" href="{{asset('assets')}}/css/style2.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    @include('shared.user.header')

        @yield('content')

    @include('shared.user.footer')


  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>
  <script src="{{asset('assets')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('assets')}}/js/jquery-ui.js"></script>
  <script src="{{asset('assets')}}/js/popper.min.js"></script>
  <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
  <script src="{{asset('assets')}}/js/jquery.stellar.min.js"></script>
  <script src="{{asset('assets')}}/js/jquery.countdown.min.js"></script>
  <script src="{{asset('assets')}}/js/bootstrap-datepicker.min.js"></script>
  <script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
  <script src="{{asset('assets')}}/js/aos.js"></script>
  <script src="{{asset('assets')}}/js/jquery.fancybox.min.js"></script>
  <script src="{{asset('assets')}}/js/jquery.sticky.js"></script>
  <script src="{{asset('assets')}}/js/jquery.mb.YTPlayer.min.js"></script>
  <script src="https://kit.fontawesome.com/8698f5dc0c.js" crossorigin="anonymous"></script>




  <script src="{{asset('assets')}}/js/main.js"></script>
@stack('js')

</body>

</html>
