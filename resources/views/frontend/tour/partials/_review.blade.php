<div class="uk-child-width-1-3@m uk-grid-small" uk-grid uk-lightbox="animation: slide">
	@for($a=1; $a<=6; $a++)
    <div>
        <a class="uk-inline" href="{{asset('img/paris.jpg')}}" data-caption="image caption">
            <img src="https://source.unsplash.com/400x300/?watch" alt="">
        </a>
    </div>
    @endfor
   
</div>
