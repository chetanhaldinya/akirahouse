@extends('admin.layouts.base')
@section('content')
    @include('admin.layouts.components.header', [
        'title' => __('messages.edit', ['name' => trans_choice('content.flat', 1)]),
        'breadcrumbs' => Breadcrumbs::render('admin.flats.show'),
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
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.title_title', 1) }}
                                </div>
                                <div class="fs-5 text-gray-600">{{ isset($flat->title) ? $flat->title : 'Na' }}</div>
                            </div>
                            <div class="col-md-6 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.size', 1) }}</div>
                                <div class="fs-5 text-gray-600">{{ isset($flat->size) ? $flat->size : 'Na' }}</div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <div class="col-md-6 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.bed_room', 1) }}
                                </div>
                                <div class="fs-5 text-gray-600">{{ isset($flat->bed_room) ? $flat->bed_room : 'Na' }}</div>
                            </div>
                            <div class="col-md-6 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.bath_room', 1) }}</div>
                                <div class="fs-5 text-gray-600">{{ isset($flat->bath_room) ? $flat->bath_room : 'Na' }}
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <div class="col-md-6 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.amount', 1) }}
                                </div>
                                <div class="fs-5 text-gray-600">{{ isset($flat->amount) ? $flat->amount : 'Na' }}</div>
                            </div>
                            <div class="col-md-6 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.max_guest', 1) }}</div>
                                <div class="fs-5 text-gray-600">{{ isset($flat->max_guest) ? $flat->max_guest : 'Na' }}
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <div class="col-md-12 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.short_description', 1) }}
                                </div>
                                <div class="fs-5 text-gray-600">{!! isset($flat->short_description) ? $flat->short_description : 'Na' !!}</div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.long_description', 1) }}</div>
                                <div class="fs-5 text-gray-600">{!! isset($flat->long_description) ? $flat->long_description : 'Na' !!}
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <div class="col-md-6 fv-row">
                                <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.youtube_url', 1) }}
                                </div>
                                <div class="fs-5 text-gray-600"><a
                                        href="{{ isset($flat->youtube_url) ? $flat->youtube_url : '#' }}">Click here</a>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6 fv-row">
                                    <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.image_title', 1) }}</div>
                                    <div class="fs-5 text-gray-600"><a
                                            href="{{ isset($flat->image) ? $flat->image : 'Na' }}" target="_blank">
                                            <div class="font-medium whitespace-no-wrap">
                                                <img src="{{ isset($flat->image) ? $flat->image : 'Na' }}" height="150px"
                                                    width="350px" alt="Banner image">
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="fs-5 fw-bold mb-2">{{ trans_choice('content.other_images', 1) }}
                            </div>
                            <div class="col-md-6 fv-row" style="display: flex; justify-content: space-between;">
                                @foreach ($flat->flat_images as $image)
                                    <img style="margin: 10px; max-width: 389px; max-height: 421px; width: 389px; height: 421px;"
                                        src="{{ $image->image }}"
                                        alt="{{ isset($flat->title) ? $flat->title : 'Propduct Title' }}"
                                        draggable="false">
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="button" class="btn btn-primary">
                            <a href="{{ route('admin.flats.index') }}"
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
