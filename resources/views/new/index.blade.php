@extends('layouts.new') @section('content')
_
<header class="header">
    <div class="hero-slider" tabindex="-1" uk-slideshow="animation: fade">

        <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300">
            <li class="slide-item">
                <img src="{{ asset('img/11.jpg') }}" alt="" uk-cover>
                <div class="slide-item--content  uk-position-center-left">
                    <h2 class="slide-item--content__heading uk-margin-remove ">Heading</h2>
                    <p class="slide-item--content__subheading uk-margin-remove uk-text-lead uk-text-uppercase">Lorem
                        ipsum dolor sit amet.</p>
                </div>
            </li>
            <li class="slide-item">
                <img src="{{ asset('img/2.jpg') }}" alt="" uHeadingk-cover>
                <div class="slide-item--content  uk-position-center-left">
                    <h2 class="slide-item--content__heading uk-margin-remove">Heading</h2>
                    <p class="slide-item--content__subheading uk-margin-remove uk-text-lead uk-text-uppercase">Lorem
                        ipsum dolor sit amet.</p>
                </div>
            </li>
            <li class="slide-item">
                <img src="{{ asset('img/3.jpg') }}" alt="" uk-cover>
                <div class="slide-item--content  uk-position-center-left">
                    <h2 class="slide-item--content__heading uk-margin-remove">Heading</h2>
                    <p class="slide-item--content__subheading uk-margin-remove uk-text-lead uk-text-uppercase">Lorem
                        ipsum dolor sit amet.</p>
                </div>
            </li>
            <li class="slide-item">
                <img src="{{ asset('img/4.jpg') }}" alt="" uk-cover>
                <div class="slide-item--content  uk-position-center-left">
                    <h2 class="slide-item--content__heading uk-margin-remove">Heading</h2>
                    <p class="slide-item--content__subheading uk-margin-remove uk-text-lead uk-text-uppercase">Lorem
                        ipsum dolor sit amet.</p>
                </div>
            </li>
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

                    <p><a href="#" class="read-more">READ MORE <span>&rarr;</span></a></p>

                </div>
            </div>
        </div>
    </div>
</section>

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
                <li class="sliderList--item ">
                    <div class="sliderPanel">
                        <img src="https://source.unsplash.com/320x480?flower" alt="">
                        <div class="sliderPanel--textHolder uk-position-cover">
                            <h3 class="uk-position-bottom">Bottom</h3>
                        </div>
                        <div class="sliderPanel--textHolder__hover">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">View all <span>&rarr;</span></a>
                        </div>
                    </div>
                </li>
                <li class="sliderList--item ">
                    <div class="sliderPanel">
                        <img src="https://source.unsplash.com/320x480?flower" alt="">
                        <div class="sliderPanel--textHolder uk-position-cover">
                            <h3 class="uk-position-bottom">Bottom</h3>
                        </div>
                        <div class="sliderPanel--textHolder__hover">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">View all <span>&rarr;</span></a>
                        </div>
                    </div>
                </li>
                <li class="sliderList--item ">
                    <div class="sliderPanel">
                        <img src="https://source.unsplash.com/320x480?flower" alt="">
                        <div class="sliderPanel--textHolder uk-position-cover">
                            <h3 class="uk-position-bottom ">Bottom</h3>
                        </div>
                        <div class="sliderPanel--textHolder__hover">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">View all <span>&rarr;</span></a>
                        </div>
                    </div>
                </li>
                <li class="sliderList--item ">
                    <div class="sliderPanel">
                        <img src="https://source.unsplash.com/320x480?flower" alt="">
                        <div class="sliderPanel--textHolder uk-position-cover">
                            <h3 class="uk-position-bottom">Bottom</h3>
                        </div>
                        <div class="sliderPanel--textHolder__hover">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">View all <span>&rarr;</span></a>
                        </div>
                    </div>
                </li>
                <li class="sliderList--item ">
                    <div class="sliderPanel">
                        <img src="https://source.unsplash.com/320x480?flower" alt="">
                        <div class="sliderPanel--textHolder uk-position-cover">
                            <h3 class="uk-position-bottom">Bottom</h3>
                        </div>
                        <div class="sliderPanel--textHolder__hover">
                            <h4>Title</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <a href="#">View all <span>&rarr;</span></a>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>

</section>

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
                <div class="uk-inline">
                    <img src="https://source.unsplash.com/800x400/?norway" alt="">
                    <div class="uk-position-cover"></div>
                    <div class="uk-overlay uk-position-bottom uk-dark">
                        <h3>Title</h3>
                    </div>
                </div>

                {{-- double article --}}
                <div class="uk-child-width-1-2 uk-grid-small " uk-grid>
                    <div class="uk-inline">
                        <img src="https://source.unsplash.com/800x400/?sweden" alt="">
                        <div class="uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom uk-dark">
                            <h3>Title</h3>
                        </div>
                    </div>


                    <div class="uk-inline">
                        <img src="https://source.unsplash.com/800x400/?denmark" alt="">
                        <div class="uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom uk-dark">
                            <h3>Title</h3>
                        </div>
                    </div>

                </div>
            </div>
            {{-- right --}}
            <div class="destinationRight">
                {{-- double article --}}
                <div class="uk-child-width-1-2 uk-grid-small " uk-grid>
                    <div class="uk-inline">
                        <img src="https://source.unsplash.com/800x400/?germany" alt="">
                        <div class="uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom uk-dark">
                            <h3>Title</h3>
                        </div>
                    </div>


                    <div class="uk-inline">
                        <img src="https://source.unsplash.com/800x400/?france" alt="">
                        <div class="uk-position-cover"></div>
                        <div class="uk-overlay uk-position-bottom uk-dark">
                            <h3>Title</h3>
                        </div>
                    </div>

                </div>
                {{-- single article--}}
                <div class="uk-inline">
                    <img src="https://source.unsplash.com/800x400/?czech" alt="">
                    <div class="uk-position-cover"></div>
                    <div class="uk-overlay uk-position-bottom uk-dark">
                        <h3>Title</h3>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

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
            @for ($i = 1; $i <= 6; $i++) <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="https://source.unsplash.com/1800x1200/?nepal" alt="">
                    </div>
                    <div class="tourPackage--detailWrapper">
                        <div class="uk-flex uk-flex-between">
                            <h4 class="uk-margin-remove">Media Top</h4>
                            <h4 class="uk-margin-remove">USD 1500</h4>
                        </div>
                        <div class="uk-flex uk-flex-between">
                            <h4 class="uk-margin-remove">15 Days</h4>
                            <button class="uk-button uk-button-default uk-button-small">Read More</button>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
        {{-- loop end --}}
    </div>

    </div> {{--container end --}}
</section>
@endsection
@section('scripts')
    <script src="{{ asset('js/sticky-nav.js') }}"></script>
@endsection