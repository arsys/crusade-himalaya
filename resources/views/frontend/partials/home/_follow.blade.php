<section class=" uk-margin-medium-top uk-margin-medium-bottom bgcolor-wrapper">
    <div class="uk-container">
        <h2 class="uk-text-center uk-margin-small-bottom instagram"><a href="#">#brandname</a></h2> 
    </div>
    <div class="uk-container-expand">
        @if($instafeeds->count())
        <div class="follow uk-grid-collapse uk-child-width-1-2 uk-child-width-1-5@m uk-child-height-1-2 uk-grid" uk-grid="">
            @foreach($instafeeds as $Instafeed)
            <div>
                <img src="{{ $Instafeed->link }}" alt="{{ $Instafeed->caption }}" >
            </div>
            @endforeach
        </div>      
        @else   
        <div class="follow uk-grid-collapse uk-child-width-1-2 uk-child-width-1-5@m uk-child-height-1-2 "uk-grid  uk-lightbox="animation: slide">   
        <div>
            <a class="uk-inline" href="https://source.unsplash.com/1200x800/?nepal" data-caption="Caption 1">
                <img src="https://source.unsplash.com/400x300/?heli" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://source.unsplash.com/400x300/?heli" data-caption="Caption 2">
                <img src="https://source.unsplash.com/400x300/?nepal" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://source.unsplash.com/400x300/?heli" data-caption="Caption 3">
                <img src="https://source.unsplash.com/400x300/?india" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://source.unsplash.com/400x300/?heli" data-caption="Caption 1">
                <img src="https://source.unsplash.com/400x300/?china" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://source.unsplash.com/400x300/?heli" data-caption="Caption 2">
                <img src="https://source.unsplash.com/400x300/?bhutan" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://source.unsplash.com/400x300/?heli" data-caption="Caption 3">
                <img src="https://source.unsplash.com/400x300/?mountain" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://source.unsplash.com/400x300/?heli" data-caption="Caption 1">
                <img src="https://source.unsplash.com/400x300/?bird" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://source.unsplash.com/400x300/?heli" data-caption="Caption 2">
                <img src="https://source.unsplash.com/400x300/?cat" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://source.unsplash.com/400x300/?heli" data-caption="Caption 3">
                <img src="https://source.unsplash.com/400x300/?perfume" alt="">
            </a>
        </div>
         <div>
            <a class="uk-inline" href="https://source.unsplash.com/400x300/?heli" data-caption="Caption 3">
                <img src="https://source.unsplash.com/400x300/?shoes" alt="">
            </a>
        </div>
    </div>

    @endif
</section>

