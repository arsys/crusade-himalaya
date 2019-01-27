@forelse($departures as $departure)
<tr class="table-row">
    <td class="text-color">{{ date("jS M, Y", strtotime($departure->start))}}</td>
    <td class="text-color">{{ date("jS M, Y", strtotime($departure->end))}}</td>
    <td class="text-color">{{$departure->slot}} space left</td>
    <td class="text-color">USD {{$departure->price}}</td>
    <td class="text-color">
        <form action="{{ route('trip.stepOne',$tour->slug) }}" method="POST">
            @csrf
            <input type="hidden" name="date" value="{{ $departure->start }}">
            <button class="uk-button btn">Join</button>
        </form>
    </td>
</tr>
@empty
<tr>
    <td colspan="5">
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>No departure dates found.</p>
        </div>
    </td>
</tr>
@endforelse