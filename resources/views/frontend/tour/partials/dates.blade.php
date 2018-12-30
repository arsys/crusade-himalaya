@forelse($departures as $departure)
<tr>
    <td>{{ date("jS M, Y", strtotime($departure->start))}}</td>
    <td>{{ date("jS M, Y", strtotime($departure->end))}}</td>
    <td>{{$departure->slot}} space left</td>
    <td>USD {{$departure->price}}</td>
    <td><a class="uk-button btn" href="/bookingstep1">Book Now</a></td>
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