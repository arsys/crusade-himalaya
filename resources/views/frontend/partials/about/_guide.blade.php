<div class="uk-section uk-section-small uk-section-default">
    <div class="uk-container">
        <h2 class="heading-primary uk-text-center "><span>Meet The Team</span></h2> 
        <div class="uk-grid-divider uk-child-width-expand  uk-margin-medium-top uk-margin-mediumm-bottom" uk-grid>
            <div>
                @foreach($teams as $team)
                @if($loop->iteration % 2 == 0)
                <div class="uk-text-left" uk-grid>
                    <div class="uk-width-1-4@s uk-text-center">
                        <img class="uk-border-square" src="{{ $team->avatar }}" alt="{{ $team->name }}">
                    </div>
                    <div class="uk-width-3-4@s">
                        <div class="uk-flex uk-flex-row">
                            <span class="team-name">{{ $other->name }}</span>
                            <span class="team-designation">{{ $other->position }}</span>
                        </div>
                        <p class="uk-text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque officia optio nostrum voluptas, rem error nulla sed illo eveniet quasi.</p>        
                        <p class="uk-text-justify toggle-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate repellat quae in nobis laborum laboriosam praesentium molestiae, aliquam maxime modi eos ab voluptatibus magnam, provident, dolorum, dolore adipisci! Qui dignissimos illum voluptate omnis similique repellendus. Quas quam assumenda aliquid quos expedita, sit dolorem eveniet omnis.</p><a class="toggle-text-button">Read More</a>
                    </div>
                </div>
                @endif
                @if($loop->iteration % 2 != 0)
                <div class="uk-text-left" uk-grid>
                    <div class="uk-width-3-4@s">
                        <div class="uk-flex uk-flex-column">
                            <span class="uk-text-center">{{ $other->name }}</span>
                            <span class="team-designation uk-text-center">{{ $other->position }}</span>
                        </div>
                        <p class="uk-text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque officia optio nostrum voluptas, rem error nulla sed illo eveniet quasi.</p>        
                        <p class="uk-text-justify toggle-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate repellat quae in nobis laborum laboriosam praesentium molestiae, aliquam maxime modi eos ab voluptatibus magnam, provident, dolorum, dolore adipisci! Qui dignissimos illum voluptate omnis similique repellendus. Quas quam assumenda aliquid quos expedita, sit dolorem eveniet omnis.</p><a class="toggle-text-button">Read More</a>
                    </div>
                    <div class="uk-width-1-4@s uk-text-center">
                        <img class="uk-border-square" src="https://source.unsplash.com/200x200?face" alt="Border square">
                    </div>
                </div>
                @endif
                @endforeach
                @foreach($others as $other)
                @if($loop->iteration % 2 == 0)
                <div class="uk-text-left" uk-grid>
                    <div class="uk-width-1-4@s uk-text-center">
                        <img class="uk-border-square" src="{{ $other->avatar }}" alt="{{ $other->name }}">
                    </div>
                    <div class="uk-width-3-4@s">
                        <div class="uk-flex uk-flex-row">
                            <span class="team-name">{{ $other->name }}</span>
                            <span class="team-designation">{{ $other->position }}</span>
                        </div>
                        <p class="uk-text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque officia optio nostrum voluptas, rem error nulla sed illo eveniet quasi.</p>        
                        <p class="uk-text-justify toggle-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate repellat quae in nobis laborum laboriosam praesentium molestiae, aliquam maxime modi eos ab voluptatibus magnam, provident, dolorum, dolore adipisci! Qui dignissimos illum voluptate omnis similique repellendus. Quas quam assumenda aliquid quos expedita, sit dolorem eveniet omnis.</p><a class="toggle-text-button">Read More</a>
                    </div>
                </div>
                @endif
                @if($loop->iteration % 2 != 0)
                <div class="uk-text-left" uk-grid>
                    <div class="uk-width-3-4@s">
                        <div class="uk-flex uk-flex-column">
                            <span class="uk-text-center">{{ $other->name }}</span>
                            <span class="team-designation uk-text-center">{{ $other->position }}</span>
                        </div>
                        <p class="uk-text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque officia optio nostrum voluptas, rem error nulla sed illo eveniet quasi.</p>        
                        <p class="uk-text-justify toggle-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate repellat quae in nobis laborum laboriosam praesentium molestiae, aliquam maxime modi eos ab voluptatibus magnam, provident, dolorum, dolore adipisci! Qui dignissimos illum voluptate omnis similique repellendus. Quas quam assumenda aliquid quos expedita, sit dolorem eveniet omnis.</p><a class="toggle-text-button">Read More</a>
                    </div>
                    <div class="uk-width-1-4@s uk-text-center">
                        <img class="uk-border-square" src="https://source.unsplash.com/200x200?face" alt="Border square">
                    </div>
                </div>
                @endif
                @endforeach                
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    $(document).ready(function() {
      $(".toggle-text").hide();
      $(document).on("click", ".toggle-text-button", function() {                                                     
        if ($(this).text() == "Read More") {
          readMore($(this));
      } else {
          readLess($(this));
      }

      function readMore(click) {
          click.text("Read Less");
          click.parent().children(".toggle-text").slideDown();
      }

      function readLess(click) {
          click.text("Read More");
          click.parent().children(".toggle-text").slideUp();
      }

  });
  });
</script>
@stop