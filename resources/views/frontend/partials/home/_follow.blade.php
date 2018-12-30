<section class=" uk-margin-medium-top uk-margin-medium-bottom bgcolor-wrapper">
    <div class="uk-container">
        <h2 class="uk-text-center uk-margin-small-bottom instagram"><a href="#">#brandname</a></h2>

    </div>
    <div class="uk-container-expand">
        @foreach($instafeeds->chunk(10) as $row)
        <div class="follow uk-grid-collapse uk-child-width-expand@s uk-child-width-1-2   uk-child-height-1-2 " uk-grid="">
            @foreach($row as $feed)
            <div>
                <a href="#instagram-{{ $loop->iteration }}" uk-toggle>
                    <img src="{{ $feed->thumb_link }}" alt="{{ $feed->caption }}" data-height="720" data-width="480">
                </a>
            </div>
            @endforeach
        </div>
        @endforeach

{{--         <div class="follow uk-grid-collapse uk-child-width-expand@s uk-child-width-1-2   uk-child-height-1-2  " uk-grid="">
            <div><a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/150x150/?heli" alt="" ></a></div>
            <div><a href="#modal-media-image2" uk-toggle><img src="https://source.unsplash.com/150x150/?everest" alt="" ></a></div>
            <div><a href="#modal-media-image3" uk-toggle><img src="https://source.unsplash.com/150x150/?cat" alt="" ></a></div>
            <div><a href="#modal-media-image4" uk-toggle><img src="https://source.unsplash.com/150x150/?nepal" alt="" ></a></div>
            <div><a href="#modal-media-image5" uk-toggle><img src="https://source.unsplash.com/150x150/?china" alt="" ></a></div>
            <div><a href="#modal-media-image6" uk-toggle><img src="https://source.unsplash.com/150x150/?japan" alt="" ></a></div>
            <div><a href="#modal-media-image7" uk-toggle><img src="https://source.unsplash.com/150x150/?annapurna" alt="" ></a></div>
            <div><a href="#modal-media-image8" uk-toggle><img src="https://source.unsplash.com/150x150/?food" alt="" ></a></div>
            <div><a href="#modal-media-image9" uk-toggle><img src="https://source.unsplash.com/150x150/?coffee" alt="" ></a></div>
            <div><a href="#modal-media-image10" uk-toggle><img src="https://source.unsplash.com/150x150/?chocolate" alt="" ></a></div>
        </div> --}}
        @foreach($instafeeds as $feed)
        <div id="instagram-{{$loop->iteration}}" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog  modal uk-width-auto uk-margin-auto-vertical">
                <button class="uk-modal-close-outside" type="button" uk-close></button>
                <div class="uk-grid-collapse" uk-grid>
                    <div class="uk-background-cover uk-width-3-4@s">  
                        <img src="{{ $feed->standard_link }}" alt="{{ $feed->caption }}" >
                    </div>
                    <div class=" uk-width-1-4@s uk-padding">
                        <h5 class="user-instagram">@username</h5>
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

