
@section('json')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "{{ url()->current() }}"
  },
  "headline": "{{$post->title}}",
  "image": [
    "{{asset($post->thumb)}}"
   ],
  "datePublished": "{{$post->created_at}}",
  "dateModified": "{{$post->created_at}}",
  "author": {
    "@type": "Person",
    "name": "Hawrry Bhattarai"
  },
   "publisher": {
    "@type": "Organization",
    "name": "Crusade Himalaya",
    "logo": {
      "@type": "ImageObject",
      "url": "{{asset('assets/img/favicon-96x96.png')}}"
    }
  },
  "description": "{{$post->description}}"
}
</script>
@stop
@section('mtitle'){{$post->title}}|Travel Blog @stop
@section('title'){{$post->title}}|Travel Blog 
@stop
@section('description'){!! $post->desctiption !!}@stop
@extends('layouts.new')
@section('content')

<section class="section-dashed">
    <div class="container">
        <div uk-grid class="uk-margin-large-top">
            <div class="uk-width-1-6 uk-visible@m"></div>
            <div class="uk-width-expand blogPost-contentwrapper">
                <article class="articleWrapper">
                    <h1 class="articleTitle"><a class="uk-link-reset" href="">{{$post->title}}</a></h1>

                    <p class="articleMeta">Written by {{config('app.name')}}on 12 April 2012 {{date_format($post->created_at,"d F Y")}}. Posted in
                        {{$post->category->title}}
                    </p>

                    <span class="postContent">
                        {!!$post->postContent!!}
                    </span>
                    <div id="disqus_thread"></div>
                </article>
            </div>    
            <div class="uk-width-1-6 uk-visible@m"></div>        
        </div>
            
    </div>
</section> 
@stop

@section('scripts')
<script>
var disqus_config = function () {
this.page.url = '{{url()->current()}}' ;
this.page.identifier = '{{$post->slug}}';
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://crusadehimalaya.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>   
@endsection

                            