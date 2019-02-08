<div class="uk-alert-danger print-error-msg uk-alert" id="response-msg" style="display: none;">
	<ul class="uk-list">
	</ul>
</div>
<h3 >Quick Enquiry {{ $tour->title }}</h3>
<form action="{{ route('frontend-postEnquiry') }}" method="POST" id="quick-enquiry">
	<input type="hidden" id="tour_id" value="{{ $tour->id }}" name="tour_id">
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
		<button class="uk-button submit uk-width-1-1" type="submit">Send</button>
	</p>
</form>