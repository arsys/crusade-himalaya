@extends('layouts.frontend')
@section('content')
{{-- image start --}}
<section class="uk-container-expand about" uk-grid>
	<div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover" data-src="https://source.unsplash.com/1200x800/?rose" uk-img>
		<h1 class="page-heading uk-margin-large-left">Site Map</h1>
		<p class="page-subheading uk-margin-large-left uk-margin-top uk-margin-bottom">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit repellendus magni ducimus blanditiis aperiam impedit fuga sunt quidem non harum.
		</p>
		<div class="breadcrumb ">
			<ul class="uk-breadcrumb" id="breadcrumb">
				<li><a href="/" uk-icon="icon: home" ></a></li>
				<li class="uk-disabled"><a href="#">sitemap</a></li>
			</ul>
		</div>
	</div>
</section>
{{-- image end --}}
{{-- content start --}}
<div class="uk-container uk-container-expand uk-margin-top uk-margin-bottom">
	
</div>
{{-- content end --}}


@stop