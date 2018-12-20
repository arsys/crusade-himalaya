<section class=" uk-margin-medium-top uk-margin-medium-bottom bgcolor-wrapper">
    <div class="uk-container">
        <h2 class="heading-primary uk-text-center uk-margin-medium-bottom"><span>#brandname</span></h2> 
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
        <div class="follow uk-grid-collapse uk-child-width-1-2 uk-child-width-1-5@m uk-child-height-1-2 uk-grid" uk-grid="">

            <div>

                <img src="https://source.unsplash.com/400x300/?heli" alt="" >
            </div>

            <div>
                <img src="https://source.unsplash.com/400x300/?everest" alt="">
            </div>
            <div>
                <img src="https://source.unsplash.com/400x300/?kathmandu" alt="">
            </div>

            <div>
                <img src="https://source.unsplash.com/400x300/?nepal" alt="">
            </div>
            <div>
                <img src="https://source.unsplash.com/400x300/?mountain" alt="">
            </div> 


            <div>
                <img src="https://source.unsplash.com/400x300/?langtang" alt="" >
            </div>
            <div>
                <img src="https://source.unsplash.com/400x300/?everest" alt="">
            </div>

            <div>
                <img src="https://source.unsplash.com/400x300/?kathmandu" alt="">
            </div>

            <div>
                <img src="https://source.unsplash.com/400x300/?heli" alt="">
            </div>

            <div>
                <img src="https://source.unsplash.com/400x300/?annapurna" alt="">
            </div> 

        </div>
    </div>
    @endif
</section>
