@extends('layouts.frontend')
@section('content')
<section class="uk-container-expand about" uk-grid>
    <div class="uk-height-large  uk-width-*@s  uk-background-cover uk-light page-cover uk-background-fixed" data-src="{{ asset($region->path) }}" uk-img>
        <h1 class="page-heading uk-margin-large-left">{{ $region->name }}</h1>
        <h3 class="page-subheading uk-margin-large-left uk-margin-top uk-margin-bottom">{{ $region->description }}</h3>
        <div class="breadcrumb ">
            <ul class="uk-breadcrumb" id="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/travel-style/{{ $region->name }}">{{ $region->name }}</a></li>
                <li class="uk-disabled"><a href="{{url()->current()}}">{{ ucfirst($category->name) }}</a></li>
            </ul>
        </div>
    </div>
</section>
<div class="uk-container uk-text-center  home-tours uk-margin-medium-top uk-margin-medium-bottom bgcolor-wrapper">
    <div class="uk-position-relative uk-visible-toggle uk-light">
        <ul class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid-small uk-grid-match uk-child-width-1-1 "  uk-grid>
            @foreach($results as $package)
            <li class="uk-margin-small-bottom">
                <div class="uk-card uk-card-default uk-height-medium">
                    <div class="uk-card-media-top">
                        <a href="/product" class="hp-link"><img src="https://source.unsplash.com/400x300/?heli" alt=""></a>
                        <div class="uk-overlay uk-overlay-default uk-position-top" id="price-wrapper">
                            <span class="price">
                                <span>USD ${{ $package->price }}</span>
                            </span>
                        </div>
                        <div class="uk-overlay uk-overlay-default uk-position-bottom" id="hp-wrapper">
                            <div class="uk-flex uk-flex-center">
                                <div class="uk-flex uk-flex-column uk-width-4-5 hp-meta">
                                  <a href="{{ route('trip.detail',$package->slug) }}" class="hp-link"><span class="hp-product">{{ $package->title }}</span></a>
                                </div>
                                <div class="uk-flex uk-flex-column uk-width-1-5 hp-meta">
                                    <span class="hp-days">{{ $package->days }} Days</span>
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