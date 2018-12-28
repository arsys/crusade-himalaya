
@extends('layouts.frontend')
@section('content')
<section class="uk-container-expand about" uk-grid>
	<a href=""><div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover uk-background-fixed " data-src="{{ asset($category->path) }}" uk-img>
			<div class="uk-overlay uk-overlay-default uk-position-bottom heading-wrapper">
				<h1 class="page-heading uk-margin-large-left">{{ $category->name }}</h1>
				<h3 class="page-subheading uk-margin-large-left uk-margin-top uk-margin-bottom ">{{ $category->description }}</h3>
			</div>
			<div class="breadcrumb uk-visible@l">
				<ul class="uk-breadcrumb" id="breadcrumb">
					<li><a href="/" uk-icon="icon: home"></a></li>
					<li class="uk-disabled"><a href="{{url()->current()}}">{{ ucfirst($category->name) }}</a></li>
				</ul>
			</div>
		</div>
	</a>
</section>
<div class="uk-container uk-margin-medium-top uk-margin-medium-bottom">
	@foreach (array_chunk($results->all(), 2) as $row)
	<div class=" uk-grid-match uk-grid-small uk-text-center " uk-grid>
		@foreach($row as $region)
		<div class="uk-width-1-2@s">
			<a href=""><div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{ asset($region->thumb) }}" uk-img></a>
				<h3><a href="{{ route('region2package',[$category->slug,$region->slug]) }}">{{ $region->name }}</a></h3>
			</div>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@stop