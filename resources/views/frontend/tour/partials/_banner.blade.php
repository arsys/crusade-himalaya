<section class=" uk-container-expand">
	<div class="uk-height-large uk-width-*@s uk-background-cover uk-light page-cover uk-first-column" data-src="{{ asset($tour->image->banner) }}" uk-img>
		<div class="uk-overlay-primary uk-position-cover overlay"></div>
		<h3 class="uk-text-center uk-margin-auto uk-margin-auto-vertical product-main-heading">{{ $tour->title }}</h3>
			<div class="breadcrumb uk-visible@l ">
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
