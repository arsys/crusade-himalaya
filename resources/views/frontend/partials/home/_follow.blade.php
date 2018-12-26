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
        <div class="follow uk-grid-collapse uk-child-width-1-2 uk-child-width-1-5@m uk-child-height-1-2 uk-grid" uk-grid="">

            <div>
                <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?heli" alt="" ></a>
                <div id="modal-media-image" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <img src="https://source.unsplash.com/400x300/?heli" alt="">
                    </div>
                </div>
            </div>

            <div>
                <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
                <div id="modal-media-image" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <img src="https://source.unsplash.com/400x300/?everest" alt="">
                    </div>
                </div>
            </div>
            <div>
                <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?kathmandu" alt="" ></a>
                <div id="modal-media-image" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <img src="https://source.unsplash.com/400x300/?kathmandu" alt="">
                    </div>
                </div>
            </div>

            <div>
                <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?nepal" alt="" ></a>
                <div id="modal-media-image" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <img src="https://source.unsplash.com/400x300/?nepal" alt="">
                    </div>
                </div>
            </div>
            <div>
                <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?mountain" alt="" ></a>
                <div id="modal-media-image" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <img src="https://source.unsplash.com/400x300/?mountain" alt="">
                    </div>
                </div>
            </div> 


            <div>
                <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?langtang" alt="" ></a>
                <div id="modal-media-image" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <img src="https://source.unsplash.com/400x300/?langtang" alt="">
                    </div>
                </div>
            </div>
            <div>
                <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
                <div id="modal-media-image" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <img src="https://source.unsplash.com/400x300/?everest" alt="">
                    </div>
                </div>
            </div>

            <div>
                <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?kathmandu" alt="" ></a>
                <div id="modal-media-image" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <img src="https://source.unsplash.com/400x300/?kathmandu" alt="">
                    </div>
                </div>
            </div>

            <div>
                <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?heli" alt="" ></a>
                <div id="modal-media-image" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <img src="https://source.unsplash.com/400x300/?heli" alt="">
                    </div>
                </div>
            </div>

            <div>
                <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?annapurna" alt="" ></a>
                <div id="modal-media-image" class="uk-flex-top" uk-modal>
                    <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
                        <button class="uk-modal-close-outside" type="button" uk-close></button>
                        <img src="https://source.unsplash.com/400x300/?annapurna" alt="">
                    </div>
                </div>
            </div> 

        </div>
    </div>
    @endif
</section>
