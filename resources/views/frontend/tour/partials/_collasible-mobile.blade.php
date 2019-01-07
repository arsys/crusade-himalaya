<div class="uk-container uk-hidden@l uk-padding">
    <div class="uk-card uk-card-default  uk-card-body ">
        <div class="uk-text-center" uk-grid>
            <div class="uk-width-1-2">
                <div class="mobile-days uk-flex uk-flex-row">
                    <span class="mobile-count uk-align-center">{{ $tour->days }} Days</span>
                </div>
                <div class="mobile-duration uk-flex uk-flex-row ">
                    <span class="price-details  uk-align-center">USD <sup>$</sup>{{ $tour->price }}</span>
                </div>
            </div>
            <div class="uk-width-1-2 price-divide">
                <ul class="uk-list uk-list-divider">
                    <li>
                        <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-auto uk-first-column">
                                <i class="fas fa-info"></i>   
                            </div>
                            <div>
                                <a href="#modal-quick-enquiry" class="uk-link-text uk-link-reset" uk-toggle>Quick Enquiry</a> 
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-auto uk-first-column">
                                <i class="fas fa-envelope"></i>   
                            </div>
                            <div>
                                <a href="#" class="uk-link-text uk-link-reset">Email a friend</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-auto uk-first-column">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div>
                                <a class="uk-link-text uk-link-reset" href="#">Download Itinary</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>    
</div>




<div class="uk-container uk-padding-large uk-hidden@l">
    <ul class="" uk-accordion>
        <!--overview start-->
        <li class="uk-box-shadow-small uk-padding uk-background-default  ">
            <a class="uk-accordion-title" href="">Overview</a>
            <div class="uk-accordion-content uk-animation-slide-top-medium">
             <div class="left-img uk-width-medium@s uk-first-column uk-visible@l">

             </div>
             <div>
               @include ('frontend.tour.partials._overview')    
           </div>
       </li>
       <!--overview end-->
       <!--Itinerary start-->
       <li class="uk-box-shadow-small uk-padding uk-background-default">
        <a class="uk-accordion-title" href="#">Itinerary</a>
        <div class="uk-accordion-content uk-animation-slide-top-medium">
          @include ('frontend.tour.partials._itinerary')
      </div>
  </li>
  <!--Itinerary end-->
  <!--Price & Availability start-->
  <li class="uk-box-shadow-small uk-padding uk-background-default">
    <a class="uk-accordion-title" href="#">Price & Availability</a>
    <div class="uk-accordion-content uk-animation-slide-top-medium">
     @include ('frontend.tour.partials._price-mobile')
 </div>
</li>
<!--Price & Availability end-->
<!--review start-->
<li class="uk-box-shadow-small uk-padding uk-background-default">
    <a class="uk-accordion-title" href="#">Review</a>
    <div class="uk-accordion-content uk-animation-slide-top-medium">
     @include ('frontend.tour.partials._review')
 </div>
</li>
<!--review end-->
</ul>
</div
