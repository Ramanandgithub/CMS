@extends('backend.layout.app')

@section('title', 'Add PageConetent')



@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 rounded-2xl p-6 md:p-8 text-white shadow-xl">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold mb-2">Add PageConetent
                <!-- <p class="text-blue-200">Add a new PageConetent<p> -->
            </div>
            <div class="mt-4 md:mt-0">
                <button onclick="$('#rechargeForm').slideToggle()" class="px-6 py-3 bg-white text-blue-900 rounded-lg font-semibold hover:bg-blue-50 transition-all shadow-md">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        New PageConetent
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Total PageConetent
            <p class="text-2xl font-bold text-gray-900">245</p>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">This Month</h3>
            <p class="text-2xl font-bold text-gray-900">18</p>
        </div>
    </div>

    <!-- Recharge Form -->
    <div id="rechargeForm" class="bg-white rounded-xl shadow-lg p-6" style="display: none;">
        <h3 class="text-xl font-bold text-gray-900 mb-6">Quick Add PageConetent
        
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Mobile Number -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2"> Select Subject Name</label>
                   <select name="subjectName" id="subjectName" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    <option value="">Select Subject</option>
                    <option value="math">Math</option>
                    <option value="science">Science</option>
                    <option value="history">History</option>
                    <option value="geography">Geography</option>
                    <option value="english">English</option>
                   </select>
                </div>

                <!-- Operator -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Select Topic</label>
                   <select name="topicName" id="topicName" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    <option value="">Select Topic</option>
                    <option value="algebra">Algebra</option>
                    <option value="geometry">Geometry</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="world-history">World History</option>
                    <option value="indian-history">Indian History</option>
                    <option value="physical-geography">Physical Geography</option>
                    <option value="human-geography">Human Geography</option>

                     </select>
                </div>

                <!-- Circle -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">PageConetent
                    <select name="PageConetentConetent-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    <option value="">Select PageConetent
                    <option value="algebra">Algebra</option>
                    <option value="geometry">Geometry</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="world-history">World History</option>
                    <option value="indian-history">Indian History</option>
                    <option value="physical-geography">Physical Geography</option>
                    <option value="human-geography">Human Geography</option>

                     </select>
                    
                </div>

                 <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Page Title</label>
                   <input type="text" name="pageTitle" id="pageTitle" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                </div>
                 <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Page Slug</label>
                   <input type="text" name="pageSlug" id="pageSlug" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Index</label>
                   <input type="text" name="pageIndex" id="pageIndex" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                </div>

                

                
            </div>

            <!-- Popular Plans -->
           

            <!-- Action Buttons -->
            <div class="flex gap-4">
                <button type="submit" class="flex-1 px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-800 hover:to-blue-600 transition-all shadow-lg">
                    Proceed to Add
                </button>
                <button type="button" onclick="$('#rechargeForm').slideUp()" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-all">
                    Cancel
                </button>
            </div>
        </form>
    </div>

    <!-- Filters Section -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-gray-900">Recharge History</h3>
            <button onclick="$('#historyFilters').slideToggle()" class="text-sm text-blue-600 hover:text-blue-800 font-semibold">
                <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                </svg>
                Filters
            </button>
        </div>

        <!-- Filter Form -->
        <div id="historyFilters" class="mb-6" style="display: none;">
            <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">From Date</label>
                    <input type="date" id="filterFromDate" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                </div>
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">To Date</label>
                    <input type="date" id="filterToDate" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                    <select id="filterOperator" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                        <option value="">All Subjects</option>
                        <option value="airtel">Airtel</option>
                        <option value="jio">Jio</option>
                        <option value="vi">Vi</option>
                        <option value="bsnl">BSNL</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                    <select id="filterStatus" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                        <option value="">All Status</option>
                        <option value="success">Success</option>
                        <option value="pending">Pending</option>
                        <option value="failed">Failed</option>
                    </select>
                </div>

                <div class="md:col-span-4 flex gap-3">
                    <button type="button" onclick="applyRechargeFilters()" class="px-6 py-2 bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-800 hover:to-blue-600 transition-all">
                        Apply Filters
                    </button>
                    <button type="button" onclick="resetRechargeFilters()" class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-all">
                        Reset
                    </button>
                </div>
            </form>
        </div>

        <!-- Recharge History Table -->
        <div class="overflow-x-auto">
            <table id="rechargeTable" class="display responsive nowrap" style="width:100%">
                <thead class="bg-gradient-to-r from-blue-900 to-blue-800 text-white">
                    <tr>
                        <th class="px-6 py-4">Recharge ID</th>
                        <th class="px-6 py-4">Date & Time</th>
                        <th class="px-6 py-4">Subject</th>
                        <th class="px-6 py-4">Sulug</th>
                        <th class="px-6 py-4">Discription</th>
                        <th class="px-6 py-4">Amount</th>
                        <th class="px-6 py-4">Status</th>
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
        <div class="bg-gradient-to-r from-blue-900 to-blue-800 p-6 text-white flex justify-between items-center rounded-t-2xl">
            <h3 class="text-xl font-bold">Recharge Details</h3>
            <button onclick="closeRechargeModal()" class="text-white hover:text-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
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
// Sample recharge data
const rechargeData = [
    { id: 'RCH001234567', date: '2026-01-13 10:30 AM', mobile: '9876543210', operator: 'Airtel', plan: 'Unlimited - 84 Days', amount: 599, status: 'success' },
    { id: 'RCH001234568', date: '2026-01-10 03:45 PM', mobile: '9123456780', operator: 'Jio', plan: 'Data Pack - 28 Days', amount: 299, status: 'success' },
    { id: 'RCH001234569', date: '2026-01-08 11:20 AM', mobile: '9988776655', operator: 'Vi', plan: 'Smart Pack - 56 Days', amount: 449, status: 'failed' },
    { id: 'RCH001234570', date: '2026-01-05 05:15 PM', mobile: '9876501234', operator: 'BSNL', plan: 'Voice + Data - 90 Days', amount: 399, status: 'success' },
    { id: 'RCH001234571', date: '2026-01-03 02:30 PM', mobile: '9876543210', operator: 'Airtel', plan: 'Data Booster - 7 Days', amount: 48, status: 'success' },
    { id: 'RCH001234572', date: '2026-01-01 09:00 AM', mobile: '9123456780', operator: 'Jio', plan: 'Unlimited - 28 Days', amount: 239, status: 'pending' },
    { id: 'RCH001234573', date: '2025-12-28 04:20 PM', mobile: '9988776655', operator: 'Vi', plan: 'Mega Pack - 365 Days', amount: 2999, status: 'success' },
    { id: 'RCH001234574', date: '2025-12-25 01:10 PM', mobile: '9876501234', operator: 'BSNL', plan: 'Talk Time', amount: 100, status: 'success' },
    { id: 'RCH001234575', date: '2025-12-22 11:45 AM', mobile: '9876543210', operator: 'Airtel', plan: 'Netflix Bundle - 84 Days', amount: 1099, status: 'success' },
    { id: 'RCH001234576', date: '2025-12-20 03:30 PM', mobile: '9123456780', operator: 'Jio', plan: 'Premium - 56 Days', amount: 666, status: 'success' },
];

