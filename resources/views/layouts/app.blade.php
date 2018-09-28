<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="https://stijl.kuleuven.be/2016/releases/1.2.2/js/all.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="https://fonts.gstatic.com">--}}
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Material+Icons%7COpen+Sans:400italic,600italic,700italic,400,700,600%7CMerriweather:400italic,400,700">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stijl.kuleuven.be/2016/releases/1.2.2/css/main.css">

</head>
<body>

            @include('layouts.header')

    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>

            @include('layouts.footer')

   {{-- <script src="https://stijl.kuleuven.be/2016/releases/1.2.2/js/all.min.js"></script>--}}

</body>
</html>
