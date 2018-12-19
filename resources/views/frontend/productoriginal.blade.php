@extends('layouts.frontend')
@section('content')
{{-- banner start --}}
<section class=" uk-container-expand">
	<div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url('https://source.unsplash.com/1200x800/?camera');">
 	 	<h5 class="uk-text-center uk-margin-auto uk-margin-auto-vertical">Background-image</h1>
		<div class="breadcrumb ">
			<ul class="uk-breadcrumb uk-visible@l" id="breadcrumb">
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
				<li class="uk-disabled"><a>Disabled</a></li>
				<li><span>Active</span></li>
			</ul>
		</div>
		<div class="uk-card uk-card-default mobile-price-info uk-text-center">
			<div class="uk-flex uk-flex-center  uk-hidden@l" uk-grid>
				<div class="uk-width-auto">
					<div class="mobile-days uk-flex uk-flex-row  uk-margin-left ">
						<span class="mobile-count ">15</span>
						<span class="mobile-unit">Days</span>
					</div>
				</div>
				<div class="uk-child-width-expand">
					<div class="mobile-duration uk-flex uk-flex-row ">
						<span class="mobile-price"><sup>$</sup>1500</span>
					</div>
				</div>	
			</div>
		</div>
	</div>	
</section>


{{-- banner end --}}
{{-- sticky tab start --}}
<section class="uk-container" >
	<div class=" uk-container uk-container-expand">
		<div class="uk-grid-small uk-grid-match uk-child-width-expand uk-grid" uk-grid="">
			<div class="uk-width-medium@s uk-first-column uk-visible@l" >
				<div class="uk-panel uk-text-center" uk-sticky="offset:200" id="product-price-wrapper1">
					<div class="uk-flex uk-flex-column sticky-price" id="product-price">
						<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom">		
							<span class="top"> 
								15 Days
							</span>
							<span class="middle uk-flex uk-flex-column">
								<span class="middle-1">From USD</span>
								<span class="middle-2"> <sup>$</sup> 1500</span>
							</span>
							<span class="bottom uk-padding-remove-bottom  uk-flex  uk-flex-column" uk-scrollspy-nav="closest: a; scroll: true; offset: 120">
								
								<a href="#price" class="uk-button uk-button-default uk-margin-remove uk-padding-remove-bottom" id="goto">Dates & Availability</a>
							</span>
						</div>
						<div class="uk-card uk-card-default uk-card-body trip-details">
							<ul class="uk-list uk-list-divider">
								<li>				
						         	<div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
	            						<div class="uk-width-auto uk-first-column">
	                						<i class="fas fa-map-marker-alt" style="font-size: 20px;"></i>      
	                					</div>
	                					<div>
	                    					<h6 class="uk-margin-remove">Destination</h6>
											<p style="font-size: 10px;" class="uk-margin-remove">Nepal</p>
	                					</div>
	        						</div>
	                			</li>

								<li>
									<div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
	            						<div class="uk-width-auto uk-first-column">
	                						<i class="fas fa-map-marker-alt" style="font-size: 20px;"></i>     
	                					</div>
	                					<div>
	                    					<h6 class="uk-margin-remove">Max altitude</h6>
											<p style="font-size: 10px;" class="uk-margin-remove">6160</p>
	                					</div>
	    							</div>
								</li>
								<li>
									<div class="uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle uk-grid" uk-grid="">
	            						<div class="uk-width-auto uk-first-column">
	                						<i class="fas fa-map-marker-alt" style="font-size: 20px;"></i>
	                					</div>
	                					<div>
	                    					<h6 class="uk-margin-remove">Accomodation</h6>
											<p style="font-size: 10px;" class="uk-margin-remove">Hotels/Lodge</p>
	                					</div>
	    							</div>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div>
					<div class="uk-card uk-card-default">
					
					<div class="uk-panel " id="tab-wrapper"  uk-sticky="offset:0" >
						<ul uk-scrollspy-nav="closest: li; scroll: true; offset: 120" class="uk-nav uk-nav-default uk-nav-center tm-nav uk-nav-parent-icon uk-flex  uk-flex-row " uk-nav>
							<li class="uk-active uk-width-1-4"><a href="#overview">Overview</a></li> 
							<li class="uk-width-1-4"><a href="#itinerary">Itinerary</a></li>
							<li class="uk-width-1-4"><a href="#price">Price & Availability </a></li>
							<li class="uk-width-1-4"><a href="#review">Reviews</a></li>
						</ul>
					</div>	
				
				</div>
			</div>

			
		</div>
	</div>
