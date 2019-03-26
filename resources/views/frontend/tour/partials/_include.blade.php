<div class="uk-grid-divider uk-child-width-expand@s uk-margin-medium-bottom text-color include-wrapper" uk-grid>
    @if ($tour->includes->count() > 0 && $tour->excludes->count() > 0 && $tour->budgetIncludes->count() > 0 && $tour->budgetExcludes->count() > 0)
    <div>
            <ul class="uk-child-width-expand" uk-tab>
                <li class="uk-active"><a href="#">Luxury Style</a></li>
                <li><a href="#">Budget Style</a></li>
            </ul>
            <ul class="uk-switcher">
                <li>
                    <div>
                        <h4>Includes</h4>
                        <ul class="uk-list includes">
                            @foreach($tour->includes as $include)
                            <li><span class="uk-margin-small-right included" uk-icon="check"></span>{{ $include->name }}</li>
                            @endforeach
                        </ul>

                    </div>
                    <div>
                        <h4 class="">Excludes</h4>
                        <ul class="uk-list excludes">
                            @foreach($tour->excludes as $exclude)
                            <li><span class="uk-margin-small-right excluded" uk-icon="close"></span>{{ $exclude->name }}</li>
                            @endforeach
                        </ul>

                    </div>
                </li>
                <li>
                    <div>
                    <h4>Includes</h4>
                    <ul class="uk-list includes">
                        @foreach($tour->budgetIncludes as $include)
                        <li><span class="uk-margin-small-right included" uk-icon="check"></span>{{ $include->name }}</li>
                        @endforeach
                    </ul>

                    </div>
                    <div>
                        <h4 class="">Excludes</h4>
                        <ul class="uk-list excludes">
                            @foreach($tour->budgetExcludes as $exclude)
                            <li><span class="uk-margin-small-right excluded" uk-icon="close"></span>{{ $exclude->name }}</li>
                            @endforeach
                        </ul>

                    </div>
                </li>
            </ul>
        </div>
    @else
    <div>
        <h4>Includes</h4>
        <ul class="uk-list includes">
            @foreach($tour->includes as $include)
            <li><span class="uk-margin-small-right included" uk-icon="check"></span>{{ $include->name }}</li>
            @endforeach
        </ul>

        <h4>Excludes</h4>
        <ul class="uk-list includes">
            @foreach($tour->excludes as $exclude)
            <li><span class="uk-margin-small-right included" uk-icon="close"></span>{{ $exclude->name }}</li>
            @endforeach
        </ul>

    </div>
    @endif

</div>
