<!--begin::Card body-->
<div class="card-body">
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.name', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::text('name', null, [
                'placeholder' => trans_choice('content.name', 1),
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            ]) !!}
        </div>
        <!--end::Col-->
        <!--begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.designation', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::text('designation', null, [
                'placeholder' => trans_choice('content.designation', 1),
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            ]) !!}
        </div>

        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="row mb-6">
        <!-- begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.is_active', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::select('is_active', statusArray(), null, [
                'placeholder' => trans_choice('content.please_select', 1),
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            ]) !!}
        </div>

        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <div class="row mb-6">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.image', 1) }}(630px *
            484px)</label>
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
            @if (isset($testimonial->image))
                <img id="backImage_image" width="80px" height="80px" src="{{ $testimonial->image }}" title="Image">
            @else
                <img id="backImage_image" src="{{ blankImageUrl() }}" width="80px" height="80px" title="Image">
            @endif
        </div>
    </div>
    <!--end::Card body-->
     <!--begin::Input group-->
     <div class="row mb-6">
        <!--begin::Label-->
        <label
            class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.content', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-10 fv-row">
            {!! Form::textarea('content', null, [
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
                'rows' => 3,
                'cols' => 40,
                'placeholder' => trans_choice('content.content', 1),
            ]) !!}
            @if ($errors->has('content'))
                <span style="color:red">{{ $errors->first('content') }}</span>
            @endif
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->
</div>

@push('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Admin\TestimonialRequest', 'form') !!}
@endpush
