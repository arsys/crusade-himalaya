<footer class="section-white" id="footer">
    <div class="container">
        <div class="uk-child-width-1-3@m uk-child-width-1-1" uk-grid>

            <div class="footerSection-1">
                <a class="footerLogo-wrapper" href="/">
                    <img data-src="{{ asset('img/crusade-logo.svg') }}" width="1800" height="1200" alt="" uk-img>
                </a>
                <div class="socialLink--list">
                    <a href="{{ $setting->facebook }}" target="_blank" class="socialLink--list__item fb" uk-icon="facebook"></a>
                    <a href="{{ $setting->twitter }}"  target="_blank" class="socialLink--list__item tw" uk-icon="twitter"></a>
                    <a href="{{ $setting->instagram }}"  target="_blank" class="socialLink--list__item inst" uk-icon="instagram"></a>
                    <a href="{{ $setting->youtube }}"  target="_blank" class="socialLink--list__item yt" uk-icon="youtube"></a>
                </div>
            </div>

            <div class="footerSection-2">
                <div class=" footerLink--wrapper">
                    <a class="footerLink__itemButton  " href="#request-broucher" uk-toggle>
                        <span uk-icon="file-text"></span>
                        Request Brochure
                        <span uk-icon="chevron-right"></span>
                    </a>
                    <a class="footerLink__itemButton " href="{{ route('frontend.contact') }}">
                        <span uk-icon="mail"></span>
                        Contact Us
                        <span uk-icon="chevron-right"></span>
                    </a>
                    <a class="footerLink__itemButton " href="#findLocation" uk-toggle>
                        <span uk-icon="location"></span>
                        Find Location
                        <span uk-icon="chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="footerSection-3">
                <div class=" footerLink--wrapper">
                    @foreach($pages as $page)
                    <a class="footerLink__item" href="{{ route('page.getPage',$page->slug) }}">{{ $page->title }}</a>
                    @endforeach
                    <a class="footerLink__item" href="{{ route('frontend.press') }}">Press</a>
                    <a class="footerLink__item" href="{{ route('frontend.sitemap') }}">Sitemap</a>
                </div>
                <ul class="footerAffiliate--wrapper">
                    <li class="footerAffiliate__image">
                        <img data-src="{{asset('img/taan.png')}}" alt="" uk-img>
                    </li>
                    <li class="footerAffiliate__image">
                        <img data-src="{{asset('img/ntb.png')}}" alt="" uk-img>
                    </li>
                    <li class="footerAffiliate__image">
                        <img data-src="{{asset('img/gov.png')}}" alt="" uk-img>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footerCopyright">
            <span> © {{date('Y')}} KARMA TARA ADVENTURE PVT. LTD. KATHMANDU NEPAL</span>
        </div>
    </div>
</footer>
<div id="request-broucher" class="uk-flex-top request-wrapper" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical request-details">

        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h3>Request a brochure</h3>
        <div class="uk-alert-danger print-error-msg uk-alert" id="response-msg" style="display: none;">
            <ul class="uk-list">
            </ul>
        </div>
        <form method="POST" action="{{ route('frontend.brochure') }}" id="requestBroucher">
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email *</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-width-xlarge" type="email" placeholder="Email" id="email"
                        name="email">
                </div>
            </div>

            <p class="uk-text-right">
                <button class="uk-button submit uk-width-1-1 button-primary" type="submit">Send</button>
            </p>
    </div>
    </form>
</div>
<div id="findLocation" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="map-wrapper uk-section-default">
            <img src="{{ asset('img/location.jpg') }}" alt="Karma Tara Adventure " class="uk-img">
        </div>
    </div>
</div>