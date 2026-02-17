@extends('backend.layout.app')

@section('title', 'All Users - BBPS Portal')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/datatable-custom.css') }}">
@endpush

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 rounded-2xl p-6 md:p-8 text-white shadow-xl">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold mb-2">User Management</h1>
                <p class="text-blue-200">Manage all registered users on the platform</p>
            </div>
            <div class="mt-4 md:mt-0 flex gap-3">
                <button onclick="$('#onboardingModal').removeClass('hidden').addClass('flex')" class="px-6 py-3 bg-white text-blue-900 rounded-lg font-semibold hover:bg-blue-50 transition-all shadow-md">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                        Onboard User
                    </div>
                </button>
                <button onclick="$('#filterSection').slideToggle()" class="px-6 py-3 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-600 transition-all">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                        </svg>
                        Filters
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
        <div class="bg-white rounded-xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-blue-600 bg-blue-100 px-2 py-1 rounded-full">+12%</span>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Total Users</h3>
            <p class="text-2xl font-bold text-gray-900">2,547</p>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-green-600 bg-green-100 px-2 py-1 rounded-full">95%</span>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Active Users</h3>
            <p class="text-2xl font-bold text-gray-900">2,420</p>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-yellow-600 bg-yellow-100 px-2 py-1 rounded-full">Pending</span>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">KYC Pending</h3>
            <p class="text-2xl font-bold text-gray-900">127</p>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-purple-600 bg-purple-100 px-2 py-1 rounded-full">Premium</span>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Premium Users</h3>
            <p class="text-2xl font-bold text-gray-900">486</p>
        </div>
    </div>

    <!-- Advanced Filters -->
    <div id="filterSection" class="bg-white rounded-xl shadow-lg p-6 filter-container" style="display: none;">
        <h3 class="text-lg font-bold text-gray-900 mb-4">Advanced Filters</h3>
        <form id="filterForm" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Registration Date -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">From Date</label>
                <input type="date" id="fromDate" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
            </div>
            
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">To Date</label>
                <input type="date" id="toDate" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
            </div>

            <!-- Status -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Status</label>
                <select id="status" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="suspended">Suspended</option>
                </select>
            </div>

            <!-- KYC Status -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">KYC Status</label>
                <select id="kycStatus" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    <option value="">All KYC Status</option>
                    <option value="verified">Verified</option>
                    <option value="pending">Pending</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>

            <!-- User Type -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">User Type</label>
                <select id="userType" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    <option value="">All Types</option>
                    <option value="free">Free</option>
                    <option value="premium">Premium</option>
                    <option value="enterprise">Enterprise</option>
                </select>
            </div>

            <!-- City -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">City</label>
                <select id="city" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    <option value="">All Cities</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="delhi">Delhi</option>
                    <option value="bangalore">Bangalore</option>
                    <option value="pune">Pune</option>
                    <option value="hyderabad">Hyderabad</option>
                </select>
            </div>

            <!-- Action Buttons -->
            <div class="md:col-span-2 flex gap-3">
                <button type="button" onclick="applyFilters()" class="flex-1 px-6 py-2 bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-800 hover:to-blue-600 transition-all">
                    Apply Filters
                </button>
                <button type="button" onclick="resetFilters()" class="flex-1 px-6 py-2 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-all">
                    Reset
                </button>
            </div>
        </form>
    </div>

    <!-- Users Table -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="overflow-x-auto">
            <table id="usersTable" class="display responsive nowrap" style="width:100%">
                <thead class="bg-gradient-to-r from-blue-900 to-blue-800 text-white">
                    <tr>
                        <th class="px-6 py-4">User ID</th>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Phone</th>
                        <th class="px-6 py-4">City</th>
                        <th class="px-6 py-4">Registration Date</th>
                        <th class="px-6 py-4">User Type</th>
                        <th class="px-6 py-4">KYC Status</th>
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

