@extends('layouts.new')
@section('content')
<header class="header-wrapper js-slideshow-animation" uk-slideshow="ratio: 4:3; autoplay:true">

        <div class="hero-slider" tabindex="-1">
    
            <ul class="uk-slideshow-items slidelist" uk-height-viewport="min-height: 300" style="min-height: calc(100vh);">
                @foreach ($carousels as $carousel)
                <li tabindex="-1" class="slidelist--item" style="transform: translate3d(0px, 0px, 0px);">
                    <img src="{{ asset($carousel->path) }}" alt="" uk-cover="" class="uk-cover"
                        style="height: 1013px; width: 1520px;">
                    <div class="uk-position-center-left slidelist--item__content">
                        <h2 class="slidelist--item__content--heading" uk-slideshow-parallax="y: -100,0,0; opacity: 0,1,1;"
                            style="transform: translateX(0px);">{{$carousel->header}}</h2>
                        <p class="slidelist--item__content--subheading" uk-slideshow-parallax="y: 100,0,0; opacity: 0,1,1;"
                            style="transform: translateX(0px);">{{$carousel->subheader}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="scroll-down-wrapper  uk-position-bottom-center">
                <a href="#" class="scroll-down"><span uk-icon="icon: chevron-down;ratio: 3.5"></span></a>
            </div>
    
        </div>
    
    </header>
<section class="section-white" id="scroll-end">
    <div class="container">
        <div uk-grid class="uk-child-width-1-1 uk-child-width-1-2@l uk-grid-divider uk-height-match">
            <div>
                <div class="title-wrapper">
                    <h2 class="sectionTitle">Our Essence</h2>
                    <p class="sectionSubtitle">Educate, Empower, Encourage</p>
                    <span id="heading-border"></span>
                    <div class="logoDivider">
                        <img src="{{ asset('img/Flag.png') }}" alt="">
                    </div>
                </div>

                <div class="content-wrapper uk-child-width-1-3@l uk-child-width-1-2" uk-grid>
                    <div class="content-item">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h6 class="content-item__title">Passion & Expertise</h6>
                        <p class="uk-text-center content-item__paragraph">We strive to open minds &amp; refuse to
                            sacrifice quality over quantity.</p>
                    </div>

                    <div class="content-item">
                        <i class="fas fa-compass"></i>
                        <h6 class="content-item__title">Freedom to Explore</h6>
                        <p class="uk-text-center content-item__paragraph">We provide liberty to play on our trips &amp;
                            itineraries.
                        </p>
                    </div>

                    <div class="content-item">
                        <i class="fab fa-pagelines"></i>
                        <h6 class="content-item__title">Environmentally Engaged</h6>
                        <p class="uk-text-center content-item__paragraph">Your least effort for the environment, you
                            earn respect.
                        </p>

                    </div>
                    <div class="content-item">
                        <i class="fas fa-grin-hearts"></i>
                        <h6 class="content-item__title">Happiness Guaranteed </h6>
                        <p class="uk-text-center content-item__paragraph">Unless you go Happy, we don't exist.</p>
                    </div>
                    <div class="content-item">
                        <i class="fas fa-handshake"></i>
                        <h6 class="content-item__title">Lasting Friendship</h6>
                        <p class="uk-text-center content-item__paragraph">While memories fade, It's friendships that
                            last. Are we friends now? </p>
                    </div>
                    <div class="content-item">
                        <i class="fas fa-fingerprint"></i>
                        <h6 class="content-item__title">Quirky Holidays</h6>
                        <p class="uk-text-center content-item__paragraph">Our trips are as fresh as Daisy. Soulless
                            trips, not our thing.</p>
                    </div>
                </div>

            </div>
            <div>
                <div class="title-wrapper">
                    <h2 class="sectionTitle">The Story</h2>
                    <p class="sectionSubtitle">Obsession Towards Comfy Tours</p>
                    <span id="heading-border"></span>
                    <div class="logoDivider">
                        <img src="{{ asset('img/Flag.png') }}" alt="">
                    </div>
                </div>
                <div class="content-wrapper uk-child-width-1-1" id="prologue" uk-grid>
                    <p>
                        Crusade Himalaya is a unique and independent travel partner; we are a boutique travel studio who
                        wish to offer you, our Atithis (revered guests), enriching and fulfilling experience of their
                        Nepal visit. We wish to Empower, Educate, and Encourage you to have real-life experiences as you
                        set out to discover the timeless wonders of Nepal.
                    </p>
                    <p>
                        At Crusade Himalaya, we offer highly personalized travel plans and arrangements to ensure your
                        satisfaction. Putting comfort and pleasure above anything else, we wish to earn your smiles.
                        From the moment you land in Nepal, till the time we bid our goodbyes, the team of Crusade
                        Himalaya will continuously strive to ensure your experience is highly memorable
                    </p>
                    <p><strong>Your adventure awaits you! </strong><br>
                        Get in touch with us, and plan your perfect holiday – an unforgettable holiday filled with
                        adventure, excitement, and memories.</p>

                    <p><a href="{{ route('frontend.about') }}" class="button-arrow">READ MORE <span>&rarr;</span></a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- travel style --}}
