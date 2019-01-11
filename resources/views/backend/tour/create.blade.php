@extends('layouts.backend')
@section('styles')
<link rel="stylesheet" type="text/css"
href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css">
@stop
@section('content')
<div class="row">
    <div class="col-lg-offset-1 col-md-10">
        {!! Form::open(['route' => 'tour.store', 'class'=>'form form-validate','files'=> true ]) !!}
        <div class="card">
            <div class="card-head style-primary">
                <header>Create new tour</header>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group floating-label {{$errors->has('title') ? 'has-error' : ''}}">
                            <input type="text" class="form-control"
                            id="title {{$errors->has('title') ? 'inputError' : ''}}" name="title"
                            value="{{ old('title') }}" required>
                            @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title') }}</span>
                            @endif
                            {{ Form::label('title', 'Title ') }}
                        </div>
                    </div>
                </div>
                {{--Title --}}
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group floating-label {{$errors->has('days') ? 'has-error' : ''}}">
                            <input type="number" class="form-control"
                            id="days {{$errors->has('days') ? 'inputError' : ''}}" name="days"
                            value="{{ old('days') }}" required>
                            @if($errors->has('days'))
                            <span class="help-block">{{ $errors->first('days') }}</span>
                            @endif
                            {{ Form::label('days', 'Days ') }}
                        </div>
                    </div>   
                    <div class="col-sm-4">
                        <div class="form-group floating-label">
                            <input type="number" class="form-control"
                            id="price {{$errors->has('price') ? 'inputError' : ''}}" name="price"
                            value="{{ old('price') }}" required>
                            @if($errors->has('price'))
                            <span class="help-block">{{ $errors->first('price') }}</span>
                            @endif
                            {{ Form::label('price', 'Price') }}
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group floating-label">
                            <input type="number" class="form-control"
                            id="elevation {{$errors->has('elevation') ? 'inputError' : ''}}" name="elevation"
                            value="{{ old('elevation') }}" required>
                            @if($errors->has('elevation'))
                            <span class="help-block">{{ $errors->first('elevation') }}</span>
                            @endif
                            {{ Form::label('elevation', 'Max elevation ') }}
                        </div>
                    </div>                    
                </div>
                {{--Price --}}
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group floating-label">
                            <select name="difficulty" id="difficulty" class="form-control" required>
                                <option value=""></option>
                                @foreach($difficulties as $level)
                                <option value="{{$level->id}}">{{$level->name}}</option>
                                @endforeach
                            </select>
                            <label for="difficulty">Difficulty</label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group floating-label">
                            <select name="group" id="group" class="form-control" required>
                                <option value=""></option>
                                @foreach($groups as $size)
                                <option value="{{$size->id}}">{{$size->name}}</option>
                                @endforeach
                            </select>
                            <label for="group">Group Size</label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group floating-label {{$errors->has('category') ? 'has-error' : ''}}">
                            <select id="category {{$errors->has('category')? 'inputError' : ''}}" name="category"
                                class="form-control category" value="{{ old('category') }}" required>
                                <option value="">&nbsp;</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <label for="category">Category</label>
                        </div>
                    </div>                    
                </div>
                {{--Altitude, group, difficulty --}}
                <div class="row">
                    <div class="col-sm-12" id="region">
                        <div class="form-group floating-label {{$errors->has('region') ? 'has-error' : ''}}">
                            <select id="region {{$errors->has('region')? 'inputError' : ''}}" name="region"
                                class="form-control " value="{{ old('region') }}">
                                <option value="">&nbsp;</option>
                                @foreach($regions as $region)
                                <option value="{{$region->id}}">{{$region->name}}</option>
                                @endforeach
                            </select>
                            <label for="Region">Region</label>
                        </div>
                    </div>
                </div>
                {{--Country, category, region --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('accommodation') ? 'has-error' : ''}}">
                            <select id="accommodation {{$errors->has('accommodation')? 'inputError' : ''}}"
                                name="accommodation" class="form-control" value="{{ old('accommodation') }}"
                                required>
                                <option value=""></option>
                                @foreach($accommodations as $accommodation)
                                <option value="{{$accommodation->id}}">{{$accommodation->name}}</option>
                                @endforeach
                            </select>
                            <label for="accommodation">Accommodation</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('meal') ? 'has-error' : ''}}">
                            <select id="meal {{$errors->has('meal')? 'inputError' : ''}}" name="meal"
                                class="form-control" value="{{ old('meal') }}" required>
                                <option value=""></option>
                                @foreach($meals as $meals)
                                <option value="{{$meals->id}}">{{$meals->name}}</option>
                                @endforeach
                            </select>
                            <label for="meal">Meal Plan</label>
                        </div>
                    </div>
                </div>
                {{--Accommodation, Meal--}}
                <div class="row">
{{--                         <div class="col-sm-6">
                            <div class="form-group floating-label {{$errors->has('start') ? 'has-error' : ''}}">
                                <select id="start {{$errors->has('start')? 'inputError' : ''}}" name="start"
                                        class="form-control" value="{{ old('start') }}">
                                    <option value="">&nbsp;</option>
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('start'))
                                    <span class="help-block">{{$errors->first('start')}}</span>
                                @endif
                                <label for="start">Starts from</label>
                            </div>
                        </div> --}}
{{--                         <div class="col-sm-6">
                            <div class="form-group floating-label {{$errors->has('end') ? 'has-error' : ''}}">
                                <select id="end {{$errors->has('end')? 'inputError' : ''}}" name="end"
                                        class="form-control" value="{{ old('end') }}">
                                    <option value="">&nbsp;</option>
                                    @foreach($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('end'))
                                    <span class="help-block">{{$errors->first('end')}}</span>
                                @endif
                                <label for="end">Ends at</label>
                            </div>
                        </div> --}}
                    </div>{{-- Start Location, End Location--}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="includes">Includes</label>
                                <select class="form-control" id="includes" multiple="multiple" name="includes[]"
                                value="{{ old('includes[]') }}" class="includes">
                                @foreach($includes as $include)
                                <option value="{{ $include->id }}">{{ $include->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('includes'))
                            <span class="help-block">{{$errors->first('includes')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="excludes">Excludes</label>
                            <select class="form-control" id="excludes" multiple="multiple" name="excludes[]"
                            value="{{ old('excludes[]') }}" class="excludes">
                            @foreach($excludes as $exclude)
                            <option value="{{ $exclude->id }}">{{ $exclude->name }}</option>t
                            @endforeach
                        </select>
                        @if ($errors->has('excludes'))
                        <span class="help-block">{{$errors->first('excludes')}}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal"
                        data-target="#myModal">
                        <i class="far fa-image"></i>  Featured Image
                    </button>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal"
                    data-target="#gallery">
                    <i class="far fa-images"></i>  Gallery
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group {{$errors->has('status') ? 'has-error' : ''}}">
                <label class="col-sm-3 control-label">Status</label>
                <div class="col-sm-9">
                    <label class="radio-inline radio-styled radio-success">
                        <input type="radio" value="1" name="status" checked><span>Publish</span>
                    </label>
                    <label class="radio-inline radio-styled radio-warning">
                        <input type="radio" value="0" name="status"><span>Draft</span>
                    </label>
                </div>
                @if($errors->has('status'))
                <span class="help-block">{{ $errors->first('status') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <h4>Overview</h4>
            <textarea name="overview"></textarea>
        </div>
    </div>
    {{--Overview --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group {{$errors->has('mtitle') ? 'has-error' : ''}} floating-label">
                {{ Form::text('mtitle', null, ['class' => 'form-control', 'id'=>'mtitle', 'required' =>'required']) }}
                @if($errors->has('mtitle'))
                <span class="help-block">{{ $errors->first('mtitle') }}</span>
                @endif
                {{ Form::label('mtitle', 'Meta Title ') }}
            </div>
        </div>
    </div>
    {{--Meta Title --}}
    <div class="row">
        <div class="col-sm-12" id="desc">
            <div class="form-group  {{$errors->has('description') ? 'has-error' : ''}} floating-label">
              <textarea v-model="desc" class="form-control meta" maxlength="160" name="description"
              id="description {{$errors->has('description')? 'inputError' : ''}}" required>
          </textarea>
          @if ($errors->has('description'))
          <span class="help-block">{{$errors->first('description')}}</span>
          @endif
          <label for="textarea2">Description</label>
      </div>
      <em class="text-caption"><span>@{{ descRemaining }}</span> characters remaining.</em>
  </div>
</div>
{{--meta Description --}}
</div><!--end .card body-->
{{-- featured image modal start --}}
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
{{-- featured image modal end --}}
{{-- slides modal start --}}
<div id="gallery" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Media Images</h4>
            </div>
            <div class="modal-body text-center">
                @if(!empty($images))
                <select class="slides show-html"
                name="slides[]" multiple="multiple">
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
{{-- slides modal end --}}
<div class="card-actionbar">
    <div class="card-actionbar-row">
        {{ Form::submit('Create', ['class' => 'btn btn-lg btn-flat btn-primary ink-reaction'] )}}
    </div>
</div>
{!! Form::close() !!}
</div><!--end .col -->
</div>
</div>

@endsection
@section('scripts')
<script src="{{ asset('assets/backend/js/core/demo/DemoFormComponents.js') }}"></script>
<script src="{{ asset('assets/backend/js/libs/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/backend/js/libs/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('assets/backend/js/core/demo/DemoFormEditors.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
<script>
    $('#includes,#excludes').multiselect({
        includeSelectAllOption: true,
        selectAllJustVisible: false,
        enableFiltering: true,
        numberDisplayed: 1,
        maxHeight: 600,
        buttonWidth: '400px'
    });
    $(".image-picker").imagepicker();
    $(".slides").imagepicker();

    CKEDITOR.replace('overview', {
        height: 500
    });
    $("#region").hide();
    $(".category").change(function () {
        if ($(this).val() == 1 || $(this).val() == 2 || $(this).val() == 3) {
            $("#region").show();
        }
        else {
            $("#region").hide();
        }
    });
</script>
@stop
