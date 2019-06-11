@section('mtitle')
{{$page->title}} | {{config('app.name')}}
@stop
@section('title')
{{$page->title}} | {{config('app.name')}}
@stop
@section('description'){!! $page->description !!}@stop
@extends('layouts.new')
@section('content')
<section class="image-page-header " uk-height-viewport="offset-top: true; offset-bottom: 50px"
    data-src="{{ asset($page->banner) }}" uk-img>
    <div class="page-title__wrapper">

        <div class="uk-position-center-left uk-position-large pageDescription-holder">
            <h1 class="pageTitle">{{$page->title}}</h1>
            <p class="pageDescription">
                {{ $page->subheading }}
            </p>
        </div>
        <div class="uk-position-large uk-position-bottom-right ">
            <ul class="uk-breadcrumb">
                <li><a href="" uk-icon="icon: home"></a></li>
                <li class="uk-disabled"><a href="{{ url()->current() }}">{{$page->title}}</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="section-dashed">
	<div class="container">
        <div uk-grid class="uk-child-width-1-1">
            <div class="pageContent-wrapper">
                {!! $page->page_content !!}
            </div>
        </div>
	</div>
</section>
@stop