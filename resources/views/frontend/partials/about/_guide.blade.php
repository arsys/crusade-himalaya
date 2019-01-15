<div class="uk-section uk-section-small uk-section-default" >
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-body uk-padding">
            <h2 class="uk-h1  uk-text-center uk-margin-remove-bottom home-title uk-margin-large-bottom"><span>Meet the guide</span></h2>
            <p class="uk-text-center uk-margin-remove-top home-heading-secondary uk-margin-large-bottom  "><span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum dolor, voluptate eligendi?</span></p>
                <div class=" guide" uk-grid>
                    @foreach($others as $other)
                    <div class="uk-width-1-3@s  team">
                    <img class="uk-border-square uk-align-center" src="{{ $other->avatar }}" alt="Border square">
                   
                        <div class="uk-flex uk-flex-column">
                            <span class="uk-text-center">{{ $other->name }}</span>
                            <span class="team-designation uk-text-center">(Designation)</span>
                        </div>                 
                        <div>
                            <p class="uk-text-justify" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, dignissimos.Read More Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur magnam voluptatum fuga ex dicta excepturi officia dolore molestiae. Necessitatibus   </p>
                            <p class="uk-text-justify toggle-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea alias provident voluptas laudantium, tenetur nulla nam libero animi sint saepe, adipisci porro asperiores? Lorem ipsum dolor sit amet, consectetur  voluptatum ullam provident at quod, velit aliquid nisi libero est repellat labore itaque corporis rem animi porro? Accusamus eligendi quasi illum eveniet dolore. </p><a class="toggle-text-button">Read More</a>
                    
                        </div>
                        
                    </div>
                    @endforeach
                </div>
            </div> 
    </div>
</div>
@section('scripts')
<script>
$(document).on("click", ".toggle-text-button", function() {
  if ($(this).text() == "Read More") {
    $(this).text("Read Less");
    $(this).parent().children(".toggle-text").slideDown();
    
  } else {
    $(this).text("Read More");
    $(this).parent().children(".toggle-text").slideUp();
    
  }
  
});
</script>


@stop