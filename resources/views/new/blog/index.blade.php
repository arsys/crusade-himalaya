@extends('layouts.new')
@section('content')
<section class="image-page-header image-page-header-m" data-src="{{ asset('img/blog-cover.jpg') }}" uk-img>
    <div class="page-title__wrapper">

        <div class="uk-position-large uk-position-center uk-overlay ">
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
        <div class="uk-width-1-4 uk-visible@m"></div>
        <div class="uk-width-expand blogPost-wrapper">
            @for ($i = 1; $i <=6; $i++)              
            <article class="blogPost-article">
                <header class="blogPost-header" uk-grid>
                    <div class="uk-width-auto blogPost-datewrapper">
                        <span class="blogPost-date">25</span>
                        <span class="blogPost-year">July 2019</span>
                    </div>

                    <div class="uk-width-expand">
                        <h4 class="blogPost-title"><a class="uk-link-reset" href="#">Post Title</a></h4>
                        <ul class=" blogPost-meta">
                            <li><span class="blogPost-metaicon" uk-icon="icon: tag"></span> Travel</li>
                            <li><span class="blogPost-metaicon" uk-icon="icon: pencil"></span> {{config('app.name')}}
                            </li>
                            <li><span class="blogPost-metaicon" uk-icon="icon: social"></span> Share</li>
                        </ul>
                    </div>

                </header>
                <div class="uk-card-media-top">
                    <img src="https://source.unsplash.com/1024x512/?steak" alt="">
                </div>
                <div class="blogPost-desc">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.</p>
                    <a href="#" class="button-arrow">READ MORE <span>&rarr;</span></a>
                </div>
            </article>
            @endfor
        </div>
        <div class="uk-width-1-4 uk-visible@m"></div>
    </div>
</section>
@stop