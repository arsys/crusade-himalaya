<div class="uk-panel uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top">		
	<div class="uk-container-expand ">
		<div class="uk-card uk-card-default uk-card-body ">
			<div uk-grid class="uk-child-width-1-4@m uk-child-width-1-1@s  uk-grid-match uk-grid-small search-wrapper">
				<div>
					<p class="text-color">Please Check Available Dates for The Year:</p>
					<input type="hidden" value="{{$tour->id}}" id="tour-id">
				</div>
				<div>
					<select class="uk-select" id="travel-year">Select year
						<option value="" disabled selected>Select year</option>
						@for($i= date('Y'); $i <= date('Y')+2; $i++)
						<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
				</div>
				<div>
					<select class="uk-select text-color" id="travel-month">Select Month
						<option value="" disabled selected>Select Month</option>
						<option value="1">Jan</option>
						<option value="2">Feb</option>
						<option value="3">Mar</option>
						<option value="4">Apr</option>
						<option value="5">May</option>
						<option value="6">Jun</option>
						<option value="7">Jul</option>
						<option value="8">Aug</option>
						<option value="9">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
					</select>
				</div>
				<div class="search-wrapper">
					<a href="#" class="contact-button search-btn" id="find-dates">Search</a>
				</div>
			</div>
		</div>
	</div>
	<!--table start-->
	<div class="uk-overflow-auto">					
		<table class="uk-table uk-table-hover uk-table-divider">
			<thead>
				<tr class="table-wrapper">
					<th>Start Date</th>
					<th>End Date</th>
					<th>Status</th>
					<th>Cost</th>
					<th></th>
				</tr>
			</thead>
			{{-- <div id="ajaxloader" style="display: none;">Loading...</div> --}}
			<div class="uk-position-bottom-center" style="display: none;">
				<span uk-spinner="ratio: 3" class="ajaxloader"  ></span>
			</div>
			
			<tbody class="ajaxloadmoredeparture">
				@foreach($departures as $departure)
				<tr>
					<td class="text-color">{{ date("jS M, Y", strtotime($departure->start))}}</td>
					<td class="text-color">{{ date("jS M, Y", strtotime($departure->end))}}</td>
					<td class="text-color">{{$departure->slot}} space left</td>
					<td class="text-color">USD {{$departure->price}}</td>
					<td class="text-color"><a class="uk-button btn" href="{{route('trip.stepOne',[$tour->slug,$departure->start])}}">Book Now</a></td>
					<td class="text-color"><a class="uk-button btn" href="join/{{ $tour->slug }}/{{ $departure->start }}">Book Now</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
	<!--table end-->
</div>