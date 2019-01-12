@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="card">
            <div class="card-body">
                {!! Form::model($event,['route'=> ['events.update',$event->id ],'class'=>'form form-validate','method' => 'PUT', 'files'=>true])!!}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('title') ? 'has-error' : ''}}">
                            {{ Form::text('title', null, ['class' => 'form-control', 'id'=>'title']) }}
                            @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title') }}</span>
                            @endif
                            {{ Form::label('title', 'Title (Required) ') }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('url') ? 'has-error' : ''}}">
                            {{ Form::text('url', null, ['class' => 'form-control', 'id'=>'url']) }}
                            @if($errors->has('url'))
                            <span class="help-block">{{ $errors->first('url') }}</span>
                            @endif
                            {{ Form::label('url', 'URL (Optional)') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group date" id="event-start">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <div class="input-group-content">
                                    {{ Form::text('start_date', null, ['class' => 'form-control', 'id'=>'start_date']) }}
                                    <label>Event Start</label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group date" id="event-end">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <div class="input-group-content">
                                    {{ Form::text('end_date', null, ['class' => 'form-control', 'id'=>'end_date']) }}
                                    <label>Event End</label>
                                </div>
                                
                            </div>
                        </div>
                    </div>   
                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal"
                            data-target="#myModal">
                            <i class="far fa-image"></i>  Image
                        </div>
                    </div>                 
                </div>
                <div class="row">
                    <div class="col-md-12">
                        .  <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
                            {{ Form::textarea('description',null, ['class' => 'form-control ','id'=>'description']) }}
                            @if($errors->has('description'))
                            <span class="help-block">{{ $errors->first('description') }}</span>
                            @endif
                            {{ Form::label('description', 'Description') }}
                        </div>
                    </div>
                </div>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Media Images</h4>
                            </div>
                            <div class="modal-body text-center">
                                @if(!empty($images))
                                <select class="image-picker show-html"
                                name="featured">
                                <option value=""></option>
                                @foreach($images  as $image)

                                <option data-img-src="{{asset($image->thumb)}}"
                                    value="{{$image->id}}">
                                </option>
                                @endforeach
                            </select>
                            @else
                            <h2>No images uploaded in media.</h2>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            {{ Form::submit('Create', ['class' =>'btn btn-primary btn-block add']) }}

            {!! Form::close() !!}
        </div><!--end .card-body -->
    </div>
</div>
</div>

@stop
@section('styles')
<link type="text/css" rel="stylesheet" href="{{asset('assets/backend/css/libs/jquery-ui/jquery-ui-theme.css')}}" />
<link type="text/css" rel="stylesheet"
href="{{ asset('assets/backend/css/libs/bootstrap-datepicker/datepicker3.css') }}"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css">
@stop
@section('scripts')
<script src="{{ asset('assets/backend/js/libs/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/libs/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/backend/js/core/demo/DemoFormComponents.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
<script>
    $(".image-picker").imagepicker();
</script>
@stop