@extends('layouts.frontend')
@section('content')
<!-- image start -->
@include ('frontend.partials.contact._image')
<!-- image end -->
<!-- form start -->
@include ('frontend.partials.contact._contactform')
<!-- form end -->
<!--  map start -->
@include ('frontend.partials.contact._map')
<!--   map end -->
@stop

@section('scripts')
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