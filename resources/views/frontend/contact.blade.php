
@extends('layouts.frontend')
@section('content')
@include ('frontend.partials.contact._image')
@include ('frontend.partials.contact._contactform')
@include ('frontend.partials.contact._map')
@stop
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
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCL_fHyHReJANrNN1TACrswYpo_dSCAjkI&callback=initMap">
</script>
@stop
