@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-offset-1 col-md-10">
        {!! Form::open(['route' => 'pages.store', 'class'=>'form form-validate','files'=> true ]) !!}
        <div class="card">
            <div class="card-head style-primary">
                <header>Create new page</header>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                            {{ Form::text('title', Request::old('title'), ['class' => 'form-control', 'placeholder' => 'Enter title here', 'required']) }}
                            @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title') }}</span>
                            @endif
                            {{ Form::label('title', 'Title ') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group  {{$errors->has('position') ? 'has-error' : ''}}">
                            <input type="text" class="form-control input-md m-b-sm" name="position">
                            <label for="position">Position</label>
                            @if ($errors->has('position'))
                            <span class="help-block">{{$errors->first('position')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group {{$errors->has('main') ? 'has-error' : ''}}">
                            <label class="col-sm-6 control-label">Main or Sub</label>
                            <div class="col-sm-6">
                                <label class="radio-inline radio-styled radio-success">
                                    <input type="radio" value="1" name="main" checked onclick="hidemenu()"><span>Main</span>
                                </label>
                                <label class="radio-inline radio-styled radio-info">
                                    <input type="radio" value="0" name="main" onclick="showmenu()"><span>Sub</span>
                                </label>
                            </div>
                            @if($errors->has('status'))
                            <span class="help-block">{{ $errors->first('main') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-5" id="parent">
                        <div class="form-group  {{$errors->has('parent_id') ? 'has-error' : ''}}">
                            <select class="form-control m-b-sm" name="parent_id" id="name">
                                @foreach($pages as $page)
                                <option value="{{$page->id}}">{{$page->title}}</option>
                                @endforeach
                            </select>
                            <label class="control-label">Parent Page</label>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button type="button" class="btn btn-block ink-reaction btn-info" data-toggle="modal"
                            data-target="#myModal">
                            <i class="far fa-image"></i>  Banner Image
                        </button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group {{$errors->has('status') ? 'has-error' : ''}}">
                        <label class="col-sm-6 control-label">Status</label>
                        <div class="col-sm-6">
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
                    <textarea name="page_content"> </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group {{$errors->has('mtitle') ? 'has-error' : ''}}">
                        {{ Form::text('mtitle', null, ['class' => 'form-control', 'id'=>'mtitle']) }}
                        @if($errors->has('mtitle'))
                        <span class="help-block">{{ $errors->first('mtitle') }}</span>
                        @endif
                        {{ Form::label('mtitle', 'Meta Title ') }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12" id="desc">
                    <div class="form-group  {{$errors->has('description') ? 'has-error' : ''}}">
                      <textarea v-model="desc" class="form-control meta" maxlength="160" name="description"
                      id="description {{$errors->has('description')? 'inputError' : ''}}">
                  </textarea>
                  @if ($errors->has('description'))
                  <span class="help-block">{{$errors->first('description')}}</span>
                  @endif
                  <label for="textarea2">Description</label>
              </div>
              <em class="text-caption"><span>@{{ descRemaining }}</span> characters remaining.</em>
          </div>
      </div>
  </div><!--end .card body-->
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
                name="banner">
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
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css">
@stop
@section('scripts')
<script src="{{ asset('assets/backend/js/core/demo/DemoFormComponents.js') }}"></script>
<script src="{{ asset('assets/backend/js/libs/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/backend/js/libs/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ asset('assets/backend/js/core/demo/DemoFormEditors.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
<script>
    $("#parent").hide();
    document.getElementById("name").disabled = true;

    function showmenu() {
        document.getElementById('parent').style.display = 'block';
        document.getElementById("name").disabled = false;
    }

    function hidemenu() {
        document.getElementById('parent').style.display = 'none';
        document.getElementById("name").disabled = true;
    }
    CKEDITOR.replace('page_content', {
        height: 500
    });
    $(".image-picker").imagepicker();
</script>
@stop
