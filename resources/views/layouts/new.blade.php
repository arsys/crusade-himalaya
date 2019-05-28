<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    {{-- meta tag start --}}
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>
    @include('new.partials._nav')
    @yield('content')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('js/new.js')}}"></script>
@yield('scripts')
@include('new.partials._footer')

</html>