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
		<div class="uk-child-width-1-3@m uk-child-width-1-2@s  tourPacakge-wrapper" uk-grid>
			@for ($i = 1; $i <= 6; $i++) 
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="https://source.unsplash.com/1800x1200/?nepal" alt="">
                    </div>
                    <div class="tourPackage--detailWrapper">
                        <div class="uk-flex uk-flex-between">
                            <h4 class="uk-margin-remove">Media Top</h4>
                            <h4 class="uk-margin-remove">USD 1500</h4>
                        </div>
                        <div class="uk-flex uk-flex-between">
                            <h4 class="uk-margin-remove">15 Days</h4>
                            <button class="button-default">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
			@endfor
		</div>		
	</div>
</section>
@stop