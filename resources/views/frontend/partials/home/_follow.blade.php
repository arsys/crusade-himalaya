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

        <a href="#modal-media-image" uk-toggle><img src="https://source.unsplash.com/400x300/?heli" alt="" ></a>
        <a href="#modal-media-image2" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
        <a href="#modal-media-image3" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
        <a href="#modal-media-image4" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
        <a href="#modal-media-image5" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
        <a href="#modal-media-image6" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
        <a href="#modal-media-image7" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
        <a href="#modal-media-image8" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
        <a href="#modal-media-image9" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
        <a href="#modal-media-image10" uk-toggle><img src="https://source.unsplash.com/400x300/?everest" alt="" ></a>
    </div>

    <div id="modal-media-image" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-xxlarge modal">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-background-cover uk-width-3-4@s">  
                    <img data-src=https://source.unsplash.com/400x300/?fiji" alt="" uk-img uk-height-viewport="min-height:500;">   
                </div>
                <div class=" uk-width-1-4@s uk-padding">
                    <h5 class="user-instagram">@username</h5>
                    <p class="caption-instagram">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        
        </div>
            <a class="uk-position-center-left uk-position-small uk-slidenav-large previous" href="#modal-media-image2" uk-slidenav-previous uk-toggle></a>
            <a class="uk-position-center-right uk-position-small  uk-slidenav-large next" href="#modal-media-image2" uk-slidenav-next uk-toggle></a>

    </div>
    <div id="modal-media-image2" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-xxlarge modal">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
               <div class="uk-background-cover uk-width-3-4@s">  
                    <img data-src=https://source.unsplash.com/400x300/?nepal" alt="" uk-img uk-height-viewport="min-height:500;">   
                </div>
               <div class=" uk-width-1-4@s uk-padding">
                    <h5 class="user-instagram">@username</h5>
                    <p class="caption-instagram">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large previous" href="#modal-media-image3" uk-slidenav-previous uk-toggle></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large next" href="#modal-media-image3" uk-slidenav-next uk-toggle></a>
    </div>
    <div id="modal-media-image3" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-xxlarge modal">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-background-cover uk-width-3-4@s">  
                    <img data-src=https://source.unsplash.com/400x300/?india" alt="" uk-img uk-height-viewport="min-height:500;">   
                </div>
                <div class=" uk-width-1-4@s uk-padding">
                    <h5 class="user-instagram">@username</h5>
                    <p class="caption-instagram">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large previous" href="#modal-media-image4" uk-slidenav-previous uk-toggle></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large next" href="#modal-media-image4" uk-slidenav-next uk-toggle></a>
    </div>
    <div id="modal-media-image4" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-xxlarge modal">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-background-cover uk-width-3-4@s">  
                    <img data-src=https://source.unsplash.com/400x300/?nepal" alt="" uk-img uk-height-viewport="min-height:500;">   
                </div>
                <div class=" uk-width-1-4@s uk-padding">
                    <h5 class="user-instagram">@username</h5>
                    <p class="caption-instagram">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large previous" href="#modal-media-image5" uk-slidenav-previous uk-toggle></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large next" href="#modal-media-image5" uk-slidenav-next uk-toggle></a>
    </div>
        
    <div id="modal-media-image5" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-xxlarge modal">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-background-cover uk-width-3-4@s">  
                    <img data-src=https://source.unsplash.com/400x300/?ice" alt="" uk-img uk-height-viewport="min-height:500;">   
                </div>
                <div class=" uk-width-1-4@s uk-padding">
                    <h5 class="user-instagram">@username</h5>
                    <p class="caption-instagram">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large previous" href="#modal-media-image6" uk-slidenav-previous uk-toggle></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large next" href="#modal-media-image6" uk-slidenav-next uk-toggle></a>

    </div>
    <div id="modal-media-image6" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-xxlarge modal">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-background-cover uk-width-3-4@s">  
                    <img data-src=https://source.unsplash.com/400x300/?coffee" alt="" uk-img uk-height-viewport="min-height:500;">   
                </div>
                <div class=" uk-width-1-4@s uk-padding">
                    <h5 class="user-instagram">@username</h5>
                    <p class="caption-instagram">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large previous" href="#modal-media-image7" uk-slidenav-previous uk-toggle></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large next" href="#modal-media-image7" uk-slidenav-next uk-toggle></a>  
    </div>
        
    <div id="modal-media-image7" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-xxlarge modal">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
                     <div class="uk-background-cover uk-width-3-4@s">  
                    <img data-src=https://source.unsplash.com/400x300/?goa" alt="" uk-img uk-height-viewport="min-height:500;">   
                </div>
                <div class=" uk-width-1-4@s uk-padding">
                    <h5 class="user-instagram">@username</h5>
                    <p class="caption-instagram">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large" href="#modal-media-image8" uk-slidenav-previous uk-toggle></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large" href="#modal-media-image8" uk-slidenav-next uk-toggle></a>
    </div>
    <div id="modal-media-image8" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-background-cover uk-width-3-4@s">  
                    <img data-src=https://source.unsplash.com/400x300/?china" alt="" uk-img uk-height-viewport="min-height:500;">   
                </div>
                <div class=" uk-width-1-4@s uk-padding">
                    <h5 class="user-instagram">@username</h5>
                    <p class="caption-instagram">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large previous" href="#modal-media-image9" uk-slidenav-previous uk-toggle></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large next" href="#modal-media-image9" uk-slidenav-next uk-toggle></a>
    </div>
        
    <div id="modal-media-image9" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-xxlarge modal">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-background-cover uk-width-3-4@s">  
                    <img data-src=https://source.unsplash.com/400x300/?japan" alt="" uk-img uk-height-viewport="min-height:500;">   
                </div>
                <div class=" uk-width-1-4@s uk-padding">
                    <h5 class="user-instagram">@username</h5>
                    <p class="caption-instagram">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large previous" href="#modal-media-image10" uk-slidenav-previous uk-toggle></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large next" href="#modal-media-image10" uk-slidenav-next uk-toggle></a>
    </div>
    <div id="modal-media-image10" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-width-xxlarge modal">
            <button class="uk-modal-close-outside" type="button" uk-close></button>
            <div class="uk-grid-collapse" uk-grid>
                <div class="uk-background-cover uk-width-3-4@s">  
                    <img data-src=https://source.unsplash.com/400x300/?america" alt="" uk-img uk-height-viewport="min-height:500;">   
                </div>
                <div class=" uk-width-1-4@s uk-padding">
                    <h5 class="user-instagram">@username</h5>
                    <p class="caption-instagram">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large previous" href="#modal-media-image" uk-slidenav-previous uk-toggle></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large next" href="#modal-media-image" uk-slidenav-next uk-toggle></a>
    </div>
    @endif
</section>

