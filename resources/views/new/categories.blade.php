@section('mtitle')What We Do | Empower, Educate, Encourage @stop
@section('title')What We Do | Empower, Educate, Encourage
@stop
@section('description')Description @stop
@extends('layouts.new')
@section('content')
<section class="image-page-header" uk-height-viewport="offset-top: true; offset-bottom: 50px"
	data-src="{{ asset('img/plan.jpg') }}" uk-img>
	<div class="page-title__wrapper">

		<div class="uk-position-center-left uk-position-large description-holder">
			<h1 class="descriptionTitle">What We Do</h1>
			<p class="descriptionContent">We organize hassle-free trekking, climbing to offbeat adventure & day tours with loads
                    of fun. Look around and you'll find a special-interest tour package that suits your taste.</p>
		</div>
		<div class="uk-position-large uk-position-bottom-right ">
			<ul class="uk-breadcrumb">
				<li><a href="/" uk-icon="icon: home"></a></li>
				<li class="uk-disabled"><a href="{{url()->current()}}">Where We Go</a></li>
			</ul>
		</div>
	</div>
</section>
<section class="section-dashed">
        <div class="container">
            <div class="uk-child-width-1-4@m uk-child-width-1-2 categoryWrapper" uk-grid>
                @foreach($categories as $category)
                <div>
                    <a href="{{ route('frontend.byCategory',$category->slug) }}" class="uk-inline categoryLink">
                        <img src="{{ asset($category->thumb) }}" alt="{{ $category->name }}">
                        <h3 class="uk-position-center categoryName">{{ $category->name }}</h3>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@stop