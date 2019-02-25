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
	<div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover" data-src="{{asset('img/dolls.webp')}}" uk-img>
		<div class="uk-overlay-primary uk-position-cover overlay"></div>
		<h1 class="page-heading uk-margin-large-left">partners</h1>
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
</section>

<!-- image end -->
<!-- partner start-->
<div class="uk-section uk-section-muted">
        <div class="uk-container">
            <h3>Media Partners</h3>
            <div uk-grid>
                @foreach($medias as $media)
                <div class="uk-width-auto">
                <a href="{{$media->link}}">
                <img data-src="{{$media->path}}" alt="{{$media->name}}" width="300px" height="150px" uk-img>
                    </a>
                </div>
                @endforeach
            </div>
            {{-- <h3>Accommodation Partners</h3>
            <div uk-grid>
                @foreach($medias as $media)
                <div class="uk-width-auto">
                <a href="{{$media->link}}">
                <img data-src="{{$media->path}}" alt="{{$media->name}}" uk-img>
                    </a>
                </div>
                @endfor
            </div> --}}
            {{-- <h3>Travel Partners</h3>
            <div uk-grid>
                @foreach($medias as $media)
                <div class="uk-width-auto">
                <a href="{{$media->link}}">
                <img data-src="{{$media->path}}" alt="{{$media->name}}" uk-img>
                    </a>
                </div>
                @endfor
            </div> --}}
        </div>
    </div>
<!-- partner end-->


@stop
@section('scripts')
@stop
