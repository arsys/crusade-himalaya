<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crusade Himalaya | Empower, Educate, Encourage</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">      

	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	@yield('styles')
</head>
<body>
	<div class="uk-section uk-section-default">
		<div class="uk-container">
			<div uk-grid>
				<div class="uk-width-1-2">
					
				</div>
				<div class="uk-width-1-2">
					<div class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="https://source.unsplash.com/cenlDgUeuW8" uk-img>
						<div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: 2019-01-02T12:06:35+00:00">
							<div>
								<div class="uk-countdown-number uk-countdown-days"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Days</div>
							</div>
							<div class="uk-countdown-separator">:</div>
							<div>
								<div class="uk-countdown-number uk-countdown-hours"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hours</div>
							</div>
							<div class="uk-countdown-separator">:</div>
							<div>
								<div class="uk-countdown-number uk-countdown-minutes"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
							</div>
							<div class="uk-countdown-separator">:</div>
							<div>
								<div class="uk-countdown-number uk-countdown-seconds"></div>
								<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Seconds</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div
	</body>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
	{{-- <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script> --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
	<script src="{{asset('js/app.js')}}">  </script>
	@yield('scripts')
	</html>


