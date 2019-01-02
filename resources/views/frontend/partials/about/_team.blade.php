<div class="uk-section uk-section-small uk-section-default">
    <div class="uk-container">
        <h2 class="heading-primary uk-text-center"><span>Meet the Team</span></h2>
            <p class="uk-margin-medium-top uk-text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio commodi eius harum.</p>
            <div class=" guide" uk-grid>
                @for($b=1; $b<=3; $b++)
                <div class="uk-width-1-3@s  team">
                <img class="uk-border-square uk-align-center" src="https://source.unsplash.com/200x200/?face" alt="Border square">
                    <h2 class="uk-text-center">title</h2>
                   
                    <div>
                        <p class="uk-text-justify" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, dignissimos.Read More Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur magnam voluptatum fuga ex dicta excepturi officia dolore molestiae. Necessitatibus   </p>
                        <p class="uk-text-justify toggle-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea alias provident voluptas laudantium, tenetur nulla nam libero animi sint saepe, adipisci porro asperiores? Lorem ipsum dolor sit amet, consectetur  voluptatum ullam provident at quod, velit aliquid nisi libero est repellat labore itaque corporis rem animi porro? Accusamus eligendi quasi illum eveniet dolore. </p><a class="toggle-text-button">Read More</a>
                
                    </div>
                    
                </div>
                @endfor
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