@section('mtitle')Travel Style | {!! $category->name !!} in Nepal @stop
@section('title')Travel Style | {!! $category->name !!} in Nepal
@stop
@section('description'){!! $category->description !!}@stop
@extends('layouts.new')
@section('content')
<section class="image-page-header" uk-height-viewport="offset-top: true; offset-bottom: 50px"
	data-src="{{ asset($category->path) }}" uk-img>
	<div class="page-title__wrapper">

		<div class="uk-position-center-left uk-position-large description-holder">
			<h1 class="descriptionTitle">{{ $category->name }}</h1>
			<p class="descriptionContent">{{ $category->description }}</p>
		</div>
		<div class="uk-position-large uk-position-bottom-right ">
			<ul class="uk-breadcrumb">
				<li><a href="" uk-icon="icon: home"></a></li>
				<li class="uk-disabled"><a href="{{url()->current()}}">{{ ucfirst($category->name) }}</a></li>
			</ul>
		</div>
	</div>
</section>
<section class="section-dashed">
	<div class="container">
		@foreach (array_chunk($results->all(), 2) as $row)
			<div class="uk-child-width-1-2@m categoryWrapper" uk-grid>
				@foreach($row as $region)
					<div>
						<a href="{{ route('frontend.region2package',[$category->slug,$region->slug]) }}" class="uk-inline categoryLink">
							<img src="{{ asset($region->thumb) }}" alt="">
							<h3 class="uk-position-center categoryName">{{$region->name}}</h3>
						</a>
					</div>
				@endforeach	
			</div>		
		@endforeach
	</div>
</section>
@stop