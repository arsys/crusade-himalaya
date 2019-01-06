@extends('layouts.frontend')
@section('content')
@include ('frontend.partials.about._image')
<div class="uk-section uk-section-small uk-section-default">
	<div class="uk-container">
		<div class="text-align-left uk-margin-medium-top" uk-grid>
			<div class="uk-width-1-1" >
				{!! $calendar->calendar() !!}
			</div>
			<div class="uk-child-width-1-1@s" uk-grid>
				<div>
					<div uk-grid>
						<div class="uk-width-auto@m">
							<ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
								<li><a href="#">Active</a></li>
								<li><a href="#">Item</a></li>
								<li><a href="#">Item</a></li>
							</ul>
						</div>
						<div class="uk-width-expand@m">
							<ul id="component-tab-left" class="uk-switcher">
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
								<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
								<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
							</ul>
						</div>
					</div>
				</div>
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