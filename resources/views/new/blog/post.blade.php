
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

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://crusadehimalaya.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
{{-- <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> --}}
                            