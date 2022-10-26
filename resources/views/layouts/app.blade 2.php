<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#4285f4">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- favicon-->
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/logos/favicon-nabu.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style_def.css') }}">
    <style>
        .call-to-action{
            font-weight: bold;
            background-color: #f6ae2d;
        }
    </style>
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body id="app_main_content">
<nav  class="topnav navbar fixed-top navbar-expand shadow justify-content-between justify-content-sm-start navbar-light" style="background-color: #2e4999" id="sidenavAccordion">
    <ul class="navbar-nav align-items-center ml-auto">
        @if( request()->routeIs('login') )
            <a class="btn btn-sm btn-transparent-dark border-0 text-white font-weight-600 mr-2" id="navbarDropdownContactUs" href="{{ url('/spectator') }}" role="button">{{_('Nuestra Landing Page')}}</a>
        @elseif(request()->routeIs('password.request'))
            <a class="btn btn-sm call-to-action rounded-pill" id="navbarDropdownContactUs" href="{{ url('/login') }}" role="button" style="color: #2e4999; font-size: 18px; font-weight: bolder">{{_('Iniciar sesión')}}</a>
        @endif
    </ul>
</nav>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
