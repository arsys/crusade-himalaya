{{ dd($tour->slides->count())}}
@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-tiles style-default-light">
            <!-- BEGIN BLOG POST HEADER -->
            <div class="row">
                <div class="col-sm-9">
                    <div class="card-body style-default-dark">
                        <h2>{{ $tour->title}}</h2>
                        <div class="text-default-light">
                            Status:
                            @if($tour->status == 0)
                            Unpublished
                            @else
                            Published
                            @endif
                        </div>
                    </div>
                </div><!--end .col -->
                <div class="col-sm-3">
                    <div class="card-body">
                        <div class="">
                            <a href="{{ route('tour.index') }}"
                            class="btn btn-block ink-reaction btn-success">Save</a>
                            <a href="{{ route('tour.edit',$tour->id) }}"
                             class="btn btn-block ink-reaction btn-info">Edit</a>
                         </div>
                     </div>
                 </div><!--end .col -->
             </div><!--end .row -->
             <!-- END BLOG POST HEADER -->
         </div><!--end .card -->
     </div><!--end .col -->
 </div><!--end .row -->
 <div class="row">
    <div class="col-lg-12">
        <div class="card card-tiles style-default-light">
            <div class="card-body">
                <img src="{{asset($tour->image->banner) }}" alt="" class="img-responsive">
                <table class="table table-condensed no-margin">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Days</b></td>
                            <td>{{ $tour->days }} Days</td>
                            <td><b>Price</b></td>
                            <td>{{ $tour->price }} USD</td>
                        </tr>
                        <tr>
                            <td><b>Max Elevation</b></td>
                            <td>{{ $tour->elevation }} m</td>
                            <td><b>Difficulty</b></td>
                            <td>{{ $tour->difficulty->name }}</td>
                        </tr>
                        <tr>
                            <td><b>Group Size</b></td>
                            <td>{{ $tour->group->name }} people</td>
                            <td><b>Category</b></td>
                            <td>{{ $tour->category->name }}</td>
                        </tr>
                        <tr>
                            <td><b>Accommodation</b></td>
                            <td>{{ $tour->accommodation->name }}</td>
                            <td><b>Meal</b></td>
                            <td>{{ $tour->meal->name }}</td>
                        </tr>

                    </tbody>
                </table>
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Includes</h3>
                        <ul>
                            @foreach($tour->includes as $include)
                            <li>{{ $include->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h3>Excludes</h3>
                        @foreach($tour->excludes as $exclude)
                        <li>{{ $exclude->name }}</li>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <h2>Overview</h2>
                    {!! $tour->overview !!}
                </div>
                <div class="row">
                    <h2>Meta Title</h2>
                    {!! $tour->mtitle !!}
                </div>
                <div class="row">
                    <h2>Meta Description</h2>
                    {!! $tour->description !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
