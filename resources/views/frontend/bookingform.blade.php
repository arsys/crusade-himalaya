@extends('layouts.frontend')
@section('content')
<!-- booking step start -->
<section class=" booking">
 <div class="uk-container  uk-container-expand uk-padding-large">
   <div class="uk-text-center uk-process-step" uk-grid>
     <div class="uk-width-1-3 step circle">
       <div class="circle-text ">
         <i class="medium  material-icons">Step 1</i>
       </div>
       <p class="center-align  uk-margin-top">Choose Your Trip</p>
     </div>
     <div class="uk-width-1-3 step active">
       <div class="circle-text a">
         <i class="medium material-icons">Step 2</i>
       </div>
       <p class="center-align uk-margin-top ">Request for reservation</p>
     </div>
     <div class="uk-width-1-3 step  ">
       <div class="circle-text ">
         <i class="medium material-icons">Step 3</i>
       </div>
       <p class="center-align  uk-margin-top">Successfully</p>
     </div>
   </div>
 </div>
</section>
<!-- booking step end -->

<div class="uk-container ">
   <h3 class="uk-padding-small uk-text-center"><span>Travellers Details</span></h3> 
    <div class="" uk-grid>
        <div class="uk-width-3-5@m">           
            <form class="uk-form-stacked" action="">
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Full Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" name="fullname" placeholder="Enter Your Full Name.">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="email" name="email" placeholder="Enter Your Email Address">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label">Gender</label>
                    <div class="uk-form-controls">
                        <label><input class="uk-radio" type="radio" name="radio1"><span class="uk-margin-left uk-margin-right">Male</span> </label>
                        <label><input class="uk-radio" type="radio" name="radio1"><span class="uk-margin-left uk-margin-right">Female</span> </label>
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Date Of Birth</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" data-uk-datepicker="{format:'DD.MM.YYYY'}">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">Country</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select">
                            <option>Nepal</option>
                            <option>India</option>
                        </select>
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">NO of People</label>
                    <div class="uk-form-controls">
                        <select class="uk-select" id="form-stacked-select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Passport No.</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="text" name="passport" placeholder="Passport Number.">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label">Do you have Insurance?</label>
                    <div class="uk-form-controls uk-margin">
                        <label><input class="uk-radio" type="radio" name="radio1"><span class="uk-margin-left uk-margin-right">Yes</span> </label>
                        <label><input class="uk-radio" type="radio" name="radio1"><span class="uk-margin-left uk-margin-right">No</span> </label>
                    </div>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button">Submit</button>
                </div>
            </form>
        </div>
        <div class="uk-width-2-5@m ">   
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="https://source.unsplash.com/1200x900/?arts" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Annapurna Base Camp</h3>
                    <div class="uk-flex  uk-flex-row">
                    </div>
                    <div class="uk-card-footer" uk-grid>
                        <div class="uk-width-1-2">
                            <span>£2,269.00 x 1 Adult</span>
                        </div>
                        <div class="uk-width-1-2">
                            <span>£2,269.00</span>
                        </div>
                    </div>
                    <div class="uk-card-footer">
                        Please note: All holidays and flights (if applicable) are subject to availability. Please see terms and conditions.<a href="#" class="">terms and conditions.</a>
                    </div>
                </div>
            </div>

            <div class="uk-card uk-card-default uk-margin-top uk-margin-bottom">
                <div class="uk-card-header">
                    <h3 class="uk-card-title uk-margin-remove-bottom">Sales</h3>
                </div>

                <div class="uk-card-body booking-contact-info">
                    <div class="uk-flex uk-flex-column uk-width-1-1 contact-page">
                        <div class="booking-call"><span uk-icon="icon: receiver;"></span> 
                            <span class="booking-call-details">Call Us On</span>
                        </div>
                            <span class="booking-call-meta">987654324</span>
                            <span class="booking-call-meta">or Chat Online</span>

                        <div class="booking-email"><i class="fas fa-address-card"></i>
                            <span class="booking-mail-details">karmatara2016@gmail.com </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop