<div class="uk-section uk-section-xsmall uk-section-default uk-margin-medium-top uk-margin-medium-bottom">
    <h2 class="uk-h1  uk-text-center uk-margin-remove-bottom home-title uk-margin-large-bottom"><span>Travel Style</span></h2>
    <p class="uk-text-center uk-margin-remove-top home-heading-secondary uk-margin-large-bottom  " id="home-sub-title"><span> Don't Miss the best things, keep your eyes open</span></p>
    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider>
       @if($categories->count())
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m">
                @foreach($categories as $category)
                <li>
                    <div class="uk-panel uk-animation-toggle">
                        <a href="{{ route('fetchByCategory',$category->slug) }}">
                            <img class="home-img" src="{{ asset($category->thumb) }}" alt="{{ $category->name }}">
                        </a>
                        <div class="uk-position-bottom  travel  uk-animation-slide-top-medium " id="activity-title">
                            <div class="uk-flex uk-flex-column  ">
                                <div class="uk-flex uk-flex-row travel-wrapper">
                                    <span class="travel-heading uk-flex uk-flex-column uk-width-4-5@l"><a class="travel-title" href="{{ route('fetchByCategory',$category->slug) }}">{{ $category->name }}</a></span>
                                    <span class="travel-tours uk-flex uk-flex-column uk-width-1-5@l ">4 Tours</span>
                                </div>
                                <span class="travel-view"><a href="">View All tours </a></span>
                            </div>

                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
          @endif

        <a class="uk-position-center-left uk-position-small uk-slidenav-large next" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-slidenav-large next" href="#" uk-slidenav-next uk-slider-item="next"></a>


    </div>
  
</div>