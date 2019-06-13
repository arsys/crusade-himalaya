@section('mtitle')
What's On This Month | {{config('app.name')}}
@stop
@section('title')
What's On This Month | {{config('app.name')}}
@stop
@section('description')Happening things this month @stop
@extends('layouts.new')
@section('content')
<section class="image-page-header image-page-header-m" data-src="{{ asset('img/event.jpg') }}" uk-img>
	<div class="page-title__wrapper">

		<div class="uk-position-center-left uk-position-large description-holder description-holder-plain">
			<h1 class="descriptionTitle">What's on</h1>
			<p class="descriptionContent">
				The red letter days in Nepalese calendar resembles to the festivals of Nepal.
				No matter which month of a year you choose to visit, there is always something happening.
				Just time your date to visit these festivals to coincide with culture and tradition endured for
				centuries.
			</p>
		</div>
		<div class="uk-position-large uk-position-bottom-right ">
			<ul class="uk-breadcrumb">
				<li><a href="/" uk-icon="icon: home"></a></li>
				<li class="uk-disabled"><a href="{{ url()->current() }}">What's on</a></li>
			</ul>
		</div>
	</div>
</section>

<section class="section-white uk-visible@m">
	<div class="container">
		<ul class="uk-child-width-expand event-month-list" uk-tab uk-switcher>
			@for($i=1;$i<=12;$i++) <li><a href="#"> {{ date('F', mktime(0, 0, 0, $i, 1)) }} </a></li>
				@endfor
		</ul>
		<ul class="uk-switcher event-list">

			<li class="event-list__item">
				@foreach($jan as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-card-media-left uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($feb as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($mar as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($apr as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($may as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($jun as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($jul as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($aug as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($sep as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($oct as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($nov as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>

			<li class="event-list__item">
				@foreach($dec as $event)
				<div class="eventWrapper" uk-grid>
					<div class="eventImage uk-cover-container uk-width-1-3">
						<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
						<canvas width="600" height="400"></canvas>
					</div>
					<div class="uk-width-2-3">
						<div class="eventContent">
							<h3 class="eventTitle">{{ $event->title }}</h3>
							<ul class="eventDate">
								<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
							</ul>
							<p>{{ $event->description }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</li>
		</ul>
	</div>
</section>
{{--Medium and below --}}
<section class="section-white uk-hidden@m">
	<div class="container">
		<ul uk-accordion class="event-list--sm">

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">January</a>
				<div class="uk-accordion-content">
					@foreach($jan as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">February</a>
				<div class="uk-accordion-content">
					@foreach($feb as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">March</a>
				<div class="uk-accordion-content">
					@foreach($mar as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">April</a>
				<div class="uk-accordion-content">
					@foreach($apr as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">May</a>
				<div class="uk-accordion-content">
					@foreach($may as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">June</a>
				<div class="uk-accordion-content">
					@foreach($jun as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">July</a>
				<div class="uk-accordion-content">
					@foreach($jul as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">August</a>
				<div class="uk-accordion-content">
					@foreach($aug as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">September</a>
				<div class="uk-accordion-content">
					@foreach($sep as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">October</a>
				<div class="uk-accordion-content">
					@foreach($oct as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">November</a>
				<div class="uk-accordion-content">
					@foreach($nov as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>

			<li class="event-list__item">
				<a class="uk-accordion-title" href="#">December</a>
				<div class="uk-accordion-content">
					@foreach($dec as $event)
					<div class="eventWrapper" uk-grid>
						<div class="eventImage uk-card-media-left uk-width-1-3">
							<img src="{{ asset($event->path) }}" alt="{{ $event->title }}" uk-cover>
							<canvas width="600" height="400"></canvas>
						</div>
						<div class="uk-width-2-3">
							<div class="eventContent">
								<h3 class="eventTitle">{{ $event->title }}</h3>
								<ul class="eventDate">
									<li><span uk-icon="icon: calendar"></span> {{ $event->start_date }}</li>
								</ul>
								<p>{{ $event->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</li>
		</ul>
	</div>
</section>
@stop
{{-- @section('scripts')
<script>
	UIkit.tab(".uk-tab").show({{ date('n')-1}});
</script>
@endsection --}}