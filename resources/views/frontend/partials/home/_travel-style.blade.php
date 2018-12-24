
<div class="uk-section uk-section-xsmall uk-section-default uk-margin-medium-top uk-margin-medium-bottom bgcolor-wrapper">
    <div class="uk-container">
        <h2 class="uk-text-center home-heading-primary uk-text-center uk-margin-large-bottom"><span>Travel Style</span></h2>
        <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider>
            @if($categories->count())
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                @foreach($categories as $category)
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="{{ asset($category->thumb) }}" alt="{{ $category->name }}"></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>{{ $category->name }}</h2></div>
                    </div>
                </li>
                @endforeach
            </ul>
            @else
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="https://source.unsplash.com/320x450/?trekking" alt=""></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>Trekking</h2></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="https://source.unsplash.com/320x450/?surf" alt=""></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>Surfing</h2></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="https://source.unsplash.com/320x450/?ski" alt=""></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>Sking</h2></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="https://source.unsplash.com/320x450/?africa-safari" alt=""></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>Safari</h2></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="https://source.unsplash.com/320x450/?fishing" alt=""></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>Fishing</h2></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="https://source.unsplash.com/320x450/?rock-climb" alt=""></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>Climbing</h2></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="https://source.unsplash.com/320x450/?god" alt=""></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>7</h2></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="https://source.unsplash.com/320x450/?temple" alt=""></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>Culture</h2></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="https://source.unsplash.com/320x450/?yoga"alt=""></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>Retreat</h2></div>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a href="/product"><img src="https://source.unsplash.com/320x450/?annapurna" alt=""></a>
                        <div class="uk-position-center uk-panel" id="activity-title"><h2>Nature</h2></div>
                    </div>
                </li>
            </ul>
            @endif
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
    </div>
</div>