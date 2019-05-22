@extends('layouts.frontend')
@section('content')
<div class="uk-section uk-section-muted">
    <div class="uk-container uk-padding-large ">
        <div uk-grid>
            <div class="uk-width-1-5 uk-visible@m"></div>
            <div class="uk-width-expand uk-padding">
                <div class="blogIndex-header">
                    <h1 class="blogIndex-header--title">Travel Blog</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolor, modi a dolores
                        vitae, necessitatibus beatae error sunt expedita neque ex incidunt repudiandae harum fugiat
                        aliquam. Illum, nulla consectetur. Nostrum!</p>
                </div>
                <div class="blogIndex-body">
                    <h4 class="blogIndex-body--title">Latest</h4>
                    @foreach ($posts as $post)
                    <div class="blogPost-wrapper uk-margin-medium">
                        <div class="uk-card uk-card-default uk-card-body">
                            <div class="uk-card-media-top">
                                <img src="{{asset($post->thumb)}}" alt="{{$post->slug}}">
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <h3 class="uk-card-title blogPost--title"><a
                                        href="{{ route('frontend-singlePost', $post->slug) }}">{{$post->title}}</a></h3>
                                <div class="uk-card-badge uk-label">{{$post->category->title}}</div>
                                <p>{{$post->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="uk-width-1-5 uk-visible@m"></div>
        </div>
    </div>
</div>
@stop