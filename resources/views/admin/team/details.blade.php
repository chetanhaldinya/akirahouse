@extends('admin.layouts.base')
@section('content')
    @include('admin.layouts.components.header', [
        'title' => __('messages.edit', ['name' => trans_choice('content.team', 1)]),
        'breadcrumbs' => Breadcrumbs::render('admin.teams.show'),
    ])

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">

            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Content-->
                <div id="kt_account_profile_details">

                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">

                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <div class="col-md-6 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.name', 1) }}
                                </div>
                                <div class="fs-5 text-gray-600">{{ isset($team->name) ? $team->name : 'Na' }}
                                </div>
                            </div>
                            <div class="col-md-6 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.position', 1) }}</div>
                                <div class="fs-5 text-gray-600">
                                    {{ isset($team->position) ? $team->position : 'Na' }}</div>
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <div class="col-md-12 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.content', 1) }}</div>
                                <div class="fs-5 text-gray-600">
                                    {{ isset($team->content) ? $team->content : 'Na' }}</div>
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <div class="row mb-5">
                                <div class="col-md-6 fv-row">
                                    <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.image_title', 1) }}</div>
                                    <div class="fs-5 text-gray-600"><a
                                            href="{{ isset($team->image) ? $team->image : 'Na' }}"
                                            target="_blank">
                                            <div class="font-medium whitespace-no-wrap">
                                                <img src="{{ isset($team->image) ? $team->image : 'Na' }}"
                                                    height="150px" width="350px" alt="Banner image">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="button" class="btn btn-primary">
                            <a href="{{ route('admin.teams.index') }}"
                                class="text-white">{{ __('content.back_title') }}</a>
                        </button>
                    </div>
                    <!--end::Actions-->

                </div>
                <!--end::Content-->
            </div>
            <!--end::Basic info-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
