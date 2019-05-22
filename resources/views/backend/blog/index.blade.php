@extends('layouts.backend')
@section('content')
<div class="row">
  <div class="col-md-10"></div>
  <div class="col-md-2">
    <a href="{{ route('blog-post.create') }}"
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
              <th class="sort-alpha">Category</th>
              <th data-orderable="false">Meta Title</th>
              <th data-orderable="false">Meta Description</th>
              <th class="sort-alpha">Status</th>
              <th data-orderable="false">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <th><a href="{{ route('blog-post.show', $post->id) }}">{{$post->title}}</a></th>
              <th>{{$post->category->title}}</th>
              <th>
                @if($post->mtitle)
                <i class="fas fa-check text-success"></i>
                @else
                <i class="fas fa-times text-danger"></i>
                @endif
              </th>
              <th>
                @if($post->description)
                <i class="fas fa-check text-success"></i>
                @else
                <i class="fas fa-times text-danger"></i>
                @endif
              </th>
              <th>
                @if($post->published)
                <span class="label label-success">Published</span>
                @else
                <span class="label label-warning">Unpublished</span>
                @endif
              </th>
              <th class="action-column">
                <a href="{{ route('blog-post.edit',$post->id)}}"
                 class="btn btn-block btn-sm ink-reaction btn-info">
                 <i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit
               </a>
              @if(!$post->published)
              <a href="{{ route('blog-post.publish',$post->id)}}"
               class="btn btn-block btn-sm ink-reaction btn-success">
               <i class="fa fa-print" aria-hidden="true"></i> Publish
             </a>
             @else
             <a href="{{ route('blog-post.unpublish',$post->id)}}"
               class="btn btn-block btn-sm ink-reaction btn-warning">
               <i class="fa fa-print" aria-hidden="true"></i> Unpublish
             </a>
             @endif

             {!!  Form::open( array('route'=>array('blog-post.destroy', $post->id),'method'=>'DELETE')) !!}
             <button type="submit" class="btn btn-block btn-sm ink-reaction btn-danger form-delete">
              <i class="fas fa-trash-alt" aria-hidden="true"></i> Delete
            </button>
            {!! Form::close() !!}
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
{{-- <link type="text/css" rel="stylesheet" --}}
{{--           href="{{ asset('assets/backend/css/libs/DataTables/jquery.dataTables.css') }}"/>
    <link type="text/css" rel="stylesheet"
          href="{{ asset('assets/backend/css/libs/DataTables/extensions/dataTables.colVis.css') }}"/>
    <link type="text/css" rel="stylesheet"
    href="{{ asset('assets/backend/css/libs/DataTables/extensions/dataTables.tableTools.css') }}"/> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
    <style>
    .action-column .btn{
      margin-top: 8px !important;
    }
  </style>
  @stop
  @section('scripts')
  <script src="{{ asset('assets/backend/js/core/demo/DemoTableDynamic.js') }}"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
  @stop