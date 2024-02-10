@extends('admin.layouts.base')

@section('content')
    @include('admin.layouts.components.header', [
        'title' => __('messages.list', [
            'name' => trans_choice('content.gallery', 2),
        ]),
        'breadcrumbs' => Breadcrumbs::render('admin.galleries.index'),
    ])
    {!! Form::open([
        'route' => 'admin.galleries.store',
        'id' => 'MediaForm',
        'method' => 'POST',
        'class' => 'form',
        'enctype' => 'multipart/form-data',
    ]) !!}
    <div class="row mb-6" style="padding-left: 40px;">
        <label class="col-lg-6 col-form-label required fw-bold fs-6">Add images
            (Maximum 10 image)</label>
        <div class="col-lg-7 fv-row">

            {!! Form::file('files[]', [
                'class' => 'form-control mb-3 mb-lg-0',
                'accept' => 'image/*',
                'id' => 'media_image',
                'multiple' => true,
                'placeholder' => __('Upload File '),
            ]) !!}
            <button id="submit_form" type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
    @if (isset($galleries) && $galleries->total() > 0)
    <div class="row" style="padding-left: 10px;">
        @foreach ($galleries as $gallery)
                <div class="col-md-4">
                <div class="thumbnail">
                    <a href="{{$gallery->file}}">
                        <img src="{{$gallery->file}}" alt="Lights" style="width:100%">
                    </a>
                        <div class="caption">
                            <p class="button clsdelete" data-id="{{ $gallery->id }}">Delete</p>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif

    {{ $galleries->links() }}

    {!! Form::close() !!}


    @push('scripts')
        <script>
            $('#MediaForm').submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: "{{ route('admin.galleries.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#submit_form').html('Loading...');
                        $('#submit_form').addClass('disabled');
                        $('#submit_form').attr('disabled', true);
                    },
                    success: (response) => {
                        if (response.status == 1) {
                            Swal.fire('Created!', 'Form submit successfull.', 'success');
                            setTimeout(function() {
                                location.reload();
                            }, 2000);
                        } else {
                            Swal.fire('Oops...', 'Something went wrong with ajax !',
                                'error');
                            $('#submit_form').html('Save');
                            $('#submit_form').removeClass('disabled');
                            $('#submit_form').attr('disabled', false);
                        }
                    },
                    error: function() {
                        $('#submit_form').html('Save');
                        $('#submit_form').removeClass('disabled');
                        $('#submit_form').attr('disabled', false);
                    },
                });
            });
           $(document).on('click', '.clsdelete', function() {
                var id = $(this).attr('data-id');
                var url = `{{ url('/') }}/admin/galleries/` + id;
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    showLoaderOnConfirm: true,
                    preConfirm: function() {
                        return new Promise(function(resolve) {
                            $.ajax({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                            'content')
                                    },
                                    url: url,
                                    type: 'DELETE',
                                    dataType: 'json'
                                })
                                .done(function(response) {
                                    Swal.fire('Deleted!', response.message, 'success');
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);
                                })
                                .fail(function() {
                                    Swal.fire('Oops...', 'Something went wrong with ajax !',
                                        'error');
                                });
                        });
                    },
                    allowOutsideClick: false
                });
            });
        </script>
    @endpush
@endsection
