@section('mtitle')
Who We Are | {{config('app.name')}}
@stop
@section('title')
Who We Are | {{config('app.name')}}
@stop
@section('description')
Nepal isn't a destination, it is an experience, an experience beyond the ordinary.
@stop
@extends('layouts.new')
@section('content')
<section class="image-page-header " uk-height-viewport="offset-top: true; offset-bottom: 50px"
    data-src="https://source.unsplash.com/1800x1200/?guitar" uk-img>
    <div class="page-title__wrapper">

        <div class="uk-position-center-left uk-position-large pageDescription-holder">
            <h1 class="pageTitle">Who We Are</h1>
            <p class="pageDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, aut. At,
                possimus! Sapiente fugit animi rerum, molestiae laudantium beatae voluptate.</p>
        </div>
        <div class="uk-position-large uk-position-bottom-right ">
            <ul class="uk-breadcrumb">
                <li><a href="" uk-icon="icon: home"></a></li>
                <li class="uk-disabled"><a href="{{ url()->current() }}">Who We Are</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="section-white uk-visible@l">
    <div class="container">
        <div uk-grid class="uk-grid-small uk-visible@l ">
            <div class="uk-width-1-4">
                <div class="aboutSidebar-wrapper">
                    <div class="uk-panel" uk-sticky="offset:80">
                        <ul uk-scrollspy-nav="closest: li; scroll: true; offset: 130" class="aboutSidebar-list" uk-nav>
                            <li class="aboutSidebar-list--item"><a href="#first">Why Nepal</a></li>
                            <li class="aboutSidebar-list--item"><a href="#second">Why Crusade Himalaya</a></li>
                            <li class="aboutSidebar-list--item"><a href="#third">How We Work</a></li>
                            <li class="aboutSidebar-list--item"><a href="#fourth">What Sets Us Apart</a></li>
                            <li class="aboutSidebar-list--item"><a href="#fifth">What is our mission</a></li>
                            <li class="aboutSidebar-list--item"><a href="#sixth">Meet The Team</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-width-3-4">

                <div class="aboutContent-wrapper" id="first">
                    <h3 class="aboutContent-title">Why Nepal ?</h3>
                    <p>Nepal as a destination often surpasses a visitor&#39;s expectations &ndash; the lush green plains
                        to the world&#39;s tallest mountain, &nbsp;dense jungles to arid valleys, glacial lakes to
                        raging rivers, diverse culture and their lives, to experience Nepal is one of the most
                        exhilarating experience one can indulge in. &nbsp;&nbsp;</p>
                    <p>Although constituting &nbsp;a reasonably finite geographical area, the experiences one can
                        indulge in this nation are infinite. Paradise like landscapes, pristine peaks, a day of solitude
                        and yet the next day with adventure, the intertwining of history and modernity &ndash; these are
                        only some of the facets of Nepal. To truly understand and fully comprehend the vastness of
                        Nepal, one has to visit the nation.</p>
                </div>

                <div class="aboutContent-wrapper" id="second">
                    <h3 class="aboutContent-title">Why Crusade Himalaya</h3>

                    <p>Crusade Himalaya is a unique and independent travel partner; we are a boutique travel
                        studio who wish to offer you, our Atithis (revered guests), enriching and fulfilling
                        experience of their Nepal visit. We wish to Empower, Educate, and Encourage you to have
                        real-life experiences as you set out to discover the timeless wonders of Nepal.</p>
                </div>

                <div class="aboutContent-wrapper" id="third">
                    <h3 class="aboutContent-title">How We Work</h3>

                    <p>At Crusade Himalaya, we offer highly personalized travel plans and arrangements to ensure
                        your satisfaction. </p>
                    <p> Putting comfort and pleasure above anything else, we wish to earn your smiles. From the
                        moment you land in Nepal, till the time we bid our goodbyes, the team of Crusade
                        Himalaya will continuously strive to ensure your experience is highly memorable.</p>
                    <p><strong>Our team will be your perfect travel friend;<br />
                            a knowledgeable guide when you wonder the timeless alleys of the Durbar
                            Square,<br />
                            a trusted friend when you trek the heavenly trails leading to the Himalayas,<br />
                            a perfect organizer who will plan your trip as per your wish,<br />
                            and a hospitable friend who will ensure your comfort during your entire
                            stay.</strong></p>
                </div>

                <div class="aboutContent-wrapper" id="fourth">
                    <h3 class="aboutContent-title">What Sets Us Apart</h3>
                    <p>Besides <strong>&#39;knowledge infused with deep passion for meaningful
                            travel&#39;</strong>, what sets Crusade Himalayas apart is their unique working
                        style. We are an independent travel partner, and will therefore organize your trip as
                        per your expectations, with our recommendations.</p>

                    <p>At Crusade Himalayas, we <strong>give the power of choice to you</strong>. You decide
                        where you want to go, what you want to see, how you want to get there, we are simply
                        your travel friends.</p>
                </div>

                <div class="aboutContent-wrapper" id="fifth">
                    <h3 class="aboutContent-title">What is our mission</h3>
                    <p>Our mission is simple, it is <strong>to make you happy</strong>. To do so, we will take
                        you across many of the delights Nepal has to offer, introduce you to different cultures,
                        and all the while ensuring your comfort and satisfaction.</p>

                    <p><strong>Your adventure awaits you! </strong><br />
                        Get in touch with us, and plan your perfect holiday &ndash; an unforgettable holiday
                        filled with<br />
                        <strong>adventure, excitement, and memories.</strong></p>
                    <p><strong>Our Three E&#39;s Explained:</strong></p>

                    <ul>
                        <li><strong>Empower:</strong> Empower the traveler to make their own decisions related
                            to their travel.</li>
                        <li><strong>Educate:</strong> Our website also offers important information concerning
                            travelling in Nepal. One can simply read away, and visit Nepal upon their own. You
                            may also address your questions regarding Nepal to us.</li>
                        <li><strong>Encourage</strong>: To travel is a beautiful thing, it broadens one&#39;s
                            horizons, at the same time makes them humble. Therefore, we encourage all to travel.
                        </li>
                    </ul>

                    <p>&nbsp;</p>
                    <p>Crusade Himalaya is an initiative of Karmatara adventure Pvt Ltd- a government registered
                        adventure travel company holding a substantial permit to operate & organize tours &
                        trekking in Nepal.</p>
                    <p><strong>Karamtara adventure is licensed with tourism industry department, the ministry of
                            tourism & civil aviation of Nepal.</strong>
                    </p>
                </div>

                <div class="aboutContent-wrapper" id="sixth">
                    @include('new.partials._team')
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-dashed uk-hidden@l aboutMobile-wrapper">
    <div class="container ">
        <ul class="aboutMobile-list" uk-accordion>
            <!--Why Nepal? start-->
            <li class="aboutMobile-list--item">
                <a class="uk-accordion-title" href="#item1">Why Nepal</a>
                <div class="uk-accordion-content">
                    <p>Nepal as a destination often surpasses a visitor&#39;s expectations &ndash; the lush green plains
                        to the world&#39;s tallest mountain, &nbsp;dense jungles to arid valleys, glacial lakes to
                        raging rivers, diverse culture and their lives, to experience Nepal is one of the most
                        exhilarating experience one can indulge in. &nbsp;&nbsp;</p>
                    <p>Although constituting &nbsp;a reasonably finite geographical area, the experiences one can
                        indulge in this nation are infinite. Paradise like landscapes, pristine peaks, a day of solitude
                        and yet the next day with adventure, the intertwining of history and modernity &ndash; these are
                        only some of the facets of Nepal. To truly understand and fully comprehend the vastness of
                        Nepal, one has to visit the nation.</p>
                </div>
            </li>
            <!--Why Nepal? end-->
            <li class="aboutMobile-list--item">
                <a class="uk-accordion-title" href="#">Why Crusade Himalaya</a>
                <div class="uk-accordion-content">
                    <p>Besides <strong>&#39;knowledge infused with deep passion for meaningful travel&#39;</strong>,
                        what sets Crusade Himalayas apart is their unique working style. We are an independent travel
                        partner, and will therefore organize your trip as per your expectations, with our
                        recommendations.</p>

                    <p>At Crusade Himalayas, we <strong>give the power of choice to you</strong>. You decide where you
                        want to go, what you want to see, how you want to get there, we are simply your travel friends.
                    </p>
                </div>
            </li>
            <!--How we work? start-->
            <li class="aboutMobile-list--item">
                <a class="uk-accordion-title" href="#">How we work</a>
                <div class="uk-accordion-content">
                    <p>At Crusade Himalaya, we offer highly personalized travel plans and arrangements to ensure your
                        satisfaction. </p>
                    <p> Putting comfort and pleasure above anything else, we wish to earn your smiles. From the moment
                        you land in Nepal, till the time we bid our goodbyes, the team of Crusade Himalaya will
                        continuously strive to ensure your experience is highly memorable.</p>
                    <p><strong>Our team will be your perfect travel friend;<br />
                            a knowledgeable guide when you wonder the timeless alleys of the Durbar Square,<br />
                            a trusted friend when you trek the heavenly trails leading to the Himalayas,<br />
                            a perfect organizer who will plan your trip as per your wish,<br />
                            and a hospitable friend who will ensure your comfort during your entire stay.</strong></p>

                    <p>&nbsp;</p>
                </div>
            </li>
            <!--How we work? end-->
            <!--What makes Crusade Himalaya differentstart-->
            <li class="aboutMobile-list--item">
                <a class="uk-accordion-title" href="#">What makes Crusade Himalaya different</a>
                <div class="uk-accordion-content">
                    <p>Besides <strong>&#39;knowledge infused with deep passion for meaningful travel&#39;</strong>,
                        what sets Crusade Himalayas apart is their unique working style. We are an independent travel
                        partner, and will therefore organize your trip as per your expectations, with our
                        recommendations.</p>

                    <p>At Crusade Himalayas, we <strong>give the power of choice to you</strong>. You decide where you
                        want to go, what you want to see, how you want to get there, we are simply your travel friends.
                    </p>
                </div>
            </li>
            <!--What makes Crusade Himalaya differentend-->
            <!--What is our mission start-->
            <li class="aboutMobile-list--item">
                <a class="uk-accordion-title" href="#">What is our mission</a>
                <div class="uk-accordion-content">
                    <p>Our mission is simple, it is <strong>to make you happy</strong>. To do so, we will take you
                        across many of the delights Nepal has to offer, introduce you to different cultures, and all the
                        while ensuring your comfort and satisfaction.</p>

                    <p><strong>Your adventure awaits you! </strong><br />
                        Get in touch with us, and plan your perfect holiday &ndash; an unforgettable holiday filled
                        with<br />
                        <strong>adventure, excitement, and memories.</strong></p>
                    <p><strong>Our Three E&#39;s Explained:</strong></p>

                    <ul>
                        <li><strong>Empower:</strong> Empower the traveler to make their own decisions related to their
                            travel.</li>
                        <li><strong>Educate:</strong> Our website also offers important information concerning
                            travelling in Nepal. One can simply read away, and visit Nepal upon their own. You may also
                            address your questions regarding Nepal to us.</li>
                        <li><strong>Encourage</strong>: To travel is a beautiful thing, it broadens one&#39;s horizons,
                            at the same time makes them humble. Therefore, we encourage all to travel.</li>
                    </ul>
                    <p>Crusade Himalaya is an initiative of Karmatara adventure Pvt Ltd- a government registered
                        adventure travel company holding a substantial permit to operate & organize tours & trekking in
                        Nepal.</p>
                    <p><strong>Karamtara adventure is licensed with tourism industry department, the ministry of tourism
                            & civil aviation of Nepal.</strong>
                    </p>
                </div>
            </li>
            <!--What is our mission end-->
            <!--  team start -->
            <li class="aboutMobile-list--item ">
                <a class="uk-accordion-title" href="#">Meet Our Team</a>
                <div class="uk-accordion-content">
                    @include('new.partials._team')
                </div>
            </li>
            <!--    team end -->

        </ul>
    </div>
</section>
@stop