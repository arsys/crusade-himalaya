
<div class="uk-section uk-section-xsmall uk-section-default uk-margin-medium-top uk-margin-medium-bottom bgcolor-wrapper">
    <div class="uk-container">
        <h2 class="uk-text-center heading-primary uk-text-center uk-margin-medium-bottom"><span>Travel Style</span></h2>
        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider>
            @if($categories->count())
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                @foreach($categories as $category)
                <li>
                    <div class="uk-panel">
                        <img src="{{ asset($category->thumb) }}" alt="{{ $category->name }}">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>{{ $category->name }}</h1></div>
                    </div>
                </li>
                @endforeach
            </ul>
            @else
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                <li>
                    <div class="uk-panel">
                        <img src="https://source.unsplash.com/320x450/?nepal" alt="">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>1</h1></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="https://source.unsplash.com/320x450/?india" alt="">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>2</h1></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="https://source.unsplash.com/320x450/?nepal" alt="">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>3</h1></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="https://source.unsplash.com/320x450/?mountain" alt="">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>4</h1></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="https://source.unsplash.com/320x450/?cat" alt="">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>5</h1></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="https://source.unsplash.com/320x450/?dog" alt="">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>6</h1></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="https://source.unsplash.com/320x450/?god" alt="">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>7</h1></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="https://source.unsplash.com/320x450/?mustang" alt="">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>8</h1></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="https://source.unsplash.com/320x450/?everest"alt="">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>9</h1></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="https://source.unsplash.com/320x450/?annapurna" alt="">
                        <div class="uk-position-center uk-panel" id="activity-title"><h1>10</h1></div>
                    </div>
                </li>
            </ul>
            @endif
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
    </div>
</div>