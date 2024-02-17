<!--begin::Card body-->
<div class="card-body">
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label
            class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.is_active', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-10 fv-row">
            {!! Form::select('is_active', statusArray(), null, [
            'placeholder' => trans_choice('content.please_select', 1),
            'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
        ]) !!}
           </div>

        <!--end::Col-->
    </div>
    <!--end::Input group-->
    <div class="row mb-6">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.title', 1) }}</label>
        <div class="col-lg-7 fv-row">
        {!! Form::text('title', null, [
            'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            'onchange' => 'readURL(this, title);',
            'placeholder' => __('Enter Your Title'),
        ]) !!}
    </div>
        </div>
        <div class="row mb-6">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.meta_title', 1) }}</label>
        <div class="col-lg-7 fv-row">
        {!! Form::text('meta_title', null, [
            'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            'onchange' => 'readURL(this, meta_title);',
            'placeholder' => __('Enter Your Meta Title'),
        ]) !!}
    </div>
        </div>

    <div class="row mb-6">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.image', 1) }}(1765px * 776px)</label>
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
            @if (isset($blog->image))
                <img id="backImage_image" width="80px" height="80px" src="{{ $blog->image }}" title="Image">
                @else
                <img id="backImage_image" src="{{blankImageUrl()}}" width="80px" height="80px" title="Image">
            @endif
        </div>
    </div>
    <div class="row mb-6">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.description', 1) }}</label>
        <div class="col-lg-7 fv-row">
        {!! Form::text('description', null, [
            'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            'onchange' => 'readURL(this, description);',
            'placeholder' => __('Enter Your Description '),
        ]) !!}
    </div>
        </div>
        <div class="row mb-6">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.meta_description', 1) }}</label>
        <div class="col-lg-7 fv-row">
        {!! Form::text('meta_description', null, [
            'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            'onchange' => 'readURL(this, meta_description);',
            'placeholder' => __('Enter Your Meta Description '),
        ]) !!}
    </div>
        </div>
    <!--end::Card body-->
</div>

@push('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Admin\PageContentRequest', 'form') !!}
@endpush