// Popular plans data
const popularPlans = {
    airtel: [
        { amount: 299, validity: '28 Days', data: '1.5GB/day', description: 'Unlimited Calls + SMS' },
        { amount: 599, validity: '84 Days', data: '2GB/day', description: 'Unlimited + Prime' },
        { amount: 839, validity: '84 Days', data: '2GB/day', description: 'Amazon Prime + Disney+' },
        { amount: 3359, validity: '365 Days', data: '2.5GB/day', description: 'Full Year Pack' }
    ],
    jio: [
        { amount: 239, validity: '28 Days', data: '1.5GB/day', description: 'Unlimited Calls' },
        { amount: 666, validity: '84 Days', data: '1.5GB/day', description: 'Premium Pack' },
        { amount: 719, validity: '84 Days', data: '2GB/day', description: 'Netflix Mobile' },
        { amount: 3599, validity: '365 Days', data: '2.5GB/day', description: 'Annual Pack' }
    ],
    vi: [
        { amount: 299, validity: '28 Days', data: '1.5GB/day', description: 'Unlimited Calls' },
        { amount: 449, validity: '56 Days', data: '1.5GB/day', description: 'Smart Pack' },
        { amount: 699, validity: '84 Days', data: '1.5GB/day', description: 'Weekend Data' },
        { amount: 2999, validity: '365 Days', data: '1.5GB/day', description: 'Year Pack' }
    ],
    bsnl: [
        { amount: 199, validity: '28 Days', data: '2GB/day', description: 'Unlimited Voice' },
        { amount: 397, validity: '70 Days', data: '2GB/day', description: 'Extended Validity' },
        { amount: 797, validity: '150 Days', data: '2GB/day', description: 'Long Term' },
        { amount: 2399, validity: '365 Days', data: '2GB/day', description: 'Annual Special' }
    ]
};

let rechargeTable;

