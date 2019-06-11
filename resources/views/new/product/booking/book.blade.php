@inject('countries','App\Http\Utilities\Country')
@extends('layouts.new')
@section('content')
<section class="section-dashed">
    <div class="container">
        <div class="titleMinimal-wrapper uk-text-center uk-margin-large-top">
            <h3 class="titleMinimal">Book Trip Name</h3>
            <div class="dividerMinimal"></div>
        </div>
    </div>
</section>

<div class="section section-white">
    <div class="container">
        <div uk-grid class="uk-grid-small">

            <div class="uk-width-1-3">
                <div class=" bookingMeta-wrapper">
                    <div class="uk-card-media-top">
                        <img src="https://source.unsplash.com/400x300/?ramen" alt="">
                    </div>
                    <div class="bookingMeta-details">
                        <h4 class="bookingMeta-details--name">Media Top</h4>
                        <div class="uk-flex uk-flex-column">
                            <span>Price: USD {{$tour->price}}</span>
                            <span>Days: {{$tour->days}} Day(s)</span>
                            <span id="total"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-width-2-3">
                <form class="uk-card uk-card-default uk-card-body uk-form-stacked" method="POST" action="{{ route('frontend.bookingComplete', $tour->slug) }}">
                    @csrf
                    <input type="hidden" id="price" value="{{$tour->price}}">
                    <input type="hidden" name="tour_id" value="{{$tour->id}}">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="pax">No. of travellers</label>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="pax" name="travellers">
                                @for ($i = 1; $i <= 12; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Date</label>
                        <div class="uk-form-controls">
                        <input class="uk-input" id="depDate" name="depDate" type="text" value="{{str_replace('-','/',$data['date'])}}">
                        </div>
                    </div>

                    <h4> Lead Travellers Detail</h4>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Full Name</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" name="fullName" required>
                        </div>
                    </div>

                    <div class="uk-margin">
                            <label class="uk-form-label" for="form-stacked-text">Email</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="form-stacked-text" type="email" name="email" required>
                            </div>
                        </div>                    

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Contact no.</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="tel" name="contact" required>
                        </div>
                    </div>


                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-select">Country</label>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="country" required>
                                @foreach($countries::all() as $country)
                                <option value="{{$country}}">{{$country}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-select">Message</label>
                        <textarea class="uk-textarea" name="bookingMessage" style="resize: none" rows="5"></textarea>
                    </div>

                    <div class="uk-margin">
                        <input class="uk-checkbox" type="checkbox" required>
                        <span>By selecting to complete this booking I acknowledge that I have read and accept the
                            <a class="uk-link-text uk-text-bold" href="#">
                                terms & conditions
                            </a>
                            , and
                            <a href="" class="uk-link-text uk-text-bold">
                                privacy policy
                            </a>.
                        </span>
                    </div>

                    <div class="uk-margin">
                        <button class="button-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css">
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>
<script>
    $('#depDate').datepicker({
    language: 'en',
    dateFormat:"yyyy/mm/dd",
    minDate: new Date()
});
$('#pax').on('change', function() {
  let pax = this.value;
  let cost = $('#price').val();
  let totalcost = pax* cost;

  $('#total').text('Total Cost: USD '+totalcost);
});
</script>
@endsection