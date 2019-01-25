<div class="uk-panel uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top" >
	<div uk-grid class="uk-child-width-1-2@m uk-child-width-1-1@s  uk-grid-match uk-grid-small">
		<div class="attribute-wrapper">
			<div class="uk-width-1-3 attr-icons">
				<i class="fas fa-mountain"></i>
			</div>
			<div class="uk-width-2-3 attr-details">
				<div class="uk-flex uk-flex-column uk-width-1-2">
					<span class="attr-title">Max Alt.</span>
					<span class="attr-meta">{{ $tour->elevation }}m</span>
				</div>
			</div>
		</div>
		<div class="attribute-wrapper">
			<div class="uk-width-1-3 attr-icons">
				<i class="fas fa-calendar-alt"></i>
			</div>
			<div class="uk-width-2-3 attr-details">
				<div class="uk-flex uk-flex-column uk-width-1-2">
					<span class="attr-title">Accommodation</span>
					<span class="attr-meta">{{ $tour->accommodation->name }}</span>
				</div>
			</div>
		</div>
	</div>
	<div uk-grid class="uk-child-width-1-2@m uk-child-width-1-1@s  uk-grid-match uk-grid-small">
		<div class="attribute-wrapper">
			<div class="uk-width-1-3 attr-icons">
				<i class="fas fa-signal"></i>
			</div>
			<div class="uk-width-2-3 attr-details">
				<div class="uk-flex uk-flex-column uk-width-1-2">
					<span class="attr-title">Difficulty</span>
					<span class="attr-meta">{{ $tour->difficulty->name }}</span>
				</div>
			</div>
		</div>
		<div class="attribute-wrapper">
			<div class="uk-width-1-3 attr-icons">
				<i class="fas fa-dollar-sign"></i>
			</div>
			<div class="uk-width-2-3 attr-details">
				<div class="uk-flex uk-flex-column uk-width-1-2">
					<span class="attr-title">Group Size</span>
					<span class="attr-meta">Min 2-16 Max</span>
				</div>
			</div>
		</div>
	</div>
	{!! $tour->overview !!}
</div>
