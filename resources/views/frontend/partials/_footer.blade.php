
<footer class="page footer " id="foobar" >
    <div class="uk-container">
     <div class="uk-child-width-1-3@m uk-margin-medium-top uk-margin-xlarge-bottom" uk-grid>

        <div>
           <img data-src="{{asset('img/crusade-logo.svg')}}" alt="" style="width: 150px;"  uk-img class="foobar-logo">

           <div class="uk-margin-small-top social-icons uk-margin-medium-top">
             <a href="{{ $setting->facebook }}" class="uk-margin-left" >
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="{{ $setting->twitter }}" class="uk-margin-left">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="{{ $setting->instagram }}" class="uk-margin-left">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="{{ $setting->youtube }}" class="uk-margin-left">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="{{ $setting->googleplus }}" class="uk-margin-left">
                <i class="fab fa-google-plus-g"></i>
            </a>
        </div>
    </div>
    <div class="foobar-btn-wrapper">

        <div class="uk-flex uk-flex-column">                
            <a class=" uk-padding-small uk-padding-remove-vertical uk-button-default uk-width-2-3 uk-margin-small-top" href="#">
                <span class=" uk-margin-small-top " uk-icon="file-text"></span>
                <span>Request Broucher</span>
                <span class=" uk-margin-small-top" uk-icon="chevron-right"></span>
            </a>
            <a class=" uk-padding-small uk-padding-remove-vertical uk-button-default uk-width-2-3 uk-margin-small-top" href="/contact">
                <span class="uk-margin-small-top " uk-icon="mail"></span>
                <span>Contact Us</span> 
                <span class=" uk-margin-small-top " uk-icon="chevron-right"></span>
            </a>

            <a class="uk-padding-small uk-padding-remove-vertical uk-button-default uk-width-2-3 uk-margin-small-top" href="#">
                <span class=" uk-margin-small-top " uk-icon="location"></span>
                <span>Find Location</span> 
                <span class=" uk-margin-small-top" uk-icon="chevron-right"></span>
            </a>
        </div>

    </div>

    <div class="foobar-links">

        <ul class="uk-list">
            <li><a href="#">Privacy policy</a></li>
            <li><a href="/contact">Terms & Conditions</a></li>
            <li><a href="#">Site Map</a></li>
            <li>Address : 236 KESAR MAHAL MARG</li>
            <li>THAMEL-26, KATHMANDU-44600, NEPAL</li>
        </ul>
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