<div class="uk-panel uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top">				
	<ul class="uk-list uk-list-divider" uk-accordion="multiple: true">
		@foreach($tour->itinerary as $itinerary)
		<li class="{{ $loop->first ? 'uk-open' : '' }}">
			<a class="uk-accordion-title" href="#">Day {{ $itinerary->day }} : {{ $itinerary->title }}</a>
			<div class="uk-accordion-content">
				{!! $itinerary->plan !!}
			</div>
		</li>
		@endforeach
	</ul>
</div>