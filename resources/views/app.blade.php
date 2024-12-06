<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @hasSection('title')
            @yield('title') |
        @endif {{ env('APP_NAME') }}
    </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css"
        integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/particles.css">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@include('header')

@yield('content')

<!-- Footer -->
@include('footer')

<!-- Go To Top -->
<a style="cursor: pointer" class="go-top"><i class="fa fa-angle-up"></i></a>
<!-- Scripts -->
<script src="js/vendors/jquery-3.4.1.min.js"></script>
<script src="js/vendors/jquery.hoverIntent.min.js"></script>
<script src="js/vendors/perfect-scrollbar.min.js"></script>
<script src="js/vendors/jquery.easing.min.js"></script>
<script src="js/vendors/wow.min.js"></script>
<script src="js/vendors/parallax.min.js"></script>
<script src="js/vendors/isotope.min.js"></script>
<script src="js/vendors/imagesloaded.pkgd.min.js"></script>
<script src="js/vendors/packery-mode.pkgd.min.js"></script>
<script src="js/vendors/owl-carousel.min.js"></script>
<script src="js/vendors/jquery.appear.js"></script>
<script src="js/vendors/jquery.countTo.js"></script>
<script src="js/vendors/slide-nav.min.js"></script>
<script src="js/main.js"></script>

<html>
