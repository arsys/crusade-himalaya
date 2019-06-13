@section('mtitle')Where We Go | Empower, Educate, Encourage @stop
@section('title')Where We Go | Empower, Educate, Encourage
@stop
@section('description')Description @stop
@extends('layouts.new')
@section('content')
<section class="image-page-header" uk-height-viewport="offset-top: true; offset-bottom: 50px"
	data-src="{{ asset('img/where-we-go.jpg') }}" uk-img>
	<div class="page-title__wrapper">

		<div class="uk-position-center-left uk-position-large description-holder">
			<h1 class="descriptionTitle">Where We Go</h1>
			<p class="descriptionContent">With over 20+ trips across 6 regions (Everest, Annapurna, Manaslu, Langtang,
				Mustang & off beaten) we are bringing you sensory way to gaze the beauty of Nepal. Our rewarding journey
				will not only get you hooked, but also helps you pick the best itinerary. </p>
		</div>
		<div class="uk-position-large uk-position-bottom-right ">
			<ul class="uk-breadcrumb">
				<li><a href="" uk-icon="icon: home"></a></li>
				<li class="uk-disabled"><a href="{{url()->current()}}">Where We Go</a></li>
			</ul>
		</div>
	</div>
</section>
<section class="section-dashed">
	<div class="container">
		@foreach (array_chunk($regions->all(), 2) as $row)
		<div class="uk-child-width-1-2@m categoryWrapper" uk-grid>
			@foreach($row as $region)
			<div>
				<a href="{{ route('frontend.byRegion',$region->slug) }}" class="uk-inline categoryLink">
					<img src="{{ asset($region->thumb) }}" alt="{{$region->slug}}">
					<h3 class="uk-position-center categoryName">{{$region->name}}</h3>
				</a>
			</div>
			@endforeach
		</div>
		@endforeach
	</div>
</section>
@stop