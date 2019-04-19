@extends('layouts.frontend')
@section('mtitle'){!! $tour->mtitle !!}@stop
@section('title'){!! ucfirst($tour->title) !!}|{{$tour->days}} @if($tour->days > 1) Days @else Day @endif
@stop
@section('description'){!! $tour->description !!}@stop
@section('twitter')
<meta name="twitter:data1" content="${{ $tour->price }}">
<meta name="twitter:label1" content="Price">
@if (!empty( $tour->difficulty->name))
<meta name="twitter:data2" content="{{ $tour->difficulty->name }}">
<meta name="twitter:label2" content="Difficulty">
@endif

@stop
@section('og')
<meta property="og:price:amount" content="{{ $tour->price }}" />
<meta property="og:price:currency" content="USD" />
@stop
@section('content')
{{-- banner start --}}
@include ('frontend.tour.partials._banner')
{{-- banner end --}}
{{-- sticky tab start --}}
<section class="uk-container" >
	@include ('frontend.tour.partials._collasible-mobile')
	<div class=" uk-container uk-container-expand">
		<div class="uk-grid-small uk-grid-match uk-child-width-expand uk-grid" uk-grid="">
			@include ('frontend.tour.partials._tabs')				
		</div>
	</div>
</section>
{{-- sticky tab end--}}
{{-- content start --}}
@include ('frontend.tour.partials._content')
{{-- content end --}}
<!-- related tour start -->
@include ('frontend.tour.partials._similar')
@stop
@section('scripts')
<script src="{{asset('js/product.js')}}">	</script>
@stop