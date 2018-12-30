<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crusade Himalaya | Empower, Educate, Encourage</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">      
 
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        @yield('styles')
        <style>
            #loader{
                position: fixed;
                width: 100%;
                height: 100vh;
                z-index: 1;
                overflow: hidden;
                background: black url('img/white-loader.gif') no-repeat center center;                
            }
        </style>
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
{{--  @yield('scripts')
     <script type="text/javascript">
        
        var loader;
        function loadNow(opacity) {
            if(opacity <= 0) {
                displayContent();
            }
            else {
                loader.style.opacity = opacity;
                window.setTimeout(function() {
                    loadNow(opacity - 0.05)
                }, 100);
            }
        }
        
        function displayContent() {
            loader.style.display = 'none';
            document.getElementById('content').style.display = 'block';
        }
        
        document.addEventListener("DOMContentLoaded", function() {
            loader = document.getElementById('loader');
            loadNow(1);
        });
        
    </script> --}}
</html>
