@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-offset-1 col-md-10">
        {!! Form::open(['route' => 'blog-post.store', 'class'=>'form form-validate','files'=> true ]) !!}
        <div class="card">
            <div class="card-head style-primary">
                <header>Create new post</header>
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

                {{--Country, category, region --}}
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group floating-label {{$errors->has('category') ? 'has-error' : ''}}">
                            <select id="category {{$errors->has('category')? 'inputError' : ''}}"
                                name="category" class="form-control" value="{{ old('category') }}">
                                <option value=""></option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            <label for="category">Category</label>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <button type="button" class="btn btn-sm ink-reaction btn-success" data-toggle="modal"
                            data-target="#myModal">
                            <i class="far fa-image"></i>  Featured Image
                        </button>
                    </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group {{$errors->has('published') ? 'has-error' : ''}}">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <label class="radio-inline radio-styled radio-success">
                                    <input type="radio" value="1" name="published" checked><span>Publish</span>
                                </label>
                                <label class="radio-inline radio-styled radio-warning">
                                    <input type="radio" value="0" name="published"><span>Draft</span>
                                </label>
                            </div>
                            @if($errors->has('published'))
                            <span class="help-block">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <h4>Content</h4>
                        <textarea name="postContent" class="my-editor"></textarea>
                    </div>
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
                        <textarea class="form-control meta" maxlength="160" name="description"
                            id="description {{$errors->has('description')? 'inputError' : ''}}" required>
          </textarea>
                        @if ($errors->has('description'))
                        <span class="help-block">{{$errors->first('description')}}</span>
                        @endif
                        <label for="textarea2">Description</label>
                    </div>
                </div>
            </div>
            {{--meta Description --}}
        </div>
        <!--end .card body-->

        <div class="card-actionbar">
            <div class="card-actionbar-row">
                {{ Form::submit('Create', ['class' => 'btn btn-lg btn-flat btn-primary ink-reaction'] )}}
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
        {!! Form::close() !!}
    </div>
    <!--end .col -->
</div>
</div>

@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.js"></script>
    
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
  var editor_config = {
      height:"500px",
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
  $(".image-picker").imagepicker();
</script>

@stop
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/image-picker/0.3.0/image-picker.min.css">
@stop