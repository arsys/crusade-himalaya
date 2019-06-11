<div class="inex-wrapper">
    <h4>What's included ?</h4>
    <ul class="single-includedList">
        @foreach($tour->includes as $include)
        <li class="single-includedList--item">
            <span uk-icon="check"></span>
            {{$include->name}}
        </li>
        @endforeach
    </ul>
    <h4>What's excluded ?</h4>
    <ul class="single-excludedList">
        @foreach($tour->excludes as $exclude)
        <li class="single-excludedList--item">
            <span uk-icon="close"></span>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, architecto.
        </li>
        @endforeach
    </ul>
</div>