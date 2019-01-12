@extends('layouts.backend')
@section('content')
<div class="row">
	<div class="col-md-10">
		<div class="list-group list-email list-gray">
			<div class="card">
				<div class="card-head style-primary">
					<header>{{$event->title}}</header><br>
					<header><h5>Starts from: {{ $event->start_date }} @if($event->end_date)Ends on: {{ $event->end_date }} @endif</h5></header>
				</div>
				<div class="card-body floating-label">
					{{$event->description}}			
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2" style="display: inline-flex;">
		<a href="{{route('events.edit',$event->id)}}" class="btn ink-reaction btn-floating-action btn-sm btn-info " style="margin-right: 10px;">
			<i class="fas fa-pencil-alt" style="line-height: 3;" aria-hidden="true"></i>
		</a>
		{!!  Form::open( array('route'=>array('events.destroy', $event->id),'method'=>'DELETE')) !!}
		<button type="submit" class="btn ink-reaction btn-floating-action btn-sm  btn-danger ">
			<i class="fas fa-trash-alt" aria-hidden="true"></i> 
		</button>
		{!! Form::close() !!}
	</div>
</div>
@stop