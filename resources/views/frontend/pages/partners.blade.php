@section('mtitle')
Partners | {{config('app.name')}}
@stop
@section('title')
Partners | {{config('app.name')}}
@stop
@section('description')
Nepal isn't a destination, it is an experience, an experience beyond the ordinary.
@stop
@extends('layouts.frontend')
@section('content')
<!-- image start -->
<section class="uk-container-expand about " uk-grid>
        <div class="uk-background-contain uk-background-muted uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url({{asset('img/dolls.webp')}});">
            <div class="uk-overlay-primary uk-position-cover overlay"></div>
            <h1 class="page-heading uk-margin-large-left">Partners</h1>
            <p class="page-subheading uk-margin-large-left uk-margin-top uk-margin-bottom">
                Nepal isn't a destination, it is an experience;
                an experience beyond the ordinary.
            </p>
            <div class="breadcrumb ">
                <ul class="uk-breadcrumb" id="breadcrumb">
                    <li><a href="/" uk-icon="icon: home" ></a></li>
                    <li class="uk-disabled"><a href="{{ url()->current() }}">Partners</a></li>
                </ul>
            </div>
        </div>
	{{-- <div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover" data-src="https://source.unsplash.com/1200x800/?flower" uk-img>
		<div class="uk-overlay-primary uk-position-cover overlay"></div>
		<h1 class="page-heading uk-margin-large-left">Who We Are</h1>
		<p class="page-subheading uk-margin-large-left uk-margin-top uk-margin-bottom">
			Nepal isn't a destination, it is an experience;
			an experience beyond the ordinary.
		</p>
		<div class="breadcrumb ">
			<ul class="uk-breadcrumb" id="breadcrumb">
				<li><a href="/" uk-icon="icon: home" ></a></li>
				<li class="uk-disabled"><a href="{{ url()->current() }}">About</a></li>
			</ul>
		</div>
	</div> --}}
</section>

<!-- image end -->
<!-- partner start-->
<div class="uk-section uk-section-muted">
        <div class="uk-container">
            <h3>Media Partners</h3>
            <div uk-grid>
                @for($i=1;$i<=4;$i++)
                <div class="uk-width-auto">
                        <img data-src="https://source.unsplash.com/300x150/?logo" alt="" uk-img>
                </div>
                @endfor
            </div>
        </div>
    </div>
<!-- partner end-->


@stop
@section('scripts')
@stop
