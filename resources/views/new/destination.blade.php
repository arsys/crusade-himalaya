@extends('layouts.new')
@section('content')
<section class="image-page-header image-page-header-m" data-src="https://source.unsplash.com/1800x1200/?guitar" uk-img>
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
		<div class="uk-child-width-1-2 categoryWrapper" uk-grid>
			@for ($i = 1; $i <= 6; $i++) 
			<div>
				<a href="#" class="uk-inline categoryLink">
					<img src="https://source.unsplash.com/800x400/?android" alt="">
					<h3 class="uk-position-center categoryName">Overlay Text</h3>
				</a>
		</div>
				@endfor
		</div>
	</div>
</section>
@stop