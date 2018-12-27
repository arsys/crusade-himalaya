<section class="uk-section uk-section-xsmall uk-section-default ">
    <div class="uk-margin-medium-top uk-margin-medium-bottom ">
        <div class="uk-container">
            <h2 class=" uk-text-center home-heading-primary uk-text-center uk-margin-large-bottom"><span>DESTINATION</span></h2>
            <div class="uk-grid-collapse uk-child-width-1-2 uk-child-height-1-2 uk-grid" uk-grid="">
                <div class="uk-first-column">
                    @foreach($odds as $odd)
                    @if($loop->iteration % 2 == 0)
                    <div class="destination">
                        <a href="/destination"><img src="{{ asset($odd->thumb) }}" alt="" class="uk-padding-xsmall dest-image"></a>
                        <div class="dest-topic">
                            <a href="/destination">
                                <div class="dest-title">{{ $odd->title }}</div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="uk-child-width-expand@s uk-text-center uk-grid uk-grid-collapse" uk-grid="">
                        @foreach($odds as $odd)
                        @if($loop->iteration % 2 != 0)
                        <div class="{{$loop->first ? 'uk-first-column': '' }} uk-panel uk-padding-xsmall destination">
                            <a href="/destination"><img src="{{ asset($odd->thumb) }}" alt="" class="dest-image"></a>
                            <div class="dest-topic">
                                <a href="/destination">
                                    <div class="dest-title">{{ $odd->name }}</div>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>


                <div>
                    <div class="uk-child-width-expand@s uk-text-center uk-grid uk-grid-collapse" uk-grid="">
                        @foreach($evens as $even)
                        @if($loop->iteration % 2 != 0)
                        <div class="{{ $loop->first ? 'uk-first-column' : '' }} uk-panel uk-padding-xsmall destination">
                            <a href="/destination"><img src="{{ asset($even->thumb) }}" alt="" class="dest-image"></a>
                            <div class="dest-topic">
                                <a href="/destination">
                                    <div class="dest-title">{{ $even->name }}</div>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @foreach($evens as $even)
                    @if($loop->iteration % 2 == 0)
                    <div class="destination">
                        <a href="/destination"><img src="{{ asset($even->thumb) }}" alt="" class="uk-padding-xsmall" class="dest-image"></a>
                        <div class="dest-topic">
                            <a href="/destination">
                                <div class="dest-title">{{ $even->name }}</div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>