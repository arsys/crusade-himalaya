<div class="uk-container uk-hidden@l uk-padding">
    <div class="uk-card uk-card-default  uk-card-body ">
        <div class="uk-text-center" uk-grid>
            <div class="uk-width-1-2">
                <div class="mobile-days uk-flex uk-flex-row">
                    <span class="mobile-count uk-align-center">15 Days</span>
                </div>
                <div class="mobile-duration uk-flex uk-flex-row ">
                    <span class="price-details  uk-align-center">USD <sup>$</sup>1600</span>
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
                                <a href="#modal-mob-quick-enquiry" class="uk-link-text uk-link-reset" uk-toggle>Quick Enquiry</a>
                                 <!-- This is the modal -->
                                <div id="modal-mob-quick-enquiry" uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body">
                                        <div class="uk-alert-danger print-error-msg uk-alert" id="response-msg" style="display: none;">
                                            <ul class="uk-list">
                                            </ul>
                                        </div>
                                        <h2 class="uk-modal-title">Enquiry Form</h2>
                                        <form action="{{ route('frontend-postEnquiry') }}" method="POST" id="quick-enquiry">
                                            <input type="hidden" id="tour-id" value="1">
                                            <div class="uk-margin">
                                                <label class="uk-form-label" for="form-stacked-text">Full Name</label>
                                                <div class="uk-form-controls">  
                                                    <input class="uk-input uk-form-width-large" type="text" placeholder="Full Name" id="fullName" name="fullName" >
                                                </div>
                                            </div>

                                            <div class="uk-margin">
                                                <label class="uk-form-label" for="form-stacked-text">Email</label>
                                                <div class="uk-form-controls">
                                                    <input class="uk-input uk-form-width-large" type="email" placeholder="Email" id="email"  name="email">
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <label class="uk-form-label" for="form-stacked-text">Message</label>
                                                <div class="uk-form-controls">
                                                    <textarea class="uk-textarea uk-form-width-large" rows="4"  placeholder="Some Message...." id="enquiryMessage" name="enquiryMessage"></textarea>
                                                </div>
                                            </div>
                                            <p class="uk-text-right">
                                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                                <button class="uk-button uk-button-primary submit uk-width-1-1" type="submit">Send</button>
                                            </p>
                                        </form>

                                    </div>
                                </div>
                                <!--modal end-->
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
             @include ('frontend.partials.product.content._overview')    
            </div>
        </li>
        <!--overview end-->
        <!--Itinerary start-->
        <li class="uk-box-shadow-small uk-padding uk-background-default">
            <a class="uk-accordion-title" href="#">Itinerary</a>
            <div class="uk-accordion-content uk-animation-slide-top-medium">
              @include ('frontend.partials.product.content._itinerary')
            </div>
        </li>
         <!--Itinerary end-->
        <!--Price & Availability start-->
       <li class="uk-box-shadow-small uk-padding uk-background-default">
            <a class="uk-accordion-title" href="#">Price & Availability</a>
            <div class="uk-accordion-content uk-animation-slide-top-medium">
               @include ('frontend.partials.product.content._price')
            </div>
        </li>
        <!--Price & Availability end-->
        <!--review start-->
        <li class="uk-box-shadow-small uk-padding uk-background-default">
            <a class="uk-accordion-title" href="#">Review</a>
            <div class="uk-accordion-content uk-animation-slide-top-medium">
               @include ('frontend.partials.product.content._review')
            </div>
        </li>
         <!--review end-->
    </ul>
</div
