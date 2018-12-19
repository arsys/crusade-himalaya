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

                <img src="{{asset('img/Insta/iam.jpg')}}" alt="" >
            </div>

            <div>
                <img src="{{asset('img/Insta/gosaikunda-1.jpg')}}" alt="">
            </div>
            <div>
                <img src="{{asset('img/Insta/larkey.jpg')}}" alt="">
            </div>

            <div>
                <img src="{{asset('img/Insta/thorangla.jpg')}}" alt="">
            </div>
            <div>
                <img src="{{asset('img/Insta/gosaikunda-1.jpg')}}" alt="">
            </div> 


            <div>
                <img src="{{asset('img/Insta/larkey.jpg')}}" alt="" >
            </div>
            <div>
                <img src="{{asset('img/Insta/mountain.jpg')}}" alt="">
            </div>

            <div>
                <img src="{{asset('img/Insta/thorangla.jpg')}}"alt="">
            </div>

            <div>
                <img src="{{asset('img/Insta/upper-dolpa.jpg')}}" alt="">
            </div>

            <div>
                <img src="{{asset('img/Insta/upper-mustang.jpg')}}" alt="">
            </div> 

        </div>
    </div>
    @endif
</section>
