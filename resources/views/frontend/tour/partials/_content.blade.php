<section class="uk-container uk-margin-small-top uk-margin-large-bottom uk-visible@l" id="content-wrapper">
	<div class="uk-grid-small uk-grid-match uk-child-width-expand uk-grid" uk-grid="">
		<div class="left-img uk-width-medium@s uk-first-column uk-visible@l">

		</div>
		<div>
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom" id="overview">
				<h3 class="over"><span>Overview</span></h3>
				@include ('frontend.tour.partials._overview')
			</div>
			<!-- itinerary start -->
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom " id="itinerary">
				<h3 class=""><span>Detailed Itinerary ({{ $tour->days }} Days)</span></h3>
				@include ('frontend.tour.partials._itinerary')
			</div>
			<!-- itinerary end -->
			<!-- pricing start	 -->
			<div class="uk-card uk-card-default uk-card-body " id="price">
				<h3 class="uk-card-title "><span>Pricing & Availability</span></h3>
				 @include ('frontend.tour.partials._price') 
			</div>
			<!-- pricing end -->
			{{-- enquiry start --}}
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-top" id="enquiry" > 
				@include('frontend.tour.partials.modal._enquiry')
			</div>
			{{-- enquiry end --}}
			<!-- review start -->
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-top" id="gallery">
				<h3 class=""><span>Gallery</span></h3> 
				 @include ('frontend.tour.partials._gallery')  
			</div>
			<!-- 	review end -->

		</div>
	</div>
</section>