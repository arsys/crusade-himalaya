<section class=" uk-margin-medium-top uk-margin-medium-bottom bgcolor-wrapper">
    <div class="uk-container">
        <h1>{{ $instafeeds->count() }}</h1>
        <h2 class="uk-text-center uk-margin-small-bottom instagram"><a href="#">#brandname</a></h2>

    </div>
    <div class="uk-container-expand">
        <div class="follow uk-grid-collapse uk-child-width-1-2 uk-child-width-1-5@m uk-child-height-1-2 uk-grid" uk-grid="">
            @foreach($instafeeds as $feed)
            <a href="#instagram-post-{{ $loop->iteration }}" uk-toggle><img src="{{ $feed->thumb_link }}" alt="{{ $feed->caption }}"></a>
            @endforeach
        </div>
        @foreach($instafeeds as $feed)
        <div id="instagram-post-{{ $loop->iteration }}" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog  modal uk-width-auto uk-margin-auto-vertical">
                <button class="uk-modal-close-outside" type="button" uk-close></button>
                <div class="uk-grid-collapse" uk-grid>
                    <div class="uk-background-cover uk-width-3-4@s">
                        <img src="{{ $feed->standard_link }}" alt="{{ $feed->caption }}">
                    </div>
                    <div class=" uk-width-1-4@s uk-padding">
                        <h5 class="user-instagram">@username</h5>
                        <p class="caption-instagram">{{ $feed->caption }}</p>
                    </div>
                </div>
            </div>
            @if($loop->iteration != 1)
            <a class="uk-position-center-left uk-position-small uk-slidenav-large previous" href="#instagram-post-{{ $loop->iteration-1 }}" uk-slidenav-previous uk-toggle></a>
            @endif
            @if($loop->iteration != 10)
            <a class="uk-position-center-right uk-position-small  uk-slidenav-large next" href="#instagram-post-{{ $loop->iteration+1}}" uk-slidenav-next uk-toggle></a>
            @endif
        </div>
        @endforeach
    </div>
</section>