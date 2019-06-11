@section('mtitle')Thank you for booking with us @stop
@section('title')Thank You | {{config('app.name')}} @stop
@extends('layouts.new')
@section('content')
<section class="image-page-header " uk-height-viewport="expand: true" data-src="{{ asset('img/thanks.jpg') }}" uk-img>
    <div class="page-title__wrapper">

        <div class=" uk-flex uk-flex-center uk-flex-middle uk-height-small pageDescription-holder">
            <h1 class="pageTitle">Thank You</h1>
        </div>
    </div>
</section>
<section class="section-dashed">
    <div class="container">
        <div uk-grid>
            <div class="uk-width-1-6 uk-visible@m"></div>
            <div class="uk-width-expand uk-card-body uk-card uk-card-default">
                <p>
                        Thank you for submitting the booking form. Your necessary information has been forwarded to
                        operations team and you will receive confirmation of recipient with trekking preparation guide
                        and
                        other necessary information like visa advice, medical requirements, equipments, payment detail,
                        insurance and others. You will then be requested to provide us your flight and insurance detail
                        soon.
                        Required minimum deposit amount must be paid in advance to confirm your reservation.
                        Confirmation
                        will be shared when the deposited amount is entered in our bank account.
                </p>
            </div>
            <div class="uk-width-1-6 uk-visible@m"></div>
        </div>
    </div>
</section>
{{ header( "refresh:8;url=/" )}}
@stop