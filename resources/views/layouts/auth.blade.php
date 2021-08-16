<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background: rgb(125,124,134);
            background: linear-gradient(90deg, rgba(125,124,134,0.49343487394957986) 0%, rgba(79,79,91,0.22172619047619047) 35%, rgba(23,23,23,0.16290266106442575) 100%) , url({{ asset('iwatchbanner.png') }}) ;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="app">
        

        <main class="py-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
