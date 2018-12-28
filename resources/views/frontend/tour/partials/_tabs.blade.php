<div class="uk-width-medium@s uk-first-column uk-visible@l" >

	<div class="uk-panel uk-text-center" uk-sticky="offset: 202" id="product-price-wrapper1">

		<div class="uk-flex uk-flex-column sticky-price" id="product-price">
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom">		
				<span class="top"> 
					15 Days
				</span>
				<span class="middle uk-flex uk-flex-column">
					<span class="middle-1">From USD</span>
					<span class="middle-2"> <sup>$</sup> 1500</span>
				</span>
				<span class="bottom uk-padding-remove-bottom  uk-flex  uk-flex-column" uk-scrollspy-nav="closest: a; scroll: true; offset: 120">
					
					<a href="#price" class=" uk-button-default uk-margin-remove uk-padding-remove-bottom" id="goto">Dates </a>
				</span>
			</div>
			<div class="uk-card uk-card-default uk-card-body trip-details">
				<ul class="uk-list uk-list-divider">
					<li>				
						<div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
							<div class="uk-width-auto uk-first-column">
								<i class="fas fa-info"></i>      
							</div>
							<div>
								<a href="#modal-quick-enquiry" class="uk-link-text uk-link-reset" uk-toggle>Quick Enquiry</a>
								<!-- This is the modal -->
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
								<!--modal end-->
							</div>
						</div>
					</li>

					<li>
						<div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
							<div class="uk-width-auto uk-first-column">
								<i class="fas fa-envelope"></i>   
							</div>
							<div>
								<a href="#" class="uk-link-text uk-link-reset"><span>Email a friend</span></a>
							</div>
						</div>
					</li>
					<li>
						<div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
							<div class="uk-width-auto uk-first-column">
								<i class="fas fa-tasks"></i>
							</div>
							<div>
								<a class="uk-link-text uk-link-reset" href="#"><span>Download Itinary</span></a>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
</div>
<div>
	<div>
		<div class="uk-card uk-card-default uk-visible@l">	
			<div class="uk-panel " id="tab-wrapper"  uk-sticky="offset: 0" >
				<ul uk-scrollspy-nav="closest: li; scroll: true; offset: 120" class="uk-nav uk-nav-default uk-nav-center tm-nav uk-nav-parent-icon  uk-flex  uk-flex-row " uk-nav>
					<li class="uk-active uk-width-1-4"><a href="#overview">Overview</a></li> 
					<li class="uk-width-1-4"><a href="#itinerary">Itinerary</a></li>
					<li class="uk-width-1-4"><a href="#price">Price & Availability </a></li>
					<li class="uk-width-1-4"><a href="#review">Reviews</a></li>
				</ul>
			</div>	
		</div>
	</div>
</div>





