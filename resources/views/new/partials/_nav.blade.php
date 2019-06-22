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
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/">Home</a></li>
                    <li class="nav-list__item">
                        <a class="nav-list__item--link" href="{{ route('frontend.weDo') }}">What We Do</a>

                        <div class="nav-list__item--dropdown-wrapper" uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify; offset:5" >
                            <div uk-slider>
                                <ul class="uk-slider-items uk-child-width-1-4@m thumbNav--list">
                                    @foreach($dos as $do)
                                    @if($do->tours->count() > 0)
                                    <li class="thumbNav--list__item">
                                        <a href="{{ route('frontend.fetchByCategory',$do->slug) }}">
                                        <h4 class="thumbNav--list__item--title">{{$do->name}}</h4>                                        
                                            <img src="{{ asset($do->nav) }}" alt="{{$do->name}}">
                                        </a>
                                    </li>                                    
                                    @endif
                                    @endforeach
                                </ul>
                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            
                            </div>
                        </div>
                    </li>
                    <li class="nav-list__item">
                        <a class="nav-list__item--link" href="{{ route('frontend.where') }}">Where We Go</a>
                        <div class="nav-list__item--dropdown-wrapper" uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify; offset:5" >
                            <div uk-slider>
                                <ul class="uk-slider-items uk-child-width-1-4@m thumbNav--list">
                                    @foreach($wheres as $where)
                                    <li class="thumbNav--list__item">
                                        <a href="{{ route('frontend.fetchByRegion',$where->slug) }}">
                                            <h4 class="thumbNav--list__item--title">{{$where->name}}</h4>                                        
                                            <img src="{{ asset($where->nav) }}" alt="{{$where->name}}">
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            
                            </div>
                        </div>                        
                    </li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="{{ route('frontend.whatsOn') }}">What's On
                        </a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="{{ route('frontend.about') }}">Who We Are </a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="{{ route('frontend.travelBlog') }}">Travel Blog</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="{{ route('frontend.contact') }}">Contact</a></li>
                    {{-- <li class="nav-list__item"><a class="nav-list__item--link" href="/new/blog">Blog Index</a></li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/single-post">Single Post</a>
                    </li>
                    <li class="nav-list__item"><a class="nav-list__item--link" href="/new/event">Event</a></li> --}}
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
                                                    @foreach($dos as $do)
                                                    @if($do->tours->count() > 0)
                                                    <li class="list-item">
                                                        <a  class="uk-margin-left" href="{{ route('frontend.fetchByCategory',$do->slug) }}">{{ $do->name }}</a>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                </li>
                                                </ul>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li class="mobileMenu-list__item">
                                    <ul uk-accordion>
                                        <li><a class="uk-accordion-title mobileMenu-list__item--link" href="#">Where We Go</a>
                                            <div class="uk-accordion-content">
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <ul uk-accordion>
                                                        @foreach($wheres as $where)
                                                        <li class="list-item">
                                                                <a  class="uk-margin-left" href="{{ route('frontend.fetchByRegion',$where->slug) }}">{{ $where->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </li>
                                                    </ul>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            <li class="mobileMenu-list__item"><a class="mobileMenu-list__item--link" href="#">Whats
                                    On</a></li>
                            <li class="mobileMenu-list__item"><a class="mobileMenu-list__item--link" href="{{ route('frontend.about') }}">Who We
                                    Are</a></li>
                            <li class="mobileMenu-list__item"><a class="mobileMenu-list__item--link" href="{{ route('frontend.travelBlog') }}">Travel
                                    Blog</a></li>
                            <li class="mobileMenu-list__item"><a class="mobileMenu-list__item--link"
                                    href="{{ route('frontend.contact') }}">Contact</a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>