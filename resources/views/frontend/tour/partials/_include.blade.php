<div class="uk-grid-divider uk-child-width-expand@s uk-margin-medium-bottom text-color include-wrapper" uk-grid>
    <div>
        <ul class="uk-child-width-expand" uk-tab>
            <li class="uk-active"><a href="#">Luxury Includeds & Excludeds</a></li>
            <li><a href="#">Budget Includeds & Excludeds</a></li>
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
            <li></li>
        </ul>
    </div>
</div>
