<section class=" uk-container-expand">
	<div class="uk-height-large uk-flex  uk-light uk-background-cover uk-light" data-src="{{ asset($tour->image->banner) }}" uk-img>
		<h5 class="uk-text-center uk-margin-auto uk-margin-auto-vertical strike">{{ $tour->title }}</h1>
			<div class="breadcrumb ">
				<ul class="uk-breadcrumb  " id="breadcrumb">
					<li><a href="/" uk-icon="icon: home"></a></li>
					<li><a href="{{ route('fetchByCategory',$tour->category->slug) }}">{{ $tour->category->name }}</a></li>
					<li>
						<a href="{{ route('region2package',[$tour->category->slug,$tour->region->slug]) }}">{{ $tour->region->name }}</a>
					</li>
					<li><a href="{{url()->current()}}">{{ $tour->title }}</a></li>
				</ul>
			</div>		
		</div>	
	</section>