<div class="uk-panel uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top itinerary-wrapper">				
	<ul class="uk-list uk-list-divider itinerary-list" uk-accordion="multiple: true">
		@foreach($tour->itinerary as $itinerary)

		<li class="itinerary-list-item   {{ $loop->first ? 'uk-open' : '' }}">

			<a class="uk-accordion-title  itinerary-item-link" href="#"><span class="itinerary-item-span"></span>Day {{ $itinerary->day }} : {{ $itinerary->title }} </a>


			<div class="uk-accordion-content uk-margin-large-left  itinerary-item-content">
				{!! $itinerary->plan !!}
			</div>
		</li>
		@endforeach
	</ul>
</div>

