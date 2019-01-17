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
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/readmore-js@2.2.1/readmore.min.js"></script>
<script>
	$(document).ready(function(){
		var lineHeight = 20;
		var lines = 2;
		$('.field').readmore({
			speed: 1000,
			collapsedHeight: lineHeight * lines
		});
		$('.team').readmore({
			speed: 1000,
			collapsedHeight: lineHeight * lines
		});		
	});

</script>


@stop