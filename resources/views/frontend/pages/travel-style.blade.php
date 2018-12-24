
@extends('layouts.frontend')
@section('content')
<section class="uk-container-expand about" uk-grid>
	<div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover" data-src="{{ asset($category->path) }}" uk-img>
		<h1 class="page-heading uk-margin-large-left">{{ $category->name }}</h1>
		<h3 class="page-subheading uk-margin-large-left uk-margin-top uk-margin-bottom">{{ $category->description }}</h3>
		<div class="breadcrumb ">
			<ul class="uk-breadcrumb" id="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="uk-disabled"><a href="{{url()->current()}}">{{ ucfirst($category->name) }}</li>
				</ul>
			</div>
		</div>
	</section>
	<div class="uk-section uk-section-small uk-section-default">
		<div class="uk-container">
			<div class="text-align-left uk-margin-medium-top" uk-grid>
				<div class="uk-width-1-1@m" >
					<div class="uk-child-width-1-3@m" uk-grid>

				</div>

			</div>
		</div>

	</div>
</div>
<div class="uk-section uk-section-small uk-section-default">
	<div class="uk-container">
		<ul class="uk-pagination uk-flex-center" uk-margin>
			<li><a href="#"><span uk-pagination-previous></span></a></li>
			<li><a href="#">1</a></li>
			<li class="uk-disabled"><span>...</span></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li class="uk-active"><span>7</span></li>
			<li><a href="#">8</a></li>
			<li><a href="#">9</a></li>
			<li><a href="#">10</a></li>
			<li class="uk-disabled"><span>...</span></li>
			<li><a href="#">20</a></li>
			<li><a href="#"><span uk-pagination-next></span></a></li>
		</ul>
	</div>
</div>
@stop