</section>
{{-- sticky tab end--}}
{{-- content start --}}
<section class="uk-container uk-margin-small-top uk-margin-large-bottom" id="content-wrapper">
	<div class="uk-grid-small uk-grid-match uk-child-width-expand uk-grid" uk-grid="">
		<div class="left-img uk-width-medium@s uk-first-column uk-visible@l">

		</div>
		<div>
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom" id="overview">
				<div class="uk-panel uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top" >
					<h3>Overview</h3>
					<img src="https://source.unsplash.com/1024x512/?mac" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque id ad harum atque nihil? Repellendus inventore quis cupiditate cum dicta, itaque, perferendis officiis totam doloribus commodi provident, laborum harum ipsam delectus voluptatibus sequi et saepe at quia mollitia, eaque nesciunt. Mollitia, corporis iste, perferendis maiores aliquid magni harum iusto aut incidunt obcaecati dolore nulla autem. Repellat neque, fugit autem alias accusamus itaque voluptatibus. Blanditiis aut doloribus tempora doloremque ut vero sunt iste reiciendis id aliquam. Ipsa, molestias temporibus expedita delectus assumenda possimus reprehenderit rem vero obcaecati repellendus numquam, corporis vel voluptas pariatur eligendi neque eaque sint hic culpa ut quae.</p>
				</div>
			</div>
			<!-- itinerary start -->
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom " id="itinerary">
				<div class="uk-panel uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top">
					<h3>3 Days Itinerary</h3>
					<ul uk-accordion="multiple: true">
						<li class="uk-open">
							<a class="uk-accordion-title" href="#">Item 1</a>
							<div class="uk-accordion-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</li>
						<li>
							<a class="uk-accordion-title" href="#">Item 2</a>
							<div class="uk-accordion-content">
								<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
							</div>
						</li>
						<li>
							<a class="uk-accordion-title" href="#">Item 3</a>
							<div class="uk-accordion-content">
								<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- itinerary end -->
			<!-- pricing start -->	
			<div class="uk-card uk-card-default uk-card-body " id="price">
				<div class="uk-panel uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top">
					<h3 class="uk-card-title">Pricing & Availability</h3>
					<div class="uk-overflow-auto">					
						<table class="uk-table uk-table-hover uk-table-divider">
							<thead>
								<tr>
									<th>Table Heading</th>
									<th>Table Heading</th>
									<th>Table Heading</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Table Data</td>
									<td>Table Data</td>
									<td>Table Data</td>
								</tr>
								<tr>
									<td>Table Data</td>
									<td>Table Data</td>
									<td>Table Data</td>
								</tr>
								<tr>
									<td>Table Data</td>
									<td>Table Data</td>
									<td>Table Data</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>				
			</div>
			<!-- pricing end-->
			<!-- review start -->
			<div class="uk-card uk-card-default uk-card-body uk-margin-small-bottom uk-margin-small-top" id="review">
				<h2 class="uk-heading-line uk-text-center"><span>Review</span></h2> 
				<div class="uk-child-width-1-1@s uk-grid-match" uk-grid>

					<div class="uk-text-left" uk-grid>
						<div class="uk-width-1-4">
							<img src="https://via.placeholder.com/150x150" alt="" >
						</div>
						<div class="uk-width-3-4">
							<span style="font-weight:bold">CLient name</span>
							<p class="review-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
							<span uk-icon="location" style="color:black"></span>
							<span style="font-weight:bold">CLient name</span>
							<span class="rating">
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
							</span>
						</div>
					</div> 
					<div class="uk-text-left" uk-grid>
						<div class="uk-width-1-4">
							<img src="https://via.placeholder.com/150x150" alt="" >
						</div>
						<div class="uk-width-3-4">
							<span style="font-weight:bold">CLient name</span>
							<p class="review-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
							<span uk-icon="location" style="color:black"></span>
							<span style="font-weight:bold">CLient name</span>
							<span class="rating">
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
							</span>
						</div>
					</div>
					<div class="uk-text-left" uk-grid>
						<div class="uk-width-1-4">
							<img src="https://via.placeholder.com/150x150" alt="" >
						</div>
						<div class="uk-width-3-4">
							<span style="font-weight:bold">CLient name</span>
							<p class="review-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
							<span uk-icon="location" style="color:black"></span>
							<span style="font-weight:bold">CLient name</span>
							<span class="rating">
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
								<span uk-icon="star" style="color:black"></span>
							</span>
						</div>
					</div>
				</div> 
				<a class="uk-button uk-button-default uk-align-center uk-width-medium uk-text-center " href="#">Read More</a>
			</div>
			<!-- review end -->

		</div>
	</div>
</section>
{{-- content end --}}
<!-- related tour start -->
<section class="similar-tours  uk-padding-small uk-padding-remove-horizontal" id="related-tours" >
	<div class="uk-container uk-container-expand ">
		<h3 class="uk-text-center">Related tours</h3>
		<div class="uk-child-width-1-1 uk-child-width-1-4@m uk-child-width-1-2@s  uk-grid-match uk-grid-small " uk-grid>
			
			@for ($i = 1; $i <= 4; $i++)
			<div>
				<div class="uk-card uk-card-default uk-text-center ">
					<div class="uk-inline-clip uk-transition-toggle" tabindex="0" id="similar-tours-img">
						<img src="https://source.unsplash.com/400x300/?camera" alt="">
						<div class="uk-position-bottom uk-overlay uk-overlay-default" id="meta-title">
							<a href="#"><h4>Package Title</h4></a>
						</div>
					</div>
					<div class="uk-flex uk-flex-center">
						<div class="left uk-flex uk-flex-column">
							<span class="count">15</span>
							<span class="unit">Days</span>
						</div>
						<div class="center uk-flex uk-flex-row">
							<span class="price-info">From USD</span>
							<span class="price"><sup>$</sup>1500</span>
						</div>
						<a class="uk-button uk-button-default uk-width-auto uk-button-large " href="#">Discover</a>
					</div>
				</div>
			</div>

			
			@endfor

		</div>
	</div>
</section>

@stop