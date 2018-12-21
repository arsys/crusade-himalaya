@extends('layouts.backend')
@section('content')
<div class="row">
	<div class="col-md-10">
		<div class="list-group list-email list-gray">
			<div class="list-group-item focus">
				<div class="stick-top-left small-padding"><i class="fa fa-dot-circle-o text-info"></i></div>
				<h3>{{ $event->title }}</h3>
				<h4>{{ $event->url }}</h4>
				<h5>Starts from: {{ $event->start_date }} Ends on: {{ $event->end_date }}</h5>
			</div>
		</div>
	</div>
	<div class="col-md-2" style="display: inline-flex;">
		<button type="submit" class="btn ink-reaction btn-floating-action btn-sm btn-info " id="edit-modal" style="margin-right: 10px;"
		data-id="{{$event->id}}" data-name="{{$event->title}}" data-url="{{ $event->url }}" data-start="{{ $event->start_date }}" data-end="{{ $event->end_date }}" data-toggle="modal"
		data-target="#formModal">
		<i class="fas fa-pencil-alt" aria-hidden="true"></i>
	</button>
	{!!  Form::open( array('route'=>array('events.destroy', $event->id),'method'=>'DELETE')) !!}
	<button type="submit" class="btn ink-reaction btn-floating-action btn-sm  btn-danger ">
		<i class="fas fa-trash-alt" aria-hidden="true"></i> 
	</button>
	{!! Form::close() !!}
</div>
</div>
<!-- BEGIN EDIT MODAL MARKUP -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel"
aria-hidden="true">
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title" id="formModalLabel">Edit</h4>
		</div>
		<form class="form-horizontal" role="form">
			<div class="modal-body">
				<div class="row">
					<div class="form-group">
						<input type="hidden" id="edit-id">
						<div class="col-sm-3">
							<label for="name" class="control-label">Name</label>
						</div>
						<div class="col-sm-9">
							<input type="text" name="name" id="edit-name" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<input type="hidden" id="edit-id">
						<div class="col-sm-3">
							<label for="name" class="control-label">URL</label>
						</div>
						<div class="col-sm-9">
							<input type="text" name="name" id="edit-url" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<div class="col-md-6">
							<div class="input-group date" id="event-start">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<div class="input-group-content">
									<input type="text" class="form-control" id="start">
									<label>Event Start</label>
								</div>
							</div>
						</div>

						<div class="col-md-6">							
							<div class="input-group date" id="event-end">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								<div class="input-group-content">
									<input type="text" class="form-control" id="end">
									<label>Event End</label>
								</div>
							</div>
						</div>   
					</div>        
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary save">Update</button>
			</div>
		</form>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- END EDIT MODAL MARKUP -->
@stop
@section('scripts')
<script src="{{ asset('assets/backend/js/libs/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/backend/js/core/demo/DemoFormComponents.js') }}"></script>
<script>
	$(document).ready(function () {
            //edit
            $(document).on('click', '#edit-modal', function () {
            	$('#edit-id').val($(this).data('id'));
            	$('#edit-name').val($(this).data('name'));
            	$('#edit-url').val($(this).data('url'));
            	$('#start').val($(this).data('start'));
            	$('#end').val($(this).data('end'));
            });

            $('.modal-footer').on('click', '.save', function () {
            	var id = $('#edit-id').val();
            	$.ajax({
            		type: 'PUT',
            		url: '/manage/events/' + id,
            		data: {
            			'_token': $('meta[name="csrf-token"]').attr('content'),
            			'id': $("#edit-id").val(),
            			'title': $('#edit-name').val(),
            			'url': $('#edit-url').val(),
            			'start': $('#start').val(),
            			'end': $('#end').val()
            		},
            		success: function (data) {
            			$('#formModal').modal('hide');
            			toastr.success('Item update success!', 'Info Alert');
            			location.reload();
            		}

            	});
            });
        });
    </script>
    @stop
    @section('styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/backend/css/libs/jquery-ui/jquery-ui-theme.css')}}" />
    <link type="text/css" rel="stylesheet"
    href="{{ asset('assets/backend/css/libs/bootstrap-datepicker/datepicker3.css') }}"/>
    @stop