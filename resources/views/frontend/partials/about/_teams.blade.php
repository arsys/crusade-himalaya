<div class="uk-container">
    <div class="" uk-grid>
        <div class="uk-width-1-4">
       
        </div>
        <div class="uk-width-3-4">
            <div class="uk-section uk-section-small uk-section-default" id="team-wrapper">
                <div class="">
                    <div class="uk-card uk-card-body uk-card-default "> 
                      <h2 class="uk-h1  uk-text-center uk-margin-remove-bottom home-title uk-margin-large-bottom"><span>Meet The Team</span></h2>
                      <p class="uk-text-center uk-margin-remove-top home-heading-secondary uk-margin-large-bottom  " id="home-sub-title"><span> Unquenchable thirst for fun ? meet ridiculously warm  &  talented team.</span></p>
                      <div class="uk-grid-divider uk-child-width-expand  uk-margin-medium-top uk-margin-mediumm-bottom" uk-grid>
                        <div>
                          @foreach($teams as $team)
                          @if($loop->iteration % 2 == 0)
                        <div class="uk-text-left" uk-grid>
                            <div class="uk-width-1-4@s uk-text-center">
                                <img class="uk-border-circle"  src="{{ $team->avatar }}" alt="{{ $team->name }}">
                            </div>
                            <div class="uk-width-3-4@s">
                                <div class="uk-flex uk-flex-column">
                                    <span class="team-name">{{ $team->name }}</span>
                                    <span class="team-designation">{{ $team->position }}</span>
                                </div>
                                <div class="team">                              
                                    {!! $team->description !!}
                                </div>
                            </div>
                        </div>
                          @endif
                          @if($loop->iteration % 2 != 0)
                          <div class="uk-text-left" uk-grid>
                            <div class="uk-width-3-4@s">
                              <div class="uk-flex uk-flex-column">
                                <span class="team-name">{{ $team->name }}</span>
                                <span class="team-designation">{{ $team->position }}</span>
                              </div>
                              <div class="team">                              
                                {!! $team->description !!}
                              </div>
                            </div>
                            <div class="uk-width-1-4@s uk-text-center">
                              <img class="uk-border-circle"  src="{{ $team->avatar }}" alt="{{ $team->name }}">
                            </div>
                          </div>
                          @endif
                          @endforeach


                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

