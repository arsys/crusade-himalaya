@extends('layouts.new')
@section('content')
<section class="image-page-header" uk-height-viewport="offset-top: true; offset-bottom: 50px" data-src="https://source.unsplash.com/1800x1200/?guitar" uk-img>
	<div class="page-title__wrapper">

		<div class="uk-position-center-left uk-position-large description-holder">
			<h1 class="descriptionTitle">Test</h1>
			<p class="descriptionContent">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, aut. At,
				possimus! Sapiente fugit animi rerum, molestiae laudantium beatae voluptate.</p>
		</div>
		<div class="uk-position-large uk-position-bottom-right ">
			<ul class="uk-breadcrumb">
				<li><a href="" uk-icon="icon: home"></a></li>
				<li><a href="#">Category</a></li>
				<li><a href="#">Region</a></li>
				<li class="uk-disabled"><span>Active</span></li>
			</ul>
		</div>
	</div>
</section>
<section class="section-dashed">
	<div class="container">
		<div class="uk-child-width-1-4@m uk-child-width-1-2@s categoryWrapper" uk-grid>
			@for ($i = 1; $i <= 4; $i++) 
			<div>
				<a href="#" class="uk-inline categoryLink">
					<img src="https://source.unsplash.com/320x480/?alpine" alt="">
					<h3 class="uk-position-center categoryName">Overlay Text</h3>
				</a>
		</div>
	
		@endfor
	</div>
	</div>
</section>
@stop