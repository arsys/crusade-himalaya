<div class="uk-section uk-section-small uk-section-default">
    <div class="uk-container">
        <h2 class="heading-primary uk-text-center"><span>Meet the Team</span></h2>
            <p class="uk-margin-medium-top uk-text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio commodi eius harum.</p>
            <div class="uk-text-center guide" uk-grid>
                @for($b=1; $b<=3; $b++)
                <div class="uk-width-1-3@s team">
                <img class="uk-border-circle" src="https://source.unsplash.com/200x200/?face" alt="Border circle">
                    <h2 class="uk-text-center">title</h2>
                    <p class="uk-text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, dignissimos.<a class="" href="">Read More</a></p>
                </div>
                @endfor
            </div>
    </div>
</div>
