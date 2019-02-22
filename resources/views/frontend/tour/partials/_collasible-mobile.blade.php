<div class="uk-container uk-hidden@l uk-padding">
    <div class="uk-card uk-card-default  uk-card-body ">
        <div class="uk-text-center" uk-grid>
            <div class="uk-width-1-2">
                {{--
                <div class="mobile-days uk-flex uk-flex-row">
                    <span class="mobile-count uk-align-center">{{ $tour->days }} Days</span>
                </div>
                <div class="mobile-duration uk-flex uk-flex-row ">
                    <span class="price-details  uk-align-center">USD <sup>$</sup>{{ $tour->price }}</span>
                </div> --}}
                <div class="uk-flex uk-flex-row">
                    <span class="uk-align-center">{{ $tour->days }} Days</span>
                </div>
                <div class="uk-flex uk-flex-row">
                    <span class="uk-align-center">USD <sup>$</sup>{{ $tour->price }}</span>
                </div>
                <div class="uk-flex uk-flex-row">
                    <span class="uk-align-center">per person</span>
                </div>
            </div>
            <div class="uk-width-1-2 price-divide">
                <ul class="uk-list uk-list-divider">
                    <li>
                        <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-auto uk-first-column">
                                <i class="fas fa-info"></i>
                            </div>
                            <div {{-- uk-scrollspy-nav="closest: a; scroll: true; offset: 40" uk-nav --}}>
                                <a href="#mob-enquiry" class="uk-link-text uk-link-reset">Quick Enquiry</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-auto uk-first-column">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <a href="#modal-refer-friend" class="uk-link-text uk-link-reset" uk-toggle>Email a friend</a>
                            </div>
                        </div>
                    </li>
                    @if($tour->itinerary->count() > 0)
                    <li>
                        <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-auto uk-first-column">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div>
                                <a class="uk-link-text uk-link-reset" href="{{ route('trip.download', $tour->slug) }}" rel="nofollow">Download Itinary</a>
                            </div>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="uk-container uk-padding-large uk-hidden@l">
    <ul uk-accordion="multiple: true">
        <li class=" uk-box-shadow-small uk-padding uk-background-default">
            <a class="uk-accordion-title" href="#">Overview</a>
            <div class="uk-accordion-content">
    @include ('frontend.tour.partials._overview')
            </div>
        </li>
        <li class="uk-box-shadow-small uk-padding uk-background-default ">
            <a class="uk-accordion-title" href="#">Inclusion</a>
            <div class="uk-accordion-content">
    @include ('frontend.tour.partials._include')
            </div>
        </li>
        @if($tour->itinerary->count() > 0)
        <li class="uk-box-shadow-small uk-padding uk-background-default">
            <a class="uk-accordion-title" href="#">Itinerary</a>
            <div class="uk-accordion-content">
    @include ('frontend.tour.partials._itinerary')
            </div>
        </li>
        @endif @if($tour->departure->count() > 0)
        <li class="uk-box-shadow-small uk-padding uk-background-default">
            <a class="uk-accordion-title" href="#">Tour Dispatch</a>
            <div class="uk-accordion-content">
    @include ('frontend.tour.partials._price-mobile')
            </div>
        </li>
        @endif
        <li class="uk-box-shadow-small uk-padding uk-background-default">
            <a class="uk-accordion-title" href="#">Gallery</a>
            <div class="uk-accordion-content">
    @include ('frontend.tour.partials._gallery')
            </div>
        </li>
    </ul>
</div>
<div class="uk-card uk-card-default uk-card-body uk-margin-small-top  uk-hidden@l" id="mob-enquiry">
    @include('frontend.tour.partials.modal._enquiry-mob')
</div>
