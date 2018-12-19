@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-md-10">
        {{--{{$departures->tour->count()}}--}}
    </div>
    <div class="col-md-2">
        <a href="{{ route('departure.create') }}"
        class="btn ink-reaction btn-raised btn-lg btn-primary btn-block">Create</a>
    </div>
    <hr>
</div>
<section class="style-default-bright">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="datatable1" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="sort-alpha">Title</th>
                            <th class="sort-numeric">Departure Dates</th>

                            <th data-orderable="false">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departures as $departure)
                        <tr>
                            <th>{{$departure->tour->title}}</th>
                            <th>{{$departure->count()}}</th>
                            <th>
                                <a href="{{route('departure.show',$departure->tour->id)}}" class="btn ink-reaction btn-raised btn-sm btn-info"><i class="fa fa-list-ul"></i> Show</a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!--end .table-responsive -->
        </div><!--end .col -->
    </div><!--end .row -->
</section>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
<style>
.action-column .btn{
    margin-top: 8px !important;
}
</style>
@stop
@section('scripts')
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('assets/backend/js/core/demo/DemoTableDynamic.js') }}"></script>
@stop