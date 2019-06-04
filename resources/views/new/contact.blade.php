@extends('layouts.new')
@section('content')
<section class="image-page-header " uk-height-viewport="expand: true"
    data-src="https://source.unsplash.com/1800x1200/?guitar" uk-img>
    <div class="page-title__wrapper">

        <div class=" uk-flex uk-flex-center uk-flex-middle uk-height-small pageDescription-holder">
            <h1 class="pageTitle">Test</h1>
        </div>

        <div class="uk-position-large uk-position-bottom-right ">
            <ul class="uk-breadcrumb">
                <li><a href="" uk-icon="icon: home"></a></li>
                <li><a href="#">Category</a></li>
                <li><a href="#">Region</a></li>
                <li class="uk-disabled"><span>Active</span></li>
            </ul>
        </div>
    </div>
</section>
<section class="section-white">
    <div class="container">
        <div class="uk-child-width-1-2@m " uk-grid>

            <div>
                <div class="section-dashed uk-panel uk-padding">
                    <h5>
                        Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an
                        email
                        from the form below and we will get back to you as soon.
                    </h5>
                    <div uk-grid>
                        <div class="uk-width-1-2">
                            <div uk-grid class="uk-grid-small">
                                <div class="uk-width-1-3">
                                    <span uk-icon="heart"></span>
                                </div>
                                <div class="uk-width-2-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
                            </div>
                        </div>
                        <div class="uk-width-1-2">
                            <div uk-grid class="uk-grid-small">
                                <div class="uk-width-1-3">
                                    <span uk-icon="receiver"></span>
                                </div>
                                <div class="uk-width-2-3"> 879-890-9767</div>
                            </div>
                        </div>
                    </div>

                    <div uk-grid>
                        <div class="uk-width-1-2">
                            <div uk-grid class="uk-grid-small">
                                <div class="uk-width-1-3">
                                    <span uk-icon="mail"></span>
                                </div>
                                <div class="uk-width-2-3">6</div>
                            </div>
                        </div>
                        <div class="uk-width-1-2">
                            <div uk-grid class="uk-grid-small">
                                <div class="uk-width-1-3">
                                    <span uk-icon="heart"></span>
                                </div>
                                <div class="uk-width-2-3">8</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div>
                    @include('new.partials._message')
                <form method="POST" action="{{ route('frontend-postContact') }}" data-parsley-validate>
                    @csrf
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Full Name</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-width-large" type="text" placeholder="Full Name"
                                name="fullName" required="">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-width-large" type="email" placeholder="Email" name="email"
                                required="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Subject</label>
                        <div class="uk-form-controls">
                            <input class="uk-input uk-form-width-large" type="text" placeholder="Subject" name="subject"
                                required="">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Message</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea uk-form-width-large" rows="4" required=""
                                placeholder="Some Message...." name="contactMessage"></textarea>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <div class="g-recaptcha" data-sitekey="6LfseYkUAAAAAJRZSYaBSN3vJgPTg2Ryj3WeC9_I"></div>
                    </div>
                    <div class="uk-margin">
                        <button class="button-default" type="Submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection