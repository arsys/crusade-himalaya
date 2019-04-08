@section('mtitle')
What's On This  | {{config('app.name')}}
@stop
@section('title')
What's On This  | {{config('app.name')}}
@stop
@section('description')Happening things this month @stop
@extends('layouts.frontend')
@section('content')
{{--Large and x large --}}
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
<div class="uk-container uk-visible@l">
  <ul class="uk-child-width-expand calender-month" uk-tab uk-switcher>
      @for($i=1;$i<=12;$i++)
        <li><a href="#{{ date('M', mktime(0, 0, 0, $i, 1)) }}"> {{ date('F', mktime(0, 0, 0, $i, 1)) }} </a></li>
      @endfor
  </ul>
  <ul class="uk-switcher uk-margin">
      <li>
          @foreach($jan as $event)
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
      </li>
      <li>
          @foreach($feb as $event)
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
      </li>
      <li>
          @foreach($mar as $event)
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
      </li>
      <li>
          @foreach($apr as $event)
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
      </li>
      <li>
          @foreach($may as $event)
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
      </li>
      <li>
          @foreach($jun as $event)
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
      </li>
      <li>
          @foreach($jul as $event)
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
      </li>
      <li>
          @foreach($aug as $event)
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
      </li>
      <li>
          @foreach($sep as $event)
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
      </li>
      <li>
          @foreach($oct as $event)
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
      </li>
      <li>
          @foreach($nov as $event)
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
      </li>
      <li>
          @foreach($dec as $event)
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
      </li>
  </ul>
</div>
{{--Medium and below --}}
<div class="uk-container uk-margin ul-margin-remove-horizontal uk-hidden@l">
  <ul uk-accordion>
      @for($i=1;$i<=12;$i++)
      <li>
          <a class="uk-accordion-title" href="#">{{ date('F', mktime(0, 0, 0, $i, 1)) }}</a>
          <div class="uk-accordion-content">
              @foreach($jan as $event)
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
      </li>
    @endfor
  </ul>
</div>
@stop 
@section('scripts')
@stop
