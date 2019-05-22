@extends('layouts.backend')
@section('content')
<div class="col-lg-10 col-lg-offset-1">
    {!! Form::model($category,array('route'=> array('post-category.update',$category->id ),'class'=>'form form-validate','method' => 'PUT', 'files'=>true))!!}
    <div class="card">
        <div class="card-head style-primary">
            <header>Edit category</header>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        {{ Form::text('title', null, ['class' => 'form-control', 'id'=>'title']) }}
                        @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                        @endif
                        {{ Form::label('title', 'Title ') }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <button type="submit" class="btn btn-block btn-success ink-reaction">Update</button>
                </div>
            </div>
        </div>
    </div>
</div> 
</form>
</div>
@stop