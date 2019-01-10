<div class="uk-child-width-1-3@m uk-grid-small" uk-grid uk-lightbox="animation: slide">
	
    <div>
    	@foreach($tour->slides as $slide)
        <a class="uk-inline" href="{{asset($slide->path)}}" data-caption="image caption">
            <img src="{{ asset($slide->thumb) }}" alt="{{ $slide->name }}">
        </a>
        @endforeach
    </div>
   
</div>
