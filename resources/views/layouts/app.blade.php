<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('splide-js/css/splide-min.css') }}" rel="stylesheet">
</head>
<body class="bg-secondary bg-opacity-10">
@include('app.nav')
@yield('main')


<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('splide-js/js/splide.min.js') }}"></script>
</body>
</html>