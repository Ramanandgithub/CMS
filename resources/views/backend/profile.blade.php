@extends('backend.layout.app')

@section('title', 'My Profile - BBPS Portal')

@section('content')
<div class="space-y-6">
    <!-- Profile Header -->
    <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 rounded-2xl overflow-hidden shadow-xl">
        <div class="relative h-32 bg-gradient-to-r from-blue-600 to-blue-400">
            <div class="absolute -bottom-16 left-8">
                <div class="relative">
                    <div class="w-32 h-32 rounded-full border-4 border-white bg-gradient-to-br from-blue-900 to-blue-600 flex items-center justify-center shadow-xl">
                        <span class="text-4xl font-bold text-white">{{ substr(Auth::user()->name ?? 'U', 0, 1) }}</span>
                    </div>
                    <button class="absolute bottom-0 right-0 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-lg hover:bg-blue-50 transition-colors">
                        <svg class="w-5 h-5 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="pt-20 pb-6 px-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-white mb-1">{{ Auth::user()->name ?? 'User Name' }}</h1>
                    <p class="text-blue-200 mb-2">{{ Auth::user()->email ?? 'user@example.com' }}</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full">Active</span>
                        <span class="px-3 py-1 bg-blue-500 text-white text-xs font-semibold rounded-full">Verified</span>
                        <span class="px-3 py-1 bg-purple-500 text-white text-xs font-semibold rounded-full">Premium User</span>
                    </div>
                </div>
                <div class="mt-4 md:mt-0">
                    <button onclick="$('#editProfileModal').removeClass('hidden').addClass('flex')" class="px-6 py-3 bg-white text-blue-900 rounded-lg font-semibold hover:bg-blue-50 transition-all shadow-md">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Edit Profile
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Overview -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
        <div class="bg-white rounded-xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Completed Transactions</h3>
            <p class="text-2xl font-bold text-gray-900">1,245</p>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Total Spent</h3>
            <p class="text-2xl font-bold text-gray-900">₹1,25,340</p>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Wallet Balance</h3>
            <p class="text-2xl font-bold text-gray-900">₹5,240</p>
        </div>

        <div class="bg-white rounded-xl p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Member Since</h3>
            <p class="text-2xl font-bold text-gray-900">2023</p>
        </div>
    </div>

    <!-- Profile Information Tabs -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Tab Navigation -->
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px overflow-x-auto">
                <button onclick="switchTab('personal')" id="tab-personal" class="tab-button active whitespace-nowrap px-6 py-4 text-sm font-semibold border-b-2 border-blue-900 text-blue-900 transition-colors">
                    Personal Information
                </button>
                <button onclick="switchTab('security')" id="tab-security" class="tab-button whitespace-nowrap px-6 py-4 text-sm font-semibold border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 transition-colors">
                    Security Settings
                </button>
                <button onclick="switchTab('kyc')" id="tab-kyc" class="tab-button whitespace-nowrap px-6 py-4 text-sm font-semibold border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 transition-colors">
                    KYC Details
                </button>
                <button onclick="switchTab('activity')" id="tab-activity" class="tab-button whitespace-nowrap px-6 py-4 text-sm font-semibold border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 transition-colors">
                    Activity Log
                </button>
            </nav>
        </div>

        <!-- Tab Content -->
        <div class="p-6">
            <!-- Personal Information -->
            <div id="content-personal" class="tab-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                        <p class="text-gray-900 font-medium">{{ Auth::user()->name ?? 'John Doe' }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                        <p class="text-gray-900 font-medium">{{ Auth::user()->email ?? 'john.doe@example.com' }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                        <p class="text-gray-900 font-medium">+91 9876543210</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Date of Birth</label>
                        <p class="text-gray-900 font-medium">15 January 1990</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Gender</label>
                        <p class="text-gray-900 font-medium">Male</p>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">City</label>
                        <p class="text-gray-900 font-medium">Mumbai, Maharashtra</p>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Address</label>
                        <p class="text-gray-900 font-medium">123, Sample Street, Andheri West, Mumbai - 400058</p>
                    </div>
                </div>
            </div>

            <!-- Security Settings -->
            <div id="content-security" class="tab-content hidden">
                <div class="space-y-6">
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Change Password</h4>
                                <p class="text-sm text-gray-500">Update your password regularly</p>
                            </div>
                        </div>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            Change
                        </button>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Two-Factor Authentication</h4>
                                <p class="text-sm text-gray-500">Add an extra layer of security</p>
                            </div>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                        </label>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Login Sessions</h4>
                                <p class="text-sm text-gray-500">Manage your active sessions</p>
                            </div>
                        </div>
                        <button class="px-4 py-2 bg-gray-600 text-white rounded-lg font-semibold hover:bg-gray-700 transition-colors">
                            View
                        </button>
                    </div>
                </div>
            </div>

            <!-- KYC Details -->
            <div id="content-kyc" class="tab-content hidden">
                <div class="space-y-6">
                    <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h4 class="font-semibold text-green-900">KYC Verified</h4>
                                <p class="text-sm text-green-700">Your account is fully verified</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">PAN Number</label>
                            <p class="text-gray-900 font-medium font-mono">ABCDE1234F</p>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Aadhaar Number</label>
                            <p class="text-gray-900 font-medium font-mono">XXXX-XXXX-1234</p>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Verification Status</label>
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-sm font-semibold rounded-full">Verified</span>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Verified On</label>
                            <p class="text-gray-900 font-medium">15 March 2023</p>
                        </div>
                    </div>

                    <div class="pt-4 border-t">
                        <h4 class="font-semibold text-gray-900 mb-4">Uploaded Documents</h4>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center">
                                    <svg class="w-8 h-8 text-red-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-medium text-gray-900">PAN Card</p>
                                        <p class="text-xs text-gray-500">Uploaded on 15 March 2023</p>
                                    </div>
                                </div>
                                <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View</button>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center">
                                    <svg class="w-8 h-8 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                    </svg>
                                    <div>
                                        <p class="font-medium text-gray-900">Aadhaar Card</p>
                                        <p class="text-xs text-gray-500">Uploaded on 15 March 2023</p>
                                    </div>
                                </div>
                                <button class="text-blue-600 hover:text-blue-800 font-semibold text-sm">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity Log -->
            <div id="content-activity" class="tab-content hidden">
                <div class="space-y-4">
                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Electricity Bill Payment</h4>
                            <p class="text-sm text-gray-600">Paid ₹1,250 for MSEB bill</p>
                            <p class="text-xs text-gray-500 mt-1">Today at 10:30 AM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg">
                        <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Profile Updated</h4>
                            <p class="text-sm text-gray-600">Changed contact information</p>
                            <p class="text-xs text-gray-500 mt-1">Yesterday at 3:45 PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-semibold text-gray-900">Login Activity</h4>
                            <p class="text-sm text-gray-600">Logged in from Chrome on Windows</p>
                            <p class="text-xs text-gray-500 mt-1">2 days ago at 9:15 AM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile Modal -->
