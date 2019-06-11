<!DOCTYPE html>
<html>
<head>
	<meta name="robots" content="index, follow">
	<link rel="stylesheet" href="{{ asset('css/pdf/bootstrap.min.css') }}" media="all">
	<link rel="stylesheet" href="{{ asset('css/pdf/iconfont/iconstyle.css') }}" media="all">
	<link rel="stylesheet" href="{{ asset('css/pdf/font-awesome/css/font-awesome.css') }}" media="all">
	<link rel="stylesheet" href="{{ asset('css/pdf/main.min.css') }}" media="all">
	<style>
	body{
		color: #333 !important;
	}
	.container{
		background-color: white !important
	}
	ul.trip-overview .fa, ul.trip-overview .glyphicon, ul.trip-overview [class^=icon-]{
		color:#2ed3ae !important;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="tab-panel active" id="overview">
			<div class="row">
				<div class="col-sm-6 col-lg-6 col-md-6">
					<h3>{{ $tour->days }} Days {{ $tour->title }}</h3>
					<div class="border-box">
						<br>
						<div class="box-title">Trip Overview</div>
						<ul class="trip-overview">
							<li>
								<span class="icon-road-sign"></span>
								<div class="detail">
									<div class="title">Trip profile</div>
									<div class="desc">{{ $tour->days }} Day {{ $tour->title }}</div>
								</div>
							</li>
							<li>
								<span class="icon-dollar"></span>
								<div class="detail">
									<div class="title">Cost</div>
									<div class="desc">USD {{ $tour->price }}</div>
								</div>
							</li>
							<li>
								<span class="icon-camp-fire"></span>
								<div class="detail">
									<div class="title">Type</div>
									<div class="desc">{{ $tour->category->name }}</div>
								</div>
							</li>
							<li>
								<span class="icon-calendar"></span>
								<div class="detail">
									<div class="title">Trek Days</div>
									<div class="desc">{{ $tour->days }} Days</div>
								</div>
							</li>
							<li>
								<span class="icon-door-tag "></span>
								<div class="detail">
									<div class="title">Accomodation</div>
									<div class="desc">{{ $tour->accommodation->name }}</div>
								</div>
							</li>
							<li>
								<span class="icon-bowl"></span>
								<div class="detail">
									<div class="title">Meal</div>
									<div class="desc">{{ $tour->meal->name }}</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-lg-6 col-md-6">
					<h4>What's included ?</h4>
					<ul class="included">
						@foreach($tour->includes as $included)
						<li>{{$included->name}}</li>
						@endforeach
					</ul>
					<h4>What's excluded ?</h4>
					<ul class="excluded">
						@foreach($tour->excludes as $excluded)
						<li>{{$excluded->name}}</li>
						@endforeach
					</ul> 
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					@foreach($tour->itinerary as $itinerary)
					<h4>Day {{$itinerary->day}}: {{ $itinerary->title }}</h4>				
					{!! $itinerary->plan !!}
					@endforeach
				</div>
			</div>
		</div>
	</div>
</body>
</html>