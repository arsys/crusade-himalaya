@extends('layouts.frontend')
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