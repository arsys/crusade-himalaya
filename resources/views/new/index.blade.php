@extends('layouts.new') 
@section('content')
<header class="header">
    <div class="hero-slider" tabindex="-1" uk-slideshow="animation: fade">

        <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300">
            @foreach ($carousels as $carousel)
            <li class="slide-item">
                <img src="{{ asset($carousel->path) }}" alt="{{ $carousel->name }}" uk-cover>
                <div class="slide-item--content  uk-position-center-left">
                    <h2 class="slide-item--content__heading uk-margin-remove ">{{ $carousel->header }}</h2>
                    <p class="slide-item--content__subheading uk-margin-remove uk-text-lead uk-text-uppercase">
                        {{ $carousel->subheader }}</p>
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

                    <p><a href="#" class="button-arrow">READ MORE <span>&rarr;</span></a></p>

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
                            <h3 class="uk-position-bottom">{{$category->name}}</h3>
                        </div>
                        <div class="sliderPanel--textHolder__hover">
                            <h4>{{$category->name}}</h4>
                            <p>{{$category->description}}</p>
                            <a href="{{ route('frontend.fetchByCategory',$category->slug) }}">View all <span>&rarr;</span></a>
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
                <div class="uk-inline">
                    <a href="{{ route('frontend.fetchByRegion',$odd->slug) }}">
                        <img src="{{ asset($odd->thumb) }}" alt="{{ $odd->name }}">
                        <div class="uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom uk-light">
                            <h3>{{$odd->name}}</h3>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach

                {{-- double article --}}
                <div class="uk-child-width-1-2 uk-grid-small " uk-grid>
                    @foreach($odds as $odd)
                    @if($loop->iteration % 2 != 0)
                        <div class="uk-inline">
                            <a href="{{ route('frontend.fetchByRegion',$odd->slug) }}">
                                <img src="{{ asset($odd->thumb) }}" alt="{{ $odd->name }}">
                                <div class="uk-position-cover"></div>
                                <div class="uk-overlay uk-position-bottom uk-light">
                                    <h3>{{$odd->name}}</h3>
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
                        <div class="uk-inline">
                            <a href="{{ route('frontend.fetchByRegion',$even->slug) }}">
                                <img src="{{ asset($even->thumb) }}" alt="{{ $even->name }}">
                                <div class="uk-position-cover"></div>
                                <div class="uk-overlay uk-position-bottom uk-light">
                                    <h3>{{$even->name}}</h3>
                                </div>
                            </a>
                        </div>
                    @endif
                    @endforeach
                </div>
                {{-- single article--}}
                @foreach($evens as $even)
                @if($loop->iteration % 2 == 0)
                    <div class="uk-inline">
                        <a href="{{ route('frontend.fetchByRegion',$even->slug) }}">
                            <img src="{{ asset($even->thumb) }}" alt="{{ $even->name }}">
                            <div class="uk-position-cover"></div>
                            <div class="uk-overlay uk-position-bottom uk-light">
                                <h3>{{$even->name}}</h3>
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
                            <h4 class="uk-margin-remove">USD {{$featured->price}}</h4>
                        </div>
                        <div class="uk-flex uk-flex-between">
                            <h4 class="uk-margin-remove">{{$featured->days}} Days</h4>
                            <a class="button-default" href="{{ route('frontend.tripDetail', $featured->slug) }}">Read More</a>
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
@endsection
@section('scripts')
<script src="{{ asset('js/sticky-nav.js') }}"></script>
@endsection