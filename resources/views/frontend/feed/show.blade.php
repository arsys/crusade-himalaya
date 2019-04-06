<?=
    /* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
    '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<feed xmlns="http://www.w3.org/2005/Atom">
    <title> <![CDATA[ {{$tour->title}} ]]> </title>
    <days> <![CDATA[ {{$tour->days}} ]]> </days>
    <thumbnail><![CDATA[ {{url('/'.$tour->image->thumb)}} ]]></thumbnail>
    <LuxuryPrice> <![CDATA[ USD {{$tour->price}} ]]> </LuxuryPrice>
    <BudgetPrice> <![CDATA[ USD {{$tour->budgetPrice}} ]]> </BudgetPrice>
    @if (!empty($tour->singleSupp))
    <SinglePersonAdditional> <![CDATA[ USD {{$tour->singleSupp}} ]]> </SinglePersonAdditional>
    @endif
    <MaxElevation> <![CDATA[{{ $tour->elevation }}]]> </MaxElevation>
    <DifficultyLevel> <![CDATA[{{ $tour->difficulty->name }}]]> </DifficultyLevel>
    <GroupSize> <![CDATA[{{ $tour->group->size }}]]> </GroupSize>
    <Category>  <![CDATA[{{ $tour->category->name }}]]> </Category>
    @if (!empty($tour->region))
    <Region>  <![CDATA[{{ $tour->region->name }}]]> </Region>
    @endif
	<Accommodation>  <![CDATA[{{ $tour->accommodation->name }}]]> </Accommodation>
	<MealPlan>  <![CDATA[{{ $tour->meal->name }}]]> </MealPlan>
	<overview type="html">
        <![CDATA[ {!!$tour->overview!!} ]]>
    </overview>
    <itinerary>
            @foreach($tour->itinerary as $itinerary)
            {{'<Day'.$itinerary->day.'>'.$itinerary->plan.'</'.$itinerary->day.'Day>'}}
            <Detail><![CDATA[ {!!$itinerary->plan!!} ]]></Detail>
            @endforeach
    </itinerary>
    @if ($tour->includes->count() > 0 && $tour->excludes->count() > 0 && $tour->budgetIncludes->count() > 0 && $tour->budgetExcludes->count() > 0)
    <LuxuryIncludes>
        @foreach($tour->includes as $include)
        {{'<LuxuryInclude type="html"> <![CDATA['.$include->name.']]></LuxuryInclude>'}}
        @endforeach
    </LuxuryIncludes>
    <LuxuryExcludes>
        @foreach($tour->excludes as $exclude)
        {{'<LuxuryExclude type="html"> <![CDATA['.$include->name.']]></LuxuryExclude>'}}
        @endforeach
    </LuxuryExcludes>
    <BudgetIncludes>
            @foreach($tour->budgetIncludes as $include)
            {{'<BudgetInclude type="html"> <![CDATA['.$include->name.']]></BudgetInclude>'}}
            @endforeach
        </BudgetIncludes>
        <BudgetExcludes>
            @foreach($tour->budgetExcludes as $exclude)
            {{'<BudgetExclude type="html"> <![CDATA['.$exclude->name.']]></BudgetExclude>'}}
            @endforeach
        </BudgetExcludes>
    @else
    <Includes>
            @foreach($tour->includes as $include)
            {{'<Include type="html"> <![CDATA['.$include->name.']]></Include>'}}
            @endforeach
        </Includes>
        <Excludes>
            @foreach($tour->excludes as $exclude)
            {{'<Exclude type="html"> <![CDATA['.$exclude->name.']]></Exclude>'}}
            @endforeach
        </Excludes>
    @endif
    <DepartureDates>
        @foreach ($tour->departure as $departure)
        <StartDate><![CDATA[{{ $departure->start }}]]></StartDate>
        <EndDate><![CDATA[{{ $departure->end }}]]></EndDate>
        <SpaceLeft><![CDATA[{{ $departure->end }}]]></SpaceLeft>
        @endforeach
    </DepartureDates>
	<created_at>{{$tour->created_at->toAtomString()}}</created_at>
	<updated_at>{{$tour->updated_at->toAtomString()}}</updated_at>
</feed>
