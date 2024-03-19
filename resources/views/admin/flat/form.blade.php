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
        <!--begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.size', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::text('size', null, [
                'placeholder' => trans_choice('content.size', 1),
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            ]) !!}
        </div>

        <!--end::Col-->
    </div>
     <!--begin::Input group-->
     <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.bed_room', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::text('bed_room', null, [
                'placeholder' => trans_choice('content.bed_room', 1),
                'class' => 'form-control only_number form-control-lg form-control-solid mb-3 mb-lg-0',
            ]) !!}
        </div>

        <!--end::Col-->
        <!--begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.max_guest', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::text('max_guest', null, [
                'placeholder' => trans_choice('content.max_guest', 1),
                'class' => 'form-control only_number form-control-lg form-control-solid mb-3 mb-lg-0',
            ]) !!}
        </div>

        <!--end::Col-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.bath_room', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::text('bath_room', null, [
                'placeholder' => trans_choice('content.bath_room', 1),
                'class' => 'form-control only_number form-control-lg form-control-solid mb-3 mb-lg-0',
            ]) !!}
        </div>
        <!--end::Col-->
        <!--begin::Label-->
        <label
            class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.youtube_url', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::text('youtube_url', null, [
                'placeholder' => trans_choice('content.youtube_url', 1),
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            ]) !!}
        </div>

        <!--end::Col-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row mb-6">
         <!--begin::Label-->
         <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.amount', 1) }} (Per night)</label>
         <!--end::Label-->
         <!--begin::Col-->
         <div class="col-lg-4 fv-row">
             {!! Form::text('amount', null, [
                 'placeholder' => trans_choice('content.amount', 1),
                 'class' => 'form-control only_number form-control-lg form-control-solid mb-3 mb-lg-0',
             ]) !!}
         </div>
         <!--end::Col-->
         <!--begin::Label-->
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

      <!--begin::Input group-->
      <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.location', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-10 fv-row">
            {!! Form::text('location', null, [
                'placeholder' => trans_choice('content.location', 1),
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            ]) !!}
        </div>
        <!--end::Col-->
   </div>
   <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label
            class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.short_description', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-10 fv-row">
            {!! Form::textarea('short_description', null, [
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
                'id' => 'ckeditor',
                'rows' => 3,
                'cols' => 40,
                'placeholder' => trans_choice('content.short_description', 1),
            ]) !!}
            @if ($errors->has('short_description'))
                <span style="color:red">{{ $errors->first('short_description') }}</span>
            @endif
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label
            class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.long_description', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-10 fv-row">
            {!! Form::textarea('long_description', null, [
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0 ckeditor',
                'id' => 'ckeditor',
                'rows' => 3,
                'cols' => 40,
                'placeholder' => trans_choice('content.long_description', 1),
            ]) !!}
            @if ($errors->has('long_description'))
                <span style="color:red">{{ $errors->first('long_description') }}</span>
            @endif
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->

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
            @if (isset($flat->image))
                <img id="backImage_image" width="80px" height="80px" src="{{ $flat->image }}" title="Image">
            @else
                <img id="backImage_image" src="{{ blankImageUrl() }}" width="80px" height="80px" title="Image">
            @endif
        </div>
    </div>
    <!--end::Card body-->

    <div class="row mb-6">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.other_images', 1) }}
            (Maximum 10 image)</label>
        <div class="col-lg-7 fv-row">
            <input type="file" name="other_images[]"
                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                placeholder={{ __('Upload Image ') }} multiple="true" accept="image/*">
            @if ($errors->has('other_images'))
                <span class="invalid-feedback" style="display: block;">{{ $errors->first('other_images') }}</span>
            @endif
        </div>
    </div>
    <div class="row mb-6">
        <div class="col-lg-7 fv-row" style="display: flex;">
            @if (!empty($flat->flat_images))
                @foreach ($flat->flat_images as $images)
                    <a href="{{ $images->image }}" target="_blank">
                        <img style="margin: 5px;" data-id="{{ $images->id }}" width="80px" height="80px"
                            src="{{ $images->image }}" title="Image"></a>
                @endforeach
            @endif
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Admin\FlatRequest', 'form') !!}
@endpush
