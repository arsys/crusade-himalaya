@section('mtitle')
{{$page->title}}
@stop
@section('title')
{{$page->title}}
@stop
@section('description'){!! $page->description !!}@stop
@extends('layouts.frontend')
@section('content')
{{-- image start --}}
<section class="uk-container-expand about" uk-grid>
	<div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover" data-src="{{ asset($page->banner) }}" uk-img>
		<h1 class="page-heading uk-margin-large-left">{{ $page->title }}</h1>
		<p class="page-subheading uk-margin-large-left uk-margin-top uk-margin-bottom">
			{{ $page->subheading }}
		</p>
		<div class="breadcrumb ">
			<ul class="uk-breadcrumb" id="breadcrumb">
				<li><a href="/" uk-icon="icon: home" ></a></li>
				<li class="uk-disabled"><a href="{{ url()->current() }}">{{ $page->title }}</a></li>
			</ul>
		</div>
	</div>
</section>
{{-- image end --}}
{{-- content start --}}
<div class="uk-container uk-container-expand uk-margin-top uk-margin-bottom">
	{!! $page->page_content !!}
</div>
{{-- content end --}}


@stop
