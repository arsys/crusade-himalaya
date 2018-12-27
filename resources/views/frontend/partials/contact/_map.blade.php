	<div class="map-wrapper uk-section-default">
	    <div id="map" style="height: 300px;"></div>
	</div>
@section('scripts')
<script>
    function initMap() {
        var uluru = {lat: 27.717482, lng: 85.310671};
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