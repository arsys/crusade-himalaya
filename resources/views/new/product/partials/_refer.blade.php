<div id="modal-refer-friend" uk-modal>
	<div class="uk-modal-dialog uk-margin-auto-vertical">
		<button class="uk-modal-close-default" type="button" uk-close></button>
		<div class="uk-modal-header">
			<h5 class="uk-modal-title">Refer a friend</h5>
		</div>
		<div class="uk-modal-body">
			<div class="uk-alert-success print-error-msg uk-alert" id="response-msg" style="display: none;">
				<ul class="uk-list">
				</ul>
			</div>
			<form action="{{ route('frontend.referFriend') }}" id="refer-friend" class="uk-form-stacked">
				<div uk-grid>
					<div class="uk-width-1-2">
						<div class="uk-margin">
							<div class="uk-width-1-1@s">
								<label class="uk-form-label" for="form-stacked-text">First name</label>
								<input class="uk-input" type="text" name="fname">
							</div>
							<div class="uk-width-1-1@s">
								<label class="uk-form-label" for="form-stacked-text">Last Name</label>
								<input class="uk-input" type="text" name="lname">
							</div>
						</div>
						<div class="uk-margin">
							<div class="uk-width-1-1@s">
								<label class="uk-form-label" for="form-stacked-text">Email</label>
								<input class="uk-input" type="email" name="myEmail">
							</div>
						</div>
						<div class="uk-margin">
							<textarea class="uk-textarea" rows="5" placeholder="Comment" name="comment" style="resize: none;"></textarea>
						</div>
						<div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">							
							<label><input class="uk-checkbox" type="checkbox" name="copy" value="1"> Send me a copy</label>
						</div>
					</div>
					<div class="uk-width-1-2">
						<h6>Send to</h6>
						<div class="uk-margin">
							<div class="uk-width-1-1">
								<input class="uk-input" placeholder="Enter email 1 (Required)" type="email" name="sendTo1" required>
							</div>
						</div>
						<div class="uk-margin">
							<div class="uk-width-1-1">
								<input class="uk-input" placeholder="Enter email 2" type="email" name="sendTo2">
							</div>
						</div>
						<div class="uk-margin">
							<div class="uk-width-1-1">
								<input class="uk-input" placeholder="Enter email 3" type="email" name="sendTo3">
							</div>
						</div>
					</div>
				</div>
				<button class="uk-button uk-margin-small uk-button-primary send-refer uk-width-1-1  button-primary" type="submit">Send</button>
			</form>
		</div>
	</div>
</div>