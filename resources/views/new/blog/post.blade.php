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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea
                            commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim
                            id est
                            laborum.</p>
                    </span>

                </article>
            </div>
            <div class="uk-width-1-6"></div>
        </div>

    </div>
</section>
@stop