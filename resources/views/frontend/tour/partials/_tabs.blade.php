
<div class="uk-width-medium@s uk-first-column uk-visible@l" >

	<div class="uk-panel uk-text-center" uk-sticky="offset: 202" id="product-price-wrapper1">

		<div class="uk-flex uk-flex-column sticky-price" id="product-price">
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom text-color">
				<span class="top">
					{{ $tour->days }} Day(s)
				</span>
				<span class="middle uk-flex uk-flex-column ">
					<span class="middle-1">From USD</span>
                    <span class="middle-2">
                        <sup>$</sup>
                        @if (!empty($tour->budgetPrice))
                            {{$tour->budgetPrice}}
                        @else
                            {{ $tour->price }}
                        @endif
                    </span>
                    <span>per person</span>
				</span>
				@if($tour->departure->count() > 0)
				<span class="bottom uk-padding-remove-bottom  uk-flex  uk-flex-column" uk-scrollspy-nav="closest: a; scroll: true; offset: 120">
					<a href="#price" class=" uk-button-default uk-margin-remove uk-padding-remove-bottom" id="goto">Dates </a>
				</span>
				@endif
			</div>
			<div class="uk-card uk-card-default uk-card-body trip-details">
				<ul class="uk-list uk-list-divider text-color">
					<li>
						<div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
							<div class="uk-width-auto uk-first-column">
								<i class="fas fa-info"></i>
							</div>
							<div  uk-scrollspy-nav="closest: a; scroll: true; offset: 120">
								<a href="#enquiry" class="uk-link-text uk-link-reset" ><span>Quick Enquiry</span></a>
							</div>
						</div>
					</li>

					<li>
						<div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
							<div class="uk-width-auto uk-first-column">
								<i class="fas fa-envelope"></i>
							</div>
							<div>
								<a href="#modal-refer-friend" class="uk-link-text uk-link-reset" uk-toggle><span>Email a friend</span></a>
								@include('frontend.tour.partials.modal._refer')
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
								<a class="uk-link-text uk-link-reset" href="{{ route('trip.download',$tour->slug) }}" rel="nofollow">
									<span>Download Itinerary</span>
								</a>
							</div>
						</div>
					</li>
					@endif
				</ul>
			</div>
			{{-- sim card start --}}
	{{-- 		<div class="uk-card uk-card-body uk-card-default sim-wrapper  uk-padding-remove-top">
				<span>Ncell Sim Card</span>

			</div> --}}
			{{-- sim card end --}}
			{{-- Uno start --}}
	{{-- 		<div class="uk-card uk-card-body uk-card-default uno-wrapper uk-padding-remove-top">
				<span>uno offer</span>

			</div> --}}
			{{-- uno end --}}
		</div>
	</div>
</div>
<div>
	<div>
		<div class="uk-card uk-card-default uk-visible@l">
			<div class="uk-panel " id="tab-wrapper"  uk-sticky="offset: 0" >
				<ul uk-scrollspy-nav="closest: li; scroll: true; offset: 140" class="uk-nav uk-nav-default uk-nav-center tm-nav uk-nav-parent-icon  uk-flex  uk-flex-row text-color tab-ul" uk-nav>
					<li class="uk-active uk-width-1-5 tab-li"><a href="#overview">Overview</a></li>
					<li class="uk-width-1-5  tab-li"><a href="#include">Inclusion</a></li>
					@if($tour->itinerary->count() > 0)
					<li class="uk-width-1-5  tab-li"><a href="#itinerary">Itinerary</a></li>
					@endif
					@if($tour->departure->count() > 0)
					<li class="uk-width-1-5  tab-li"><a href="#price">Departures</a></li>
					@endif
					<li class="uk-width-1-5  tab-li"><a href="#gallery">Gallery</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>





