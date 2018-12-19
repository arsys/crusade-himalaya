@extends('layouts.frontend')
@section('content')
<!-- image start -->
@include ('frontend.partials.contact._image')
<!-- image end -->
<!-- about us start-->
@include ('frontend.partials.contact._about')
<!-- about us end-->
<!-- form start -->
@include ('frontend.partials.contact._contactform')
<!-- form end -->
<!--  map start -->
@include ('frontend.partials.contact._map')
<!--   map end -->
@stop
