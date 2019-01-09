@extends('layouts.frontend')
@section('content')
<!-- image start -->
@include ('frontend.partials.about._image')
<!-- image end -->
<!-- about us start-->
@include ('frontend.partials.about._content')
<!-- about us end-->
<!-- guide start -->
@include ('frontend.partials.about._guide')
<!-- guide end -->
<!-- team start -->
{{-- @include ('frontend.partials.about._team') --}}
<!-- team end -->
@stop
@section('scripts')
<script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
</script>
<script src="https://cdn.rawgit.com/scottjehl/picturefill/3.0.2/dist/picturefill.js" async></script>
@stop