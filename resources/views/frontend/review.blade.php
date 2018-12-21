@extends('layouts.frontend')
@section('content')
	<div class="uk-container">
		<h3 class="uk-padding-small uk-text-center"><span>Trip Name</span></h3> 
		@for($a=1; $a<=5; $a++)
			<div class="uk-text-left" uk-grid>
				<div class="uk-width-1-4">
					<img src="https://source.unsplash.com/150x150/?face" alt="" >
				</div>
				<div class="uk-width-3-4 review-wrapper">
					<span class="review-client">Review Heading</span>
					<p class="review-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					<span uk-icon="location"></span>
					<span class="review-client">Person</span>
					<span class="rating">
						<span uk-icon="star"></span>
						<span uk-icon="star"></span>
						<span uk-icon="star"></span>
						<span uk-icon="star"></span>
						<span uk-icon="star"></span>
					</span>
				</div>
			</div>
		@endfor 

		<div class="uk-container uk-padding-small">
			<ul class="uk-pagination uk-flex-center" uk-margin>
			    <li><a href="#"><span uk-pagination-previous></span></a></li>
			    <li><a href="#">1</a></li>
			    <li class="uk-disabled"><span>...</span></li>
			    <li><a href="#">5</a></li>
			    <li><a href="#">6</a></li>
			    <li class="uk-active"><span>7</span></li>
			    <li><a href="#">8</a></li>
			    <li><a href="#"><span uk-pagination-next></span></a></li>
			</ul>
		</div>
	</div>
	
@stop