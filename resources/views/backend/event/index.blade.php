@extends('layouts.backend')
@section('content')
<div class="row">
	<div class="col-md-10"></div>
	<div class="col-md-2">
		<a href="{{ route('events.create') }}"
		class="btn ink-reaction btn-raised btn-lg btn-primary btn-block">Add event</a>
	</div>
	<hr>
</div>
<section class="style-default-bright">
	<div class="row">
		<div class="col-lg-12">
			{!! $calendar->calendar() !!}
		</div>
	</div>
</section>
@stop
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="{{asset('assets/backend/js/libs/fullcalendar/fullcalendar.min.js')}}"></script>
{!! $calendar->script() !!}
@endsection
@section('styles')
<link rel="stylesheet" href="{{asset('assets/backend/css/fullcalendar.css')}}">
@endsection