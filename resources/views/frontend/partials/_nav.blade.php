<!-- nav bar start -->

<div class=" uk-padding-remove uk-margin-remove uk-card uk-card-default " uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky" id="nav-wrapper">       
    <nav class="uk-navbar-container  parent"  uk-navbar id="navbar">

       <div class="uk-navbar-left "> 
            <span class="uk-margin-left"><img data-src="{{asset('img/crusade-logo.svg')}}" alt="" style="height:110px; width: 140px;" uk-img ></span> 
     
        </div>
        <div class="uk-navbar-right">
            <ul id="menu1" class="uk-navbar-nav uk-visible@l">
                <li class="uk-active"><a href="/">Home</a></li>

                <li><a href="#">Where We GO</a>
                    <div class="uk-navbar-dropdown" uk-drop="boundary: .parent; boundary-align: true; pos: bottom-justify;">
                        <div class="uk-navbar-dropdown-grid uk-child-width-1-5" uk-grid>
                            <div>
                                <h3>Everest Region</h3>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Everest Base Camp Trek</a></li>
                                    <li><a href="#">Everest Base Camp via Gokyo</a></li>
                                    <li><a href="#">High Passes Trek</a></li>
                                    <li><a href="#">Gokyo Lake Trek</a></li>
                                    <li><a href="#">Everest View Trek</a></li>
                                    <li><a href="#">Everest Base Camp Trek and Fly</a></li>
                                </ul>
                                <h3>Tours</h3>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Chitwan National Park</a></li>
                                    <li><a href="#">Kathmandu Valley</a></li>
                                    <li><a href="#">Bardia Notional Park</a></li>
                                    <li><a href="#">Koshi Tappu Wildlife Reserve</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3>Annapurna Region</h3>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Annapurna Base Camp</a></li>
                                    <li><a href="#">Annapurna Sanctuary Trek</a></li>
                                    <li><a href="#">Annapurna Circuit Trek</a></li>
                                    <li><a href="#">Ghorepani Poon Hill Trek</a></li>
                                    <li><a href="#">Annapurna View Trek</a></li>
                                    <li><a href="#">Nar Phu Valley Trek</a></li>
                                    <li><a href="#">Mardi Himal Trek</a></li>
                                    <li><a href="#">Annapurna Panorama Luxury Trek</a></li>
                                    <li><a href="#">Tilicho Lake Trek</a></li>
                                    <li><a href="#">Khopra Dada Trek</a></li>
                                    <li><a href="#">Dhaulagiri Circuit Trek</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3>Langtang Region</h3>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Langtang Trek</a></li>
                                    <li><a href="#">Gosaikunda lake Trek</a></li>
                                    <li><a href="#">Langtang Helambu Trek</a></li>
                                    <li><a href="#">Tamang Heritage Trail</a></li>
                                </ul>
                                <h3>Adventure Tours</h3>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Kathmandu Valley Biking Tour</a></li>
                                    <li><a href="#">Upper Mustang Biking Tour</a></li>
                                    <li><a href="#">Annapurna Mountain Biking Tour</a></li>
                                    <li><a href="#">Tamang Heritage Trail</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3>Remote Region</h3>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Lower Mustang Trek</a></li>
                                    <li><a href="#">Tsum Valley Trek</a></li>
                                    <li><a href="#">Upper Mustang Trek</a></li>
                                    <li><a href="#">Rara Lake Trek</a></li>
                                    <li><a href="#">Shey Phoksunda Lake Trek</a></li>
                                    <li><a href="#">Makalu High Pass Trek</a></li>
                                    <li><a href="#">Upper Dolpa Trek</a></li>
                                    <li><a href="#">Lower Dolpa Trek</a></li>
                                    <li><a href="#">Manaslu Trek</a></li>
                                </ul>
                            </div>
                            <div>
                                <h3>Peak Climbing Packages:Tentative</h3>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Mera Peak Climbing</a></li>
                                    <li><a href="#">Island Peak Climbing</a></li>
                                    <li><a href="#">Island Peak Climbing via EBC</a></li>
                                    <li><a href="#">Lobuche Peak Climbing</a></li>
                                    <li><a href="#">Three Peak Climbing:Island Mera and Lobuche</a></li>
                                    <li><a href="#">Mardi Himal Peak Climbing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('frontend-eventCalender') }}">Whats On</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/product">Product</a></li>
                <li><a href="/category">Category</a></li>

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
