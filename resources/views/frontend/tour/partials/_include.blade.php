<div class="uk-grid-divider uk-child-width-expand@s text-color include-wrapper" uk-grid>
	<div>
		<h4>Includes</h4>
		<ul class="uk-list includes">
			@foreach($tour->includeds as $included)
			<li><span class="uk-margin-small-right included" uk-icon="check"></span>{{ $included->name }}</li>
			@endforeach
		</ul>

	</div>
	<div>
		<h4 class="">Excludes</h4>
		<ul class="uk-list excludes">
			@foreach($tour->excludeds as $included)
			<li><span class="uk-margin-small-right excluded" uk-icon="close"></span>{{ $excluded->name }}</li>
			@endforeach
		</ul>

	</div>
</div>