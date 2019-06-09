<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    {{-- meta tag start --}}
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('styles')
</head>

<body>
    @include('new.partials._nav')
    @yield('content')
    <a href="#" id="toTop" style="display: none;">
        <span uk-icon="icon: chevron-up; ratio: 3.5"></span>
    </a>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('js/new.js')}}"></script>
@include('new.partials._footer')
@yield('scripts')

</html>