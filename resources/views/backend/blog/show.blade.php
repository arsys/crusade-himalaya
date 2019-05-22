@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-tiles style-default-light">
            <!-- BEGIN BLOG POST HEADER -->
            <div class="row">
                <div class="col-sm-9">
                    <div class="card-body style-default-dark">
                        <h2>{{ $post->title}}</h2>
                        <div class="text-default-light">
                            Status:
                            @if($post->status == 0)
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
                            <a href="{{ route('blog-post.index') }}"
                            class="btn btn-block ink-reaction btn-success">Save</a>
                            <a href="{{ route('blog-post.edit',$post->id) }}"
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
                <div class="row">
                    {!! $post->postContent !!}
                </div>
                <div class="row">
                    <h2>Meta Title</h2>
                    {!! $post->mtitle !!}
                </div>
                <div class="row">
                    <h2>Meta Description</h2>
                    {!! $post->description !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
