	@include('backend.partials._nav-header')
	<!-- BEGIN BASE-->
	<div id="base">

		<!-- BEGIN OFFCANVAS LEFT -->
		<div class="offcanvas">
		</div><!--end .offcanvas-->
		<!-- END OFFCANVAS LEFT -->
		<!-- BEGIN CONTENT-->
		<div id="content">
			<section>
				<div class="section-body">
					@yield('content')
				</div>
			</section>
		</div>

		<!-- BEGIN MENUBAR-->
		<div id="menubar" class="animate ">
			<div class="menubar-fixed-panel">
				<div>
					<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
						<i class="fa fa-bars"></i>
					</a>
				</div>
				<div class="expanded">
					<a href="{{ route('dashboard') }}">
						<span class="text-lg text-bold text-primary ">Crucade&nbsp;Himalaya</span>
					</a>
				</div>
			</div>
			<div class="menubar-scroll-panel">

				<!-- BEGIN MAIN MENU -->
				<ul id="main-menu" class="gui-controls">

					<!-- BEGIN DASHBOARD -->
					<li>
						<a href="{{ route('dashboard') }}" >
							<div class="gui-icon"><i class="md md-home"></i></div>
							<span class="title">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="{{ route('carousel.index') }}">
							<div class="gui-icon"><i class="md md-web"></i></div>
							<span class="title">Carousel</span>
						</a>
					</li>
					<li>
						<a href="{{ route('tour.featured') }}">
							<div class="gui-icon"><i class="fas fa-star md"></i></div>
							<span class="title">Featured Tours</span>
						</a>
					</li>
					<!-- END DASHBOARD -->

					{{-- BEGIN TOUR --}}
					<li class="gui-folder">
						<a>
							<div class="gui-icon"><i class="fa fa-suitcase"></i></div>
							<span class="title">Tours</span>
						</a>
						<!--start submenu -->
						<ul>
							<li><a href="{{ route('tour.index') }}"><span class="title">All tours</span></a></li>
							{{-- <li><a href="{{ route('featureds') }}"><span class="title">Featured</span></a></li> --}}
							<li><a href="{{ route('tour-category.index') }}"><span class="title">Category</span></a></li>
							<li><a href="{{ route('meals.index') }}"><span class="title">Meal</span></a></li>
							<li><a href="{{ route('group.index') }}"><span class="title">Group Size</span></a></li>
							<li><a href="{{ route('difficulty.index') }}"><span class="title">Difficulty</span></a></li>
							<li><a href="{{ route('accommodation.index') }}"><span class="title">Accommodation</span></a>
							</li>
							<li><a href="{{ route('regions.index') }}"><span class="title">Region</span></a></li>
							<li><a href="{{ route('includes.index') }}"><span class="title">Includes</span></a></li>
							<li><a href="{{ route('excludes.index') }}"><span class="title">Excludes</span></a></li>
						</ul>
					</li>
					<li>
						<a href="{{ route('departure.index') }}">
							<div class="gui-icon"><i class="fas fa-plane-departure md"></i></i></div>
							<span class="title">Departure</span>
						</a>
					</li>					
					<li>
						<a href="{{ route('pages.index') }}">
							<div class="gui-icon"><i class="fas fa-file-alt md"></i></div>
							<span class="title">Page</span>
						</a>
					</li>
					<li>
						<a href="{{ route('media.index') }}" >
							<div class="gui-icon"><i class="far fa-images fa md"></i></div>
							<span class="title">Media</span>
						</a>
					</li>	
					<li>
						<a href="{{ route('announcement.index') }}">
							<div class="gui-icon"><i class="fas fa-ticket-alt md"></i></div>
							<span class="title ">Announcement</span>
						</a>
					</li>	
					<li>
						<a href="{{ route('partner.index') }}">
							<div class="gui-icon"><i class="far fa-handshake md"></i></div>
							<span class="title ">Partners</span>
						</a>
					</li>	

					<li>
						<a href="{{ route('events.index') }}">
							<div class="gui-icon"><i class="fas fa-calendar-day md"></i></i></div>
							<span class="title ">Events</span>
						</a>
					</li>
					<li class="gui-folder">
						<a>
							<div class="gui-icon"><i class="fa fa-users"></i></div>
							<span class="title">Team</span>
						</a>
						<!--start submenu -->
						<ul>
							<li><a href="{{ route('team.index') }}"><span class="title">Members</span></a></li>
							<li><a href="{{ route('position.index') }}"><span class="title">Position</span></a></li>
						</ul>
					</li>				

					<li>
						<a href="{{ route('setting.index') }}">
							<div class="gui-icon"><i class="fas fa-cog md"></i></div>
							<span class="title ">Setting</span>
						</a>
					</li>
					{{-- END TOUR --}}

				</ul><!--end .main-menu -->
				<!-- END MAIN MENU -->

				<div class="menubar-foot-panel">
					<small class="no-linebreak hidden-folded">
						<span class="opacity-75">Copyright &copy; {{ date('Y') }}</span> <strong>{{ config('app.name') }}</strong>
					</small>
				</div>
			</div><!--end .menubar-scroll-panel-->
		</div><!--end #menubar-->
		<!-- END MENUBAR -->

		<!-- BEGIN OFFCANVAS RIGHT -->
		<div class="offcanvas">


			<!-- END OFFCANVAS CHAT -->

		</div><!--end .offcanvas-->
		<!-- END OFFCANVAS RIGHT -->

	</div><!--end #base-->
		<!-- END BASE -->