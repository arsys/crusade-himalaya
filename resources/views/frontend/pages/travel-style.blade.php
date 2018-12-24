@extends('layouts.backend')
@section('content')
<section class="uk-container-expand about">
	<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light uk-background-image@s" data-src="https://source.unsplash.com/1024x512/?daisy" uk-img>
		<h1>Background Image</h1>
	</div>
</section>
<div class="uk-section uk-section-small uk-section-default">
	<div class="uk-container">
		<div class="text-align-left uk-margin-medium-top" uk-grid>
			<div class="uk-width-1-1@m" >
				<div class="uk-child-width-1-3@m" uk-grid>
					@for($a=1; $a<=6; $a++)
					<div class="package-info">
						<div class="uk-card uk-card-default">
							<div class="uk-card-media-top">
								<img src="{{asset('img/Tours/annapurna.jpg')}}" alt="Image">
							</div>

							<div class="uk-card-body">
								<div class="uk-card-title"><a href="#"><h4>Package Title</h4></a>
								</div>

								<div class="uk-flex uk-flex-center">
									<div class="uk-flex uk-flex-column package-details">
										<span class="price-info">15</span>
										<span class="price-info">Days</span>
									</div>
									<div class="uk-flex uk-flex-column package-details">
										<span class="price-info">From</span>
										<span class="price-info">USD</span>
									</div>
									<div class="uk-flex uk-flex-row package-details">
										
										<span class="price"><sup>$</sup>1500</span>
									</div>

								</div>
							</div>
						</div>
					</div>
					@endfor
				</div>

			</div>
		</div>

	</div>
</div>
<div class="uk-section uk-section-small uk-section-default">
	<div class="uk-container">
		<ul class="uk-pagination uk-flex-center" uk-margin>
			<li><a href="#"><span uk-pagination-previous></span></a></li>
			<li><a href="#">1</a></li>
			<li class="uk-disabled"><span>...</span></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li class="uk-active"><span>7</span></li>
			<li><a href="#">8</a></li>
			<li><a href="#">9</a></li>
			<li><a href="#">10</a></li>
			<li class="uk-disabled"><span>...</span></li>
			<li><a href="#">20</a></li>
			<li><a href="#"><span uk-pagination-next></span></a></li>
		</ul>
	</div>
</div>
@stop