@section('mtitle'){!! $tour->mtitle !!}@stop
@section('title'){!! ucfirst($tour->title) !!} | {{$tour->days}} @if($tour->days > 1) Days @else Day @endif
@stop
@section('description'){!! $tour->description !!}@stop
@section('ogImage'){{ asset($tour->image->thumb) }}@stop
@section('twitter')
<meta name="twitter:data1" content="${{ $tour->price }}">
<meta name="twitter:label1" content="Price">
@if (!empty( $tour->difficulty->name))
<meta name="twitter:data2" content="{{ $tour->difficulty->name }}">
<meta name="twitter:label2" content="Difficulty">
@endif

@stop
@section('og')
<meta property="og:price:amount" content="{{ $tour->price }}" />
<meta property="og:price:currency" content="USD" />
@stop
@extends('layouts.new')
@section('content')
<section class="image-page-header" uk-height-viewport="offset-top: true; offset-bottom: 50px"
    data-src="{{ asset($tour->image->banner) }}" uk-img>
    <div class="page-title__wrapper">
        <div class="uk-position-large uk-position-center">
            <h1>{{$tour->title}}</h1>
        </div>
        <div class="uk-position-large uk-position-bottom-right ">
            <ul class="uk-breadcrumb">
                <li><a href="" uk-icon="icon: home"></a></li>
                <li><a href="{{ route('frontend.fetchByCategory',$tour->category->slug) }}">{{ $tour->category->name }}</a></li>
				@if(!is_null($tour->region))
				<li>
					<a href="{{ route('frontend.region2package',[$tour->category->slug,$tour->region->slug]) }}">{{ $tour->region->name }}</a>
				</li>
				@endif					
                <li class="uk-disabled"><a href="{{url()->current()}}">{{ $tour->title }}</a></li>
            </ul>
        </div>
    </div>
</section>

