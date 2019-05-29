<div uk-grid class="uk-child-width-1-4@m uk-child-width-1-1@s  searchWrapper">
    <div>
        <p class="text-color">Please Check Available Dates for The Year:</p>
        <input type="hidden" value="1" id="tour-id">
    </div>
    <div>
        <select class="uk-select" id="travel-year">Select year
            <option value="" disabled selected>Select year</option>
            @for($i= date('Y'); $i <= date('Y')+2; $i++) <option value="{{ $i }}">{{ $i }}</option>
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

        <tbody class="ajaxloadmoredeparture table-wrap">
            {{-- @foreach($departures as $departure)
            <tr class="table-row">
                <td class="text-color">{{ date("jS M, Y", strtotime($departure->start))}}</td>
            <td class="text-color">{{ date("jS M, Y", strtotime($departure->end))}}</td>
            <td class="text-color">{{$departure->slot}} space left</td>
            <td class="text-color">
                <form action="{{ route('trip.stepOne',$tour->slug) }}" method="POST">
                    @csrf
                    <input type="hidden" name="date" value="{{ $departure->start }}">
                    <button class="uk-button btn">Join</button>
                </form>
            </td>
            </tr>
            @endforeach --}}

            <tr>
                <td>14th Aug, 2019</td>
                <td>14th Aug, 2019</td>
                <td>7 Space</td>
                <td>
                    <a href="http://" class="button-primary">Button</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>