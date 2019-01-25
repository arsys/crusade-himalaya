@extends('layouts.frontend') 
@section('content')
<section class="uk-container-expand about" uk-grid>
  <div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover" data-src="{{asset('img/holi.png')}}" uk-img>
    <div class="uk-overlay-primary uk-position-cover overlay"></div>
    <h1 class="calendar-heading uk-margin-large-left">Whats On</h1>
    <blockquote class="calendar-subheading uk-margin-large-left uk-margin-bottom uk-margin-top">
     The red letter days  in Nepalese calendar resembles to the festivals of Nepal. </blockquote>
        <blockquote class="calendar-subheading uk-margin-large-left">No matter which month of a year you choose to visit, there is always something happening. </blockquote>
         <blockquote class="calendar-subheading uk-margin-large-left"> Just time your date to visit these festivals to coincide with culture and tradition endured for centuries.</blockquote>
   
    <div class="breadcrumb ">
      <ul class="uk-breadcrumb" id="breadcrumb">
        <li><a href="/" uk-icon="icon: home" ></a></li>
        <li class="uk-disabled"><a href="{{url()->current()}}">What's on</a></li>
      </ul>
    </div>
  </div>
</section>
<div id="responsiveTabsDemo" class="r-tabs ">
    <ul class="r-tabs-nav">
    @for($i=1;$i<=12;$i++)
        <li class="r-tabs-tab"><a href="#{{ date('M', mktime(0, 0, 0, $i, 1)) }}" class="r-tabs-anchor"> {{ date('F', mktime(0, 0, 0, $i, 1)) }} </a></li>
    @endfor
    </ul>

<div id="Jan" class="r-tabs-accordion-title r-tabs-tab">
    @foreach($jan as $event)
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
            <div class="uk-card-media-left  article-body">
              <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
            </div>

            <div class="uk-card-body article-inner">
                <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
                    <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
                        <li><span>color festival</span></li>
                    </ul>
                <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
            </div>
        </div>
    </div>
    @endforeach
</div>

<div id="Feb" class="r-tabs-tab">
    @foreach($feb as $event)
    <div class="uk-container ">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
            <div class="uk-card-media-left  article-body">
                <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
            </div>

            <div class="uk-card-body article-inner">
            <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                    <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
                    <li><span>color festival</span></li>
                </ul>
            <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
            </div>

        </div>
    </div>
    @endforeach
</div>

<div id="Mar" class="r-tabs-tab">
  @foreach($mar as $event)
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
            <div class="uk-card-media-left  article-body">
                <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
            </div>

            <div class="uk-card-body article-inner">
                <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                    <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
                    <li><span>color festival</span></li>
                </ul>
                <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
            </div>
        </div>
    </div>
  @endforeach
</div>
<div id="Apr" class="r-tabs-tab">
    @foreach($apr as $event)
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
            <div class="uk-card-media-left  article-body">
              <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
            </div>

            <div class="uk-card-body article-inner">
                <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                    <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
                    <li><span>color festival</span></li>
                </ul>
                <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
            </div>
        </div>
    </div>
    @endforeach
</div>

<div id="May" class="r-tabs-tab">
    @foreach($may as $event)
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
            <div class="uk-card-media-left  article-body">
              <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
            </div>

            <div class="uk-card-body article-inner">
              <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
              <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
                <li><span>color festival</span></li>
              </ul>
              <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
            </div>

          </div>
    </div>
      @endforeach
</div>

<div id="Jun" class="r-tabs-tab">
  @foreach($jun as $event)
   <div class="uk-container">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
        <li><span>color festival</span></li>
      </ul>
      <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
    </div>

  </div>
</div>
  @endforeach
</div>
<div id="Jul" class="r-tabs-tab">
  @foreach($jul as $event)
   <div class="uk-container">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
        <li><span>color festival</span></li>
      </ul>
      <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
    </div>

  </div>
</div>
  @endforeach
</div>

<div id="Aug" class="r-tabs-tab">
  @foreach($aug as $aug)
   <div class="uk-container">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
        <li><span>color festival</span></li>
      </ul>
      <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
    </div>

  </div>
</div>
  @endforeach
</div>

<div id="Sep" class="r-tabs-tab">
  @foreach($sep as $event)
   <div class="uk-container">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
        <li><span>color festival</span></li>
      </ul>
      <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
    </div>

  </div>
</div>
  @endforeach
</div>
<div id="Oct" class="r-tabs-tab">
  @foreach($oct as $event)
   <div class="uk-container">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
        <li><span>color festival</span></li>
      </ul>
      <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
    </div>

  </div>
</div>
  @endforeach
</div>

<div id="Nov" class="r-tabs-tab">
  @foreach($nov as $event)
   <div class="uk-container">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
        <li><span>color festival</span></li>
      </ul>
      <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
    </div>

  </div>
</div>
  @endforeach
</div>

<div id="Dec" class="r-tabs-tab">
  @foreach($dec as $event)
   <div class="uk-container">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="{{ asset($event->path) }}" alt="{{ $event->title }}">
    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>{{ $event->title }}</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left">{{ $event->start_date }}</span></li>
        <li><span>color festival</span></li>
      </ul>
      <p>{{ $event->description }}</p> @if($event->url)<a href="{{ $event->url }}">Read More</a>@endif
    </div>

  </div>
</div>
  @endforeach
</div>
</div>

@stop @section('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/responsive-tabs@1.6.3/css/responsive-tabs.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/responsive-tabs@1.6.1/js/jquery.responsiveTabs.min.js"></script>
<script>
  $('#responsiveTabsDemo').responsiveTabs({
    startCollapsed: 'accordion'
  });
</script>
@stop