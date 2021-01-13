<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'MODHUSHOP'}}</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/shop.ico">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/vendor/bootstrap.min.css') }}">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/vendor/font.awesome.min.css') }}">
<!-- Linear Icons CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/vendor/linearicons.min.css') }}">
<!-- Swiper CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/swiper-bundle.min.css') }}">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/animate.min.css') }}">
<!-- Jquery ui CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/jquery-ui.min.css') }}">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/nice-select.min.css') }}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{asset ('assets/css/plugins/magnific-popup.css') }}">

<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset ('assets/css/style.css') }}">

</head>
<body>

    @yield('content')

<!-- Modernizer JS -->
{{-- <script src={{ asset('"assets/js/vendor/modernizr-3.7.1.min.js') }}"></script> --}}
<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Swiper Slider JS -->
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<!-- nice select JS -->
<script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
<!-- Ajaxchimpt js -->
<script src="{{ asset('assets/js/plugins/jquery.ajaxchimp.min.js') }}"></script>
<!-- Jquery Ui js -->
<script src="{{asset ('assets/js/plugins/jquery-ui.min.js') }}"></script>
<!-- Jquery Countdown js -->
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<!-- jquery magnific popup js -->
<script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
