<div class="uk-section uk-section-small uk-section-default">
	<div class="uk-container">

		<div class="uk-child-width-expand@s" uk-grid>
			<div class="uk-grid-item-match">
				<div class="">
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
							<span class="call-meta">{{ $setting->mobile }}</span>
							<span class="call-meta">or Chat Online <i class="fab fa-whatsapp"></i>
							</span>

						<div class="email"><i class="fas fa-map-marked-alt"></i></span>
							<span class="mail-details">Operational Office<span uk-icon="chevron-right"></span> </span>
						</div>
							<span class="mail-meta">Crusade Himalaya</span>
							<span class="mail-meta">P.O. Box 20062{{ $setting->mailbox }} </span>
							<span class="mail-meta">{{ $setting->phone }}</span>
							<span class="mail-meta">{{ $setting->address }}</span>
							<span class="mail-meta">{{ $setting->city }}, Nepal</span>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


