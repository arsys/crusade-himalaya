@extends('layouts.frontend') @section('content')
<section class="uk-container-expand">
  <div class="uk-height-large uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="https://source.unsplash.com/1200x800/?calender" uk-img>
    <h1 class="main-heading">Event Calender</h1>
    <div class="breadcrumb ">
      <ul class="uk-breadcrumb  " id="breadcrumb">
        <li>
          <a href="/" uk-icon="icon: home"></a>
        </li>
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
  @foreach($Jan as $event)
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
  @endforeach
</div>

<div id="Feb" class="r-tabs-tab">
  @foreach($Feb as $event)
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
  @endforeach
</div>

<div id="Mar" class="r-tabs-tab">
  @foreach($Mar as $event)
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
  @endforeach
</div>
<div id="Apr" class="r-tabs-tab">
  @foreach($Apr as $event)
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
  @endforeach
</div>

<div id="May" class="r-tabs-tab">
  @foreach($May as $event)
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
  @endforeach
</div>

<div id="Jun" class="r-tabs-tab">
  @foreach($Jun as $event)
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
  @endforeach
</div>
<div id="Jul" class="r-tabs-tab">
  @foreach($Jul as $event)
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
  @endforeach
</div>

<div id="Aug" class="r-tabs-tab">
  @foreach($Aug as $aug)
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
  @endforeach
</div>

<div id="Sep" class="r-tabs-tab">
  @foreach($Sep as $event)
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
  @endforeach
</div>
<div id="Oct" class="r-tabs-tab">
  @foreach($Oct as $event)
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
  @endforeach
</div>

<div id="Nov" class="r-tabs-tab">
  @foreach($Nov as $event)
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
  @endforeach
</div>

<div id="Dec" class="r-tabs-tab">
  @foreach($Dec as $event)
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