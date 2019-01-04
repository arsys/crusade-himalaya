<section class="similar-tours  uk-padding-small uk-padding-remove-horizontal" id="related-tours" >
	<div class="uk-container uk-container-expand ">
 	 	<div class="uk-container">
	 	 	  <h2 class="heading-primary uk-text-center uk-margin-medium-bottom"><span>Related Tours</span></h2>
 	 	</div>
		<div class="uk-child-width-1-1 uk-child-width-1-4@m uk-child-width-1-1@s  uk-grid-match uk-grid-small uk-margin-medium-top " uk-grid>
			
			@foreach ($similars as $similar)
				<div class="uk-card uk-card-default uk-text-center ">
					<div class="uk-inline-clip uk-transition-toggle" tabindex="0" id="similar-tours-img">
						<a href="{{ route('trip.detail',$similar->slug) }}"><img src="{{ asset($featured->image->thumb) }}" alt="{{ $similar->title }}"></a>
						<div class="uk-position-bottom" id="meta-title">
							<a href="{{ route('trip.detail',$similar->slug) }}"><h4>{{ $similar->title }}</h4></a>
						</div>
					</div>
				 	<div class="uk-flex uk-flex-center">
						<div class="uk-flex uk-flex-column left">
							<span class="count">{{ $similar->days }}</span>
							<span class="count">Days</span>
						</div>
						<div class="uk-flex uk-flex-column center">
							<span class="center-price"><sup>$</sup>{{ $similar->price }}</span>
						</div>
						<div class="uk-flex uk-flex-column center">
							<a href="{{ route('trip.detail',$similar->slug) }}}" class="uk-button-default" >Discover </a>
						</div>								
					</div>	
				</div>

			@endforeach

		</div>
	</div>
</section>
