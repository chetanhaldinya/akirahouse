<!--begin::Card body-->
<div class="card-body">
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.title', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::text('title', null, [
                'placeholder' => trans_choice('content.title', 1),
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            ]) !!}
        </div>
        <!--end::Col-->
    </div>

    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label
            class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.description', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-10 fv-row">
            {!! Form::textarea('description', null, [
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
                'id' => 'ckeditor',
                'rows' => 3,
                'cols' => 20,
                'placeholder' => trans_choice('content.description', 1),
            ]) !!}
            @if ($errors->has('description'))
                <span style="color:red">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Col-->
    <div class="row mb-6">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.image', 1) }}(1920px *
            520px)</label>
        <div class="col-lg-7 fv-row">
            {!! Form::file('image', [
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
                'id' => 'image',
                'onchange' => 'readURL(this, image);',
                'accept' => 'image/x-png,image/jpg,image/jpeg,image/png',
                'placeholder' => __('Upload Image '),
            ]) !!}
        </div>
        <div class="col-lg-3 fv-row">
            @if (isset($image->image))
                <img id="backImage_image" width="80px" height="80px" src="{{ $image->image }}" title="Image">
            @else
                <img id="backImage_image" src="{{ blankImageUrl() }}" width="80px" height="80px" title="Image">
            @endif
        </div>
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="row mb-6">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.other_images', 1) }}
            (Maximum 10 image)</label>
        <div class="col-lg-7 fv-row">
        {!! Form::file('other_images[]', [
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
                'accept' => 'image/*',
                'placeholder' => __('Upload Image '),
                'multiple' => 'true',
            ]) !!}
            <div class="col-lg-3 fv-row">
            @if ($errors->has('other_images'))
                <span class="invalid-feedback" style="display: block;">{{ $errors->first('other_images') }}</span>
            @endif
            </div>
        </div>
    </div>
    <div class="row mb-6">
        <div class="col-lg-7 fv-row" style="display: flex;">
            @if (!empty($image->image_images))
                @foreach ($image->image_images as $images)
                    <a href="{{ $images->image }}" target="_blank">
                        <img style="margin: 5px;" data-id="{{ $images->id }}" width="80px" height="80px"
                            src="{{ $images->image }}" title="Image"></a>
                @endforeach
            @endif
        </div>
    </div>
    <!--end::Col-->
    <!--end::Card body-->
</div>

@push('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Admin\ImageRequest', 'form') !!}
@endpush
