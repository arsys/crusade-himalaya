<div class="uk-section uk-section-xsmall uk-section-default uk-margin-medium-top uk-margin-medium-bottom">
    <h2 class="uk-h1  uk-text-center uk-margin-remove-bottom home-title uk-margin-large-bottom"><span>Travel Style</span></h2>
    <p class="uk-text-center uk-margin-remove-top home-heading-secondary uk-margin-large-bottom  " id="home-sub-title"><span> Don't Miss the best things, keep your eyes open</span></p>
    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider>
     <!--    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m">
         <li>
             <img src="https://source.unsplash.com/320x450/?trekking" alt="">
             <div class="uk-position-bottom  travel"><h1>1</h1></div>
         </li>
         <li>
             <img src="https://source.unsplash.com/320x450/?trekking" alt="">
             <div class="uk-position-bottom  travel"><h1>2</h1></div>
         </li>
         <li>
             <img src="https://source.unsplash.com/320x450/?trekking" alt="">
             <div class="uk-position-bottom  travel"><h1>3</h1></div>
         </li>
         <li>
             <img src="https://source.unsplash.com/320x450/?trekking" alt="">
             <div class="uk-position-bottom  travel"><h1>4</h1></div>
         </li>
         <li>
             <img src="https://source.unsplash.com/320x450/?kathmandu" alt="">
             <div class="uk-position-bottom  travel"><h1>5</h1></div>
         </li>
         <li>
             <img src="https://source.unsplash.com/320x450/?mountain" alt="">
             <div class="uk-position-bottom  travel"><h1>6</h1></div>
         </li>
         <li>
             <img src="https://source.unsplash.com/320x450/?india" alt="">
             <div class="uk-position-bottom  travel"><h1>7</h1></div>
         </li>
         <li>
             <img src="https://source.unsplash.com/320x450/?nepal" alt="">
             <div class="uk-position-bottom  travel"><h1>8</h1></div>
         </li>
         <li>
             <img src="https://source.unsplash.com/320x450/?climbing" alt="">
             <div class="uk-position-bottom  travel"><h1>9</h1></div>
         </li>
         <li>
             <img src="https://source.unsplash.com/320x450/?everest" alt="">
             <div class="uk-position-bottom  travel"><h1>10</h1></div>
         </li>
     </ul> -->
       @if($categories->count())
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m">
                @foreach($categories as $category)
                <li>
                    <div class="uk-panel">
                        <a href="{{ route('fetchByCategory',$category->slug) }}">
                            <img class="home-img" src="{{ asset($category->thumb) }}" alt="{{ $category->name }}">
                        </a>
                        <div class="uk-position-bottom  travel uk-animation-toggle" id="activity-title">
                            <div class="uk-flex uk-flex-column  uk-animation-slide-top-medium ">
                                <span class="travel-heading "><a href="{{ route('fetchByCategory',$category->slug) }}">{{ $category->name }}</a></span>
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