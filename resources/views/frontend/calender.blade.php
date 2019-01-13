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
{{--     <ul class="r-tabs-nav">
        <li class="r-tabs-tab"><a href="#all" class="r-tabs-anchor"> All </a></li>
        @for($i=1;$i<=12;$i++)
        <li class="r-tabs-tab"><a href="#{{ date('M', mktime(0, 0, 0, $i, 1)) }}" class="r-tabs-anchor"> {{ date('F', mktime(0, 0, 0, $i, 1)) }} </a></li>
        @endfor
    </ul>
    <div id="all" class="r-tabs-accordion-title r-tabs-tab">
        <div class="uk-container uk-container-small">
            @for($i=1;$i
            <=2; $i++) 
            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
                <div class="uk-card-media-left  article-body">
                    <img src="https://source.unsplash.com/1200x800/?holi" alt="">

                </div>

                <div class="uk-card-body article-inner">
                    <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
                    <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
                        <li><span>color festival</span></li>
                    </ul>

                    <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
                </div>

        </div>
        @endfor
    </div>
</div>
--}}
<div id="Jan" class="r-tabs-accordion-title r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>

<div id="Feb" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>

<div id="Mar" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>
<div id="Apr" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>

<div id="May" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>

<div id="Jun" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>
<div id="Jul" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>

<div id="Aug" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>

<div id="Sep" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>
<div id="Oct" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>

<div id="Nov" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
</div>

<div id="Dec" class="r-tabs-tab">
  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s  uk-margin article-wrap" uk-grid>
    <div class="uk-card-media-left  article-body">
      <img src="https://source.unsplash.com/1200x800/?holi" alt="">

    </div>

    <div class="uk-card-body article-inner">
      <h4 class="uk-comment-title uk-margin-remove"><span>Holi Festival</span></h4>
      <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
        <li><i class="fas fa-calendar-week"></i> <span class="uk-margin-left"> 3rd March</span></li>
        <li><span>color festival</span></li>
      </ul>

      <p>Celebrate all the good things in life! Spring comes a calling. Fagu Purnima or Holi is a Hindu festival celebrated on a full-moon day at the end of the month of Falgun, from mid February to mid May. </p><a href="#">Read More</a>
    </div>

  </div>
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