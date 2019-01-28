<!-- nav bar start -->
<div class=" uk-padding-remove uk-margin-remove uk-card uk-card-default " uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky" id="nav-wrapper">       
  <nav class="uk-navbar-container  parent"  uk-navbar id="navbar">
    <div class="uk-navbar-left "> 
      <div class="uk-margin-medium-left">
        <a href="/">
          <img data-src="{{asset('img/crusade-logo.svg')}}" alt="" style=" width: 140px;" uk-img >
        </a>
      </div> 
    </div>
    <div class="uk-navbar-right">
      <ul id="menu1" class="uk-navbar-nav uk-visible@l uk-margin-medium-right">
        <li class="uk-active nav-link"><a href="/" class="nav-a">Home</a></li>
        <li class="nav-list"><a href="#" class="nav-a">What we do</a>
          <div class="uk-navbar-dropdown uk-margin-remove-top" uk-drop="boundary: .parent; boundary-align: true; pos: bottom-justify;">
            <div class="uk-position-relative uk-visible-toggle" uk-slider>
              <ul class=" uk-slider-items uk-child-width-1-4" uk-grid uk-margin>
               @foreach($dos as $do)
               @if($do->tours->count() > 0)
               <li class="nav-list">
                <h5 class="nav-heading"><a class="nav-link" href="{{ route('fetchByCategory',$do->slug) }}">{{ $do->name }} </a></h5>
                <div class="navimg-wrapper">
                  <a class="navimg-inner" href="{{ route('fetchByCategory',$do->slug) }}"><img src="{{ asset($do->nav) }}" alt="{{ $do->name }}"></a>
                </div>
              </li>
              @endif
              @endforeach
            </ul>
            <a class="uk-position-center-left uk-position-small uk-slidenav-large " href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-slidenav-large " href="#" uk-slidenav-next uk-slider-item="next"></a>
          </div>

        </div>
      </li>
      <li class="nav-list"><a href="#" class="nav-a">Where We GO</a>
        <div class="uk-navbar-dropdown uk-margin-remove-top" uk-drop="boundary: .parent; boundary-align: true; pos: bottom-justify;">
          <div class="uk-position-relative uk-visible-toggle" uk-slider>
            <ul class=" uk-slider-items  uk-child-width-1-4" uk-grid uk-margin>
              @foreach($wheres as $where)
              <li class="nav-list">
                <h5 class="nav-heading"><a class="nav-link" href="{{ route('fetchByRegion',$where->slug) }}">{{ $where->name }} </a></h5>

                <div class="navimg-wrapper">
                  <a class="navimg-inner" href="{{ route('fetchByRegion',$where->slug) }}"><img  src="{{ asset($where->nav) }}" alt="{{ $where->name }}"></a>
                </div>

              </li>
              @endforeach
            </ul>

            <a class="uk-position-center-left uk-position-small uk-slidenav-large " href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-slidenav-large " href="#" uk-slidenav-next uk-slider-item="next"></a>
          </div>

        </div>
      </li>
      <li class="nav-list"><a href="{{ route('frontend-eventCalender') }}" class="nav-a">Whats on</a></li>
      <li class="nav-list"><a href="/who-we-are" class="nav-a">Who we are</a></li>
      <li>
        <div class="uk-navbar-item uk-margin-remove-left uk-margin-remove-top">
          <a class="contact-button" href="/contact">Contact</a>
        </div>
      </li>
    </ul>


    <span class="uk-navbar-toggle uk-hidden@l uk-margin-small-right " uk-toggle="target: #offcanvas-nav" uk-navbar-toggle-icon></span>
  </div>
</nav>
</div>

<!-- nav bar end -->
<!-- Off canvas start -->
<div class="uk-offcanvas-content">
  <div id="offcanvas-nav" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide sidebar">
      <ul class="uk-nav uk-nav-default sidebar-list">
        <li class="uk-active sidebar-listing"><a href="/">Home</a></li>              
        <li>
          <ul uk-accordion>
            <li><a class="uk-accordion-title uk-margin-small-top" href="#">What  We Do</a>
              <div class="uk-accordion-content">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <ul   uk-accordion>
                    @foreach($dos as $do)
                    @if($do->tours->count() > 0)
                    <li class="list-item"><a class="uk-margin-left" href="{{ route('fetchByCategory',$do->slug) }}">{{ $do->name }}"></a></li>
                    @endif
                    @endforeach
                  </ul>
                </ul>
              </div>
            </li>
          </ul>          
        </li>
        <li>
          <ul class="uk-margin-small-top" uk-accordion>
            <li><a class="uk-accordion-title " href="#">Where We Go</a>
              <div class="uk-accordion-content">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <ul  uk-accordion>
                    @foreach($wheres as $where)
                    <li class="list-item"><a class="uk-margin-left" href=" {{ route('fetchByRegion',$where->slug) }}">{{ $where->name }}"></a></li>
                    @endforeach
                  </ul>
                </ul>
              </div>
            </li>
          </li></ul>          

          <li class="sidebar-listing uk-margin-small-top"><a href="/who-we-are">Who we are</a></li>
          <li class="sidebar-listing "><a href="/contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- off canvas end -->
