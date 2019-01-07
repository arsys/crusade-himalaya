<div id="modal-quick-enquiry" uk-modal>
	<div class="uk-modal-dialog uk-modal-body">
		<div class="uk-alert-danger print-error-msg uk-alert" id="response-msg" style="display: none;">
			<ul class="uk-list">
			</ul>
		</div>
		<h2 class="uk-modal-title">Enquiry Form</h2>
		<form action="{{ route('frontend-postEnquiry') }}" method="POST" id="quick-enquiry">
			<input type="hidden" id="tour-id" value="1">
			<div class="uk-margin">
				<label class="uk-form-label" for="form-stacked-text">Full Name</label>
				<div class="uk-form-controls">  
					<input class="uk-input uk-form-width-large" type="text" placeholder="Full Name" id="fullName" name="fullName" >
				</div>
			</div>

			<div class="uk-margin">
				<label class="uk-form-label" for="form-stacked-text">Email</label>
				<div class="uk-form-controls">
					<input class="uk-input uk-form-width-large" type="email" placeholder="Email" id="email"  name="email">
				</div>
			</div>
			<div class="uk-margin">
				<label class="uk-form-label" for="form-stacked-text">Message</label>
				<div class="uk-form-controls">
					<textarea class="uk-textarea uk-form-width-large" rows="4"  placeholder="Some Message...." id="enquiryMessage" name="enquiryMessage"></textarea>
				</div>
			</div>
			<p class="uk-text-right">
				<button class="uk-modal-close-default" type="button" uk-close></button>
				<button class="uk-button uk-button-primary submit uk-width-1-1" type="submit">Send</button>
			</p>
		</form>

	</div>
</div>