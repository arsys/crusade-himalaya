
@extends('layouts.frontend')
@section('content')
<section class="uk-container-expand about" uk-grid>
	<div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover uk-background-fixed" data-src="{{ asset($category->path) }}" uk-img>
		<h1 class="page-heading uk-margin-large-left">{{ $category->name }}</h1>
		<h3 class="page-subheading uk-margin-large-left uk-margin-top uk-margin-bottom">{{ $category->description }}</h3>
		<div class="breadcrumb ">
			<ul class="uk-breadcrumb" id="breadcrumb">
				<li><a href="/">Home</a></li>
				<li class="uk-disabled"><a href="{{url()->current()}}">{{ ucfirst($category->name) }}</a></li>
			</ul>
		</div>
	</div>
</section>
<div class="uk-container">
	@foreach (array_chunk($results->all(), 2) as $row)
	<div class=" uk-grid-match uk-grid-small uk-text-center uk-margin-medium" uk-grid>
		@foreach($row as $region)
		<div class="uk-width-1-2@s">
			<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="{{ asset($region->thumb) }}" uk-img>
				<h1>{{ $region->name }}</h1>
			</div>
		</div>
		@endforeach
	</div>
	@endforeach
</div>
@stop