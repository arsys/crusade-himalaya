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
	<style>
		.comingsoon{
		  	display: block;
		    height: 745px; 
		    width: 797px;
		    color: white;
			}
			.comingsoon-heading{
			  	text-transform: uppercase;
			  	position: relative;
			 	margin-bottom: 10px;
			  	font-family: Raleway;
			 	font-weight: bold;
			 	top: 50%;
			 	bottom: 50%;
				left:110px;
			}
			.social-icons{
				color: #2ed3ae;
				&:hover{
				color : #000000;
			}
		}
	</style>    
	@yield('styles')
</head>
<body>
	<div class="uk-container uk-container-expand">	
		<div class="uk-text-justify" uk-grid>
		    <div class="uk-width-1-2@s">
		        <div class="uk-padding-large ">
					<h1 class="">Under Construction</h1>
					<h4>Our website is currently undergoing schedule maintenance. We should be back shortly. Thank you for your patience.</h4>
		
					<div class="uk-margin" uk-margin="">
						<form class="uk-grid-small" uk-grid>
							<input class="uk-input uk-width-2-3 uk-first-column" id="form-h-text" type="text" placeholder="Enter your email">
							<button class="uk-button uk-button-primary uk-width-1-3">NOTIFY US</button>
						</form>
						<p>Sign up now to get early notification of our lunch date !</p>
					</div>
					<div class="uk-margin-xlarge-top uk-text-center">
						<a href="/">
					          <img data-src="{{asset('img/crusade-logo.svg')}}" alt="" style=" width: 140px;" uk-img >
					        </a>
					</div>
					
					 	<div class="uk-margin-small-top uk-margin-medium-top">
					 		<span>Stay in touch:</span>
			               	<a href="https://www.facebook.com/CrusadeHimalaya" class="uk-margin-left social-icons" ><i class="fab fa-facebook-f"></i></a>
			               	<a href="https://twitter.com/CrusadeHimalaya" class="uk-margin-left social-icons"><i class="fab fa-twitter"></i></a>
			               	<a href=" https://www.instagram.com/crusadehimalaya" class="uk-margin-left social-icons"><i class="fab fa-instagram"></i></a>
			               	<a href="https://plus.google.com/u/1/106104859609511991656" class="uk-margin-left social-icons"><i class="fab fa-google-plus-g"></i></a>
			            </div>
					
				</div>
		    </div>
		    <div class="uk-width-1-2@s  uk-padding-remove-horizontal">
				<div class="uk-height-large  uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light comingsoon"  data-src="{{asset('img/nepalflag.jpg')}}" uk-img>
					<div class="uk-grid-small uk-child-width-auto comingsoon-heading" uk-grid uk-countdown="date: 2019-01-02T12:06:35+00:00">
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
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
{{-- <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
<script src="{{asset('js/app.js')}}">  </script>
@yield('scripts')
</html>


