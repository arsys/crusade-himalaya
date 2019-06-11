<div uk-grid class="uk-child-width-1-4@m uk-child-width-1-1@s  searchWrapper">
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
            <option value="1">January</option>
            <option value="2">Feberuary</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
    </div>
    <div class="search-wrapper">
        <a href="#" class="button-default" id="find-dates">Search</a>
    </div>
</div>
<div class="departureWrapper">
    <table>
        <thead>
            <tr>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <div class="uk-position-bottom-center">
            <span uk-spinner="ratio: 3" class="ajaxloader" style="display: none"></span>
        </div>
        <div class="uk-position-bottom-center" style="display: none;">
            <span uk-spinner="ratio: 3" class="ajaxloader"  ></span>
        </div>
        <tbody class="ajaxloadmoredeparture table-wrap">
            @foreach($departures as $departure)
            <tr>
                <td>{{ date("jS M, Y", strtotime($departure->start))}}</td>
                <td>{{ date("jS M, Y", strtotime($departure->end))}}</td>
                <td>{{$departure->slot}} space left </td>
                <td>
                    <form action="{{ route('frontend.tripBook', $tour->slug) }}" method="POST">
                        @csrf
                        <input type="hidden" name="date" value="{{ $departure->start }}">
                        <button type="submit" class="button-primary">Join</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>