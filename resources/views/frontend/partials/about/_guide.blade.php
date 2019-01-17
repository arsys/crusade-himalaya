<div class="uk-section uk-section-small uk-section-default" >
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-body uk-padding">
            <h2 class="uk-h1  uk-text-center uk-margin-remove-bottom home-title uk-margin-large-bottom"><span>Meet the guide</span></h2>
            <p class="uk-text-center uk-margin-remove-top home-heading-secondary uk-margin-large-bottom  " id="home-sub-title"><span>With ultra experienced, knowledgeable  & dedicated guides. You won't miss a thing !</span></p>
            <div class=" guide" uk-grid>
                @foreach($others as $other)
                <div class="uk-width-1-4@s  team">
                    <img class="uk-border-square uk-align-center" src="{{ $other->avatar }}" alt="{{ $other->name }}">

                    <div class="uk-flex uk-flex-column">
                        <span class="uk-text-center">{{ $other->name }}</span>
                        <span class="team-designation uk-text-center">{{ $other->position }}</span>
                    </div>                 
                    <div class="field">
                        {!! $other->description !!}
                    </div>

                </div>
                @endforeach
            </div>
        </div> 
    </div>
</div>
