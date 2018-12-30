
<div class="uk-child-width-1-3@m uk-grid-small" uk-grid uk-lightbox="animation: slide">
	@for($a=1; $a<=6; $a++)
    <div>
        <a class="uk-inline" href="{{asset('img/paris.jpg')}}" data-caption>
            <img src="https://source.unsplash.com/400x300/?coke" alt="">
        </a>
    </div>
    @endfor
   
</div>
