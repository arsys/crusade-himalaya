@extends('layouts.frontend')
@section('content')
{{-- banner start --}}
@include ('frontend.partials.product._banner')
{{-- banner end --}}
{{-- sticky tab start --}}
<section class="uk-container" >
	@include ('frontend.partials.product.sticky._collasible-mobile')
	<div class=" uk-container uk-container-expand">
		<div class="uk-grid-small uk-grid-match uk-child-width-expand uk-grid" uk-grid="">
			@include ('frontend.partials.product.sticky._tabs')				
		</div>
	</div>
</section>
{{-- sticky tab end--}}
{{-- content start --}}
@include ('frontend.partials.product._content')
{{-- content end --}}
<!-- related tour start -->
@include ('frontend.partials.product._tours')
@stop
@section('scripts')
<script src="{{asset('js/product.js')}}"></script>
@stop