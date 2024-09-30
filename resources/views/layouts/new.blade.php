<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Arif Solar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("arifsolar/css/carousel.css")}}">
    <link rel="stylesheet" href="{{ asset("arifsolar/css/main.css")}}">
    <link rel="stylesheet" href="{{ asset("arifsolar/css/responsive.css")}}">
</head>
<body>



@yield('content')

<script src="{{ asset("arifsolar/js/index.js")}}"></script>
<script src="{{ asset("arifsolar/js/carousel.js")}}"></script>
</body>
</html>
