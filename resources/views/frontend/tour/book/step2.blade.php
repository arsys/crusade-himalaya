@section('mtitle')
Join {{$tour->days}} Days {{$tour->title}}| Step 2
@stop
@section('title')
Join {{$tour->days}} Days {{$tour->title}}| Step 2
@stop
@inject('countries','App\Http\Utilities\Country')
@extends('layouts.frontend')
@section('robot')noindex, nofollow @endsection
@section('content')
<!-- booking step start -->
<section class=" booking">
   <div class="uk-container  uk-container-expand uk-padding-large">
     <div class="uk-text-center uk-process-step" uk-grid>
       <div class="uk-width-1-3 step circle">
         <div class="circle-text ">
           <span class="medium  material-icons"><i class="fas fa-check"></i></span>
       </div>
       <p class="center-align  uk-margin-top">Choose Your Trip</p>
   </div>
   <div class="uk-width-1-3 step active">
     <div class="circle-text a">
       <span class="medium material-icons">Step 2</span>

   </div>
   <p class="center-align uk-margin-top ">Request for reservation</p>
</div>
<div class="uk-width-1-3 step  ">
 <div class="circle-text ">
   <span class="medium material-icons">Step 3</span>
</div>
<p class="center-align  uk-margin-top">Successfully</p>
</div>
</div>
</div>
</section>
<!-- booking step end -->

<div class="uk-container ">
 <div class="" uk-grid>
    <div class="uk-width-3-5@m">
       <h3 class="uk-padding-small uk-text-center"><span>Lead Traveller Details</span></h3>
       <form class="uk-form-stacked" action="{{ route('trip.stepThree', $tour->slug) }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $data['travellers'] }}" name="travellers">
        <input type="hidden" value="{{ $tour->id }}" name="tour_id">
        <input type="hidden" name="start_date" value="{{$data['date']}}">
        <input type="hidden" name="budget" value="${{$data['budget']}}">
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Full Name</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text" name="fullname" placeholder="Enter Your Full Name." required>
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label">Gender</label>
            <div class="uk-form-controls">
                <label><input class="uk-radio" type="radio" name="gender" value="Male"><span class="uk-margin-left uk-margin-right">Male</span> </label>
                <label><input class="uk-radio" type="radio" name="gender" value="Female"><span class="uk-margin-left uk-margin-right">Female</span> </label>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Date Of Birth</label>
            <div class="uk-form-controls">
                <input class="uk-input" type="text" id="dob" name="dob" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="email" name="email" placeholder="Enter Your Email Address" required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Mobile no.</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text" name="mobile" placeholder="Mobile no." required>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Address</label>
            <div class="uk-form-controls">
                <textarea class="uk-textarea uk-form-width-large" rows="4" required="" placeholder="Post Address" name="address"></textarea>
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-select">Country</label>
            <div class="uk-form-controls">
                <select class="uk-select" id="form-stacked-select" name="country" required>
                    <option></option>
                    @foreach($countries::all() as $country)
                    <option value="{{$country}}">{{$country}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Passport No.</label>
            <div class="uk-form-controls">
                <input class="uk-input"  type="text" name="passport_no" required >
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Passport Expiry</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="passport" type="text" name="passport_exp" required >
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label">Do you have Insurance?</label>
            <div class="uk-form-controls uk-margin">
                <label><input class="uk-radio" type="radio" name="insurance" value="1" ><span class="uk-margin-left uk-margin-right">Yes</span> </label>
                <label><input class="uk-radio" type="radio" name="insurance" value="0" checked><span class="uk-margin-left uk-margin-right">No</span> </label>
            </div>
        </div>
        <div class="uk-margin" id="policy-wrapper" style="display: none;">
            <label class="uk-form-label" for="form-stacked-text">Policy no.</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text" name="insurance_policy">
            </div>
        </div>
        @if($data['travellers'] > 1)
        <h3 class="uk-padding-small uk-text-center"><span> Other Traveller Details</span></h3>
        @for($i=1; $i<=$data['travellers']; $i++)
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Traveller {{$i}}</label>
            <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text" name="otherName[]" placeholder="Full Name" required>
            </div>
        </div>
        @endfor
        @endif
        <div class="uk-margin">
            <button class="uk-button uk-button">Submit</button>
        </div>
    </form>
</div>
<div class="uk-width-2-5@m ">
    <div class="uk-card uk-card-default">
        <div class="uk-card-media-top">
            <img src="{{ asset($tour->image->thumb) }}" alt="{{ $tour->slug }}">
        </div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">{{ $tour->days .' Day(s) '.$tour->title}}</h3>
            <div class="uk-flex  uk-flex-row">
            <span>Trip strat date: {{ date("jS M, Y", strtotime($data['date']))}}</span>

            </div>
            <div class="uk-card-footer" uk-grid>
                @if ($data['travellers'] > 1)
                <div class="uk-width-1-2">
                    <span>${{ $data['budget']}} x {{ $data['travellers'] }} person</span>
                </div>
                <div class="uk-width-1-2">
                    <span>${{ $data['budget']*$data['travellers'] }}</span>
                </div>
                @endif
                @if (!empty($tour->singleSupp) && $data['traveller'] > 1)
                <div class="uk-width-1-2">
                    <span>${{ $data['budget']}} x {{ $data['travellers'] }} person + {{$tour->singleSupp}} for single supplement.</span>
                    </div>
                    <div class="uk-width-1-2">
                        <span>${{ $data['budget']*$data['travellers'] + $tour->singleSupp }}</span>
                    </div>
                @endif
            </div>
            <div class="uk-card-footer">
                Please note: All holidays and flights (if applicable) are subject to availability. Please see terms and conditions.<a href="#" class="">terms and conditions.</a>
            </div>
        </div>
    </div>

    <div class="uk-card uk-card-default uk-margin-top uk-margin-bottom">
        <div class="uk-card-header">
            <h3 class="uk-card-title uk-margin-remove-bottom">Have any questions ?</h3>
        </div>

        <div class="uk-card-body booking-contact-info">
            <div class="uk-flex uk-flex-column uk-width-1-1 contact-page">
                <div class="booking-call"><span uk-icon="icon: receiver;"></span>
                    <span class="booking-call-details">Call Us On</span>
                </div>
                <span class="booking-call-meta">+977-9808121644</span>
                <span class="booking-call-meta">or Chat Online</span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@stop
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">
@stop
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.1/parsley.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    $("#dob").flatpickr({
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
    });
    $("#passport").flatpickr({
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
    });
    $('input[type=radio]').click(function(){
        var value = $(this).val();
        if (value == '1') {
            $("#policy-wrapper").fadeIn();
        }
        else {
            $("#policy-wrapper").fadeOut();
            $("#policy-wrapper").trigger("reset");
        }
    });
</script>
@stop
