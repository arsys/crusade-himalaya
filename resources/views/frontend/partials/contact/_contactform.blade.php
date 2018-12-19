<div class="uk-section uk-section-small uk-section-default">
	<div class="uk-container">

		<div class="uk-child-width-expand@s" uk-grid>
			<div class="uk-grid-item-match">
				<div class="">
					<h3 class="heading-secondary uk-text-center uk-margin-medium-bottom"><span>CONTACT US</span></h3>
					@include('frontend.partials._message')
					<form method="POST" action="{{ route('frontend-postContact') }}" data-parsley-validate>
						@csrf
						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Full Name</label>
							<div class="uk-form-controls">  
								<input class="uk-input uk-form-width-large" type="text" placeholder="Full Name" name="fullName" required="">
							</div>
						</div>

						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Email</label>
							<div class="uk-form-controls">
								<input class="uk-input uk-form-width-large" type="email" placeholder="Email" name="email" required="">
							</div>
						</div>
						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Subject</label>
							<div class="uk-form-controls">  
								<input class="uk-input uk-form-width-large" type="text" placeholder="Subject" name="subject" required="">
							</div>
						</div>
						<div class="uk-margin">
							<label class="uk-form-label" for="form-stacked-text">Message</label>
							<div class="uk-form-controls">
								<textarea class="uk-textarea uk-form-width-large" rows="4" required="" placeholder="Some Message...." name="contactMessage">								
								</textarea>
							</div>
						</div>
						<div class="uk-margin">
							<button class="uk-button  uk-button-medium btn send" type="Submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
			<div>
				<div class="contact-info">
					<div class="uk-flex uk-flex-column uk-width-1-1 contact-page">
						<div class="call"><span uk-icon="icon: receiver; ratio: 2"></span> 
							<span class="call-details">Call Us On<span uk-icon="chevron-right"></span></span>
						</div>
							<span class="call-meta">987654324</span>
							<span class="call-meta">or Chat Online</span>

						<div class="email"><i class="fas fa-address-card"></i></span>
							<span class="mail-details">Operational Office<span uk-icon="chevron-right"></span> </span>
						</div>
							<span class="mail-meta">Karmatara Residency</span>
							<span class="mail-meta">P.O. Box 20062 </span>
							<span class="mail-meta">Fax: 00977 - 1 -4316884</span>
							<span class="mail-meta">Kesharmahal</span>
							<span class="mail-meta">Kathmandu Nepal</span>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@section('scripts')
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js"></script>
@stop

