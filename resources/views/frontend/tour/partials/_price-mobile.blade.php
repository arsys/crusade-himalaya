<div class="uk-panel uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top">		
	<div class="uk-container-expand ">
		<div class="uk-card uk-card-default uk-card-body ">
			<div uk-grid class="uk-child-width-1-4@m uk-child-width-1-1@s  uk-grid-match uk-grid-small search-wrapper-mob">
				<div>
					<p>Please Check Available Dates for The Year:</p>
					<input type="hidden" value="{{$tour->id}}" id="tour-id-mob">
				</div>
				<div>
					<select class="uk-select" id="travel-year-mob">Select year
						<option value="" disabled selected>Select year</option>
						@for($i= date('Y'); $i <= date('Y')+2; $i++)
						<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
				</div>
				<div>
					<select class="uk-select" id="travel-month-mob">Select Month
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
					<a href="#" class="uk-button-default" id="find-dates-mob">Search</a>
				</div>
			</div>
		</div>
	</div>
	<!--table start-->
	<div class="uk-overflow-auto uk-padding-large ">					
		<table class="uk-table uk-table-hover uk-table-divider">
			<thead>
				<tr>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Status</th>
					<th>Cost</th>
					<th></th>
				</tr>
			</thead>
			<span uk-spinner="ratio: 3" class="ajaxloader" style="display: none;" ></span>
			<tbody class="ajaxloadmoredeparture">
				@foreach($departures as $departure)
				<tr>
					<td>{{ date("jS M, Y", strtotime($departure->start))}}</td>
					<td>{{ date("jS M, Y", strtotime($departure->end))}}</td>
					<td>{{$departure->slot}} space left</td>
					<td>USD {{$departure->price}}</td>
					<td>
						<form action="{{ route('trip.stepOne',$tour->slug) }}" method="POST">
							@csrf
							<input type="hidden" name="date" value="{{ $departure->start }}">
							<button class="uk-button btn">Join</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
	<!--table end-->
</div>