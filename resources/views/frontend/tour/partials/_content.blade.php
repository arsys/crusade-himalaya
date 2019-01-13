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
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-top" id="quick-enquiry" >
			<h3 >Enquiry Form</h3>
				<form action="{{ route('frontend-postEnquiry') }}" method="POST" >
					<input type="hidden" id="tour-id" value="1">
					<div class="uk-margin">
						<label class="uk-form-label" for="form-stacked-text">Full Name</label>
						<div class="uk-form-controls">  
							<input class="uk-input uk-form-width-xlarge" type="text" placeholder="Full Name" id="fullName" name="fullName" >
						</div>
					</div>

					<div class="uk-margin">
						<label class="uk-form-label" for="form-stacked-text">Email</label>
						<div class="uk-form-controls">
							<input class="uk-input uk-form-width-xlarge" type="email" placeholder="Email" id="email"  name="email">
						</div>
					</div>
					<div class="uk-margin">
						<label class="uk-form-label" for="form-stacked-text">Message</label>
						<div class="uk-form-controls">
							<textarea class="uk-textarea uk-form-width-xlarge" rows="4"  placeholder="Some Message...." id="enquiryMessage" name="enquiryMessage"></textarea>
						</div>
					</div>
					<p class="uk-text-right">
						<button class="uk-modal-close-default" type="button" uk-close></button>
						<button class="uk-button uk-button-primary submit uk-width-1-1" type="submit">Send</button>
					</p>
				</form>
			</div>
			<!-- review start -->
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-top" id="gallery">
				<h3 class=""><span>Gallery</span></h3> 
				 @include ('frontend.tour.partials._gallery')  
			</div>
			<!-- 	review end -->

		</div>
	</div>
</section>