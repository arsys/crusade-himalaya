@extends('layouts.new')
@section('mtitle')
Contact | {{config('app.name')}} | Empower, Educate, Encourage
@stop
@section('title')
Contact | {{config('app.name')}} | Empower, Educate, Encourage
@stop
@section('description')
Contact
@stop
@section('content')
<section class="image-page-header " uk-height-viewport="expand: true"
    data-src="{{ asset('img/contact.jpg') }}" uk-img>
    <div class="page-title__wrapper">

        <div class=" uk-flex uk-flex-center uk-flex-middle uk-height-small pageDescription-holder">
            <h1 class="pageTitle">Contact</h1>
        </div>

        <div class="uk-position-large uk-position-bottom-right ">
            <ul class="uk-breadcrumb">
                <li><a href="/" uk-icon="icon: home"></a></li>
                <li class="uk-disabled"><a href="{{ url()->current() }}">Contact</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="section-white">
    <div class="container">
        <div class="uk-child-width-1-2@m " uk-grid>

            <div class="contact-meta">
                <div class="section-dashed uk-panel uk-padding">
                    <h5>
                        Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an
                        email
                        from the form below and we will get back to you as soon.
                    </h5>
                    <div uk-grid>
                        <div class="uk-width-1-2">
                            <div uk-grid class="uk-grid-small">
                                <div class="uk-width-1-4">
                                    <span uk-icon="location"></span>
                                </div>
                                <div class="uk-width-3-4">
                                    Karma Tara Adventure                                    
                                    {{ $setting->address }}
                                    {{ $setting->city }}, Nepal
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-2">
                            <div uk-grid class="uk-grid-small">
                                <div class="uk-width-1-4">
                                    <span uk-icon="receiver"></span>
                                </div>
                                <div class="uk-width-3-4"> {{ $setting->phone }}</div>
                            </div>
                        </div>
                    </div>

                    <div uk-grid>
                        <div class="uk-width-1-2">
                            <div uk-grid class="uk-grid-small">
                                <div class="uk-width-1-4">
                                    <span uk-icon="mail"></span>
                                </div>
                                <div class="uk-width-3-4">mail@crusadehimalaya.com</div>
                            </div>
                        </div>
                        <div class="uk-width-1-2">
                            <div uk-grid class="uk-grid-small">
                                <div class="uk-width-1-4">
                                    <span uk-icon="clock"></span>
                                </div>
                                <div class="uk-width-3-4">
                                    Sun-Fri (9 am-5 pm)
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="contact-form">
                 @include('new.partials._message')
                <form method="POST" action="{{ route('frontend.postContact') }}" data-parsley-validate>
                    @csrf
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Full Name</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-width-large" type="text" placeholder="Full Name"
                                name="fullName" required="">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-width-large" type="email" placeholder="Email" name="email"
                                required="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Subject</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-width-large" type="text" placeholder="Subject" name="subject"
                                required="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Message</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea uk-form-width-large" rows="4" required=""
                                placeholder="Some Message...." name="contactMessage"></textarea>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="g-recaptcha" data-sitekey="6LfseYkUAAAAAJRZSYaBSN3vJgPTg2Ryj3WeC9_I"></div>
                    </div>
                    <div class="uk-margin">
                        <button class="button-default" type="Submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
        <div id="map" style="height: 400px;"></div>
</section>
@endsection
@section('scripts')
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js"></script>
<script>
    function initMap() {
        var uluru = {lat: 27.7159776, lng: 85.3145912};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API')}}&callback=initMap"
type="text/javascript"></script>
@stop
@section('conversion')
@if(Session::has('success'))
<!-- Event snippet for Interested-Lead conversion page -->
<script>
gtag('event', 'conversion', {
     'send_to': 'AW-764894982/xF7qCO77-JQBEIa-3ewC',
     'value': 1.0,
     'currency': 'USD'
     });
</script>
@endif
@stop
