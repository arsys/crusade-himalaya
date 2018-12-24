@for($a=1; $a<=3; $a++)
<div class="uk-text-left" uk-grid>
	<div class="uk-width-1-4">
		<img src="https://source.unsplash.com/150x150/?face" alt="" >
	</div>
	<div class="uk-width-3-4 review-wrapper">
		<span class="review-client">CLient name</span>
		<p class="review-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
		<span uk-icon="location"></span>
		<span class="review-client">CLient name</span>
		<span class="rating">
			<span uk-icon="star"></span>
			<span uk-icon="star"></span>
			<span uk-icon="star"></span>
			<span uk-icon="star"></span>
			<span uk-icon="star"></span>
		</span>
	</div>
</div>
@endfor 
<a class="uk-button-default uk-align-center uk-width-medium uk-text-center " href="/review">Read More</a>