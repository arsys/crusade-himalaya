<!-- <div class="uk-panel uk-padding-large uk-padding-remove-horizontal uk-padding-remove-top">		
	<div class="uk-container-expand ">
		<div class="uk-card uk-card-default uk-card-body ">
			<div uk-grid class="uk-child-width-1-4@m uk-child-width-1-1@s  uk-grid-match uk-grid-small">
				<div class="search-wrapper">
					<p>Please Check Available Dates for The Year:</p>
					<input type="hidden" value="{{$tour->id}}" id="tour-id">
				</div>
				<div class="search-wrapper">
					<select class="uk-select" id="year">Select year
						<option value="" disabled selected>Select year</option>
						@for($i= date('Y'); $i <= date('Y')+2; $i++)
						<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
				</div>
				<div class="search-wrapper">
					<select class="uk-select" id="month">Select Month
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
					<a class="uk-button-default uk-button" id="fetch-dates"></a>
				</div>
			</div>
		</div>
	</div>
	table start
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
			{{-- <div id="ajaxloader" style="display: none;">Loading...</div> --}}
			<span uk-spinner="ratio: 3" id="ajaxloader" style="display: none;" ></span>
			<tbody class="ajaxloadmoredeparture">
				@foreach($departures as $departure)
				<tr>
					<td>{{ date("jS M, Y", strtotime($departure->start))}}</td>
					<td>{{ date("jS M, Y", strtotime($departure->end))}}</td>
					<td>{{$departure->slot}} space left</td>
					<td>USD {{$departure->price}}</td>
					<td><a class="uk-button btn" href="/bookingstep1">Book Now</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>	
	table end
</div> -->

<div class="card">
	<div class="card-title">
		<div class="row wrapper">
			<div class="col s12 m6 l5">
				<p class="uk-margin-left">Please Check Available Dates for The Year of:</p>
				<input type="hidden" value="{{$tour->id}}" id="tour-id">
			</div>
			<div class="col s12 m6 l7">
				<div class="input-field col s12  m4 l4">
					<select id="travel-month">
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
				<div class="input-field col s12  m4 l4">
					<select id="travel-year">
						<option value="" disabled selected>Select Year</option>
						@for($i=date('Y');$i<=date('Y')+2;$i++)
						<option value="{{$i}}">{{$i}}</option>
						@endfor
					</select>
				</div>
				<div class="col s12 m4 l4">
					<a class="waves-effect waves-light btn center uk-margin-top uk-margin-left search"
					id="fetch-dates">search</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="ajaxloader" style="display: none;">Loading...</div>
<div class="row">
	<div class="col s12">
		<table class="centered responsive-table ">
			<thead>
				<tr>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Status</th>
					<th>1 person</th>
					<th></th>
				</tr>
			</thead>
			<tbody class="ajaxloadmoredeparture">
				@include('frontend.tour.partials.dates')
			</tbody>
		</table>
	</div>
</div>