<div id="editProfileModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="bg-gradient-to-r from-blue-900 to-blue-800 p-6 text-white flex justify-between items-center sticky top-0">
            <h3 class="text-xl font-bold">Edit Profile</h3>
            <button onclick="$('#editProfileModal').removeClass('flex').addClass('hidden')" class="text-white hover:text-gray-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="p-6">
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                        <input type="text" value="{{ Auth::user()->name ?? '' }}" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" value="{{ Auth::user()->email ?? '' }}" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                        <input type="tel" value="+91 9876543210" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Date of Birth</label>
                        <input type="date" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Address</label>
                        <textarea rows="3" class="w-full px-4 py-2 border-2 border-gray-200 rounded-lg focus:border-blue-500 focus:outline-none">123, Sample Street, Andheri West, Mumbai - 400058</textarea>
                    </div>
                </div>
                <div class="flex gap-3 pt-4">
                    <button type="submit" class="flex-1 px-6 py-3 bg-gradient-to-r from-blue-900 to-blue-700 text-white rounded-lg font-semibold hover:from-blue-800 hover:to-blue-600 transition-all">
                        Save Changes
                    </button>
                    <button type="button" onclick="$('#editProfileModal').removeClass('flex').addClass('hidden')" class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300 transition-all">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>  
@endsection
@section('scripts')
<script>
    function switchTab(tab) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('hidden');
        });
        // Remove active class from all tab buttons
        document.querySelectorAll('.tab-button').forEach(button => {
            button.classList.remove('active', 'border-blue-900', 'text-blue-900');
            button.classList.add('border-transparent', 'text-gray-500');
        });
        // Show selected tab content
        document.getElementById('content-' + tab).classList.remove('hidden');
        // Add active class to selected tab button
        const activeButton = document.getElementById('tab-' + tab);
        activeButton.classList.add('active', 'border-blue-900', 'text-blue-900');
        activeButton.classList.remove('border-transparent', 'text-gray-500');
    }
</script>
@endsection
