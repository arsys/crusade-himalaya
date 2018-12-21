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
		data-id="{{$event->id}}" data-name="{{$event->title}}" data-toggle="modal"
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
@stop