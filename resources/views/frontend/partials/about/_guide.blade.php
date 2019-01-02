<div class="uk-section uk-section-small uk-section-default">
    <div class="uk-container">
        <h2 class="heading-primary uk-text-center "><span>Guide</span></h2> 
            <div class="uk-grid-divider uk-child-width-expand  uk-margin-medium-top uk-margin-mediumm-bottom" uk-grid>
                <div>
                    <div class="uk-text-left" uk-grid>
                        <div class="uk-width-1-4@s uk-text-center">
                             <img class="uk-border-square" src="https://source.unsplash.com/200x200?face" alt="Border square">
                        </div>
                        <div class="uk-width-3-4@s">
                            <h1 style="display: inline">Name</h1><h2 style="display: inline;  font-style: italic;">(Designation)</h2>
                             <p class="uk-text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque officia optio nostrum voluptas, rem error nulla sed illo eveniet quasi.</p>        
                            <p class="uk-text-justify toggle-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate repellat quae in nobis laborum laboriosam praesentium molestiae, aliquam maxime modi eos ab voluptatibus magnam, provident, dolorum, dolore adipisci! Qui dignissimos illum voluptate omnis similique repellendus. Quas quam assumenda aliquid quos expedita, sit dolorem eveniet omnis.</p><a class="toggle-text-button">Read More</a>
                        </div>
                    </div>
                    <div class="uk-text-left" uk-grid>
                        <div class="uk-width-3-4@s">
                            <h1 style="display: inline">Name</h1><h2 style="display: inline;  font-style: italic;">(Designation)</h2>
                            <p class="uk-text-justify ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque officia optio nostrum voluptas, rem error nulla sed illo eveniet quasi.</p>        
                            <p class="uk-text-justify toggle-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate repellat quae in nobis laborum laboriosam praesentium molestiae, aliquam maxime modi eos ab voluptatibus magnam, provident, dolorum, dolore adipisci! Qui dignissimos illum voluptate omnis similique repellendus. Quas quam assumenda aliquid quos expedita, sit dolorem eveniet omnis.</p><a class="toggle-text-button">Read More</a>
                        </div>
                        <div class="uk-width-1-4@s uk-text-center">
                            <img class="uk-border-square" src="https://source.unsplash.com/200x200?face" alt="Border square">
                        </div>
                    </div>

                    <div class="uk-text-left" uk-grid>
                        <div class="uk-width-1-4@s uk-text-center">
                             <img class="uk-border-square" src="https://source.unsplash.com/200x200?face" alt="Border square">
                        </div>
                        <div class="uk-width-3-4@s">
                            <h1 style="display: inline">Name</h1><h2 style="display: inline;  font-style: italic;">(Designation)</h2>
                            <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque officia optio nostrum voluptas, rem error nulla sed illo eveniet quasi.</p>        
                          <p class="uk-text-justify toggle-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate repellat quae in nobis laborum laboriosam praesentium molestiae, aliquam maxime modi eos ab voluptatibus magnam, provident, dolorum, dolore adipisci! Qui dignissimos illum voluptate omnis similique repellendus. Quas quam assumenda aliquid quos expedita, sit dolorem eveniet omnis.</p><a class="toggle-text-button">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@section('scripts')
<script>
// Add click event dynamically
$(document).on("click", ".toggle-text-button", function() {

  // Check if text is more or less
  if ($(this).text() == "Read More") {

    // Change link text
    $(this).text("Read Less");
    
    // Travel up DOM tree to parent, then find any children with CLASS .toggle-text and slide down
    $(this).parent().children(".toggle-text").slideDown();
    
  } else {


    // Change link text
    $(this).text("Read More");
    
    // Travel up DOM tree to parent, then find any children with CLASS .toggle-text and slide up 
    $(this).parent().children(".toggle-text").slideUp();
    
  }
  
});
</script>
@stop