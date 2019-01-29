<div class="uk-position-relative uk-visible-toggle"  id="home-carousel" uk-slideshow="autoplay: true">
    <ul class="uk-slideshow-items">
        @foreach($carousels as $carousel)
        <li>
            <img src="{{ $carousel->path }}" alt="{{ $carousel->name }}" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-overlay-panel uk-overlay-background uk-overlay-fade uk-light">
               <h1 class=" uk-heading-primary carousel-heading" uk-slideshow-parallax="x: 600,-600">{{ $carousel->header}}</h1>
               <p class="uk-text-lead carousel-para" uk-slideshow-parallax="x: 400,-400">{{ $carousel->subheader}}</p>
           </div>
       </li>
       @endforeach
   </ul>
   <div class="uk-light">
    <a class="ghost scroll" href="#fat"><span></span>Scroll</a>

    <a class="uk-position-center-left uk-position-small  uk-slidenav-large" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small  uk-slidenav-large" href="#" uk-slidenav-next uk-slideshow-item="next"></a>


</div>
</div>
