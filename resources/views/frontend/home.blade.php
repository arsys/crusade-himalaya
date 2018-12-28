
  @extends('layouts.frontend')
  @section('content')
  {{-- carousel start --}}
  @include ('frontend.partials.home._carousel')
  {{-- carousel end --}}
  {{-- content start --}}
  @include ('frontend.partials.home._intro')
  <!--  content end -->
  <!-- packages start -->
  @include ('frontend.partials.home._travel-style')
  <!-- packages end -->
  <!--   DESTINATION -->
  @include ('frontend.partials.home._destination')
  <!--destination end-->
  <!-- parallex start -->
{{-- <!--   @include ('frontend.partials.home._staticimage') --> --}}
  <!-- parallex end -->
  <!-- Handpicked tour start -->
  @include ('frontend.partials.home._tour')
  <!-- hHandpicked tour end -->
  <!-- review start -->
  {{-- @include ('frontend.partials.home._review') --}}
  <!-- review end -->
  <!--follow start-->
  @include ('frontend.partials.home._follow')
  <!--follow start-->
  <!-- supporter start -->
  @include ('frontend.partials.home._supported')
  <!-- supporter end -->
  @stop

@section('scripts')
<script src="{{asset('js/navbar.js')}}"> </script>
@stop

