<div class="uk-section uk-section-small uk-section-default">
    <div class="uk-container">
        <h2 class="heading-primary uk-text-center"><span>Meet the Team</span></h2>
            <p class="uk-margin-medium-top uk-text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio commodi eius harum.</p>
            <div class=" guide" uk-grid>
                @for($b=1; $b<=3; $b++)
                <div class="uk-width-1-3@s team">
                <img class="uk-border-circle" src="https://source.unsplash.com/200x200/?face" alt="Border circle">
                    <h2 class="uk-text-center">title</h2>
                    
                    <div class="">
                        <p class="uk-text-justify" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, dignissimos.Read More Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur magnam voluptatum fuga ex dicta excepturi officia dolore molestiae. Necessitatibus<a href="#" class="readmore">Read more</a> </p> 
                       <p class="uk-text-justify more " >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea alias provident voluptas laudantium, tenetur nulla nam libero animi sint saepe, adipisci porro asperiores? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores libero, aliquid voluptatum accusamus tempora ipsum soluta enim, animi quae, illum quam officia unde eligendi. Aperiam tempora dolores perspiciatis beatae placeat optio amet.nemo quidem voluptatum, sed at quam sint, soluta distinctio, voluptatibus obcaecati voluptates praesentium consectetur facere. Saepe possimus dolores debitis, dolore, eum suscipit. Earum ipsa, doloremque ea, nisi velit itaque! Quo dignissimos maxime iste necessitatibus alias distinctio fuga provident harum vel maiores recusandae dicta, voluptatibus a architecto, cumque laudantium minima dolore, ex facilis aut quidem saepe adipisci. Dicta, ullam eos commodi ratione, at id culpa sint voluptas maiores nemo deserunt sed delectus? Voluptate repellat, sapiente accusamus voluptates fugiat odio dolor ut! Unde voluptatum ullam provident at quod, velit aliquid nisi libero est repellat labore itaque corporis rem animi porro? Accusamus eligendi quasi illum eveniet dolore. </p>
                    </div>
                    
                </div>
                @endfor
            </div>
        
    </div>
</div>
@section('scripts')
<script>
jQuery(function($) {
$('.more').hide();
    $('.readmore').each(function() {
    $(this).show(0).on('click', function(e) {
        // prevent from following the anchor
        e.preventDefault();

        // Find the next "box" element in the DOM
        $(this).next('.more').slideToggle('fast');
                if ($(this).html() != "Show less.") {
                    $(this).html("Show less.");

                }
                else {
                    $(this).html("Read more...");

                }

    });
});
});
</script>
@stop