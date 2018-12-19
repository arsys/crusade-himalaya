@extends('layouts.frontend')
@section('content')
{{-- banner start --}}
@include ('frontend.partials.product._banner')
{{-- banner end --}}
{{-- sticky tab start --}}
<section class="uk-container" >
	@include ('frontend.partials.product.sticky._collasible-mobile')
	<div class=" uk-container uk-container-expand">
		<div class="uk-grid-small uk-grid-match uk-child-width-expand uk-grid" uk-grid="">
			@include ('frontend.partials.product.sticky._tabs')				
		</div>
	</div>
</section>
{{-- sticky tab end--}}
{{-- content start --}}
@include ('frontend.partials.product._content')
{{-- content end --}}
<!-- related tour start -->
@include ('frontend.partials.product._tours')
@stop
@section('scripts')
<script src="{{asset('js/product.js')}}">	</script>
{{-- <script>
	$(document).ready(function () {
		
		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('#quick-enquiry').on('submit', function(e){
			e.preventDefault();
			$(".submit").prop("disabled", true);
			data = $(this).serialize();
			action = $(this).attr('action');
			$.ajax({
				type: 'POST',
				url: action,
				data: data,
				success: function (data) {
					if($.isEmptyObject(data.error))
					{
						$("#quick-enquiry").trigger("reset");
						$('.print-error-msg').find('ul').empty();
						$('.print-error-msg').css('display','block');
						$("#response-msg").toggleClass('uk-alert-danger uk-alert-success');
						$('.print-error-msg').find('ul').append("<li>"+ data.success +"</li>");
						setTimeout(function() {
							$('.print-error-msg').fadeOut();
							$(".submit").prop("disabled", false);
							UIkit.modal("#modal-quick-enquiry").hide();
						}, 3000);
					}
					else{
						printMessageErrors(data.error);
					}
				}
			});
		});
		function printMessageErrors(msg){
			$('.print-error-msg').find('ul').empty();
			$('.print-error-msg').css('display','block');
			$.each(msg,function(key,value){
				$('.print-error-msg').find('ul').append("<li>"+ value +"</li>");
			});
		}

});
</script> --}}
@stop