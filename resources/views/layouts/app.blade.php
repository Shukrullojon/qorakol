<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Qorakol Ziyo</title>

    {{--<link rel="stylesheet" href="{{ asset("arifsolar/css/carousel.css")}}">--}}

</head>
<body>

@yield('content')


{{--<script src="{{ asset("arifsolar/js/index.js")}}"></script>--}}

</body>
</html>
