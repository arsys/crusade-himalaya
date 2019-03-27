@section('mtitle')
Join {{$tour->days}} Days {{$tour->title}} | Step 1
@stop
@section('title')
Join {{$tour->days}} Days {{$tour->title}} | Step 1
@stop
@extends('layouts.frontend')
@section('robot')noindex, nofollow @endsection
@section('content')
<!-- booking step start -->
<div class="uk-container uk-container-expand  uk-padding-large booking-step">
 <div class="uk-text-center uk-process-step" uk-grid>
   <div class="uk-width-1-3 steps circle">
     <div class="circle-text ">
       <span class="medium material-icons">Step 1</span>
     </div>
     <p class="center-align  uk-margin-top">Choose Your Trip</p>
   </div>
   <div class="uk-width-1-3 steps ">
     <div class="circle-text a">
       <span class="medium material-icons">Step 2</span>
     </div>
     <p class="center-align uk-margin-top ">Request for reservation</p>
   </div>
   <div class="uk-width-1-3 steps">
     <div class="circle-text ">
       <span class="medium material-icons">Step 3</span>
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
  <form class="uk-form-stacked" method="POST" action="{{route('trip.stepTwo',$tour->slug)}}">
    @csrf
    <div class="uk-margin">
      <div class="uk-form-controls">
        <label class="uk-form-label">Trip name</label>
        <input type="hidden" name="tour_id" value="{{$tour->id}}">
        <input class="uk-input" type="text" placeholder="{{$tour->title}}" disabled>
      </div>
    </div>
    @if (!empty($tour->price) && !empty($tour->budgetPrice))
    <div class="uk-margin">
        <div class="uk-form-controls">
            <label><input class="uk-radio" type="radio" name="budget" value="{{$tour->price}}"> Luxury Package ( USD {{$tour->price}})</label>
            <label><input class="uk-radio" type="radio" name="budget" value="{{$tour->budgetPrice}}" > Budget Package ( USD {{$tour->budgetPrice}})</label>
        </div>
        <span class="singleSupp-msg" style="display:none;">Additional USD {{$tour->singleSupp}}.</span>
    </div>
    @endif
    <div class="uk-grid-small" uk-grid>
      <div class="uk-width-1-2@s">
        <label class="uk-form-label">Start Date</label>
        <input class="uk-input" type="text"  placeholder ="{{ date("jS M, Y", strtotime($data['date']))}}"  disabled>
        <input type="hidden" name="date" value="{{$data['date']}}">
      </div>
      <div class="uk-width-1-2@s">
        <div class="uk-margin">
          <div class="uk-form-controls">
            <label class="uk-form-label">No of People*</label>
            <select class="uk-select" id="form-stacked-select" name="travellers" required>
              <option></option>
              @for($i=1; $i<=10; $i++)
              <option value="{{$i}}">{{$i}}</option>
              @endfor
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="uk-margin">
      <button type="submit"  class="uk-button">Next</button>
    </div>
  </form>
</div>


@stop
@section('scripts')
<script>
    $('select').on('change', function() {
        pax = ( this.value );
        if(pax == 1){
            $('.singleSupp-msg').show();
        }else{
            $('.singleSupp-msg').hide();
        }
    });
</script>
@stop
