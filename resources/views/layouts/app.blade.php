<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- <title>{{ config('app.name', 'HouseBoat') }}</title>-->
   <title>House Boat</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h4 style="color:white;">HouseBoat</h4>
                </a>
                <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>-->

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto ">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto" >
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
