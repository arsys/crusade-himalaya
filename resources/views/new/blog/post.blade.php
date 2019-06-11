@extends('layouts.new')
@section('content')
<section class="section-dashed">
    <div class="container">
        <div uk-grid class="uk-margin-large-top">
            <div class="uk-width-1-6"></div>
            <div class="uk-width-expand blogPost-contentwrapper">
                <article class="articleWrapper">
                    <h1 class="articleTitle"><a class="uk-link-reset" href="">Heading</a></h1>

                    <p class="articleMeta">Written by {{config('app.name')}}on 12 April 2012 {{dateformat($post->created_at,"d F Y")}}. Posted in
                        {{$post->category->title}}
                    </p>

                    <span class="postContent">
                        {!!$post->postContent!!}
                    </span>

                </article>
            </div>
            <div class="uk-width-1-6"></div>
        </div>

    </div>
</section>
@stop