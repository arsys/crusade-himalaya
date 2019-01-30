@section('mtitle')Destionation|{!! $region->name !!}@stop
@section('title')Destination|{!! $region->name !!}
@stop
@section('description'){!! $region->description !!}@stop
@extends('layouts.frontend')
@section('content')
<section class="uk-container-expand about" uk-grid>
<div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover uk-background-fixed" data-src="{{ asset($region->path) }}" uk-img>
	 	<div class="uk-overlay uk-overlay-primary uk-position-bottom heading-wrapper">
			<h1 class="travel-heading  uk-margin-large-left">{{ $region->name }}</h1>
			<h3 class="travel-sub-heading uk-margin-large-left uk-margin-top uk-margin-bottom">{{ $region->description }}</h3>
		</div>
		<div class="breadcrumb uk-visible@l">
			<ul class="uk-breadcrumb" id="breadcrumb">
				<li><a href="/" uk-icon="icon: home"></a></li>
				<li class="uk-disabled"><a href="{{url()->current()}}">{{ ucfirst($region->name) }}</a></li>
			</ul>
		</div>
	</div>
</section>
<div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
	@foreach (array_chunk($categories->all(), 4) as $row)
	<div class=" uk-grid-match uk-grid-small uk-text-center " uk-grid>
		@foreach($row as $category)
		<div class="uk-width-1-4@s">
			<a href="{{ route('destionation2package',[$region->slug,$category->slug]) }}"><div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{ asset($category->thumb) }}" uk-img></a>
				<h3><a href="{{ route('destionation2package',[$region->slug,$category->slug]) }}">{{ $category->name }}</a></h3>
			</div>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@stop