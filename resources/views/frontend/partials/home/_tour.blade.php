
<div class="uk-container uk-text-center  home-tours uk-margin-medium-top uk-margin-medium-bottom">
    <h2 class="uk-h1  uk-text-center uk-margin-remove-bottom home-title uk-margin-large-bottom"><span>Handpicked Tours</span></h2>
    <p class="uk-text-center uk-margin-remove-top home-heading-secondary uk-margin-large-bottom  " id="home-sub-title"><span> Crafted tours for  light mined gypsies</span></p>
    <div class="uk-position-relative uk-visible-toggle uk-light">
        <ul class="uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-small uk-grid-match  "  uk-grid>
            @foreach($featureds as $featured)
            <li class="uk-margin-small-bottom">
                <div class="uk-card uk-card-default uk-height-medium">
                    <div class="uk-card-media-top">
                        <a href="{{ route('trip.detail',$featured->slug) }}" class="hp-link"><img src="{{ asset($featured->image->thumb) }}" alt="{{ $featured->slug }}"></a>
                        <div class="uk-overlay uk-overlay-default uk-position-top" id="price-wrapper">
                            <span class="price">
                                <span>USD ${{ $featured->price }}</span>
                            </span>
                        </div>
                        <div class="uk-overlay uk-overlay-default uk-position-bottom uk-padding-small" id="hp-wrapper">
                            <div class="uk-flex uk-flex-center">
                                <div class="uk-flex uk-flex-column uk-width-4-5 hp-meta">
                                  <a href="{{ route('trip.detail',$featured->slug) }}" class="hp-link"><span class="hp-product">{{ $featured->title }}</span></a>
                              </div>
                              <div class="uk-flex uk-flex-column uk-width-1-5 hp-meta">
                                <span class="hp-days">{{ $featured->days }} Days</span>
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
