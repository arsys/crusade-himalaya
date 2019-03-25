@section('mtitle'){!! $category->name !!} | {!! $region->name !!}@stop
@section('title'){!! $category->name !!} | {!! $region->name !!}@stop
@section('description'){!! $category->description !!}@stop
@extends('layouts.frontend')
@section('content')
<section class="uk-container-expand about" uk-grid>
 <div class="uk-height-large uk-width-*@s uk-background-cover uk-light page-cover uk-background-fixed" data-src="{{ asset($category->path) }}" uk-img>
    <div class="uk-overlay uk-overlay-primary uk-position-bottom heading-wrapper">
        <h1 class="travel-heading uk-margin-large-left">{{ $category->name }}</h1>
        <h3 class="travel-sub-heading uk-margin-large-left uk-margin-top uk-margin-bottom ">{{ $category->description }}</h3>
    </div>
    <div class="breadcrumb uk-visible@l">
        <ul class="uk-breadcrumb" id="breadcrumb">
            <li><a href="/" uk-icon="icon: home"></a></li>
            <li><a href="{{ route('fetchByRegion',$region->slug) }}">{{ $region->name }}</a></li>
            <li><a href="{{url()->current()}}">{{ ucfirst($category->name) }}</a></li>
        </ul>
    </div>
</div>
</section>
<div class="uk-container uk-text-center  home-tours uk-margin-medium-top uk-margin-medium-bottom">
    <div class="uk-position-relative uk-visible-toggle uk-light">
        <ul class="uk-child-width-1-3@m uk-child-width-1-1@s  uk-grid-match  "  uk-grid>
             @foreach($results as $package)
            <li class="uk-margin-small-bottom">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top tour-wrapper">
                        <a href="{{ route('trip.detail',$package->slug) }}" class="hp-link">
                            <img src="{{ asset($package->image->thumb) }}" alt="{{ $package->slug }}">
                        </a>
                        <div class="uk-overlay uk-overlay-default uk-position-top price-wrapper">
                            <span class="price">
                               <span>USD $
                                @if (!empty($package->budgetPrice))
                                    {{$package->budgetPrice}}
                                @else
                                    {{ $package->price }}
                                @endif
                               </span>
                           </span>
                        </div>
                        <div class="uk-overlay uk-overlay-default  hp-wrapper">
                            <div class="uk-flex uk-flex-center">
                                <div class="uk-flex uk-flex-column uk-width-4-5 hp-meta">
                                    <a href="{{ route('trip.detail',$package->slug) }}" class="hp-link"><h4 class="hp-product">{{ $package->title }}</h4></a>
                                </div>
                                <div class="uk-flex uk-flex-column uk-width-1-5 hp-meta">
                                    <h4 class="hp-days">{{ $package->days }} Days</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@stop
