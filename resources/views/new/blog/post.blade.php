
@section('mtitle'){{$post->title}}|Travel Blog @stop
@section('title'){{$post->title}}|Travel Blog 
@stop
@section('description'){!! $post->desctiption !!}@stop
@extends('layouts.new')
@section('content')
<section class="section-dashed">
    <div class="container">
        <div uk-grid class="uk-margin-large-top">
            <div class="uk-width-1-6 uk-hidden@m"></div>
            <div class="uk-width-expand blogPost-contentwrapper uk-width-1-1@s">
                <article class="articleWrapper">
                    <h1 class="articleTitle"><a class="uk-link-reset" href="">{{$post->title}}</a></h1>

                    <p class="articleMeta">Written by {{config('app.name')}}on 12 April 2012 {{date_format($post->created_at,"d F Y")}}. Posted in
                        {{$post->category->title}}
                    </p>

                    <span class="postContent">
                        {!!$post->postContent!!}
                    </span>

                </article>
            </div>    
            <div class="uk-width-1-6 uk-hidden@m"></div>        
        </div>
    </div>
</section>
@stop

@section('scripts')
<script>
    (function() { 
    var d = document, s = d.createElement('script');
    s.src = 'https://crusadehimalaya.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>    
@endsection

                            