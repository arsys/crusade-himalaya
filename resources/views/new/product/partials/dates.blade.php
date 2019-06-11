@forelse($departures as $departure)
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