<section class="section-white uk-padding-small  uk-visible@l">
    <div class="container">
        {{-- //Large --}}
        <div class="uk-grid-small" uk-grid>

            <div class="uk-width-1-4 ">
                <div class="stickyWrapper" uk-sticky="offset: 0;" id="datePrice--wrapper">
                    <div class="priceHolder">
                        <span class="priceHolder--day">{{ $tour->days }} Day(s)</span>
                        <span class="priceHolder--from">From USD</span>
                        <span class="priceHolder--price">$ {{ $tour->price }} </span>
                        <span class="priceHolder--pax">per pax</span>
                        @if($tour->itinerary->count() > 0)
                        <span class="bottom uk-padding-remove-bottom  uk-flex  uk-flex-column"
                            uk-scrollspy-nav="closest: a; scroll: true; offset: 120">
                            <a class="button-default" href="#departures">Dates</a>
                        </span>
                        @endif

                    </div>
                    <div class="sideBar-action">
                        <ul class="sideBar--list">
                            <li class="sideBar--list__item">
                                <div class="uk-child-width-expand " uk-grid>
                                    <div class="uk-width-auto">
                                        <i class="fas fa-info"></i>
                                    </div>
                                    <div uk-scrollspy-nav="closest: a; scroll: true; offset: 120">
                                        <a href="#enquiry"><span>Quick
                                                Enquiry</span></a>
                                    </div>
                                </div>
                            </li>

                            <li class="sideBar--list__item">
                                <div class="uk-child-width-expand" uk-grid>
                                    <div class="uk-width-auto">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div>
                                        <a href="#modal-refer-friend" uk-toggle><span>Email a friend</span></a>
                                        @include('new.product.partials._refer')
                                    </div>
                                </div>
                            </li>
                            @if($tour->itinerary->count() > 0)
                            <li class="sideBar--list__item">
                                <div class="uk-child-width-expand" uk-grid>
                                    <div class="uk-width-auto">
                                        <i class="fas fa-tasks"></i>
                                    </div>
                                    <div>
                                        <a href="{{ route('frontend.download', $tour->slug) }}" rel="nofollow">
                                            <span>Download Itinerary</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>


            <div class="uk-width-3-4@l">

                <ul uk-scrollspy-nav="closest: li; scroll: true; offset: 0;" class="uk-child-width-expand productTab"
                    uk-tab uk-sticky="offset:0" id="tab-wrapper">
                    <li><a href="#overview">Overview</a></li>
                    <li><a href="#inclusion">Inclusion</a></li>
                    @if($tour->itinerary->count() > 0)  
                    <li><a href="#itinerary">Itinerary</a></li>
                    @endif
                    @if($tour->departure->count() > 0)
                    <li><a href="#departures">Depatures</a></li>                    
                    @endif                                        
                    <li><a href="#gallery">Gallery</a></li>
                </ul>

                <div id="overview" class="productContent">
                    <h3 class="productContent--title">Overview</h3>
                    @include('new.product.partials._overview-meta')
                </div>

                <div id="inclusion" class="productContent">
                    <h3 class="productContent--title">Includes & Excludes</h3>
                    @include('new.product.partials._inexSingle')
                </div>
                @if($tour->itinerary->count() > 0)                
                <div id="itinerary" class="productContent">
                    <h3 class="productContent--title">Detailed Itinerary (15 Days)</h3>
                    @include('new.product.partials._itinerary')
                </div>
                @endif

                @if($tour->departure->count() > 0)
                <div id="departures" class="productContent">
                        @include('new.product.partials._departures')
                </div>                
                @endif

                <div id="enquiry" class="productContent">
                    @include('new.product.partials._form')
                </div>
                <div id="gallery" class="productContent">
                    <h3 class="productContent--title">Gallery</h3>
                    @include('new.product.partials._gallery')
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section-dashed section-dashed--mobile  uk-hidden@l">
    <div class="container uk-padding">
        <div class="packageMeta-wrapper--sm">
            <div uk-grid>
                <div class="uk-width-1-2">
                    <div class="packageMeta-wrapper--sm__day">
                        <span class="uk-align-center">{{$tour->days}} Day(s)</span>
                    </div>
                    <div class="packageMeta-wrapper--sm__price">
                        <span class="uk-align-center">
                            From USD {{$tour->price}}
                        </span>                        
                    </div>
                    <div>
                        <span class="priceHolder--pax">per pax</span>
                    </div>
                </div>

                <div class="uk-width-1-2 withborder">
                    <ul class="actionlist">
                        <li>
                            <div class="uk-child-width-expand actionWrapper" uk-grid>
                                <div class="actionWrapper--icon">
                                    <i class="fas fa-info"></i>
                                </div>
                                <div class="actionWrapper--action" uk-scrollspy-nav="closest: a; scroll: true; offset:0" >
                                    <a href="#mob-enquiry">Quick Enquiry</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-child-width-expand actionWrapper" uk-grid>
                                <div class="actionWrapper--icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="actionWrapper--action">
                                    <a href="#modal-refer-friend" uk-toggle>Email a
                                        friend</a>
                                </div>
                            </div>
                        </li>
                        @if($tour->itinerary->count() > 0)
                        <li>
                            <div class="uk-child-width-expand actionWrapper" uk-grid>
                                <div class="actionWrapper--icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <div class="actionWrapper--action">
                                    <a href="{{ route('frontend.download', $tour->slug) }}" rel="nofollow">Download Itinary</a>
                                </div>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        <ul uk-accordion="multiple: true" class="mobileContent-list">
            <li class="mobileContent-list--item">
                <a class="uk-accordion-title" href="#">Overview</a>
                <div class="uk-accordion-content">
                    @include('new.product.partials._overview-meta')
                </div>
            </li>
            <li class="mobileContent-list--item">
                <a class="uk-accordion-title" href="#">Inclusion</a>
                <div class="uk-accordion-content">
                    @include('new.product.partials._inexSingle')
                </div>
            </li>
            <li class="mobileContent-list--item">
                <a class="uk-accordion-title" href="#">Itinerary</a>
                <div class="uk-accordion-content">
                    @include('new.product.partials._itinerary')
                </div>
            </li>
            <li class="mobileContent-list--item">
                <a class="uk-accordion-title" href="#">Departures</a>
                <div class="uk-accordion-content">
                    @include('new.product.partials._departures')
                </div>
            </li>
            <li class="mobileContent-list--item">
                <a class="uk-accordion-title" href="#">Gallery</a>
                <div class="uk-accordion-content">
                    @include('new.product.partials._gallery')
                </div>
            </li>
        </ul>

        <div class="uk-card uk-card-body uk-card-default">
            @include('new.product.partials._form')
        </div>
    </div>
</section>

<section class="section-dashed" id="similarTours">
    <div class="container">
        <div class="titleMinimal-wrapper uk-text-center">
            <h3 class="titleMinimal">Similar Tours</h3>
            <div class="dividerMinimal"></div>
        </div>
        <div class="uk-child-width-1-3@m width-1-4@l uk-child-width-1-1 uk-grid tourPacakge-wrapper" uk-grid>
            {{-- loop start --}}
            @foreach ($similars as $similar)
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="{{ asset($similar->image->thumb) }}" alt="{{ $similar->title }}">
                    </div>
                    <div class="tourPackage--detailWrapper">
                        <div class="uk-flex uk-flex-between">
                            <h4 class="uk-margin-remove">{{ $similar->title }}</h4>
                            <h4 class="uk-margin-remove">USD {{ $similar->price }}</h4>
                        </div>
                        <div class="uk-flex uk-flex-between">
                            <h4 class="uk-margin-remove">{{ $similar->days }} Days</h4>
                            <a class="button-default" href="{{ route('frontend.tripDetail', $similar->slug) }}">Find Out More</a>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
        {{-- loop end --}}
    </div>

    </div> {{--container end --}}
</section>
@endsection
@section('scripts')
<script src="{{ asset('js/new-product.js') }}"></script>
@endsection