@section('mtitle')Destionation|{!! $region->name !!}@stop
@section('title')Destination|{!! $region->name !!}
@stop
@section('description'){!! $region->description !!}@stop
@extends('layouts.new')
@section('content')
<section class="image-page-header image-page-header-m" data-src="{{ asset($region->path) }}" uk-img>
	<div class="page-title__wrapper">

		<div class="uk-position-center-left uk-position-large description-holder">
			<h1 class="descriptionTitle">{{ $region->name }}</h1>
			<p class="descriptionContent">{{ $region->description }}</p>
		</div>
		<div class="uk-position-large uk-position-bottom-right ">
			<ul class="uk-breadcrumb">
				<li><a href="" uk-icon="icon: home"></a></li>
				<li class="uk-disabled"><a href="{{url()->current()}}">{{ ucfirst($region->name) }}</a></li>
			</ul>
		</div>
	</div>
</section>
<section class="section-dashed">
	<div class="container">
		<div class="uk-child-width-1-4@m uk-child-width-1-2 categoryWrapper" uk-grid>
			@foreach($categories as $category)
			<div>
				<a href="{{ route('frontend.destionation2package', [$region->slug,$category->slug]) }}" class="uk-inline categoryLink">
					<img src="{{ asset($category->thumb) }}" alt="{{ $category->name }}">
					<h3 class="uk-position-center categoryName">{{ $category->name }}</h3>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>
@stop