$(document).ready(function() {
    rechargeTable = $('#rechargeTable').DataTable({
        data: rechargeData,
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
            {
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
        columns: [
            { data: 'id' },
            { data: 'date' },
            { 
                data: 'mobile',
                render: function(data) {
                    return '<span class="font-mono font-semibold">' + data + '</span>';
                }
            },
            { 
                data: 'operator',
                render: function(data) {
                    const colors = {
                        'Airtel': 'red',
                        'Jio': 'blue',
                        'Vi': 'purple',
                        'BSNL': 'green'
                    };
                    const color = colors[data] || 'gray';
                    return `<span class="px-3 py-1 text-xs font-semibold text-${color}-700 bg-${color}-100 rounded-full">${data}</span>`;
                }
            },
            { data: 'plan' },
            { 
                data: 'amount',
                render: function(data) {
                    return '<span class="font-bold text-gray-900">₹' + data.toLocaleString() + '</span>';
                }
            },
            { 
                data: 'status',
                render: function(data) {
                    const badges = {
                        'success': '<span class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Success</span>',
                        'pending': '<span class="px-3 py-1 text-xs font-semibold text-yellow-700 bg-yellow-100 rounded-full">Pending</span>',
                        'failed': '<span class="px-3 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">Failed</span>'
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
                            <button onclick='viewRecharge(${JSON.stringify(row)})' class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded hover:bg-blue-700 transition-colors">
                                View
                            </button>
                            <button class="px-3 py-1 bg-gray-600 text-white text-xs font-semibold rounded hover:bg-gray-700 transition-colors">
                                Receipt
                            </button>
                        </div>
                    `;
                }
            }
        ],
        pageLength: 10,
        order: [[1, 'desc']],
        language: {
            search: "Search recharges:",
            lengthMenu: "Show _MENU_ entries",
            info: "Showing _START_ to _END_ of _TOTAL_ recharges",
        }
    });
});

function loadPlans() {
    const operator = $('#operator').val();
    if (operator && popularPlans[operator]) {
        const plans = popularPlans[operator];
        let html = '';
        plans.forEach(plan => {
            html += `
                <div class="plan-card bg-gradient-to-br from-blue-50 to-white border-2 border-blue-200 rounded-xl p-4 transition-all" onclick="selectPlan(${plan.amount})">
                    <div class="text-2xl font-bold text-blue-900 mb-2">₹${plan.amount}</div>
                    <div class="text-sm font-semibold text-gray-700 mb-1">${plan.validity}</div>
                    <div class="text-sm text-gray-600 mb-1">${plan.data}</div>
                    <div class="text-xs text-gray-500">${plan.description}</div>
                </div>
            `;
        }); 
        $('#plansContainer').html(html);
        $('#popularPlans').slideDown();
    } else {
        $('#plansContainer').html('');  
        $('#popularPlans').slideUp();
    }
}
function selectPlan(amount) {
    $('#amount').val(amount);
}
function applyRechargeFilters() {
    const fromDate = $('#filterFromDate').val();
    const toDate = $('#filterToDate').val();
    const operator = $('#filterOperator').val();
    const status = $('#filterStatus').val();

    rechargeTable.clear().draw();

    const filteredData = rechargeData.filter(recharge => {
        const rechargeDate = new Date(recharge.date);
        const from = fromDate ? new Date(fromDate) : null;
        const to = toDate ? new Date(toDate) : null;

        return (!from || rechargeDate >= from) &&
               (!to || rechargeDate <= to) &&
               (!operator || recharge.operator.toLowerCase() === operator.toLowerCase()) &&
               (!status || recharge.status === status);
    });

    rechargeTable.rows.add(filteredData).draw();
}
function resetRechargeFilters() {
    $('#filterFromDate').val('');
    $('#filterToDate').val('');
    $('#filterOperator').val('');
    $('#filterStatus').val('');
    rechargeTable.clear().rows.add(rechargeData).draw();
}
function viewRecharge(recharge) {
    const modalContent = `
        <div class="space-y-4">
            <div>
                <h4 class="text-lg font-bold text-gray-900 mb-2">Recharge ID: <span class="font-mono font-semibold">${recharge.id}</span></h4>
                <p class="text-gray-700">Date & Time: <span class="font-semibold">${recharge.date}</span></p>
            </div>
            <div>
                <p class="text-gray-700">Mobile Number: <span class="font-mono font-semibold">${recharge.mobile}</span></p>
                <p class="text-gray-700">Operator: <span class="font-semibold">${recharge.operator}</span></p>
                <p class="text-gray-700">Plan Details: <span class="font-semibold  ">${recharge.plan}</span></p>
                <p class="text-gray-700">Amount: <span class="font-bold text-gray-900">₹${recharge.amount.toLocaleString()}</span></p>
                <p class="text-gray-700">Status: <span class="font-semibold">${recharge.status.charAt(0).toUpperCase() + recharge.status.slice(1)}</span></p>
            </div>
        </div>
    `;
    $('#rechargeModalContent').html(modalContent);
    $('#rechargeModal').fadeIn();
}
function closeRechargeModal() {
    $('#rechargeModal').fadeOut();
}
</script>
@endpush    

