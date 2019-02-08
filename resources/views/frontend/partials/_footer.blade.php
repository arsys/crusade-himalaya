
<footer class="page footer " id="foobar" >
    <div class="uk-container">
       <div class="uk-child-width-1-3@m uk-margin-medium-top uk-margin-large-bottom" uk-grid>

        <div class="uk-text-center">
         <img  data-src="{{asset('img/crusade-logo.svg')}}" alt="" style="width: 150px;"  uk-img class="foobar-logo">

         <div class="uk-margin-small-top social-icons uk-margin-medium-top">
           <a href="{{ $setting->facebook }}" target="_blank"  class="uk-margin-left" >
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="{{ $setting->twitter }}" target="_blank"  class="uk-margin-left">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="{{ $setting->instagram }}"  target="_blank" class="uk-margin-left">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="{{ $setting->youtube }}" target="_blank"  class="uk-margin-left">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="{{ $setting->googleplus }}"  target="_blank" class="uk-margin-left">
            <i class="fab fa-google-plus-g"></i>
        </a>
    </div>
</div>
<div class="foobar-btn-wrapper ">

    <div class="uk-flex uk-flex-column uk-flex-middle">                
        <a class=" uk-padding-small uk-padding-remove-vertical uk-button-default uk-width-2-3 uk-margin-small-top" href="#modal-broucher" uk-toggle>
            <span class=" uk-margin-small-top " uk-icon="file-text"></span>
            <span>Request Brochure</span>
            <span class=" uk-margin-small-top" uk-icon="chevron-right"></span>
        </a>
        <div id="modal-broucher" class="uk-flex-top request-wrapper" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical request-details">

                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h3>Request a brochure</h3>
                <div class="uk-alert-danger print-error-msg uk-alert" id="response-msg" style="display: none;">
                    <ul class="uk-list">
                    </ul>
                </div>
                <form method="POST" action="{{route('brochure')}}" id="brochure-request">
                    <div class="uk-margin">
                        <label class="uk-form-label " for="form-stacked-text">Email *</label>
                        <div class="uk-form-controls uk-margin-small-top">
                            <input class="uk-input uk-form-width-large uk-width-1-1" type="email" placeholder="Email" name="email" required="">
                        </div>
                    </div>
                    
                    <div class="uk-margin">
                        <button class="uk-button  uk-button-medium uk-width-1-1" type="Submit"> Send Request</button>
                    </div>
                </form>

            </div>
        </div>
        <a class=" uk-padding-small uk-padding-remove-vertical uk-button-default uk-width-2-3 uk-margin-small-top" href="/contact">
            <span class="uk-margin-small-top " uk-icon="mail"></span>
            <span>Contact Us</span> 
            <span class=" uk-margin-small-top " uk-icon="chevron-right"></span>
        </a>

        <a class="uk-padding-small uk-padding-remove-vertical uk-button-default uk-width-2-3 uk-margin-small-top" href="#modal-overflow" uk-toggle>
            <span class=" uk-margin-small-top " uk-icon="location"></span>
            <span>Find Location</span> 
            <span class=" uk-margin-small-top" uk-icon="chevron-right"></span>
        </a>
        <div id="modal-overflow" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="map-wrapper uk-section-default">
                    <div id="location" style="height: 500px;" ></div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="foobar-links ">

    <ul class="uk-list">

        @foreach($pages as $page)
        <li><a href="{{ route('page-getPage',$page->slug) }}">{{ $page->title }}</a></li>
        @endforeach
    </ul>
    <div class="uk-flex affilate-wrapper">
        <div class="uk-margin-left affilate-inner">
            <img  data-src="{{asset('img/logo/keep.jpg')}}" alt=""  uk-img >
        </div>
        <div class="uk-margin-left affilate-inner-logo">
            <img  data-src="{{asset('img/logo/jjj.png')}}" alt=""    uk-img >
        </div>
        <div class="uk-margin-left affilate-inner-logo">
            <img  data-src="{{asset('img/logo/cnep-gov.png')}}" alt=""     uk-img >
        </div>
        <div class="uk-margin-left affilate-inner">
            <img  data-src="{{asset('img/logo/cntb.png')}}" alt=""   uk-img >
        </div>
        <div class="uk-margin-left affilate-inner">
            <img  data-src="{{asset('img/logo/ctaan.png')}}" alt=""   uk-img >
        </div>
    </div>
</div>

</div>

<div class="footer-copyright">
    <div class="uk-fluid-container">
        © {{date('Y')}} Copyright Text
        <p class="uk-link-heading uk-align-right" href="/">© {{date('Y')}} KARMA TARA ADVENTURE PVT. LTD. KATHMANDU NEPAL</p>
    </div>
</div>

</div>

</footer>


<script>
    function initMap() {
        var uluru = {lat: 27.7159776, lng: 85.3145912};
        var map = new google.maps.Map(document.getElementById('location'), {
            zoom: 18,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL_fHyHReJANrNN1TACrswYpo_dSCAjkI&callback=initMap">
</script>

