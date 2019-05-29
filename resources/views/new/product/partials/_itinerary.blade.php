<div class="itinerary-wrapper">
    <ul class=" itinerary-list" uk-accordion="multiple: true">
        @for($i=1;$i<=5;$i++) <li class="itinerary-list-item">

            <a class="uk-accordion-title  itinerary-item-link" href="#">
                <span class="itinerary-item-span"></span>Day {{ $i }} :
                Lorem ipsum dolor sit amet.
            </a>


            <div class="uk-accordion-content  itinerary-item-content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem reprehenderit
                est alias magni obcaecati atque veritatis aperiam saepe, dolorem incidunt?
            </div>
            </li>
            @endfor
    </ul>
</div>