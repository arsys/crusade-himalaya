@extends('layouts.frontend')
@section('content')
{{-- banner start --}}
@include ('frontend.tour.partials._banner')
{{-- banner end --}}
{{-- sticky tab start --}}
<section class="uk-container" >
	@include ('frontend.tour.partials._collasible-mobile')
	<div class=" uk-container uk-container-expand">
		<div class="uk-grid-small uk-grid-match uk-child-width-expand uk-grid" uk-grid="">
			@include ('frontend.tour.partials._tabs')				
		</div>
	</div>
</section>
{{-- sticky tab end--}}
{{-- content start --}}
@include ('frontend.tour.partials._content')
{{-- content end --}}
<!-- related tour start -->
@include ('frontend.tour.partials._tours')
@stop
@section('scripts')
<script src="{{asset('js/product.js')}}">	</script>
<script>
    $(document).ready(function() {
    console.log('Ready');
    $('.search-wrapper').on('click', '#find-dates', function(a) {
      a.preventDefault();
      console.log('click');
      var t = $("#tour-id").val(),
        e = $("#travel-year").val(),
        o = $("#travel-month").val();
      console.log(t);
      console.log(e);
      console.log(o);
      $("#ajaxloader").show(), $.ajax({
        type: "GET",
        url: "/trip/fetch-departures",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        data: {
          tour_id: t,
          year: e,
          month: o
        },
        success: function(a) {
          $(".ajaxloadmoredeparture").html(a), $("#ajaxloader").hide()
        }
      })
    }),
        $('.search-wrapper-mob').on('click', '#find-dates-mob', function(a) {
      a.preventDefault();
      console.log('click');
      var t = $("#tour-id-mob").val(),
        e = $("#travel-year-mob").val(),
        o = $("#travel-month-mob").val();
      console.log(t);
      console.log(e);
      console.log(o);
      $("#ajaxloader").show(), $.ajax({
        type: "GET",
        url: "/trip/fetch-departures",
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        data: {
          tour_id: t,
          year: e,
          month: o
        },
        success: function(a) {
          $(".ajaxloadmoredeparture").html(a), $("#ajaxloader").hide()
        }
      })
    })
  });
</script>
@stop