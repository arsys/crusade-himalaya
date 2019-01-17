<div class="uk-section uk-section-small uk-section-default" >
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-body uk-padding">
            <h2 class="uk-h1  uk-text-center uk-margin-remove-bottom home-title uk-margin-large-bottom"><span>Meet the guide</span></h2>
            <p class="uk-text-center uk-margin-remove-top home-heading-secondary uk-margin-large-bottom  " id="home-sub-title"><span>With ultra experienced, knowledgeable  & dedicated guides. You won't miss a thing !</span></p>
            <div class=" guide" uk-grid>
                @foreach($others as $other)
                <div class="uk-width-1-3@s  team">
                    <img class="uk-border-square uk-align-center" src="{{ $other->avatar }}" alt="{{ $other->name }}">

                    <div class="uk-flex uk-flex-column">
                        <span class="uk-text-center">{{ $other->name }}</span>
                        <span class="team-designation uk-text-center">{{ $other->position }}</span>
                    </div>                 
                    <div>
                        <p class="uk-text-justify"id="read-more" >{!! $other->description !!}</p> 

                    </div>

                </div>
                @endforeach
            </div>
        </div> 
    </div>
</div>
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/readmore-js@2.2.1/readmore.min.js"></script>
<script>
    $(document).ready(function(){
        var lineHeight = 20;
        var lines = 2;

        $('#read-more').readmore({
          speed: 1000,
          collapsedHeight: lineHeight * lines
      });
    });
// $(document).on("click", ".toggle-text-button", function() {
//   if ($(this).text() == "Read More") {
//     $(this).text("Read Less");
//     $(this).parent().children(".toggle-text").slideDown();

//   } else {
//     $(this).text("Read More");
//     $(this).parent().children(".toggle-text").slideUp();

//   }

// });
</script>


@stop