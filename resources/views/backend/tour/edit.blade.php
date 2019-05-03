@php
$inIds = json_decode(json_encode($tour->includes()->allRelatedIds()), true);
$exIds =json_decode(json_encode($tour->excludes()->allRelatedIds()), true);
$budinIds = json_decode(json_encode($tour->budgetIncludes()->allRelatedIds()), true);
$budexIds =json_decode(json_encode($tour->budgetExcludes()->allRelatedIds()), true);
@endphp
@extends('layouts.backend')
@section('styles')
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css">
@stop
@section('content')
 @if ($errors->any()) @foreach ($errors->all() as $error)
<h1>{{$error}}</h1>
@endforeach
@endif
<div class="row">
    <div class="col-lg-offset-1 col-md-10">
        {!! Form::model($tour,array('route'=> array('tour.update',$tour->id ),'class'=>'form form-validate','method' => 'PUT', 'files'=>true))!!}
        <div class="card">
            <div class="card-head style-primary">
                <header>Edit {{$tour->title}}</header>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group floating-label {{$errors->has('title') ? 'has-error' : ''}}">
                            {{ Form::text('title', null, ['class' => 'form-control', 'id'=>'title']) }} @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title') }}</span> @endif {{ Form::label('title', 'Title ') }}
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group floating-label">
                            {{ Form::number('price', null, ['class' => 'form-control', 'id'=>'price']) }} @if($errors->has('price'))
                            <span class="help-block">{{ $errors->first('price') }}</span> @endif {{ Form::label('price', 'Luxury Price') }}
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group floating-label">
                            {{ Form::number('budgetPrice', null, ['class' => 'form-control', 'id'=>'budgetPrice']) }} @if($errors->has('budgetPrice'))
                            <span class="help-block">{{ $errors->first('budgetPrice') }}</span> @endif {{ Form::label('budgetPrice', 'Budget Price') }}
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group floating-label">
                            {{ Form::number('singleSupp', null, ['class' => 'form-control', 'id'=>'singleSupp']) }} @if($errors->has('singleSupp'))
                            <span class="help-block">{{ $errors->first('singleSupp') }}</span> @endif {{ Form::label('singleSupp', 'Single Supplement Price') }}
                        </div>
                    </div>
                </div>
                {{--Title --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('days') ? 'has-error' : ''}}">
                            {{ Form::number('days', null, ['class' => 'form-control', 'id'=>'days']) }} @if($errors->has('days'))
                            <span class="help-block">{{ $errors->first('days') }}</span> @endif {{ Form::label('days', 'Days ') }}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group floating-label">
                            {{ Form::text('elevation', null, ['class' => 'form-control', 'id'=>'elevation']) }} @if($errors->has('elevation'))
                            <span class="help-block">{{ $errors->first('elevation') }}</span> @endif {{ Form::label('elevation', 'Elevation') }}
                        </div>
                    </div>
                </div>
                {{--Price --}}
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group floating-label">
                            <select name="difficulty" id="difficulty" class="form-control" >
                                <option value="">&nbsp;</option>
                                @foreach($difficulties as $level)
                                @if (!empty($tour->difficulty_id))
                                <option value="{{ $level->id }}">{{ $level->name }}</option>
                                @else
                                <option value="{{ $level->id }}" {{($level->id == $tour->difficulty_id)?"selected":"" }}>{{ $level->name }}</option>
                                @endif    
                                @endforeach
                            </select>
                            <label for="difficulty">Difficulty</label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group floating-label">
                            <select name="group" id="group" class="form-control" >
                                <option value=""></option>
                                @foreach($groups as $size)
                                @if (!empty($tour->group_id))
                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                @else
                                <option value="{{ $size->id }}" {{($size->id == $tour->group_id)?"selected":"" }}>{{ $size->name }}</option>
                                @endif                                   
                                @endforeach
                            </select>
                            <label for="group">Group Size</label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group floating-label {{$errors->has('category') ? 'has-error' : ''}}">
                            <select id="category {{$errors->has('category')? 'inputError' : ''}}" name="category" class="form-control category" value="{{ old('category') }}" required>
                                @foreach($categories as $category) 
                                @if(!empty($tour->category_id ))
                                <option value="{{ $category->id }}" {{($category->id == $tour->category_id)?"selected":"" }}>{{ $category->name }}</option>
                                @else
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif 
                                @endforeach
                            </select>
                            <label for="category">Category</label>
                        </div>
                    </div>
                </div>
                {{--Altitude, group, difficulty --}}
                <div class="row">

                    <div class="col-sm-4" id="region" style="display:none;">
                        <div class="form-group floating-label {{$errors->has('region') ? 'has-error' : ''}}">
                            <select id="region {{$errors->has('region')? 'inputError' : ''}}" name="region" class="form-control " value="{{ old('region') }}">
                                <option value="">&nbsp;</option>
                                @if(!empty($tour->region)) @foreach($regions as $region)
                                <option value="{{ $region->id }}" {{($region->id == $tour->region->id)?"selected":"" }}>{{ $region->name }}</option>
                                @endforeach @else @foreach($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach @endif
                            </select>
                            <label for="Region">Region</label>
                        </div>
                    </div>
                </div>
                {{--Country, category, region --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('accommodation') ? 'has-error' : ''}}">
                            <select id="accommodation {{$errors->has('accommodation')? 'inputError' : ''}}" name="accommodation" class="form-control" value="{{ old('accommodation') }}" >
                                <option value="">&nbsp;</option>
                                @foreach($accommodations as $accommodation)
                                @if (!empty($tour->accommodation_id))
                                <option value="{{ $accommodation->id }}">{{ $accommodation->name }}</option>
                                @else
                                <option value="{{ $accommodation->id }}" {{($accommodation->id == $tour->accommodation_id)?"selected":"" }}>{{ $accommodation->name }}</option>    
                                @endif                                
                                @endforeach
                            </select>
                            <label for="accommodation">Accommodation</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group floating-label {{$errors->has('meal') ? 'has-error' : ''}}">
                            <select id="meal {{$errors->has('meal')? 'inputError' : ''}}" name="meal" class="form-control" value="{{ old('meal') }}" >
                                <option value="">&nbsp;</option>
                                
                                @foreach($meals as $meal)
                                @if (!empty($tour->meal_id))
                                <option value="{{ $meal->id }}">{{ $meal->name }}</option>
                                @else
                                <option value="{{ $meal->id }}" {{($meal->id == $tour->meal_id)?"selected":"" }}>{{ $meal->name }}</option>    
                                @endif   
                                @endforeach
                            </select>
                            <label for="meal">Meal Plan</label>
                        </div>
                    </div>
                </div>
                {{--Accommodation, Meal--}} {{-- Start Location, End Location--}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="includes">Includes</label>
                            <select class="form-control" id="includes" multiple="multiple" name="includes[]" value="{{ old('includes[]') }}" class="includes">
                                @foreach($includes as $include)
                                <option value="{{ $include->id }}" <?php echo in_array($include->id, $inIds) ? 'selected' : ''?> >{{ $include->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('includes'))
                            <span class="help-block">{{$errors->first('includes')}}</span> @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="excludes">Excludes</label>
                            <select class="form-control" id="excludes" multiple="multiple" name="excludes[]" value="{{ old('excludes[]') }}" class="excludes">
                                @foreach($excludes as $exclude)
                                <option value="{{ $exclude->id }}" <?php echo in_array($exclude->id, $exIds) ? 'selected' : ''?> >{{ $exclude->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('excludes'))
                            <span class="help-block">{{$errors->first('excludes')}}</span> @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="budgetIncludes">Budget Includes</label>
                                <select class="form-control" id="budgetIncludes" multiple="multiple" name="budgetIncludes[]" value="{{ old('budgetIncludes[]') }}" class="includes">
                                    @foreach($includes as $include)
                                    <option value="{{ $include->id }}" <?php echo in_array($include->id, $budinIds) ? 'selected' : ''?> >{{ $include->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('budgetIncludes'))
                                <span class="help-block">{{$errors->first('budgetIncludes')}}</span> @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="budgetExcludes">Budget Excludes</label>
                                <select class="form-control" id="budgetExcludes" multiple="multiple" name="budgetExcludes[]" value="{{ old('budgetExcludes[]') }}" class="budgetExcludes">
                                    @foreach($excludes as $exclude)
                                    <option value="{{ $exclude->id }}" <?php echo in_array($exclude->id, $budexIds) ? 'selected' : ''?> >{{ $exclude->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('budgetExcludes'))
                                <span class="help-block">{{$errors->first('budgetExcludes')}}</span> @endif
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Featured Image
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal" data-target="#gallery">
                                <i class="far fa-images"></i> Gallery
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
                                    <input type="radio" value="1" name="status" {{$tour->status?'checked': ''}}><span>Publish</span>
                                </label>
                                <label class="radio-inline radio-styled radio-warning">
                                    <input type="radio" value="0" name="status" {{$tour->status?' ': 'checked'}}><span>Draft</span>
                                </label>
                            </div>
                            @if($errors->has('status'))
                            <span class="help-block">{{ $errors->first('status') }}</span> @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <h4>Overview</h4> {{ Form::textarea('overview',null, ['class' => 'form-control ','id'=>'overview']) }}
                    </div>
                </div>
                {{--Overview --}}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group {{$errors->has('mtitle') ? 'has-error' : ''}} floating-label">
                            {{ Form::text('mtitle', null, ['class' => 'form-control', 'id'=>'mtitle', 'required' =>'required']) }} @if($errors->has('mtitle'))
                            <span class="help-block">{{ $errors->first('mtitle') }}</span> @endif {{ Form::label('mtitle', 'Meta Title ') }}
                        </div>
                    </div>
                </div>
                {{--Meta Title --}}
                <div class="row">
                    <div class="col-sm-12" id="desc">
                        <div class="form-group  {{$errors->has('description') ? 'has-error' : ''}} floating-label">
                            {{ Form::text('description', null, ['class' => 'form-control', 'id'=>'description', 'required' =>'required']) }} @if ($errors->has('description'))
                            <span class="help-block">{{$errors->first('description')}}</span> @endif
                            <label for="textarea2">Description</label>
                        </div>
                    </div>
                </div>
                {{--meta Description --}}
            </div>
            <!--end .card body-->
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
                            <select class="image-picker show-html" name="featured">
                                <option value=""></option>
                                @foreach($images as $image)
                                <option data-img-src="{{asset($image->thumb)}}" value="{{$image->id}}">
                                </option>
                                @endforeach
                            </select>
                            @else
                            <h2>No images uploaded in media.</h2> @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            {{-- featured image modal end --}} {{-- slides modal start --}}
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
                            <select class="slides show-html" name="slides[]" multiple="multiple">
                                <option value=""></option>
                                @foreach($images as $image)

                                <option data-img-src="{{asset($image->thumb)}}" value="{{$image->id}}">
                                </option>
                                @endforeach
                            </select>
                            @else
                            <h2>No images uploaded in media.</h2> @endif
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
        </div>
        <!--end .col -->
    </div>
</div>

@endsection @section('scripts')
<script src="{{ asset('assets/backend/js/core/demo/DemoFormComponents.js') }}"></script>
<script src="{{ asset('assets/backend/js/libs/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/backend/js/libs/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('assets/backend/js/core/demo/DemoFormEditors.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
<script>
    $('#includes,#excludes,#budgetIncludes,#budgetExcludes').multiselect({
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
    //        $("#region").hide();
    $(".category").change(function() {
        if ($(this).val() == 1 || $(this).val() == 2 || $(this).val() == 3) {
            $("#region").show();
        } else {
            $("#region").hide();
        }
    });

    $('#includes,#excludes').multiselect({
        includeSelectAllOption: true,
        selectAllJustVisible: false,
        enableFiltering: true,
        numberDisplayed: 1,
        maxHeight: 600,
        buttonWidth: '400px'
    });
</script>

@stop
