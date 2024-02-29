@extends('admin.layouts.base')
@section('content')
    @include('admin.layouts.components.header', [
        'title' => __('messages.detail', ['name' => trans_choice('content.blog', 1)]),
        'breadcrumbs' => Breadcrumbs::render('admin.blogs.show'),
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
                            <div class="row mb-5">
                                <div class="col-md-6 fv-row">
                                    <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.is_active', 1) }}
                                    </div>
                                    <div class="fs-5 text-gray-600">{{ isset($blog->is_active) ? getStatus($blog->is_active) : 'Na' }}</div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6 fv-row">
                                    <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.title_title', 1) }}</div>
                                    <div class="fs-5 text-gray-600"><a href="{{isset($blog->title) ? $blog->title : 'Na'}}" target="_blank"><div class="font-medium whitespace-no-wrap"> 
                                  </div></a></div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6 fv-row">
                                    <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.meta_title_title', 1) }}</div>
                                    <div class="fs-5 text-gray-600"><a href="{{isset($blog->meta_title) ? $blog->meta_title : 'Na'}}" target="_blank"><div class="font-medium whitespace-no-wrap"> 
                                  </div></a></div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6 fv-row">
                                    <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.image_title', 1) }}</div>
                                    <div class="fs-5 text-gray-600"><a href="{{isset($blog->image) ? $blog->image : 'Na'}}" target="_blank"><div class="font-medium whitespace-no-wrap">
                                        <img src="{{isset($blog->image) ? $blog->image : 'Na'}}" height="150px" width="350px" alt="blog image">
                                  </div></a></div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6 fv-row">
                                    <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.description_title', 1) }}</div>
                                    <div class="fs-5 text-gray-600"><a href="{{isset($blog->description) ? $blog->description : 'Na'}}" target="_blank"><div class="font-medium whitespace-no-wrap"> 
                                  </div></a></div>
                                </div>
                            </div>


                            <div class="row mb-5">
                                <div class="col-md-6 fv-row">
                                    <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.meta_description_title', 1) }}</div>
                                    <div class="fs-5 text-gray-600"><a href="{{isset($blog->meta_description) ? $blog->meta_description : 'Na'}}" target="_blank"><div class="font-medium whitespace-no-wrap"> 
                                  </div></a></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->

                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="button" class="btn btn-primary">
                            <a href="{{ route('admin.blogs.index') }}"
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
