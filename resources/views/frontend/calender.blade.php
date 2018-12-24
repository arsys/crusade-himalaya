@extends('layouts.frontend')
@section('content')
@include ('frontend.partials.about._image')
<div class="uk-section uk-section-small uk-section-default">
    <div class="uk-container">
        <div class="text-align-left uk-margin-medium-top" uk-grid>
            <div class="uk-width-1-1" >
            	{!! $calendar->calendar() !!}
            </div>
        </div>
    </div>
</div>
@stop
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css">
@stop
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
{!! $calendar->script() !!}
@stop