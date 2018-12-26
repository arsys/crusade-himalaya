<div class="uk-section uk-section-small uk-section-default">
    <div class="uk-container">
    	 <h2 class="heading-primary uk-text-center "><span>Category </span></h2>
        <div class="text-align-left uk-margin-medium-top" uk-grid>
    		<div class="uk-child-width-1-3@m" uk-grid>
			   @for($a=1; $a<=6; $a++)
		    	<div class="package-info">
			        <div class="uk-card uk-card-default">
			            <div class="uk-card-media-top">
			                <a href="/product"><img src="{{asset('img/Tours/annapurna.jpg')}}" alt="Image"></a>
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