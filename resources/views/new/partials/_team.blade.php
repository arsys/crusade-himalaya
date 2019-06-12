<div class="titleMinimal-wrapper uk-text-center">
    <h3 class="titleMinimal">Get acquainted with the people behind Crusade Himalaya</h3>
    <div class="dividerMinimal"></div>
</div>

@foreach($teams as $team)
@if($loop->iteration % 2 == 0)
<div class="teamMember-wrapper" uk-grid>
    <div class="uk-width-2-5@s">
        <img src="{{ $team->avatar }}" alt="{{ $team->name }}">
    </div>
    <div class="uk-width-3-5@s">
        <div class="teamMember-meta">
            <span class="teamMember-name">{{ $team->name }}</span>
            <span class="teamMember-designation">{{ $team->position }}</span>
        </div>
        <div class="teamMember-description">
            {!! $team->description !!}
        </div>
    </div>
</div>
@endif
@if($loop->iteration % 2 != 0)
<div class="teamMember-wrapper" uk-grid>
    <div class="uk-width-3-5@s">
        <div class="teamMember-meta">
            <span class="teamMember-name">{{ $team->name }}</span>
            <span class="teamMember-designation">{{ $team->position }}</span>
        </div>
        <div class="teamMember-description">
            {!! $team->description !!}
        </div>
    </div>

    <div class="uk-width-2-5@s">
        <img src="{{ $team->avatar }}" alt="{{ $team->name }}">
    </div>
</div>
@endif
@endforeach