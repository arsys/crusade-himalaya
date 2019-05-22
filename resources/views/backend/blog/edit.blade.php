
@extends('layouts.backend')
@section('content')

<div class="row">
    <div class="col-lg-offset-1 col-md-10">
        {!! Form::model($post,array('route'=> array('blog-post.update',$post->id ),'class'=>'form form-validate','method' => 'PUT', 'files'=>true))!!}
        <div class="card">
            <div class="card-head style-primary">
                <header>Edit {{$post->title}}</header>
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
                        <div class="form-group floating-label {{$errors->has('category') ? 'has-error' : ''}}">
                            <select id="category {{$errors->has('category')? 'inputError' : ''}}"
                                name="category" class="form-control" >
                                <option value=""></option>
                                @foreach($categories as $category)
                                @if ($post->category_id === $category->id)
                                <option value="{{$category->id}}" selected>{{$category->title}}</option>
                                @else
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endif
                                
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
                                    <input type="radio" value="1" name="published" {{$post->published ?'checked':''}}><span>Publish</span>
                                </label>
                                <label class="radio-inline radio-styled radio-warning">
                                    <input type="radio" value="0" name="published" {{$post->published ?'':'checked'}}><span>Draft</span>
                                </label>
                            </div>
                            @if($errors->has('published'))
                            <span class="help-block">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <h4>Overview</h4> {{ Form::textarea('postContent',null, ['class' => 'form-control my-editor','id'=>'postContent']) }}
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
            {{-- slides modal end --}}
            <div class="card-actionbar">
                <div class="card-actionbar-row">
                    <div class="col-sm-6 col-sm-offset-3">
                            {{ Form::submit('Update', ['class' => 'btn btn-lg btn-primary btn-block'] )}}
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