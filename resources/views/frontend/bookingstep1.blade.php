@extends('layouts.frontend')
@section('content')
<!-- booking step start -->
 <div class="uk-container uk-container-expand  uk-padding-large booking-step">
   <div class="uk-text-center uk-process-step" uk-grid>
     <div class="uk-width-1-3 steps circle">
       <div class="circle-text ">
         <i class="medium material-icons">steps 1</i>
       </div>
       <p class="center-align  uk-margin-top">Choose Your Trip</p>
     </div>
     <div class="uk-width-1-3 steps ">
       <div class="circle-text a">
         <i class="medium material-icons">steps 2</i>
       </div>
       <p class="center-align uk-margin-top ">Request for reservation</p>
     </div>
     <div class="uk-width-1-3 steps">
       <div class="circle-text ">
         <i class="medium material-icons">steps 3</i>
       </div>
       <p class="center-align  uk-margin-top">Successfully</p>
     </div>
   </div>
 </div>
</div>
<!-- booking step end -->

  <!-- fieldsets  start-->
<div class="uk-container uk-container-xsmall uk-padding">
    <h3 class="uk-padding-small uk-text-center"><span>No. of Travellers</span></h3> 
    <form class="uk-form-stacked" action="">
        <div class="uk-margin">
            <div class="uk-form-controls">
                <select class="uk-select" id="form-stacked-select" name="package">
                    <option>Select Your Package</option>
                    <option>Anapurna Base Camp</option>
                    <option>Everest Base Camp</option>
                </select>
            </div>
        </div>
        <div class="uk-grid-small" uk-grid>
              <div class="uk-width-1-2@s">
                    <input class="uk-input" type="text" name="date" placeholder="dd/mm/yy">
                </div>
                <div class="uk-width-1-2@s">
                    <div class="uk-margin">
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="no_of_persons">
                                <option>No of People*</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                </div>
        </div>
        <div class="uk-margin">
            <a href="/bookingform" class=" uk-button">Next</a>
        </div>
    </form>
</div>


@stop