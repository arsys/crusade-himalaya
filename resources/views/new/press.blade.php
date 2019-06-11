@section('mtitle')
Press | {{config('app.name')}}
@stop
@section('title')
Press | {{config('app.name')}}
@stop
@section('description')
The genuine enthusiasm for travel worked for us. Because of Our unique approach We have been featured in the media
across the world.
@stop
@extends('layouts.new')
@section('content')
<section class="image-page-header " uk-height-viewport="offset-top: true; offset-bottom: 50px"
    data-src="{{asset('img/dolls.webp')}}" uk-img>
    <div class="page-title__wrapper">

        <div class="uk-position-center-left uk-position-large pageDescription-holder">
            <h1 class="pageTitle">Press</h1>
            <p class="pageDescription">
                The genuine enthusiasm for travel worked for us. Because of Our unique approach We have been featured in
                the media across the world.
            </p>
        </div>
        <div class="uk-position-large uk-position-bottom-right ">
            <ul class="uk-breadcrumb">
                <li><a href="" uk-icon="icon: home"></a></li>
                <li class="uk-disabled"><a href="{{ url()->current() }}">Press</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="section-dashed">
    <div class="container uk-card uk-card-body uk-card-default">
        <div class="pageContent-wrapper ">
            @if($medias->count() > 0)
            <h3>On Medias</h3>
            <div uk-grid>                
                @foreach($medias as $media)
                <div class="uk-width-auto">
                    <a href="{{$media->link}}">
                        <img data-src="{{$media->path}}" alt="{{$media->name}}" uk-img>
                    </a>
                </div>
                @endforeach
            </div>
            @endif

            @if($accommodations->count() > 0)
            <h3>On Accommodation</h3>
            <div uk-grid>                
                @foreach($medias as $media)
                <div class="uk-width-auto">
                    <a href="{{$media->link}}">
                        <img data-src="{{$media->path}}" alt="{{$media->name}}" uk-img>
                    </a>
                </div>
                @endforeach
            </div>
            @endif

            @if($travels->count() > 0)
            <h3>On Travel</h3>
            <div uk-grid>                
                @foreach($medias as $media)
                <div class="uk-width-auto">
                    <a href="{{$media->link}}">
                        <img data-src="{{$media->path}}" alt="{{$media->name}}" uk-img>
                    </a>
                </div>
                @endforeach
            </div>   
            @endif         
        </div>
    </div>
</section>
@stop