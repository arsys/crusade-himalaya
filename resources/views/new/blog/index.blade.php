@extends('layouts.new')
@section('content')
<section class="image-page-header image-page-header-m" data-src="{{ asset('img/blog-cover.jpg') }}" uk-img>
    <div class="page-title__wrapper">

        <div class="uk-position-xlarge uk-position-center uk-overlay ">
            <h1 class="blogPage-title">Travel Blog</h1>
            <p class="blogPage-description">Oh Hey, check out the stuff we post on this travel blog. This is probably
                the
                best page on our website that may help you to make decisions while you are planning to travel Nepal.
                Just snoop around & see if something catches your eye.</p>
        </div>
        <div class="uk-position-large uk-position-bottom-right ">
            <ul class="uk-breadcrumb">
                <li><a href="" uk-icon="icon: home"></a></li>
                <li class="uk-disabled"><a href="{{ url()->current() }}">Travel Blog</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="section-dashed">
    <div uk-grid>
        <div class="uk-width-1-6 uk-visible@m"></div>
        <div class="uk-width-expand uk-width-1-1@s blogPost-wrapper">
            @foreach ($posts as $post)         
            <article class="blogPost-article">
                <header class="blogPost-header" uk-grid>
                    <div class="uk-width-auto blogPost-datewrapper">
                        <span class="blogPost-date">{{date_format($post->created_at,"d")}}</span>
                        <span class="blogPost-year">{{date_format($post->created_at,"M Y")}}</span>
                    </div>

                    <div class="uk-width-expand">
                        <h4 class="blogPost-title">
                            <a class="uk-link-reset" href="{{ route('frontend.singlePost', $post->slug) }}">{{$post->title}}</a>
                        </h4>
                        <ul class="blogPost-meta">
                            <li><span class="blogPost-metaicon" uk-icon="icon: tag"></span>{{$post->category->title}}</li>
                            <li>
                                <span class="blogPost-metaicon" uk-icon="icon: pencil"></span> {{config('app.name')}}
                            </li>
                            <li>
                                <span class="blogPost-metaicon share" uk-icon="icon: social"  uk-toggle="target: #toggle-share; animation: uk-animation-fade"></span> Share
                            </li>
                            <div id="toggle-share" hidden>
                                <a class="share-fb" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" uk-icon="icon: facebook"></a>
                                <a class="share-tw" href="http://twitter.com/share?text=Check this cool blog post by @CrusadeHimalaya&url={{ url()->current() }}&hashtags=Nepal,crusadehimalaya,trekkinginnepal,visitnepal2020" uk-icon="icon: twitter"></a>
                            </div>
                        </ul>
                    </div>

                </header>
                <div class="uk-card-media-top">
                    <img src="{{asset($post->thumb)}}" alt="{{$post->slug}}">
                </div>
                <div class="blogPost-desc">
                    <p>{{$post->desctiption}}</p>
                    <a href="{{ route('frontend.singlePost', $post->slug) }}" class="button-arrow">READ MORE <span>&rarr;</span></a>
                </div>
            </article>
            @endforeach
        </div>
        <div class="uk-width-1-6 uk-visible@m"></div>
    </div>
</section>
@stop