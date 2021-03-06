@section('mtitle'){!! $category->name !!} | {!! $region->name !!}@stop
@section('title'){!! $category->name !!} | {!! $region->name !!}@stop
@section('description'){!! $category->description !!}@stop
@extends('layouts.new')
@section('content')
<section class="image-page-header" uk-height-viewport="offset-top: true; offset-bottom: 50px" data-src="{{ asset($category->path) }}" uk-img>
	<div class="page-title__wrapper">

		<div class="uk-position-center-left uk-position-large description-holder">
			<h1 class="descriptionTitle">{{ $category->name }}</h1>
			<p class="descriptionContent">{{ $category->description }}</p>
		</div>
		<div class="uk-position-large uk-position-bottom-right ">
			<ul class="uk-breadcrumb">
				<li><a href="" uk-icon="icon: home"></a></li>
				<li><a href="{{ route('frontend.fetchByRegion',$region->slug) }}">{{ $region->name }}</a></li>
				<li class="uk-disabled"><a href="{{url()->current()}}">{{ ucfirst($category->name) }}</a></li>
			</ul>
		</div>
	</div>
</section>
<section class="section-dashed">
	<div class="container">
		<div class="uk-child-width-1-3@m uk-child-width-1-1@s  tourPacakge-wrapper" uk-grid>
			@foreach($results as $package)
            <div>
				<a href="{{ route('frontend.tripDetail', $package->slug) }}">
					<div class="uk-card uk-card-default">
						<div class="uk-card-media-top">
							<img src="{{ asset($package->image->thumb) }}" alt="{{ $package->slug }}">
						</div>
						<div class="tourPackage--detailWrapper">
							<div class="uk-flex uk-flex-between">
								<h4 class="uk-margin-remove"> {{ $package->title }}</h4>
								<h4 class="uk-margin-remove">USD  {{ $package->budgetPrice }}</h4>
							</div>
							<div class="uk-flex uk-flex-between">
								<h4 class="uk-margin-remove"> {{ $package->days }} Days</h4>
								<a class="button-default" href="{{ route('frontend.tripDetail', $package->slug) }}">Find Out More</a>
							</div>
						</div>
					</div>
				</a>
            </div>
			@endforeach
		</div>		
	</div>
</section>
@stop