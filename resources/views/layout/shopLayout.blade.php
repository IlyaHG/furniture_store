<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="Morden Bootstrap HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon.ico') }}">

    <!-- ======= All CSS Plugins here ======== -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/glightbox.min.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @vite('resources/js/app.js')
</head>
<body>
@include('partials.offcanvasFilter')
@include('partials.header')
@yield('content')
@include('partials.footer')
@include('partials.quickview')
@include('partials.scrollBar')
@include('partials.jsScripts')
@include('partials.customScript')