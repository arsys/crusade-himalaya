<section class="uk-container uk-margin-small-top uk-margin-large-bottom uk-visible@l" id="content-wrapper">
	<div class="uk-grid-small uk-grid-match uk-child-width-expand uk-grid" uk-grid="">
		<div class="left-img uk-width-medium@s uk-first-column uk-visible@l">

		</div>
		<div>
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom" id="overview">
				<h3 class="over"><span>Overview</span></h3>
				@include ('frontend.partials.product.content._overview')
			</div>
			<!-- itinerary start -->
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom " id="itinerary">
				<h3 class=""><span>3 Days Itinerary</span></h3>
				@include ('frontend.partials.product.content._itinerary')
			</div>
			<!-- itinerary end -->
			<!-- pricing start	 -->
			<div class="uk-card uk-card-default uk-card-body " id="price">
				<h3 class="uk-card-title "><span>Pricing & Availability</span></h3>
				 @include ('frontend.partials.product.content._price') 
			</div>
			<!-- pricing end -->
			<!-- review start -->
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom uk-margin-small-top" id="review">
				<h3 class=""><span>Review</span></h3> 
				 @include ('frontend.partials.product.content._review')  
			</div>
			<!-- 	review end -->

		</div>
	</div>
</section>