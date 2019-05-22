@extends('layouts.frontend')
@section('content')
<section>
    <div class="uk-section uk-section-muted">
        <div class="uk-container uk-padding-large ">
            <div uk-grid>
                <div class="uk-width-1-6 uk-visible@m"></div>
                <div class="uk-width-expand uk-padding">
                    <div class="uk-card uk-card-default uk-card-body ">
                        <h1 class="blogPost--heading">{{$post->title}}</h1>
                        <p class="inCategory"> in <a href="#">{{$post->category->title}}</a></span></p>
                        <div class="blogPost--content">
                            {!!$post->postContent!!}
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-6 uk-visible@m"></div>
            </div>
        </div>
    </div>
</section>
@stop