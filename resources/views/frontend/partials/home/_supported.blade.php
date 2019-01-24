{{-- @if($partners->isNotEmpty())
<div class="uk-container uk-container-expand  uk-margin-medium-bottom uk-margin-medium-top">
  	<div class="uk-container">
	    <h2 class="  uk-text-center uk-margin-medium-bottom"><span>Featured In</span></h2> 
  	</div>
  	<div class="uk-grid-match uk-grid-small featured" uk-grid>
  		@foreach($partners as $partner)
	 	<a class="uk-width-1-4@s uk-width-auto" href="{{ $partner->url }}">
	 		<img src="{{asset($partner->path)}}" alt="{{ $partner->name }}">
	 	</a>
	 	@endforeach
  	</div>
</div>
@endif --}}