<section class="section-dashed">
    <div class="container">
        <div class="title-wrapper">
            <h2 class="sectionTitle">Travel Style</h2>
            <p class="sectionSubtitle">Obsession Towards Comfy Tours</p>
            <span id="heading-border"></span>
            <div class="logoDivider">
                <img src="{{ asset('img/Flag.png') }}" alt="">
            </div>
        </div>
        <div class="sliderWrapper" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-grid uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2" uk-grid>
                @foreach ($categories as $category)
                @if($category->tours->count() > 0)
                <li class="sliderList--item ">
                    <div class="sliderPanel">
                        <img src="{{ asset($category->thumb) }}" alt="{{$category->name}}">
                        <div class="sliderPanel--textHolder uk-position-cover">
                            <h3 class="uk-position-bottom" id="travelStyle-name">
                                <a href="{{ route('frontend.fetchByCategory',$category->slug) }}"
                                    class="button-textOnly">{{$category->name}}</a>
                            </h3>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>

        </div>
    </div>

</section>

{{-- destinations --}}
<section class="section-white">
    <div class="container">
        <div class="title-wrapper">
            <h2 class="sectionTitle">DESTINATION</h2>
            <p class="sectionSubtitle">Ready To Fall For Nepalese Charm ? Start Here</p>
            <span id="heading-border"></span>
            <div class="logoDivider">
                <img src="{{ asset('img/Flag.png') }}" alt="">
            </div>
        </div>
        <div class="uk-child-width-1-2@m uk-child-width-1-1  destinationsWrapper" uk-grid>
            {{-- left --}}
            <div class="destinationLeft">
                {{-- single article--}}
                @foreach($odds as $odd)
                @if($loop->iteration % 2 == 0)
                <div class="uk-inline destinationItem">
                    <a href="{{ route('frontend.fetchByRegion',$odd->slug) }}">
                        <img src="{{ asset($odd->thumb) }}" alt="{{ $odd->name }}">
                        <div class="uk-position-cover"></div>
                        <div class="uk-position-bottom  destinationItem__overlay">
                            <h3 class="destinationItem__overlay--title">{{$odd->name}}</h3>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach

                {{-- double article --}}
                <div class="uk-child-width-1-2 uk-grid-small " uk-grid>
                    @foreach($odds as $odd)
                    @if($loop->iteration % 2 != 0)
                    <div class="uk-inline destinationItem">
                        <a href="{{ route('frontend.fetchByRegion',$odd->slug) }}">
                            <img src="{{ asset($odd->thumb) }}" alt="{{ $odd->name }}">
                            <div class="uk-position-cover"></div>
                            <div class="uk-position-bottom  destinationItem__overlay">
                                <h3 class="destinationItem__overlay--title">{{$odd->name}}</h3>
                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            {{-- right --}}
            <div class="destinationRight">
                {{-- double article --}}
                <div class="uk-child-width-1-2 uk-grid-small " uk-grid>
                    @foreach($evens as $even)
                    @if($loop->iteration % 2 != 0)
                    <div class="uk-inline destinationItem">
                        <a href="{{ route('frontend.fetchByRegion',$even->slug) }}">
                            <img src="{{ asset($even->thumb) }}" alt="{{ $even->name }}">
                            <div class="uk-position-cover"></div>
                            <div class="uk-position-bottom  destinationItem__overlay">
                                <h3 class="destinationItem__overlay--title">{{$even->name}}</h3>
                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
                {{-- single article--}}
                @foreach($evens as $even)
                @if($loop->iteration % 2 == 0)
                <div class="uk-inline destinationItem">
                    <a href="{{ route('frontend.fetchByRegion',$even->slug) }}">
                        <img src="{{ asset($even->thumb) }}" alt="{{ $even->name }}">
                        <div class="uk-position-cover"></div>
                        <div class="uk-position-bottom  destinationItem__overlay">
                            <h3 class="destinationItem__overlay--title">{{$even->name}}</h3>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach

            </div>
        </div>

    </div>
</section>

{{-- handpicked tours --}}
<section class="section-dashed">
    <div class="container">

        <div class="title-wrapper">
            <h2 class="sectionTitle">HANDPICKED TOURS</h2>
            <p class="sectionSubtitle">Crafted Tours For Like Minded Gypsies</p>
            <span id="heading-border"></span>
            <div class="logoDivider">
                <img src="{{ asset('img/Flag.png') }}" alt="">
            </div>
        </div>

        <div class="uk-child-width-1-3@m uk-child-width-1-1 uk-grid tourPacakge-wrapper" uk-grid="">
            {{-- loop start --}}
            @foreach($featureds as $featured)
            <div>
                <a href="{{ route('frontend.tripDetail', $featured->slug) }}">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="{{ asset($featured->image->thumb) }}" alt="{{$featured->title}}">
                        </div>
                        <div class="tourPackage--detailWrapper">
                            <div class="uk-flex uk-flex-between">
                                <h4 class="uk-margin-remove">{{$featured->title}}</h4>
                                <h4 class="uk-margin-remove">USD {{$featured->budgetPrice}}</h4>
                            </div>
                            <div class="uk-flex uk-flex-between">
                                <h4 class="uk-margin-remove">{{$featured->days}} Days</h4>
                                <a class="button-default"
                                    href="{{ route('frontend.tripDetail', $featured->slug) }}">Find Out More</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        {{-- loop end --}}
    </div>

    </div> {{--container end --}}
</section>

{{-- featured media --}}
<section class="section-dashed" id="featured-media">
    <div class="container">
        <div class="titleMinimal-wrapper uk-text-left">
            <h4 class="titleMinimal">As mentioned on:</h4>
        </div>

        <div uk-slider="" class="uk-slider uk-slider-container">

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                <ul class="uk-slider-items mentioned-list">
                    @foreach ($medias as $media)
                    <li class="mentioned-list__item">
                        <a href="{{$media->url}}" target="_blank">
                            <img data-src="{{$media->path}}" alt="{{$media->name}}" uk-img>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</section>

@endsection

@section('scripts')

<script src="{{ asset('js/sticky-nav.js') }}"></script>
@endsection