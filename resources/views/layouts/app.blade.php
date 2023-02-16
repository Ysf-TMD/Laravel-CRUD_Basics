<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel_9 CRUD-PERSONNSAGES</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-dark text-light" >
<div class="container col-md-12 justify-content-center">
    <nav class="text-center">
        <a href="{{Route("home")}}" class=" btn btn-primary w-25 mx-auto h4 mt-2 active border border-light">Home</a>
    </nav>
</div>
    <div class="container col-md-8 mt-5">
    @yield("content")
    </div>


</body>
</html>
