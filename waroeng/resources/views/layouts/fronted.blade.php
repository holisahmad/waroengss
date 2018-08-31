<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>

  {{-- <!-- Basic --> --}}
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Waroeng SS | @yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no"/>

  <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
  {{--  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">  --}}

  {{-- <!-- Fonts --> --}}
  <link href='{{ asset('assets/css/googlefont1.css') }}' rel='stylesheet' type='text/css'>
  <link href='{{ asset('assets/css/googlefont2.css') }}' rel='stylesheet' type='text/css'>
  <link href='{{ asset('assets/css/googlefont3.css') }}' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/red.css') }}" media="screen">
  {{-- <!-- Responsive --> --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" media="screen">

  {{-- <!--[if lt IE 9]>
      <script type="text/javascript" src="{{ asset('assets/js/ie.js') }}"></script>
      <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]--> --}}

</head>

@include('layouts.chat')

<body onload="initialize()">
 <div class="loader"></div>
 {{-- <!--===| Search Start |===--> --}}
 <div class="search-wrapper">
   <div class="search-container">
    <div class="search-contents">
      <p class="close"><i class="fa fa-times"></i></p>
      <form>
       <input type="search" placeholder="masukkan kata kunci">
       <button class="btn btn-primary btn-lg" type="submit">Cari</button>
     </form>
    </div>
   </div>
 </div>
 {{-- <!--===| Search End |===--> --}}

@include('layouts.google')

@include('layouts.menu')

{{-- @include('layouts.kontakkami') --}}

@yield('content')


<!--====| Footer section Start|====-->
<style>
  .joom:hover {
    animation: shake 4s;
    animation-iteration-count: infinite;
  }
@keyframes shake {
  11.1% {
    transform: none
  }
  22.2% {
    transform: skewX(-12.5deg) skewY(-12.5deg)
  }
  33.3% {
    transform: skewX(6.25deg) skewY(6.25deg)
  }
  44.4% {
    transform: skewX(-3.125deg) skewY(-3.125deg)
  }
  55.5% {
    transform: skewX(1.5625deg) skewY(1.5625deg)
  }
  66.6% {
    transform: skewX(-0.78125deg) skewY(-0.78125deg)
  }
  77.7% {
    transform: skewX(0.390625deg) skewY(0.390625deg)
  }
  88.8% {
    transform: skewX(-0.1953125deg) skewY(-0.1953125deg)
  }
  100% {
    transform: none
  }
}
</style>

@include('layouts.footer')

@include('layouts.sidemenu')

  <!--  JAVASCRIPT -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>

  <!-- Modernizr JS -->
  <script type="text/javascript" src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>

  <!--Bootatrap JS-->
  <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

  <!-- Animate js -->
  <script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="{{ asset('assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

  <!-- Fancy Box JS -->
  <script type="text/javascript" src="{{ asset('assets/vendor/fancybox/jquery.fancybox.min.js') }}"></script>

  <!-- OWL CAROUSEL   -->
  <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

  <!-- Offcanvas -->
  <script type="text/javascript" src="{{ asset('assets/js/sidebarEffects.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/classie.js') }}"></script>

  <!-- Gallery Shuffle Js -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery.shuffle.min.js') }}"></script>

  <!-- jQuery UI -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

  <!-- CountDown -->
  <script type="text/javascript" src="{{ asset('assets/js/jquery.countdown.js') }}"></script>

  <!-- Validation -->
  <script type="text/javascript" src="{{ asset('assets/js/validation.js') }}"></script>

  <!-- Tweetie JS  -->
  <script type="text/javascript" src="{{ asset('assets/js/tweetie.min.js') }}"></script>

  <!-- Google Map PopUp -->
  <script type="text/javascript" src="{{ asset('assets/js/maps-api.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/map-popup.js') }}"></script>

  <!-- Css Preseter -->
  <script type="text/javascript" src="{{ asset('assets/js/preset.js') }}"></script>

  <!-- Custom script -->
  <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>
