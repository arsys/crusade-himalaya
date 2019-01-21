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
              <ul class="uk-thumbnav uk-slider-items  uk-child-width-1-4" uk-grid uk-margin>
                @foreach($dos as $do)
                <li>
                  <h5 class="nav-heading"><a class="nav-link" href="{{ route('fetchByCategory',$do->slug) }}">{{ $do->name }} </a></h5>
                  <div class="navimg-wrapper">
                    <a class="navimg-inner" href="{{ route('fetchByCategory',$do->slug) }}"><img src="{{ asset($do->nav) }}" alt="{{ $do->name }}"></a>
                  </div>
                </li>
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
              <ul class="uk-thumbnav uk-slider-items  uk-child-width-1-4" uk-grid uk-margin>
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
        <li class="nav-list"><a href="/about" class="nav-a">About</a></li>
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
      <ul class="uk-nav uk-nav-default">
        <li class="uk-active"><a href="/">Home</a></li>              
        <li><ul uk-accordion>
          <li><a class="uk-accordion-title" href="#">What  we do</a>
            <div class="uk-accordion-content">
              <ul class="uk-nav uk-navbar-dropdown-nav">
                <ul uk-accordion>
                  <li class="list-item"><a class="uk-accordion-title" href="#">Everest Region</a>
                    <div class="uk-accordion-content">
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="list-item"><a href="#">Everest Base Camp Trek</a></li>
                        <li class="list-item"><a href="#">Everest Base Camp via Gokyo</a></li>
                        <li class="list-item"><a href="#">High Passes Trek</a></li>
                        <li class="list-item"><a href="#">Gokyo Lake Trek</a></li>
                        <li class="list-item"><a href="#">Everest View Trek</a></li>
                        <li class="list-item"><a href="#">Everest Base Camp Trek and Fly</a></li>

                      </ul>

                    </div>
                  </li>
                  <li class="list-item"><a class="uk-accordion-title" href="#">Tours</a>
                    <div class="uk-accordion-content">
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="list-item"><a href="#">Chitwan National Park</a></li>
                        <li class="list-item"><a href="#">Kathmandu Valley</a></li>
                        <li class="list-item"><a href="#">Bardia Notional Park</a></li>
                        <li class="list-item"><a href="#">Koshi Tappu Wildlife Reserve</a></li>

                      </ul>

                    </div>
                  </li>
                  <li class="list-item"><a class="uk-accordion-title" href="#">Adventure Tours</a>
                    <div class="uk-accordion-content">
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="list-item"><a href="#">Kathmandu Valley Biking Tour</a></li>
                        <li class="list-item"><a href="#">Upper Mustang Biking Tour</a></li>
                        <li class="list-item"><a href="#">Annapurna Mountain Biking Tour</a></li>
                        <li class="list-item"><a href="#">Tamang Heritage Trail</a></li>

                      </ul>

                    </div>
                  </li>
                  <li class="list-item"><a class="uk-accordion-title" href="#">Remote Region</a>
                    <div class="uk-accordion-content">
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="list-item"><a href="#">Lower Mustang Trek</a></li>
                        <li class="list-item"><a href="#">Tsum Valley Trek</a></li>
                        <li class="list-item"><a href="#">Upper Mustang Trek</a></li>
                        <li class="list-item"><a href="#">Rara Lake Trek</a></li>
                        <li class="list-item"><a href="#">Shey Phoksunda Lake Trek</a></li>
                        <li class="list-item"><a href="#">Makalu High Pass Trek</a></li>
                        <li class="list-item"><a href="#">Upper Dolpa Trek</a></li>
                        <li class="list-item"><a href="#">Lower Dolpa Trek</a></li>
                        <li class="list-item"><a href="#">Manaslu Trek</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="list-item"><a class="uk-accordion-title" href="#">Peak Climbing Packages:Tentative</a>
                    <div class="uk-accordion-content">
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="list-item"><a href="#">Mera Peak Climbing</a></li>
                        <li class="list-item"><a href="#">Island Peak Climbing</a></li>
                        <li class="list-item"><a href="#">Island Peak Climbing via EBC</a></li>
                        <li class="list-item"><a href="#">Lobuche Peak Climbing</a></li>
                        <li class="list-item"><a href="#">Three Peak Climbing:Island Mera and Lobuche</a></li>
                        <li class="list-item"><a href="#">Mardi Himal Peak Climbing</a></li>

                      </ul>

                    </div>
                  </li>
                </ul>
              </ul>
            </div>
          </li>
        </ul>          
      </li>
      <li><ul uk-accordion>
        <li><a class="uk-accordion-title" href="#">Where we go</a>
          <div class="uk-accordion-content">
            <ul class="uk-nav uk-navbar-dropdown-nav">
              <ul uk-accordion>
                <li class="list-item"><a class="uk-accordion-title" href="#">Everest Region</a>
                  <div class="uk-accordion-content">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li class="list-item"><a href="#">Everest Base Camp Trek</a></li>
                      <li class="list-item"><a href="#">Everest Base Camp via Gokyo</a></li>
                      <li class="list-item"><a href="#">High Passes Trek</a></li>
                      <li class="list-item"><a href="#">Gokyo Lake Trek</a></li>
                      <li class="list-item"><a href="#">Everest View Trek</a></li>
                      <li class="list-item"><a href="#">Everest Base Camp Trek and Fly</a></li>

                    </ul>

                  </div>
                </li>
                <li class="list-item"><a class="uk-accordion-title" href="#">Tours</a>
                  <div class="uk-accordion-content">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li class="list-item"><a href="#">Chitwan National Park</a></li>
                      <li class="list-item"><a href="#">Kathmandu Valley</a></li>
                      <li class="list-item"><a href="#">Bardia Notional Park</a></li>
                      <li class="list-item"><a href="#">Koshi Tappu Wildlife Reserve</a></li>

                    </ul>

                  </div>
                </li>
                <li class="list-item"><a class="uk-accordion-title" href="#">Adventure Tours</a>
                  <div class="uk-accordion-content">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li class="list-item"><a href="#">Kathmandu Valley Biking Tour</a></li>
                      <li class="list-item"><a href="#">Upper Mustang Biking Tour</a></li>
                      <li class="list-item"><a href="#">Annapurna Mountain Biking Tour</a></li>
                      <li class="list-item"><a href="#">Tamang Heritage Trail</a></li>

                    </ul>

                  </div>
                </li>
                <li class="list-item"><a class="uk-accordion-title" href="#">Remote Region</a>
                  <div class="uk-accordion-content">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li class="list-item"><a href="#">Lower Mustang Trek</a></li>
                      <li class="list-item"><a href="#">Tsum Valley Trek</a></li>
                      <li class="list-item"><a href="#">Upper Mustang Trek</a></li>
                      <li class="list-item"><a href="#">Rara Lake Trek</a></li>
                      <li class="list-item"><a href="#">Shey Phoksunda Lake Trek</a></li>
                      <li class="list-item"><a href="#">Makalu High Pass Trek</a></li>
                      <li class="list-item"><a href="#">Upper Dolpa Trek</a></li>
                      <li class="list-item"><a href="#">Lower Dolpa Trek</a></li>
                      <li class="list-item"><a href="#">Manaslu Trek</a></li>
                    </ul>
                  </div>
                </li>
                <li class="list-item"><a class="uk-accordion-title" href="#">Peak Climbing Packages:Tentative</a>
                  <div class="uk-accordion-content">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                      <li class="list-item"><a href="#">Mera Peak Climbing</a></li>
                      <li class="list-item"><a href="#">Island Peak Climbing</a></li>
                      <li class="list-item"><a href="#">Island Peak Climbing via EBC</a></li>
                      <li class="list-item"><a href="#">Lobuche Peak Climbing</a></li>
                      <li class="list-item"><a href="#">Three Peak Climbing:Island Mera and Lobuche</a></li>
                      <li class="list-item"><a href="#">Mardi Himal Peak Climbing</a></li>

                    </ul>

                  </div>
                </li>
              </ul>
            </ul>
          </div>
        </li>
      </li></ul>          

      <li><a href="/about">About</a></li>
      <li><a href="/contact">Contact</a></li>
    </ul>
  </div>
</div>
</div>
<!-- off canvas end -->