<!-- Onboarding Modal -->
<div id="onboardingModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4 overflow-y-auto">
    <div class="bg-white rounded-2xl max-w-4xl w-full my-8">
        <div class="bg-gradient-to-r from-blue-900 to-blue-800 p-6 text-white flex justify-between items-center sticky top-0 rounded-t-2xl">
            <h3 class="text-xl font-bold">New User Onboarding</h3>
            <button onclick="closeOnboardingModal()" class="text-white hover:text-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="p-6 max-h-[calc(100vh-200px)] overflow-y-auto">
            <form id="onboardingForm" class="space-y-6">
                <!-- Step Indicator -->
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <span class="text-sm font-semibold text-blue-600">Personal Info</span>
                    </div>
                    <div class="flex-1 h-1 bg-gray-200 mx-4"></div>
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gray-200 text-gray-600 rounded-full flex items-center justify-center font-bold">2</div>
                        <span class="text-sm font-semibold text-gray-400">Contact Details</span>
                    </div>
                    <div class="flex-1 h-1 bg-gray-200 mx-4"></div>
                    <div class="flex items-center space-x-2">
                        <div class="w-10 h-10 bg-gray-200 text-gray-600 rounded-full flex items-center justify-center font-bold">3</div>
                        <span class="text-sm font-semibold text-gray-400">KYC Documents</span>
                    </div>
                </div>

                <!-- Step 1: Personal Information -->
                <div id="step1" class="step-content">
                    <h4 class="text-lg font-bold text-gray-900 mb-4">Personal Information</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">First Name <span class="text-red-500">*</span></label>
                            <input type="text" name="firstName" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="Enter first name">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name <span class="text-red-500">*</span></label>
                            <input type="text" name="lastName" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="Enter last name">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" name="email" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="user@example.com">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Date of Birth <span class="text-red-500">*</span></label>
                            <input type="date" name="dob" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Gender <span class="text-red-500">*</span></label>
                            <select name="gender" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">User Type <span class="text-red-500">*</span></label>
                            <select name="userType" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                                <option value="">Select Type</option>
                                <option value="free">Free</option>
                                <option value="premium">Premium</option>
                                <option value="enterprise">Enterprise</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="button" onclick="nextStep(2)" class="px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-800 hover:to-blue-600 transition-all">
                            Next Step →
                        </button>
                    </div>
                </div>

                <!-- Step 2: Contact Details -->
                <div id="step2" class="step-content hidden">
                    <h4 class="text-lg font-bold text-gray-900 mb-4">Contact Details</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number <span class="text-red-500">*</span></label>
                            <input type="tel" name="phone" required maxlength="10" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="10 digit mobile number">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Alternate Phone</label>
                            <input type="tel" name="alternatePhone" maxlength="10" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="Optional">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Address <span class="text-red-500">*</span></label>
                            <textarea name="address" required rows="3" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="Enter full address"></textarea>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">City <span class="text-red-500">*</span></label>
                            <input type="text" name="city" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="Enter city">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">State <span class="text-red-500">*</span></label>
                            <select name="state" required class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                                <option value="">Select State</option>
                                <option value="maharashtra">Maharashtra</option>
                                <option value="delhi">Delhi</option>
                                <option value="karnataka">Karnataka</option>
                                <option value="tamil-nadu">Tamil Nadu</option>
                                <option value="west-bengal">West Bengal</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">PIN Code <span class="text-red-500">*</span></label>
                            <input type="text" name="pincode" required maxlength="6" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="6 digit PIN">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Country</label>
                            <input type="text" name="country" value="India" readonly class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg bg-gray-50">
                        </div>
                    </div>
                    <div class="flex justify-between mt-6">
                        <button type="button" onclick="previousStep(1)" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-all">
                            ← Previous
                        </button>
                        <button type="button" onclick="nextStep(3)" class="px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-800 hover:to-blue-600 transition-all">
                            Next Step →
                        </button>
                    </div>
                </div>

                <!-- Step 3: KYC Documents -->
                <div id="step3" class="step-content hidden">
                    <h4 class="text-lg font-bold text-gray-900 mb-4">KYC Documents</h4>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">PAN Number <span class="text-red-500">*</span></label>
                            <input type="text" name="pan" required maxlength="10" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none uppercase" placeholder="ABCDE1234F">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">PAN Card Upload <span class="text-red-500">*</span></label>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-500 transition-colors">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <input type="file" name="panFile" required accept=".pdf,.jpg,.jpeg,.png" class="hidden" id="panFile">
                                <label for="panFile" class="cursor-pointer">
                                    <span class="text-blue-600 hover:text-blue-800 font-semibold">Click to upload</span>
                                    <span class="text-gray-500"> or drag and drop</span>
                                </label>
                                <p class="text-xs text-gray-500 mt-2">PDF, JPG, PNG (MAX. 5MB)</p>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Aadhaar Number <span class="text-red-500">*</span></label>
                            <input type="text" name="aadhaar" required maxlength="12" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="12 digit Aadhaar number">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Aadhaar Card Upload <span class="text-red-500">*</span></label>
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-500 transition-colors">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <input type="file" name="aadhaarFile" required accept=".pdf,.jpg,.jpeg,.png" class="hidden" id="aadhaarFile">
                                <label for="aadhaarFile" class="cursor-pointer">
                                    <span class="text-blue-600 hover:text-blue-800 font-semibold">Click to upload</span>
                                    <span class="text-gray-500"> or drag and drop</span>
                                </label>
                                <p class="text-xs text-gray-500 mt-2">PDF, JPG, PNG (MAX. 5MB)</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="terms" required class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="terms" class="ml-2 text-sm text-gray-600">
                                I agree to the <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Terms and Conditions</a> and <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">Privacy Policy</a>
                            </label>
                        </div>
                    </div>
                    <div class="flex justify-between mt-6">
                        <button type="button" onclick="previousStep(2)" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-all">
                            ← Previous
                        </button>
                        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-800 hover:to-blue-600 transition-all shadow-lg">
                            Complete Onboarding
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- User Detail Modal -->
<div id="userDetailModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto">
        <div class="bg-gradient-to-r from-blue-900 to-blue-800 p-6 text-white flex justify-between items-center sticky top-0">
            <h3 class="text-xl font-bold">User Details</h3>
            <button onclick="closeUserDetailModal()" class="text-white hover:text-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div id="userDetailContent" class="p-6">
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
// Sample user data
const usersData = [
    { id: 'USR001', name: 'Rajesh Kumar', email: 'rajesh.kumar@example.com', phone: '9876543210', city: 'Mumbai', regDate: '2023-01-15', userType: 'premium', kycStatus: 'verified', status: 'active' },
    { id: 'USR002', name: 'Priya Sharma', email: 'priya.sharma@example.com', phone: '9123456780', city: 'Delhi', regDate: '2023-02-20', userType: 'free', kycStatus: 'verified', status: 'active' },
    { id: 'USR003', name: 'Amit Patel', email: 'amit.patel@example.com', phone: '9988776655', city: 'Bangalore', regDate: '2023-03-10', userType: 'premium', kycStatus: 'pending', status: 'active' },
    { id: 'USR004', name: 'Sneha Reddy', email: 'sneha.reddy@example.com', phone: '9876501234', city: 'Hyderabad', regDate: '2023-04-05', userType: 'enterprise', kycStatus: 'verified', status: 'active' },
    { id: 'USR005', name: 'Vikram Singh', email: 'vikram.singh@example.com', phone: '9876543211', city: 'Pune', regDate: '2023-05-12', userType: 'free', kycStatus: 'rejected', status: 'inactive' },
    { id: 'USR006', name: 'Anjali Gupta', email: 'anjali.gupta@example.com', phone: '9123456781', city: 'Mumbai', regDate: '2023-06-18', userType: 'premium', kycStatus: 'verified', status: 'active' },
    { id: 'USR007', name: 'Rahul Verma', email: 'rahul.verma@example.com', phone: '9988776656', city: 'Delhi', regDate: '2023-07-22', userType: 'free', kycStatus: 'pending', status: 'active' },
    { id: 'USR008', name: 'Deepika Iyer', email: 'deepika.iyer@example.com', phone: '9876501235', city: 'Bangalore', regDate: '2023-08-30', userType: 'premium', kycStatus: 'verified', status: 'active' },
    { id: 'USR009', name: 'Suresh Nair', email: 'suresh.nair@example.com', phone: '9876543212', city: 'Mumbai', regDate: '2023-09-14', userType: 'enterprise', kycStatus: 'verified', status: 'suspended' },
    { id: 'USR010', name: 'Kavita Joshi', email: 'kavita.joshi@example.com', phone: '9123456782', city: 'Pune', regDate: '2023-10-08', userType: 'free', kycStatus: 'verified', status: 'active' },
    { id: 'USR011', name: 'Manish Desai', email: 'manish.desai@example.com', phone: '9988776657', city: 'Hyderabad', regDate: '2023-11-25', userType: 'premium', kycStatus: 'pending', status: 'active' },
    { id: 'USR012', name: 'Pooja Menon', email: 'pooja.menon@example.com', phone: '9876501236', city: 'Bangalore', regDate: '2023-12-03', userType: 'free', kycStatus: 'verified', status: 'active' },
];

