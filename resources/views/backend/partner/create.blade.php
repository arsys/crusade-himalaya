@extends('layouts.backend')
@section('styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/backend/css/libs/dropzone/dropzone-theme.css') }}" />
@stop
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-head style-primary">
                    <header>Drag and drop uploader</header>
                </div>
                <div class="card-body no-padding">
                    <form
                            method="POST"
                            action="{{route('partner.store')}}"
                            class="dropzone"
                            id="addPhotosForm">
                        {{ csrf_field() }}
                        <div class="form-group">
                                <select name="type" id="type" class="form-control" required>
                                    <option value="">&nbsp;</option>
                                    <option value="1">Media</option>
                                    <option value="2">Accommodation</option>
                                    <option value="3">Travel</option>
                                </select>
                                <label for="type">Type</label>
                            </div>
                        <div class="dz-message">
                            <h3>Drop files here or click to upload.</h3>
                            <h4>Resolution: 165x155</h4>
                        </div>
                    </form>
                </div><!--end .card-body -->
            </div><!--end .card -->

            <a href="{{ route('partner.index') }}" class="col-md-6 col-md-offset-3 btn ink-reaction btn-success">Save</a>
        </div><!--end .col -->
    </div>
    @endsection
@section('scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script> --}}
<script src="{{ asset('assets/backend/js/libs/dropzone/dropzone.min.js') }}"></script>
<script type="text/javascript">
    Dropzone.options.addPhotosForm = {
        paramName: 'photo',
        maxFileSize: 20,
        acceptedFiles: '.jpg, .jpeg,.png',
        dictDefaultMessage: "Drop images here to upload",
    };
</script>
@stop
