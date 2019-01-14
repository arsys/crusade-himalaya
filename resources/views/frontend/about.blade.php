@extends('layouts.frontend')
@section('content')
<!-- image start -->
@include ('frontend.partials.about._image')
<!-- image end -->
<!-- about us start-->
@include ('frontend.partials.about._content')
<!-- about us end-->
<!-- guide start -->
@include ('frontend.partials.about._guide')
<!-- guide end -->
<!-- team start -->
@include ('frontend.partials.about._team') 
<!-- team end -->
@stop
@section('scripts')
<script>
(function ($) {
(function ($) {
    $(document).ready(function(){       

        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $("#team-wrapper").removeClass("animated fadeInDown");
                $("#team-wrapper").fadeOut(900,'linear');
                
            } else {
                $("#team-wrapper").addClass("animated fadeIn").show();
            }
        });
    });
</script>
@stop