@section('mtitle')
About	
@stop
@section('title')
About
@stop
@section('description')
About
@stop
@extends('layouts.frontend')
@section('content')
<!-- image start -->
@include ('frontend.partials.about._image')
<!-- image end -->
<!-- about us start-->
@include ('frontend.partials.about._content')
<!-- about us end-->

<!-- team start -->
@include ('frontend.partials.about._teams') 
<!-- team end -->
<!-- guide start -->
@include ('frontend.partials.about._guide')
<!-- guide end -->
@stop