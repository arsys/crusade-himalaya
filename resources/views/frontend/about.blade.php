@section('mtitle')
Who We Are | {{config('app.name')}}
@stop
@section('title')
Who We Are | {{config('app.name')}}
@stop
@section('description')
Nepal isn't a destination, it is an experience, an experience beyond the ordinary.
@stop
@extends('layouts.frontend')
@section('content')
<!-- image start -->
@include ('frontend.partials.about._image')
<!-- image end -->
<!-- about us start-->
@include ('frontend.partials.about._content')
<!-- about us end-->


@stop
@section('scripts')
<style>
	.field{
		overflow: hidden;
	}
</style>
<script src="https://cdn.jsdelivr.net/npm/readmore-js@2.2.1/readmore.min.js"></script>
<script>
	$(document).ready(function(){
		var lineHeight = 20;
		var lines = 3.5;
		$('.field').readmore({
			speed: 1000,
			collapsedHeight: lineHeight * lines
		});
		// $('.team').readmore({
		// 	speed: 1000,
		// 	collapsedHeight: lineHeight * lines
		// });
	});

</script>


@stop
