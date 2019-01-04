<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- meta tag start --}}
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Crusade Himalaya | Himalaya Tours">
    <meta name="description" content="Crusade Himalaya is a unique and independent travel partner; we wish to Empower, Educate, and Encourage you to have real-life experiences.">
    <meta name="keywords" content="crusade himalaya, nepal travel partner, himalaya trekking">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Crusade Himalaya">
    {{-- meta tag end --}}
    {{-- favicon start --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    {{-- favicon end --}}
    {{-- og start --}}

    {{-- og end --}}
    {{-- twitter card start --}}
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@CrusadeHimalaya">
    <meta name="twitter:title" content="Crusade Himalaya">
    <meta name="twitter:description" content="Crusade Himalaya is a unique and independent travel partner; we wish to Empower, Educate, and Encourage you to have real-life experiences.">
    {{-- twitter card end --}}
    <title>Crusade Himalaya | Empower, Educate, Encourage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">      

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div id="loader"></div>
    <div id="content">
        @include('frontend.partials._nav')
        {{-- Navigation End --}}
        @yield('content')

        <!-- footer start-->
        @include('frontend.partials._footer')
        <a href="#" id="scroll" style="display: none;"><span></span></a>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
{{-- <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
<script src="{{asset('js/app.js')}}">  </script>
@yield('scripts')

</html>
