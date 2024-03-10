@extends('admin.layouts.base')
@section('content')
    @include('admin.layouts.components.header', [
        'title' => trans_choice('content.contact_us', 2),
        'breadcrumbs' => Breadcrumbs::render('admin.contact-us.show'),
    ])
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed gy-5"
                                    id="kt_table_customers_login_session">
                                    <!--begin::Table body-->
                                    <tbody class="fs-6 fw-bold text-gray-600">
                                        <tr>
                                            <td>{{ trans_choice('content.name_title', 1) }}</td>
                                            <td>{{ isset($contact_u->name) ? $contact_u->name : __('content.no_data_found') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans_choice('content.email_title', 1) }}</td>
                                            <td>{{ isset($contact_u->email) ? $contact_u->email : __('content.no_data_found') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans_choice('content.phone_title', 1) }}</td>
                                            <td>{{ isset($contact_u->phone) ? $contact_u->phone : __('content.no_data_found') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans_choice('content.created_at', 1) }}</td>
                                            <td>{{ isset($contact_u->created_at) ? get_default_format($contact_u->created_at) : __('content.no_data_found') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans_choice('content.status_title', 1) }}</td>
                                            <td>
                                                @if ($contact_u->status == 1)
                                                    Active
                                                @else
                                                    Inactive
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans_choice('content.subject', 1) }}</td>
                                            <td>{{ isset($contact_u->subject) ? $contact_u->subject : __('content.no_data_found') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ trans_choice('content.message', 1) }}</td>
                                            <td>{{ isset($contact_u->message) ? $contact_u->message : __('content.no_data_found') }}
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                                {{-- <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <a href="{{ route('admin.contact-us.index') }}"
                                        class="btn btn-light btn-active-light-primary me-2 text-black">{{ __('content.back_title') }}</a>
                                </div> --}}
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
