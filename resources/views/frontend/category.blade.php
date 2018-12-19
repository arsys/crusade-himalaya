@extends('layouts.frontend')
@section('content')
<!-- image start -->
@include ('frontend.partials.category._image')
<!-- image end -->
<!-- content start -->
@include('frontend.partials.category._content')
<!-- content end -->
<!-- package start -->
@include ('frontend.partials.category._package')
<!-- package end -->
<!-- pagination start -->
@include ('frontend.partials.category._pagination')
<!-- pagination end -->
@stop