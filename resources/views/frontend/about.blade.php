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
{{-- @include ('frontend.partials.about._team') --}}
<!-- team end -->
@stop