let usersTable;

$(document).ready(function() {
    usersTable = $('#usersTable').DataTable({
        data: usersData,
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excel',
                text: '<i class="fas fa-file-excel"></i> Export Excel',
                className: 'dt-button',
                title: 'BBPS Users List',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                }
            },
            {
                extend: 'pdf',
                text: '<i class="fas fa-file-pdf"></i> Export PDF',
                className: 'dt-button',
                title: 'BBPS Users List',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
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
                title: 'BBPS Users List',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                }
            }
        ],
        columns: [
            { data: 'id' },
            { 
                data: 'name',
                render: function(data) {
                    return '<span class="font-semibold text-gray-900">' + data + '</span>';
                }
            },
            { data: 'email' },
            { 
                data: 'phone',
                render: function(data) {
                    return '<span class="font-mono">' + data + '</span>';
                }
            },
            { data: 'city' },
            { data: 'regDate' },
            { 
                data: 'userType',
                render: function(data) {
                    const colors = {
                        'free': 'gray',
                        'premium': 'purple',
                        'enterprise': 'blue'
                    };
                    const color = colors[data] || 'gray';
                    return `<span class="px-3 py-1 text-xs font-semibold text-${color}-700 bg-${color}-100 rounded-full capitalize">${data}</span>`;
                }
            },
            { 
                data: 'kycStatus',
                render: function(data) {
                    const badges = {
                        'verified': '<span class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Verified</span>',
                        'pending': '<span class="px-3 py-1 text-xs font-semibold text-yellow-700 bg-yellow-100 rounded-full">Pending</span>',
                        'rejected': '<span class="px-3 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">Rejected</span>'
                    };
                    return badges[data] || data;
                }
            },
            { 
                data: 'status',
                render: function(data) {
                    const badges = {
                        'active': '<span class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Active</span>',
                        'inactive': '<span class="px-3 py-1 text-xs font-semibold text-gray-700 bg-gray-100 rounded-full">Inactive</span>',
                        'suspended': '<span class="px-3 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">Suspended</span>'
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
                            <button onclick='viewUser(${JSON.stringify(row)})' class="px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded hover:bg-blue-700 transition-colors">
                                View
                            </button>
                            <button class="px-3 py-1 bg-green-600 text-white text-xs font-semibold rounded hover:bg-green-700 transition-colors">
                                Edit
                            </button>
                        </div>
                    `;
                }
            }
        ],
        pageLength: 10,
        order: [[5, 'desc']],
        language: {
            search: "Search users:",
            lengthMenu: "Show _MENU_ users",
            info: "Showing _START_ to _END_ of _TOTAL_ users",
        }
    });
});

// Onboarding Modal Functions
function closeOnboardingModal() {
    $('#onboardingModal').removeClass('flex').addClass('hidden');
    $('#onboardingForm')[0].reset();
    showStep(1);
}

function nextStep(step) {
    // Hide current step
    $('.step-content').addClass('hidden');
    // Show next step
    $('#step' + step).removeClass('hidden');
    // Update step indicator
    updateStepIndicator(step);
}

function previousStep(step) {
    // Hide current step
    $('.step-content').addClass('hidden');
    // Show previous step
    $('#step' + step).removeClass('hidden');
    // Update step indicator
    updateStepIndicator(step);
}

function showStep(step) {
    $('.step-content').addClass('hidden');
    $('#step' + step).removeClass('hidden');
    updateStepIndicator(step);
}

function updateStepIndicator(activeStep) {
    for (let i = 1; i <= 3; i++) {
        const stepDiv = $(`#onboardingModal .flex.items-center.justify-between > div:nth-child(${i * 2 - 1}) > div`);
        const stepText = $(`#onboardingModal .flex.items-center.justify-between > div:nth-child(${i * 2 - 1}) > span`);
        
        if (i <= activeStep) {
            stepDiv.removeClass('bg-gray-200 text-gray-600').addClass('bg-blue-600 text-white');
            stepText.removeClass('text-gray-400').addClass('text-blue-600');
        } else {
            stepDiv.removeClass('bg-blue-600 text-white').addClass('bg-gray-200 text-gray-600');
            stepText.removeClass('text-blue-600').addClass('text-gray-400');
        }
    }
}

// Handle form submission
$('#onboardingForm').on('submit', function(e) {
    e.preventDefault();
    alert('User onboarding submitted successfully!');
    closeOnboardingModal();
    // Here you would normally send the data to your backend
});

// Filter Functions
function applyFilters() {
    usersTable.draw();
}

function resetFilters() {
    $('#filterForm')[0].reset();
    usersTable.search('').draw();
}

// User Detail Modal
function viewUser(user) {
    const statusColors = {
        'active': 'green',
        'inactive': 'gray',
        'suspended': 'red'
    };
    
    const kycColors = {
        'verified': 'green',
        'pending': 'yellow',
        'rejected': 'red'
    };
    
    const statusColor = statusColors[user.status] || 'gray';
    const kycColor = kycColors[user.kycStatus] || 'gray';
    
    $('#userDetailContent').html(`
        <div class="space-y-6">
            <!-- User Header -->
            <div class="flex items-center space-x-4 pb-4 border-b">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-900 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-2xl">
                    ${user.name.charAt(0)}
                </div>
                <div class="flex-1">
                    <h4 class="text-xl font-bold text-gray-900">${user.name}</h4>
                    <p class="text-gray-600">${user.email}</p>
                    <div class="flex gap-2 mt-2">
                        <span class="px-3 py-1 text-xs font-semibold text-${statusColor}-700 bg-${statusColor}-100 rounded-full capitalize">${user.status}</span>
                        <span class="px-3 py-1 text-xs font-semibold text-${kycColor}-700 bg-${kycColor}-100 rounded-full capitalize">KYC ${user.kycStatus}</span>
                    </div>
                </div>
            </div>
            
            <!-- User Information Grid -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-sm text-gray-500 mb-1">User ID</p>
                    <p class="font-semibold text-gray-900">${user.id}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500 mb-1">Phone Number</p>
                    <p class="font-semibold text-gray-900 font-mono">${user.phone}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500 mb-1">City</p>
                    <p class="font-semibold text-gray-900">${user.city}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500 mb-1">Registration Date</p>
                    <p class="font-semibold text-gray-900">${user.regDate}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500 mb-1">User Type</p>
                    <p class="font-semibold text-gray-900 capitalize">${user.userType}</p>
                </div>
                <div>
                    <p class="text-sm text-gray-500 mb-1">Total Transactions</p>
                    <p class="font-semibold text-gray-900">245</p>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="pt-4 border-t grid grid-cols-2 gap-3">
                <button class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                    Edit User
                </button>
                <button class="px-6 py-3 bg-gray-600 text-white rounded-lg font-semibold hover:bg-gray-700 transition-colors">
                    View Transactions
                </button>
                <button class="px-6 py-3 bg-green-600 text-white rounded-lg font-semibold hover:bg-green-700 transition-colors">
                    Verify KYC
                </button>
                <button class="px-6 py-3 bg-red-600 text-white rounded-lg font-semibold hover:bg-red-700 transition-colors">
                    Suspend User
                </button>
            </div>
        </div>
    `);
    
    $('#userDetailModal').removeClass('hidden').addClass('flex');
}

function closeUserDetailModal() {
    $('#userDetailModal').removeClass('flex').addClass('hidden');
}
</script>
@endpush