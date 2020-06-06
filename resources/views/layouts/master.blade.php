<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{URL::to('src/images/brand.png')}}" type="image/icon type">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('src/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/animate.css')}}">

    <link rel="stylesheet" href="{{URL::to('src/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::to('src/css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::to('src/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('src/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{URL::to('src/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/css/style.css')}}">
    @yield('links')
</head>

<body class="goto-here">
    @include('includes.header')
    @yield('content')

    @include('includes.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="{{URL::to('src/js/jquery.min.js')}}"></script>
    <script src="{{URL::to('src/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{URL::to('src/js/popper.min.js')}}"></script>
    <script src="{{URL::to('src/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('src/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{URL::to('src/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::to('src/js/jquery.stellar.min.js')}}"></script>
    <script src="{{URL::to('src/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::to('src/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::to('src/js/aos.js')}}"></script>
    <script src="{{URL::to('src/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{URL::to('src/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::to('src/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{URL::to('src/js/google-map.js')}}"></script>
    <script src="{{URL::to('src/js/main.js')}}"></script>
    @yield('scripts')
</body>

</html>