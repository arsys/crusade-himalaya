@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-sm-8">
        <p class="text-xxl">Media Images</p>
    </div>

</div>
@foreach (array_chunk($feeds->all(), 4) as $images)
<div class="row">
    @foreach($images as $feed)
    <div class="col-sm-3 col-md-3 item{{$feed->id}}">
        <div class="thumbnail">
            <img src="{{asset($feed->thumb_link)}}" alt="" class="img-responsive">
            <div class="caption">
                <p>
                   <button type="button" class="btn btn-danger" id="delete-modal" data-id="{{$feed->id}}"   data-toggle="modal"
                    data-target="#myModal"><i
                    class="fa fa-trash-o"></i> Delete</button>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endforeach

{{--delete modal--}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-center">
            Are you sure you want delete ?
            <input type="hidden" id="id-delete">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning delete">Delete
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
            </button>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
            //delete
            $(document).on('click', '#delete-modal', function () {
                $('#id-delete').val($(this).data('id'));
            });

            $('.modal-footer').on('click', '.delete', function () {
                var id = $('#id-delete').val();
                console.log(id);
                $.ajax({
                    type: 'DELETE',
                    url: '/manage/media/' + id,
                    data: {
                        '_token': $('meta[name="csrf-token"]').attr('content'),
                        'id': $("#id-delete").val()
                    },
                    success: function (data) {
                        $('#myModal').modal('hide');
                        toastr.success('Item deleted sucessfully!', 'Success Alert');
                        $('.item' + data['id']).remove();
                    }

                });
            });

        });
    </script>
    @stop
