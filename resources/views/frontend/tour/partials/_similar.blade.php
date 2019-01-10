<div class="uk-container uk-text-center  home-tours uk-margin-medium-bottom" id="related-tours">
  	<h2 class="heading-primary uk-text-center"><span>Related Tours</span></h2>
    <div class="uk-position-relative uk-visible-toggle uk-light">
        <ul class="uk-child-width-1-3@m uk-child-width-1-1@s  uk-grid-match  "  uk-grid>
            @foreach ($similars as $similar)
            <li class="uk-margin-small-bottom">
                <div class="uk-card uk-card-default ">
                    <div class="uk-card-media-top tour-wrapper">
                       		<a href="{{ route('trip.detail',$similar->slug) }}" class="hp-link"><img src="{{ asset($similar->image->thumb) }}" alt="{{ $similar->title }}"></a>
	                   	<div class="uk-overlay uk-overlay-default uk-position-top price-wrapper" id="price-wrapper">
	                       <span class="price">
	                           <span>USD ${{ $similar->price }}</span>
	                       </span>
	                   	</div>
	                   	<div class="uk-overlay uk-overlay-default uk-padding-small similar-wrapper">
	                       	<div class="uk-flex uk-flex-center">
	                           	<div class="uk-flex uk-flex-column uk-width-4-5 hp-meta">
	                             	<a href="{{ route('trip.detail',$similar->slug) }}" class="hp-link"><h4 class="hp-product">{{ $similar->title }}</h4></a>
	                           	</div>
	                           	<div class="uk-flex uk-flex-column uk-width-1-5 hp-meta">
	                               <span class="hp-days">{{ $similar->days }} Days</span>
	                           	</div>    
	                       	</div>
	                   	</div>
                    </div>                        
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
