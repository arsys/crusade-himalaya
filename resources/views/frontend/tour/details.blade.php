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
<script type="text/javascript">
    !function () {
        "use strict";
        $(document).ready(function () {
            $("#fetch-dates").click(function (a) {
                a.preventDefault();
                var t = $("#tour-id").val(),
                e = $("#year").val(),
                o = $("#month").val();
                $('#ajax-action').hide(), $("#ajaxloader").show(), $.ajax({
                    type: "GET",
                    url: "/fetch-departures",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                    },
                    data: {
                        tour_id: t,
                        year: e,
                        month: o
                    },
                    success: function (a) {
                        $(".ajaxloadmoredeparture").html(a), $("#ajaxloader").hide(), $('#ajax-action').show()
                    }
                })
            })
        });
    }();
</script>
@stop