@extends('layouts.backend')
@section('content')
<div class="row">
    {!! Form::model($region,array('route'=> array('regions.update',$region->id ),'class'=>'form form-validate','method' => 'PUT', 'files'=>true))!!}
    <div class="card">
        <div class="card-head style-primary">
            <header>Edit {{$region->name}}</header>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group floating-label {{$errors->has('name') ? 'has-error' : ''}}">
                        <div class="row">
                            {{ Form::text('name', null, ['class' => 'form-control', 'id'=>'name']) }}
                            @if($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                            {{ Form::label('name', 'Name ') }}
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <button type="button" class="btn btn-block ink-reaction btn-accent" data-toggle="modal"
                        data-target="#myModal"><i class="far fa-image"></i> Image
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('description', 'Description ') }}
                    {!! Form::textarea('description', null, ['id' => 'description', 'class' => 'form-control', 'style' => 'resize:none']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <button type="submit" class="btn btn-block btn-success ink-reaction">Update</button>
            </div>
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
                <option></option>
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
{!! Form::close() !!}
</div>
@stop
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
<script>
    $(document).ready(function () {
        $(".image-picker").imagepicker();
    });
</script>
@stop
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css">
@stop