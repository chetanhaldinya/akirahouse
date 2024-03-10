@extends('admin.layouts.base')
@section('content')
    @include('admin.layouts.components.header', [
        'title' => __('messages.list', [
            'name' => trans_choice('content.contact_us', 2),
        ]),
        'breadcrumbs' => Breadcrumbs::render('admin.contact-us.index'),
    ])
    @include('admin.layouts.components.datatable_header', [
        'data' => [
            ['classname' => '', 'title' => trans_choice('content.id_title', 1)],
            ['classname' => 'min-w-125px', 'title' => trans_choice('content.name_title', 1)],
            ['classname' => 'min-w-125px', 'title' => trans_choice('content.email_title', 1)],
            ['classname' => 'min-w-125px', 'title' => trans_choice('content.phone_title', 1)],
            ['classname' => 'min-w-125px', 'title' => trans_choice('content.subject_title', 1)],
            ['classname' => 'min-w-125px', 'title' => trans_choice('content.status_title', 1)],
            ['classname' => 'min-w-125px', 'title' => trans_choice('content.created_at', 1)],
            ['classname' => 'min-w-100px', 'title' => trans_choice('content.action_title', 1)],
        ],
    ])
@endsection

@push('scripts')
    <script>
        var oTable;
        $(document).ready(function() {
            oTable = $('#kt_table_1').DataTable({
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                order: [
                    [6, 'desc']
                ],
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search...",
                },
                oLanguage: {
                    sLengthMenu: "Show _MENU_",
                    sEmptyTable: "No Records Found.",
                    infoEmpty: "No entries to show.",
                },
                createdRow: function(row, data, dataIndex) {
                    // Set the data-status attribute, and add a class
                    $(row).attr('role', 'row');
                    $(row).find("td").last().addClass('text-danger');
                },
                ajax: {
                    "url": "{{ route('admin.contact-us.index') }}",
                    data: function(d) {},
                },
                dom: `<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                      "<'row'<'col-sm-12'tr>>" +
                      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>`,
                columnDefs: [{
                    targets: [0, 7],
                    orderable: false,
                    searchable: false,
                    // className: 'mdl-data-table__cell--non-numeric'
                }],
                columns: [{
                        data: 'id',
                        name: 'id',
                        render: function(data, type, row, meta) {
                            return "#" + serialNumberShow(meta);
                        }
                    },
                    {
                        data: 'name',
                        name: 'name',
                        render: function(data, type, row, meta) {
                            var show_url = `{{ url('/') }}/admin/contact-us/` + row[
                                    'id'] +
                                `?tab=details`;
                            if (data) {
                                return `<a href=${show_url}>
                                            <div class="font-medium whitespace-no-wrap">${data}</div>
                                        </a>`;
                            } else {
                                return `<a href=${show_url}>
                                            <div class="font-medium whitespace-no-wrap">Na</div>
                                        </a>`;
                            }
                        }
                    },
                    {
                        data: 'email',
                        name: 'email',
                        render: function(data, type, row, meta) {
                            if (data) {
                                length = data.length;
                                if (length > 25) {
                                    data = data.slice(0, 25) + `...`;
                                }
                                return `<div class="font-medium whitespace-no-wrap">${data}</div>`;
                            } else {
                                return `<div class="font-medium whitespace-no-wrap">Na</div>`;
                            }
                        }
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                        render: function(data, type, row, meta) {
                            if (data) {
                                return `<div class="font-medium whitespace-no-wrap">${data}</div>`;
                            } else {
                                return `<div class="font-medium whitespace-no-wrap">Na</div>`;
                            }
                        }
                    },
                    {
                        data: 'subject',
                        name: 'subject',
                        render: function(data, type, row, meta) {
                            if (data) {
                                length = data.length;
                                if (length > 20) {
                                    data = data.slice(0, 20) + `...`;
                                }
                                return `<div class="font-medium whitespace-no-wrap">${data}</div>`;
                            } else {
                                return `<div class="font-medium whitespace-no-wrap">Na</div>`;
                            }
                        }
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, row, meta) {
                            var attr = `data-id="${ row['id'] }" data-status="${ data }"`;
                            var avtive_data = actionActiveButton(data, attr);
                            return avtive_data;
                        }
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        render: function(data, type, row, meta) {
                            return getDateTimeByFormat(data);
                        }
                    },
                    {
                        data: 'id',
                        name: 'id',
                        render: function(data, type, row, meta) {
                            var show_url = `{{ url('/') }}/admin/contact-us/` + row['id'] +
                                `?tab=details`;
                            var show_data = actionShowButton(show_url);

                            return `<div class="flex justify-left items-center">${show_data}</div>`;

                        }
                    },
                ],
            });

        });
    </script>
    <script>
        $(document).on('click', '.clsstatus', function() {
            var id = $(this).attr('data-id');
            var status = $(this).attr('data-status');
            var url = `{{ url('/') }}/admin/contact-us/status/` + id + `/` + status;
            tableChnageStatus(url, oTable);
        });
    </script>
@endpush
