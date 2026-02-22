@extends('backend.layout.app')

@section('title', 'Add Subject')



@section('content')
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 rounded-2xl p-6 md:p-8 text-white shadow-xl">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold mb-2">Add Subject</h1>
                    <p class="text-blue-200">Add a new subject to the system</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <button onclick="$('#subjectForm').slideToggle()"
                        class="px-6 py-3 bg-white text-blue-900 rounded-lg font-semibold hover:bg-blue-50 transition-all shadow-md">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                                </path>
                            </svg>
                            New Subject
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium mb-1">Total Subjects</h3>
                <p class="text-2xl font-bold text-gray-900">245</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium mb-1">Amount Spent</h3>
                <p class="text-2xl font-bold text-gray-900">₹45,680</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium mb-1">Saved Numbers</h3>
                <p class="text-2xl font-bold text-gray-900">12</p>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-500 text-sm font-medium mb-1">This Month</h3>
                <p class="text-2xl font-bold text-gray-900">18</p>
            </div>
        </div>

        <!-- Subject Form -->
        <div id="subjectForm" class="bg-white rounded-xl shadow-lg p-6" style="display: none;">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Quick Add Subject</h3>

            <form class="space-y-6" id="addSubjectForm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input type="hidden" name="id" id="subjectId">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Subject Name</label>
                        <input type="text" id="subjectName" placeholder="Enter subject name" name="subjectName"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Subject Slug</label>
                        <input type="text" id="subjectSlug" placeholder="Enter subject slug" name="subjectSlug"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Subject Description</label>
                        <textarea id="subjectDescription" placeholder="Enter subject description" name="subjectDescription" rows="4"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Order Index</label>
                        <input type="number" id="orderIndex" placeholder="Enter order index" name="orderIndex"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="flex gap-4">
                    <button type="submit"
                        class="flex-1 px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-800 hover:to-blue-600 transition-all shadow-lg">
                        Proceed to Add
                    </button>
                    <button type="button" onclick="$('#rechargeForm').slideUp()"
                        class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-all">
                        Cancel
                    </button>
                </div>
            </form>
        </div>

        <!-- Filters Section -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-bold text-gray-900">Sub Topics Records</h3>
                <button onclick="$('#historyFilters').slideToggle()"
                    class="text-sm text-blue-600 hover:text-blue-800 font-semibold">
                    <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                        </path>
                    </svg>
                    Filters
                </button>
            </div>

            <!-- Filter Form -->
            <div id="historyFilters" class="mb-6" style="display: none;">
                <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">From Date</label>
                        <input type="date" id="filterFromDate"
                            class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">To Date</label>
                        <input type="date" id="filterToDate"
                            class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                        <select id="filterOperator"
                            class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                            <option value="">All Subjects</option>
                            <option value="airtel">Airtel</option>
                            <option value="jio">Jio</option>
                            <option value="vi">Vi</option>
                            <option value="bsnl">BSNL</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                        <select id="filterStatus"
                            class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                            <option value="">All Status</option>
                            <option value="success">Success</option>
                            <option value="pending">Pending</option>
                            <option value="failed">Failed</option>
                        </select>
                    </div>

                    <div class="md:col-span-4 flex gap-3">
                        <button type="button" onclick="applyRechargeFilters()"
                            class="px-6 py-2 bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-800 hover:to-blue-600 transition-all">
                            Apply Filters
                        </button>
                        <button type="button" onclick="resetRechargeFilters()"
                            class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-all">
                            Reset
                        </button>
                    </div>
                </form>
            </div>

            <!-- Recharge History Table -->
            <div class="overflow-x-auto">
                <table id="subjectTable" class="display responsive nowrap" style="width:100%">
                    <thead class="bg-gradient-to-r from-blue-900 to-blue-800 text-white">
                        <tr>
                            <th class="px-6 py-4">ID</th>
                            <th class="px-6 py-4">Title</th>
                            <th class="px-6 py-4">Slug</th>
                            <th class="px-6 py-4">Description</th>
                            <th class="px-6 py-4">Order Index</th>
                            <th class="px-6 py-4">Is Active</th>
                            <th class="px-6 py-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be populated by DataTables -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Recharge Detail Modal -->
    <div id="rechargeModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-lg w-full">
            <div
                class="bg-gradient-to-r from-blue-900 to-blue-800 p-6 text-white flex justify-between items-center rounded-t-2xl">
                <h3 class="text-xl font-bold">Recharge Details</h3>
                <button onclick="closeRechargeModal()" class="text-white hover:text-gray-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div id="rechargeModalContent" class="p-6">
                <!-- Content will be loaded dynamically -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <script>
        let subjectTable;

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            subjectTable = $('#subjectTable').DataTable({
                processing: true,
                serverSide: false, // Agar pure server-side pagination chahiye to true karo
                ajax: {
                    url: '/fetch/subjects/0',
                    type: 'POST',
                    dataSrc: 'data' // Agar response direct array hai
                    // Agar response { data: [...] } format me hai to dataSrc: 'data'
                },

                responsive: true,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i> Export Excel',
                        className: 'dt-button',
                        title: 'Mobile Recharge History',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf"></i> Export PDF',
                        className: 'dt-button',
                        title: 'Mobile Recharge History',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        },
                        customize: function(doc) {
                            doc.styles.title = {
                                color: '#1e3a8a',
                                fontSize: '20',
                                alignment: 'center',
                                bold: true
                            };
                        }
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i> Print',
                        className: 'dt-button',
                        title: 'Mobile Recharge History',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    }
                ],
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'slug'
                    },
                    {
                        data: 'description'
                    },
                    {
                        data: 'order_index'
                    },
                    {
                        data: 'is_active',
                        render: function(data) {
                            const badges = {
                                '1': '<span class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Active</span>',
                                '0': '<span class="px-3 py-1 text-xs font-semibold text-yellow-700 bg-yellow-100 rounded-full">Inactive</span>',
                            };
                            return badges[data] || data;
                        }
                    },
                    {
                        data: null,
                        orderable: false,
                        render: function(data, type, row) {
                            return `
            <div class="flex gap-2">
                <button onclick="editSubject(${row.id})"
                    class="px-[5px] py-[1px] bg-blue-700 text-white rounded hover:bg-blue-800 transition-colors"
                    title="Edit">
                    <i class="fas fa-pen"></i>
                </button>

                <button onclick="deleteRecharge(${row.id})"
                    class="px-[5px] py-[1px] bg-red-600 text-white rounded hover:bg-red-700 transition-colors"
                    title="Delete">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        `;
                        }
                    }
                ],
                pageLength: 10,
                order: [
                    [1, 'desc']
                ],
                language: {
                    search: "Search subjects:",
                    lengthMenu: "Show _MENU_ entries",
                    info: "Showing _START_ to _END_ of _TOTAL_ recharges",
                }
            });
        });

        function editSubject(id) {

            let table = $('#subjectTable').DataTable();
            let rowData = table.rows().data().toArray().find(r => r.id == id);

            if (!rowData) return;

            $('#subjectId').val(rowData.id);
            $('#subjectName').val(rowData.title);
            $('#subjectSlug').val(rowData.slug);
            $('#subjectDescription').val(rowData.description);
            $('#orderIndex').val(rowData.order_index);

            $('#subjectForm').slideDown();
        }
    </script>

    <script>
        $(document).ready(function() {

            $('#addSubjectForm').on('submit', function(e) {
                e.preventDefault();

                let form = $(this);
                let formData = new FormData(this);
                let subjectId = $('#subjectId').val();

                let url = subjectId ?
                    "{{ url('admin/subjects/update') }}/" + subjectId :
                    "{{ route('admin.subjects.store') }}";

                let actionText = subjectId ? "update" : "add";

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to " + actionText + " this subject?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes'
                }).then((result) => {

                    if (result.isConfirmed) {

                        $.ajax({
                            url: url,
                            type: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },

                            success: function(response) {

                                if (response.status === true) {

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: response.message
                                    });

                                    form[0].reset();
                                    $('#subjectId').val('');

                                } else {

                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: response.message
                                    });

                                }
                            },

                            error: function(xhr) {

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: xhr.responseJSON?.message ||
                                        'Something went wrong'
                                });

                            }

                        });

                    }

                });

            });

        });
    </script>
@endpush
