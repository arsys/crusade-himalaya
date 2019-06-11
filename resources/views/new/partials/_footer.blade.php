<footer class="section-white" id="footer">
    <div class="container">
        <div class="uk-child-width-1-3@m uk-child-width-1-1" uk-grid>

            <div class="footerSection-1">
                <a class="footerLogo-wrapper" href="/">
                    <img data-src="{{ asset('img/crusade-logo.svg') }}" width="1800" height="1200" alt="" uk-img>
                </a>
                <div class="socialLink--list">
                    <a href="" class="socialLink--list__item fb" uk-icon="facebook"></a>
                    <a href="" class="socialLink--list__item tw" uk-icon="twitter"></a>
                    <a href="" class="socialLink--list__item inst" uk-icon="instagram"></a>
                    <a href="" class="socialLink--list__item yt" uk-icon="youtube"></a>
                </div>
            </div>
            <div class="footerSection-2">
                <div class=" footerLink--wrapper">
                    <a class="footerLink__itemButton  " href="#">
                        <span uk-icon="file-text"></span>
                        Request Broucher
                        <span uk-icon="chevron-right"></span>
                    </a>
                    <a class="footerLink__itemButton " href="#">
                        <span uk-icon="mail"></span>
                        Contact Us
                        <span uk-icon="chevron-right"></span>
                    </a>
                    <a class="footerLink__itemButton " href="#">
                        <span uk-icon="location"></span>
                        Find Location
                        <span uk-icon="chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="footerSection-3">
                <div class=" footerLink--wrapper">
                    @foreach($pages as $page)
                    <a class="footerLink__item" href="{{ route('page.getPage',$page->slug) }}">T{{ $page->title }}</a>
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
    </div>
</footer>