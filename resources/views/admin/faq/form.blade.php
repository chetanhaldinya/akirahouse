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
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.question', 1) }}</label>
        <div class="col-lg-7 fv-row">
        {!! Form::text('question',null, [
            'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            'onchange' => 'readURL(this,question);',
            'placeholder' => trans_choice('content.enter_question', 1),
        ]) !!}
    </div>
        </div>
    
    <div class="row mb-6">
        <label class="col-lg-2 col-form-label required fw-bold fs-6">{{ trans_choice('content.answer', 1) }}</label>
        <div class="col-lg-7 fv-row">
        {!! Form::text('answer',null, [
            'class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0',
            'onchange' => 'readURL(this,answer);',
            'placeholder' => trans_choice('content.enter_answer', 1),
        ]) !!}
    </div>
        </div>
    <!--end::Card body-->
        </div>

@push('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Admin\PageContentRequest', 'form') !!}
@endpush
