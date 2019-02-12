<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131764624-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-131764624-1');
    </script>

    {{-- meta tag start --}}
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="@yield('mtitle','Crusade Himalaya | Himalaya Tours')">
    <meta name="description" content="@yield('description','Crusade Himalaya is a unique and independent travel partner; we wish to Empower, Educate, and Encourage you to have real-life experiences.')">
    <meta name="robots" content="@yield('robot','index, follow')">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="Crusade Himalaya"> {{-- meta tag end --}} {{-- favicon start --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-icon-180x180.png') }}">

    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/img/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff"> {{-- favicon end --}}
    <!-- Update your html tag to include the itemscope and itemtype attributes. -->
    <meta name="yandex-verification" content="dc1e4dda4c1cdf73" />
    <meta name="msvalidate.01" content="2CFAF954F4C05941F02B451A6BD7F3A7" />
    <html itemscope itemtype="http://schema.org/Product">

    <!-- Place this data between the <head> tags of your website -->
    <title>@yield('title','Crusade Himalaya | Empower, Educate, Encourage')</title>

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="@yield('title','Crusade Himalaya | Empower, Educate, Encourage')">
    <meta itemprop="description" content="@yield('description','Crusade Himalaya is a unique and independent travel partner; we wish to Empower, Educate, and Encourage you to have real-life experiences.')">
    <meta itemprop="image" content="{{ asset('assets/img/apple-icon-180x180.png') }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@CrusadeHimalaya">
    <meta name="twitter:title" content="@yield('title','Crusade Himalaya | Empower, Educate, Encourage')">
    <meta name="twitter:description" content="@yield('description','Crusade Himalaya is a unique and independent travel partner; we wish to Empower, Educate, and Encourage you to have real-life experiences.')">
    <meta name="twitter:creator" content="@CrusadeHimalaya">
    <meta name="twitter:image" content="{{ asset('assets/img/apple-icon-180x180.png') }}"> @yield('twitter')
    <!-- Open Graph data -->
    <meta property="og:title" content="@yield('title','Crusade Himalaya | Empower, Educate, Encourage')" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('assets/img/apple-icon-180x180.png') }}" />
    <meta property="og:description" content="@yield('description','Crusade Himalaya is a unique and independent travel partner; we wish to Empower, Educate, and Encourage you to have real-life experiences.')"
    />
    <meta property="og:site_name" content="Crusade Himalaya" /> @yield('og')
    <meta property="fb:admins" content="2171959919686300" />
    <meta name="yandex-verification" content="dc1e4dda4c1cdf73" /> {{-- twitter card end --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/5353692.js"></script>
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'fc758b4b810a5a7a7ece662bbbb6e1d691f50e23';
        window.smartsupp||(function(d) {
          var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
          s=d.getElementsByTagName('script')[0];c=d.createElement('script');
          c.type='text/javascript';c.charset='utf-8';c.async=true;
          c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    @yield('styles')
    @yield('conversion')
</head>

<body>
    <div id="loader"></div>
    <div id="content">
    @include('frontend.partials._nav') {{-- Navigation End --}} @yield('content')

        <!-- footer start-->
    @include('frontend.partials._footer')
        <a href="#" id="scroll" style="display: none;"><span uk-icon="icon: chevron-up; ratio: 3.5"></span></a>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
{{--
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
<script src="{{asset('js/app.js')}}">

</script>
@yield('scripts')

</html>
