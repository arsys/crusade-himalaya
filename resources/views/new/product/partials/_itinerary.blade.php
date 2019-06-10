<div class="itinerary-wrapper">
    <ul class=" itinerary-list" uk-accordion="multiple: true">
        @foreach($tour->itinerary as $itinerary)
        <li class="itinerary-list-item">

            <a class="uk-accordion-title  itinerary-item-link" href="#">
                <span class="itinerary-item-span"></span>Day {{ $itinerary->day }} : {{ $itinerary->title }}
            </a>


            <div class="uk-accordion-content  itinerary-item-content">
                {!! $itinerary->plan !!}
            </div>
        </li>
        @endforeach
    </ul>
</div>