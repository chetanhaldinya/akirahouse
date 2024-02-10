<!--begin::Card body-->
<div class="card-body">
    <!--begin::Input group-->
    <div class="row mb-6">
        <!--begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.question', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::textarea('question', null, [
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
                'rows' => 3,
                'cols' => 40,
                'placeholder' => trans_choice('content.question', 1),
            ]) !!}
        </div>
        <!--end::Col-->
        <!--begin::Label-->
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.answer', 1) }}</label>
        <!--end::Label-->
        <!--begin::Col-->
        <div class="col-lg-4 fv-row">
            {!! Form::textarea('answer', null, [
                'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
                'rows' => 3,
                'cols' => 40,
                'placeholder' => trans_choice('content.answer', 1),
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
 
</div>

@push('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Admin\FaqRequest', 'form') !!}
@endpush
