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
        <li class="uk-active"><a href="/" class="nav-a">Home</a></li>
        <li class="nav-list"><a href="#" class="nav-a">Where We GO</a>
          <div class="uk-navbar-dropdown uk-margin-remove-top" uk-drop="boundary: .parent; boundary-align: true; pos: bottom-justify;">
            <div class="uk-position-relative uk-visible-toggle" uk-slider="sets: true">
            <ul class="uk-thumbnav uk-slider-items  uk-child-width-1-4" uk-grid uk-margin>
                <li>
                  <h5>Everest </h5>
                  <a href="#"><img src="https://source.unsplash.com/320x200/?heli" width="300" alt=""></a>
                </li>
                <li>
                  <a href=""><h5>Annapurna Region</h5></a>
                  <a href="#"><img src="https://source.unsplash.com/320x200/?everest" width="300" alt=""></a>
                </li>
                <li>
                  <a href=""><h5>Langtang Region</h5></a>
                  <a href="#"><img src="https://source.unsplash.com/320x200/?nepal" width="300" alt=""></a>
                </li>
                <li>
                  <a href=""><h5>Remote Region</h5></a>
                  <a href="#"><img src="https://source.unsplash.com/320x200/?china" width="300" alt=""></a>
                </li>
                <li>
                  <a href=""><h5>Remote Region</h5></a>
                  <a href="#"><img src="https://source.unsplash.com/320x200/?chitwan" width="300" alt=""></a>
                </li>
                <li>
                  <a href=""><h5>Annapurna Region</h5></a>
                  <a href="#"><img src="https://source.unsplash.com/320x200/?pokhara" width="300" alt=""></a>
                </li>
                <li>
                  <a href=""><h5>langtang Region</h5></a>
                  <a href="#"><img src="https://source.unsplash.com/320x200/?annapurna" width="300" alt=""></a>
                </li>
                <li>
                  <a href=""><h5>Heli Region</h5></a>
                  <a href="#"><img src="https://source.unsplash.com/320x200/?heli" width="300" alt=""></a>
                </li>

            </ul>
           
              <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
              <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>

        </div>
        </li>
        <li class="nav-list"><a href="{{ route('frontend-eventCalender') }}" class="nav-a">Whats on</a></li>
        <li class="nav-list"><a href="/about" class="nav-a">About</a></li>

        <li class="nav-list"><a href="/product" class="nav-a">Product</a></li>
        <li class="nav-list"><a href="/category" class="nav-a">Category</a></li>
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
        <ul uk-accordion>
          <li><a class="uk-accordion-title" href="#">Item </a>
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
                                  <!--   <li class="list-item"><a href="#">List item 2list itm3 list item3 list iten3</a></li>
                                  <li class="list-item"><a href="#">List item 3list itm3 list item3 list iten3</a></li>
                                  <li class="list-item"><a href="#">List item 4list itm3 list item3 list iten3</a></li> -->
                                </ul>
                              </div>
                            </li>
                          </ul>          
                        </li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/product">Product</a></li>
                        <li><a href="/category">Category</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- off canvas end -->
