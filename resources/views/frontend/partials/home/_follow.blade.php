<section class=" uk-margin-medium-top uk-margin-medium-bottom bgcolor-wrapper">
    <div class="uk-container">
        <h2 class="uk-text-center uk-margin-small-bottom instagram"><a href="https://www.instagram.com/crusadehimalaya/">#crusadehimalaya</a></h2>

    </div>
    <div class="uk-container-expand">
        @foreach($instafeeds->chunk(10) as $row)
        <div class="follow uk-grid-collapse uk-child-width-expand@s uk-child-width-1-2   uk-child-height-1-2 " uk-grid="">
            @foreach($row as $feed)
            <div class="uk-inline-clip uk-transition-toggle uk-light" tabindex="0">
                <a href="#instagram-{{ $loop->iteration }}" uk-toggle>
                    <img  src="{{ $feed->thumb_link }}" alt="{{ $feed->caption }}">
                       <div class="uk-position-center insta-color">
                            <span class=""><i class="fab fa-instagram"></i></span>
                        </div>
                </a>
            </div>
            @endforeach
        </div>
        @endforeach
        @foreach($instafeeds as $feed)
        <div id="instagram-{{$loop->iteration}}" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog  modal uk-width-auto uk-margin-auto-vertical">
                <button class="uk-modal-close-outside" type="button" uk-close></button>
                <div class="uk-grid-collapse" uk-grid>
                    <div class="uk-background-cover uk-width-3-4@s">  
                        <img class="insta-lightbox" src="{{ $feed->standard_link }}" alt="{{ $feed->caption }}" height="720" width="480">

                    </div>
                    <div class=" uk-width-1-4@s uk-padding">
                        <h5 class="user-instagram"><a href="www.instagram.com/crusadehimalya" target="_blank">@crusadehimalaya</a></h5>
                        <p class="caption-instagram">{{ $feed->caption }}</p>
                    </div>
                </div>
            </div>
            @if($loop->iteration != $loop->first)
            <a class="uk-position-center-left uk-position-small uk-slidenav-large previous" href="#instagram-{{$loop->iteration-1 }}" uk-slidenav-previous uk-toggle></a>
            @endif
            @if($loop->iteration != $loop->last)
            <a class="uk-position-center-right uk-position-small  uk-slidenav-large next" href="#instagram-{{ $loop->iteration+1 }}" uk-slidenav-next uk-toggle></a>
            @endif
        </div>
        @endforeach


    </section>

