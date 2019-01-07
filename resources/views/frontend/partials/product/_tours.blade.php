<section class="similar-tours  uk-padding-small uk-padding-remove-horizontal" id="related-tours" >
	<div class="uk-container uk-container-expand ">
 	 	<div class="uk-container">
	 	 	  <h2 class="heading-primary uk-text-center uk-margin-medium-bottom"><span>Related Tours</span></h2>
 	 	</div>
		<div class="uk-child-width-1-1 uk-child-width-1-4@m uk-child-width-1-1@s  uk-grid-match uk-grid-small uk-margin-medium-top " uk-grid>
			
			@for ($i = 1; $i <= 4; $i++)
				<div class="uk-card uk-card-default uk-text-center ">
					<div class=" uk-overflow-hidden" id="similar-tours-img">
						<a href="#"><img class="uk-animation-reverse uk-transform-origin-top-right" uk-scrollspy="cls: uk-animation-kenburns; repeat: true" src="{{asset('img/Tours/annapurna.jpg')}}" alt=""></a>
						<div class="uk-position-bottom" id="meta-title">
							<a href="#"><h4>Package Title</h4></a>
						</div>
					</div>
				 	<div class="uk-flex uk-flex-center">
						<div class="uk-flex uk-flex-column left">
							<span class="count">15</span>
							<span class="count">Days</span>
						</div>
						<div class="uk-flex uk-flex-column center">
							<span class="center-price"><sup>$</sup>1500</span>
						</div>
						<div class="uk-flex uk-flex-column center">
							<a href="#" class="uk-button-default" >Discover </a>
						</div>								
					</div>	
				</div>

			@endfor

		</div>
	</div>
</section>
