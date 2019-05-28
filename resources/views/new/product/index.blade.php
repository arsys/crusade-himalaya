@extends('layouts.new')
@section('content')
<section class="image-page-header" data-src="https://source.unsplash.com/1800x1200/?guitar" uk-img>
    <div class="page-title__wrapper">
        <div class="uk-position-large uk-position-center">
            <h1>Package Name</h1>
        </div>
        <div class="uk-position-large uk-position-bottom-right ">
            <ul class="uk-breadcrumb">
                <li><a href="" uk-icon="icon: home"></a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Region</a></li>
                <li class="uk-disabled"><span>Active</span></li>
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
                        <span class="priceHolder--day">15 Day(s)</span>
                        <span class="priceHolder--from">From USD</span>
                        <span class="priceHolder--price">$ 1590</span>
                        <a class="button-default" href="#">Dates</a>
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
                                        {{-- @include('frontend.tour.partials.modal._refer') --}}
                                    </div>
                                </div>
                            </li>

                            <li class="sideBar--list__item">
                                <div class="uk-child-width-expand" uk-grid>
                                    <div class="uk-width-auto">
                                        <i class="fas fa-tasks"></i>
                                    </div>
                                    <div>
                                        <a href="#" rel="nofollow">
                                            <span>Download Itinerary</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="uk-width-3-4@l">

                <ul uk-scrollspy-nav="closest: li; scroll: true; offset: 0;" class="uk-child-width-expand productTab"
                    uk-tab uk-sticky="offset:0" id="tab-wrapper">
                    <li><a href="#overview">Overview</a></li>
                    <li><a href="#inclusion">Inclusion</a></li>
                    <li><a href="#itinerary">Itinerary</a></li>
                    <li><a href="#departures">Depatures</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                </ul>

                <div id="overview" class="productContent">
                    <h3 class="productContent--title">Overview</h3>
                    @include('new.product.partials._overview-meta')                    
                </div>

                <div id="inclusion" class="productContent">
                    <h3 class="productContent--title">Includes & Excludes</h3>
                    <div class="inex-wrapper">
                        <ul class="uk-child-width-expand inex--type" uk-tab>
                            <li><a href="#">
                                    <h4>Luxury Style</h4>
                                </a></li>
                            <li><a href="#">
                                    <h4>Budget Style</h4>
                                </a></li>
                        </ul>

                        <ul class="uk-switcher inex--list" uk-switcher="animation: uk-animation-fade">
                            <li>
                                <h4>What's included ?</h4>
                                <ul class="includedList">
                                    <li class="includedList--item">
                                        <span uk-icon="check"></span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, architecto.
                                    </li>
                                    <li class="includedList--item">
                                        <span uk-icon="check"></span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, architecto.
                                    </li>
                                    <li class="includedList--item">
                                        <span uk-icon="check"></span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, architecto.
                                    </li>
                                </ul>
                                <h4>What's excluded ?</h4>
                                <ul class="excludedList">
                                    <li class="excludedList--item">
                                        <span uk-icon="close"></span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, architecto.
                                    </li>
                                    <li class="excludedList--item">
                                        <span uk-icon="close"></span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, architecto.
                                    </li>
                                    <li class="excludedList--item">
                                        <span uk-icon="close"></span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, architecto.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h4>What's included ?</h4>
                                <ul class="includedList">
                                    <li class="includedList--item">
                                        <span uk-icon="check"></span>
                                        Iure excepturi pariatur laboriosam error expedita provident autem in
                                        reprehenderit illum ex.
                                    </li>
                                    <li class="includedList--item">
                                        <span uk-icon="check"></span>
                                        Iure excepturi pariatur laboriosam error expedita provident autem in
                                        reprehenderit illum ex.
                                    </li>
                                    <li class="includedList--item">
                                        <span uk-icon="check"></span>
                                        Iure excepturi pariatur laboriosam error expedita provident autem in
                                        reprehenderit illum ex.
                                    </li>
                                </ul>
                                <h4>What's excluded ?</h4>
                                <ul class="excludedList">
                                    <li class="excludedList--item">
                                        <span uk-icon="close"></span>
                                        Iure excepturi pariatur laboriosam error expedita provident autem in
                                        reprehenderit illum ex.
                                    </li>
                                    <li class="excludedList--item">
                                        <span uk-icon="close"></span>
                                        Iure excepturi pariatur laboriosam error expedita provident autem in
                                        reprehenderit illum ex.
                                    </li>
                                    <li class="excludedList--item">
                                        <span uk-icon="close"></span>
                                        Iure excepturi pariatur laboriosam error expedita provident autem in
                                        reprehenderit illum ex.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="itinerary" class="productContent">
                    <h3 class="productContent--title">Detailed Itinerary (15 Days)</h3>
                    <div class="itinerary-wrapper">
                        <ul class=" itinerary-list" uk-accordion="multiple: true">
                            @for($i=1;$i<=5;$i++) <li class="itinerary-list-item">

                                <a class="uk-accordion-title  itinerary-item-link" href="#">
                                    <span class="itinerary-item-span"></span>Day {{ $i }} :
                                    Lorem ipsum dolor sit amet.
                                </a>


                                <div class="uk-accordion-content  itinerary-item-content">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reprehenderit
                                    est alias magni obcaecati atque veritatis aperiam saepe, dolorem incidunt?
                                </div>
                                </li>
                                @endfor
                        </ul>
                    </div>
                </div>

                <div id="departures" class="productContent">
                    <div uk-grid class="uk-child-width-1-4@m uk-child-width-1-1@s  searchWrapper">
                        <div>
                            <p class="text-color">Please Check Available Dates for The Year:</p>
                            <input type="hidden" value="1" id="tour-id">
                        </div>
                        <div>
                            <select class="uk-select" id="travel-year">Select year
                                <option value="" disabled selected>Select year</option>
                                @for($i= date('Y'); $i <= date('Y')+2; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                        </div>
                        <div>
                            <select class="uk-select text-color" id="travel-month">Select Month
                                <option value="" disabled selected>Select Month</option>
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Apr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Aug</option>
                                <option value="9">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>
                        </div>
                        <div class="search-wrapper">
                            <a href="#" class="button-default" id="find-dates">Search</a>
                        </div>
                    </div>
                    <div class="departureWrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <div class="uk-position-bottom-center">
                                <span uk-spinner="ratio: 3" class="ajaxloader" style="display: none"></span>
                            </div>

                            <tbody class="ajaxloadmoredeparture table-wrap">
                                {{-- @foreach($departures as $departure)
                                <tr class="table-row">
                                    <td class="text-color">{{ date("jS M, Y", strtotime($departure->start))}}</td>
                                <td class="text-color">{{ date("jS M, Y", strtotime($departure->end))}}</td>
                                <td class="text-color">{{$departure->slot}} space left</td>
                                <td class="text-color">
                                    <form action="{{ route('trip.stepOne',$tour->slug) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="date" value="{{ $departure->start }}">
                                        <button class="uk-button btn">Join</button>
                                    </form>
                                </td>
                                </tr>
                                @endforeach --}}

                                <tr>
                                    <td>14th Aug, 2019</td>
                                    <td>14th Aug, 2019</td>
                                    <td>7 Space</td>
                                    <td>
                                        <a href="http://" class="button-primary">Button</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="#enquiry" class="productContent">
                    @include('new.product.partials._form')
                </div>
                <div id="gallery" class="productContent">
                    <h3 class="productContent--title">Gallery</h3>
                    <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
                        <div>
                            <a class="uk-inline" href="https://source.unsplash.com/1800x1200/?vintage"
                                data-caption="Caption 1">
                                <img src="https://source.unsplash.com/1800x1200/?vintage" alt="">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="https://source.unsplash.com/1800x1200/?vintage"
                                data-caption="Caption 2">
                                <img src="https://source.unsplash.com/1800x1200/?vintage" alt="">
                            </a>
                        </div>
                        <div>
                            <a class="uk-inline" href="https://source.unsplash.com/1800x1200/?vintage"
                                data-caption="Caption 3">
                                <img src="https://source.unsplash.com/1800x1200/?vintage" alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section-dashed section-dashed--mobile">
    <div class="container uk-hidden@l uk-padding">
        <div class="packageMeta-wrapper--sm">
            <div uk-grid>
                <div class="uk-width-1-2">
                    <div class="packageMeta-wrapper--sm__day">
                        <span class="uk-align-center">15 Day(s)</span>
                    </div>
                    <div class="packageMeta-wrapper--sm__price">
                        <span class="uk-align-center">
                            From USD 1500
                        </span>
                    </div>
                </div>
                <div class="uk-width-1-2 withborder">
                    <ul class="actionlist">
                        <li>
                            <div class="uk-child-width-expand actionWrapper" uk-grid>
                                <div class="actionWrapper--icon">
                                    <i class="fas fa-info"></i>
                                </div>
                                <div class="actionWrapper--action">
                                    <a href="#mob-enquiry" >Quick Enquiry</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-child-width-expand actionWrapper" uk-grid>
                                <div class="actionWrapper--icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="actionWrapper--action">
                                    <a href="#modal-refer-friend"  uk-toggle>Email a
                                        friend</a>
                                </div>
                            </div>
                        </li>
                        {{-- @if($tour->itinerary->count() > 0) --}}
                        <li>
                            <div class="uk-child-width-expand actionWrapper" uk-grid>
                                <div class="actionWrapper--icon">
                                    <i class="fas fa-tasks"></i>
                                </div>
                                <div class="actionWrapper--action">
                                    <a  href="#" rel="nofollow">Download Itinary</a>
                                </div>
                            </div>
                        </li>
                        {{-- @endif --}}
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
                    <a class="uk-accordion-title" href="#">Item 2</a>
                    <div class="uk-accordion-content">
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
                    </div>
                </li>
                <li class="mobileContent-list--item">
                    <a class="uk-accordion-title" href="#">Item 3</a>
                    <div class="uk-accordion-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
                    </div>
                </li>
        </ul>
    </div>
</section>

<section class="section-dashed" id="similarTours">
    <div class="container">
        <div class="titleMinimal-wrapper uk-text-center">
            <h3 class="titleMinimal">Similar Tours</h3>
            <div class="dividerMinimal"></div>
        </div>
        <div class="uk-child-width-1-2@m width-1-4@l uk-child-width-1-1 uk-grid tourPacakge-wrapper" uk-grid>
            {{-- loop start --}}
            @for ($i = 1; $i <= 3; $i++) <div>
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
<script src="{{ asset('js/new-product.js') }}"></script>
@endsection