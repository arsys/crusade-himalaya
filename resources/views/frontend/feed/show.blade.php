<?xml version="1.0" encoding="UTF-8" ?>
<root>
    <title>{{$tour->title}}</title>
    <days>{{$tour->days}}</days>
    <LuxuryPrice>USD {{$tour->price}}</LuxuryPrice>
    <BudgetPrice>USD {{$tour->budgetPrice}}</BudgetPrice>
    @if (!empty($tour->singleSupp))
    <SinglePersonAdditional>USD {{$tour->singleSupp}}</SinglePersonAdditional>
    @endif
    <MaxElevation>{{$tour->elevation}}</MaxElevation>
    <DifficultyLevel>{{$tour->difficulty->name}}</DifficultyLevel>
    <GroupSize>{{$tour->group->name}}</GroupSize>
    <Category>{{$tour->category->name}}</Category>
    @if (!empty($tour->region))
    <Region>{{$tour->region->name}}</Region>
    @endif
	<Accommodation>{{$tour->accommodation->name}}</Accommodation>
	<MealPlan>{{$tour->meal->name}}</MealPlan>
	<overview>
        {!!$tour->overview!!}
    </overview>
    <itinerary>
            @foreach($tour->itinerary as $itinerary)
            <Day {{ $itinerary->day }}></Day {{ $itinerary->day }}><Plan {{ $itinerary->title }}></Plan {{ $itinerary->title }}>
            <Detail>{!! $itinerary->plan !!}</Detail>
            @endforeach
    </itinerary>
    @if ($tour->includes->count() > 0 && $tour->excludes->count() > 0 && $tour->budgetIncludes->count() > 0 && $tour->budgetExcludes->count() > 0)
    <LuxuryIncludes>
        @foreach($tour->includes as $include)
        <LuxuryInclude {{$loop->iteration}}>{{$include->name}}</LuxuryInclude>
        @endforeach
    </LuxuryIncludes>
    <LuxuryExcludes>
        @foreach($tour->excludes as $exclude)
        <LuxuryExclude {{$loop->iteration}}>{{$include->name}}</LuxuryExclude>
        @endforeach
    </LuxuryExcludes>
    <BudgetIncludes>
            @foreach($tour->includes as $include)
            <BudgetInclude {{$loop->iteration}}>{{$include->name}}</BudgetInclude>
            @endforeach
        </BudgetIncludes>
        <BudgetExcludes>
            @foreach($tour->excludes as $exclude)
            <BudgetExclude {{$loop->iteration}}>{{$include->name}}</BudgetExclude>
            @endforeach
        </BudgetExcludes>
    @else
    <Includes>
            @foreach($tour->includes as $include)
            <Include {{$loop->iteration}}>{{$include->name}}</Include>
            @endforeach
        </Includes>
        <Excludes>
            @foreach($tour->excludes as $exclude)
            <Exclude {{$loop->iteration}}>{{$include->name}}</Exclude>
            @endforeach
        </Excludes>
    @endif
    <DepartureDates>
        @foreach ($tour->departure as $departure)
        <StartDate>{{ $departure->start }}</StartDate>
        <EndDate>{{ $departure->end }}</EndDate>
        <SpaceLeft>{{ $departure->slot }}<SpaaceLeft>
        @endforeach
    </DepartureDates>
	<created_at>{{$tour->created_at}}</created_at>
	<updated_at>{{$tour->updated_at}}</updated_at>
</root>
