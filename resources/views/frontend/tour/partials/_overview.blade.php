<div class="uk-panel uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top" >
	@if (!empty($tour->group->name) || !empty($tour->accomodation->name) || !empty($tour->difficulty->name) || !empty($tour->elevation))	
	<div class="" uk-grid>
		<div class="uk-width-2-5@m">
			<div class="attribute-wrapper" uk-grid>
				<div class="uk-width-auto attr-icons">
					<i class="fas fa-users"></i>
				</div>
				<div class="uk-width-expand attr-details">
					<div class="uk-flex uk-flex-column">
						<span class="attr-title">Group Size</span>
						<span class="attr-meta">{{$tour->group->name}}</span>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-width-3-5@m">
			<div class="attribute-wrapper" uk-grid>
				<div class="uk-width-auto attr-icons">
					<i class="fas fa-bed"></i>
				</div>
				<div class="uk-width-expand attr-details">
					<div class="uk-flex uk-flex-column ">
						<span class="attr-title">Accommodation</span>
						<span class="attr-meta">{{ $tour->accommodation->name }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="" uk-grid>
		<div class="uk-width-2-5@m">
			<div class="attribute-wrapper" uk-grid>
				<div class="uk-width-auto attr-icons">
					<i class="fas fa-signal"></i>
				</div>
				<div class="uk-width-expand attr-details">
					<div class="uk-flex uk-flex-column ">
						<span class="attr-title">Difficulty</span>
						<span class="attr-meta">{{ $tour->difficulty->name }}</span>
					</div>
				</div>
			</div>
		</div>
		<div class="uk-width-3-5@m">
			<div class="attribute-wrapper" uk-grid>
				<div class="uk-width-auto attr-icons">
					<i class="fas fa-mountain"></i>
				</div>
				<div class="uk-width-expand attr-details">
					<div class="uk-flex uk-flex-column ">
						<span class="attr-title">Max Alt.</span>
						<span class="attr-meta">{{ $tour->elevation }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
	{!! $tour->overview !!}
</div>

