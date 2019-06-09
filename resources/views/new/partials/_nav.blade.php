<nav class="nav-container" id="nav-wrapper" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
    <div class="container">
        <div class="nav-wrapper">
            <div class="logo-wrapper">
                <a href="/">
                    <img data-src="{{asset('img/crusade-logo.svg')}}" alt="" style=" width: 140px;" uk-img>
                </a>
            </div>

            <div class="link-wrapper uk-visible@m">
                <ul class="nav-list">
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/home">Home</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/product">Product</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/destination">Destinations</a>
                    </li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/travel-style">Travel Style
                        </a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/packages">Packages </a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/about">About</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/contact">Contact</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/blog">Blog Index</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/single-post">Single Post</a>
                    </li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/event">Event</a></li>

                </ul>

            </div>

            <div class="mobile-nav uk-hidden@m">
                <a class="toggleButton" href="#" uk-toggle="target: #offcanvas-nav">
                    <span uk-navbar-toggle-icon></span>
                </a>

                <div id="offcanvas-nav" uk-offcanvas="overlay: true; flip:true">
                    <div class="uk-offcanvas-bar">

                        <ul class="mobileMenu-list ">
                            <li class="mobileMenu-list__item"><a class="mobileMenu-list__item--link" href="/">Home</a>
                            </li>
                            <li class="mobileMenu-list__item">
                                <ul uk-accordion>
                                    <li><a class="uk-accordion-title mobileMenu-list__item--link" href="#">What We Do</a>
                                        <div class="uk-accordion-content">
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <ul uk-accordion>
                                                    {{-- @foreach($dos as $do)
                                                    @if($do->tours->count() > 0)
                                                    <li class="list-item"><a class="uk-margin-left"
                                                            href="{{ route('fetchByCategory',$do->slug) }}">{{ $do->name }}</a>
                                                    </li>
                                                    @endif
                                                    @endforeach --}}
                                                    <li class="list-item"><a class="uk-margin-left"
                                                        href="#">Link</a>
                                                </li>
                                                </ul>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li class="mobileMenu-list__item">
                            <li>
                                    <ul uk-accordion>
                                        <li><a class="uk-accordion-title mobileMenu-list__item--link" href="#">Where We Go</a>
                                            <div class="uk-accordion-content">
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <ul uk-accordion>
                                                        {{-- @foreach($dos as $do)
                                                        @if($do->tours->count() > 0)
                                                        <li class="list-item"><a class="uk-margin-left"
                                                                href="{{ route('fetchByCategory',$do->slug) }}">{{ $do->name }}</a>
                                                        </li>
                                                        @endif
                                                        @endforeach --}}
                                                        <li class="list-item"><a class="uk-margin-left"
                                                            href="#">Link</a>
                                                    </li>
                                                    </ul>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            <li class="mobileMenu-list__item"><a class="mobileMenu-list__item--link" href="#">Whats
                                    On</a></li>
                            <li class="mobileMenu-list__item"><a class="mobileMenu-list__item--link" href="#">Who We
                                    Are</a></li>
                            <li class="mobileMenu-list__item"><a class="mobileMenu-list__item--link" href="#">Travel
                                    Blog</a></li>
                            <li class="mobileMenu-list__item"><a class="mobileMenu-list__item--link"
                                    href="#">Contact</a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>