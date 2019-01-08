<section class="uk-section uk-section-xsmall uk-section-default ">
    <div class="uk-margin-medium-top uk-margin-medium-bottom ">
        <div class="uk-container">
            <h2 class="uk-h1  uk-text-center uk-margin-remove-bottom home-title uk-margin-large-bottom"><span>DESTINATION</span></h2>
            <p class="uk-text-center uk-margin-remove-top home-heading-secondary uk-margin-large-bottom  " id="home-sub-title"><span>Ready to fall for nepalese charm ? start here </span></p>
            <div class="uk-grid-collapse uk-child-width-1-2 uk-child-height-1-2 uk-height-match uk-grid" uk-grid>
                <div class="uk-first-column uk-padding-xsmall">
                    @foreach($odds as $odd)
                    @if($loop->iteration % 2 == 0)
                    <div class="destination ">
                        <a href="{{ route('fetchByRegion',$odd->slug) }}"><img src="{{ asset($odd->thumb) }}" alt="" ></a>
                        <div class="dest-topic">
                            <a href="{{ route('fetchByRegion',$odd->slug) }}">
                                <div class="dest-title">{{ $odd->name }}</div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <div class="uk-child-width-expand@s uk-text-center uk-height-match uk-grid   uk-grid-collapse" uk-grid>
                        @foreach($odds as $odd)
                        @if($loop->iteration % 2 != 0)
                        <div class="{{$loop->first ? 'uk-first-column': '' }}   destination uk-padding-xsmall  ">
                            <a href="{{ route('fetchByRegion',$odd->slug) }}"><img src="{{ asset($odd->thumb) }}" alt=""></a>
                            <div class="dest-topic">
                                <a href="{{ route('fetchByRegion',$odd->slug) }}">
                                    <div class="dest-title">{{ $odd->name }}</div>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>


                <div class="uk-first-column uk-padding-xsmall">
                    <div class="uk-child-width-expand@s uk-text-center uk-grid uk-height-match  uk-grid-collapse uk-padding-xsmall" uk-grid>
                        @foreach($evens as $even)
                        @if($loop->iteration % 2 != 0)
                        <div class="{{ $loop->first ? 'uk-first-column' : '' }} uk-panel  destination ">
                            <a href="{{ route('fetchByRegion',$even->slug) }}"><img src="{{ asset($even->thumb) }}" alt=""></a>
                            <div class="dest-topic">
                                <a href="{{ route('fetchByRegion',$even->slug) }}">
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
                        <a href="{{ route('fetchByRegion',$even->slug) }}"><img src="{{ asset($even->thumb) }}" alt=""></a>
                        <div class="dest-topic">
                            <a href="{{ route('fetchByRegion',$even->slug) }}">
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