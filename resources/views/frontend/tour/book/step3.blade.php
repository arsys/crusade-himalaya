@extends('layouts.frontend')
@section('content')
<!-- booking step start -->
<section class=" booking">
 <div class="uk-container  uk-container-expand uk-padding-large">
   <div class="uk-text-center uk-process-step" uk-grid>
     <div class="uk-width-1-3 step3 circle">
       <div class="circle-text ">
         <span class="medium  material-icons"><i class="fas fa-check"></i></span>
       </div>
       <p class="center-align  uk-margin-top">Choose Your Trip</p>
     </div>
     <div class="uk-width-1-3 step3">
       <div class="circle-text a">
         <span class="medium material-icons"><i class="fas fa-check"></i></span>
       </div>
       <p class="center-align uk-margin-top ">Request for reservation</p>
     </div>
     <div class="uk-width-1-3 step3  ">
       <div class="circle-text ">
         <span class="medium material-icons"><i class="fas fa-check"></i></span>
       </div>
       <p class="center-align  uk-margin-top">Successfully</p>
     </div>
   </div>
 </div>
</section>

<!-- booking step end -->
{{-- message start --}}
<div class="uk-container uk-container-small uk-margin-large">
    <div class="uk-card uk-card-default uk-card-body uk-width-1-1@s">
        <h3 class="uk-card-title">Thank You !</h3>
        <p>We will respond to your request shortly in the meantime.</p>
    </div>
</div>
{{-- message end --}}

@stop