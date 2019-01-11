{{-- <div class="uk-child-width-1-2@s uk-child-width-1-3@l" uk-grid uk-lightbox="animation: slide">
    <div>
    	@foreach($tour->slides as $slide)
        <a class="uk-inline" href="{{asset($slide->path)}}" data-caption="{{ $slide->name }}">
            <img src="{{ asset($slide->thumb) }}" alt="{{ $slide->name }}">
        </a>
        @endforeach
    </div>
</div> --}}
<div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
	@foreach($tour->slides as $slide)
    <div>
        <a class="uk-inline" href="{{asset($slide->path)}}" data-caption="{{ $slide->name }}">
            <img src="{{ asset($slide->thumb) }}" alt="{{ $slide->name }}">
        </a>
    </div>
  	@endforeach
</div>