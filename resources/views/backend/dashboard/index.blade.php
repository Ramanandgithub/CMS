@extends('backend.layout.app')

@section('title', 'Dashboard - BBPS Portal')

@section('content')
<div class="space-y-6">
    <!-- Welcome Section -->
    <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 rounded-2xl p-6 md:p-8 text-white shadow-xl">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between">
            <div class="mb-4 md:mb-0">
                <h1 class="text-2xl md:text-3xl font-bold mb-2">Welcome back, {{ Auth::user()->name ?? 'Ramanand ' }}! 👋</h1>
                <p class="text-blue-200">Here's what's happening with your bills today</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3">
                <button class="px-6 py-3 bg-white text-blue-900 rounded-lg font-semibold hover:bg-blue-50 transition-all shadow-md hover:shadow-lg">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Pay New Bill
                    </div>
                </button>
                <button class="px-6 py-3 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-600 transition-all">
                    View History
                </button>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
        <!-- Total Payments -->
        <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all hover-scale">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-green-600 bg-green-100 px-2 py-1 rounded-full">+12.5%</span>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Total Payments</h3>
            <p class="text-2xl font-bold text-gray-900">₹45,280</p>
            <p class="text-xs text-gray-500 mt-2">This month</p>
        </div>

        <!-- Pending Bills -->
        <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all hover-scale">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-yellow-600 bg-yellow-100 px-2 py-1 rounded-full">3 Due</span>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Pending Bills</h3>
            <p class="text-2xl font-bold text-gray-900">₹8,450</p>
            <p class="text-xs text-gray-500 mt-2">Pay within 5 days</p>
        </div>

        <!-- Wallet Balance -->
        <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all hover-scale">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                    </svg>
                </div>
                <button class="text-xs font-semibold text-blue-600 hover:text-blue-800">+ Add Money</button>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Wallet Balance</h3>
            <p class="text-2xl font-bold text-gray-900">₹5,240</p>
            <p class="text-xs text-gray-500 mt-2">Available balance</p>
        </div>

        <!-- Transactions -->
        <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-all hover-scale">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-purple-600 bg-purple-100 px-2 py-1 rounded-full">+8 New</span>
            </div>
            <h3 class="text-gray-500 text-sm font-medium mb-1">Transactions</h3>
            <p class="text-2xl font-bold text-gray-900">142</p>
            <p class="text-xs text-gray-500 mt-2">Total this month</p>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h2 class="text-xl font-bold text-gray-900 mb-6">Quick Actions</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            <!-- Electricity -->
            <a href="" class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition-all group">
                <div class="w-14 h-14 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-700 text-center">Electricity</span>
            </a>

            <!-- Mobile -->
            <a href="" class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition-all group">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-700 text-center">Mobile</span>
            </a>

            <!-- DTH -->
            <a href="" class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition-all group">
                <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-700 text-center">DTH</span>
            </a>

            <!-- Water -->
            <a href="" class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition-all group">
                <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-700 text-center">Water</span>
            </a>

            <!-- Gas -->
            <a href="" class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition-all group">
                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-700 text-center">Gas</span>
            </a>

            <!-- Broadband -->
            <a href="" class="flex flex-col items-center p-4 rounded-lg hover:bg-blue-50 transition-all group">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform shadow-md">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                    </svg>
                </div>
                <span class="text-sm font-semibold text-gray-700 text-center">Broadband</span>
            </a>
        </div>
    </div>

    <!-- Two Column Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Recent Transactions -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900">Recent Transactions</h2>
                <a href="" class="text-sm text-blue-600 hover:text-blue-800 font-semibold">View All →</a>
            </div>
            <div class="space-y-4">
                <!-- Transaction Item -->
                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Electricity Bill</h4>
                            <p class="text-sm text-gray-500">MSEB - Consumer #12345678</p>
                            <p class="text-xs text-gray-400 mt-1">Today, 10:30 AM</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900">₹1,250</p>
                        <span class="inline-block px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full mt-1">Success</span>
                    </div>
                </div>

                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Mobile Recharge</h4>
                            <p class="text-sm text-gray-500">Airtel - 9876543210</p>
                            <p class="text-xs text-gray-400 mt-1">Yesterday, 3:45 PM</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900">₹599</p>
                        <span class="inline-block px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full mt-1">Success</span>
                    </div>
                </div>

                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-cyan-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Water Bill</h4>
                            <p class="text-sm text-gray-500">BMC Water - A/C #87654321</p>
                            <p class="text-xs text-gray-400 mt-1">2 days ago, 11:20 AM</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900">₹850</p>
                        <span class="inline-block px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full mt-1">Success</span>
                    </div>
                </div>

                <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">DTH Recharge</h4>
                            <p class="text-sm text-gray-500">Tata Sky - ID #123456789</p>
                            <p class="text-xs text-gray-400 mt-1">3 days ago, 5:15 PM</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-bold text-gray-900">₹450</p>
                        <span class="inline-block px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full mt-1">Success</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Bills -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-xl font-bold text-gray-900 mb-6">Upcoming Bills</h2>
            <div class="space-y-4">
                <!-- Bill Item -->
                <div class="p-4 bg-red-50 border border-red-200 rounded-lg">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="font-semibold text-gray-900">Electricity</h4>
                        <span class="text-xs font-semibold text-red-600 bg-red-200 px-2 py-1 rounded-full">Due Soon</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">MSEB Maharashtra</p>
                    <div class="flex items-center justify-between">
                        <p class="text-lg font-bold text-gray-900">₹1,320</p>
                        <p class="text-xs text-red-600 font-medium">Due in 2 days</p>
                    </div>
                    <button class="w-full mt-3 px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors text-sm font-semibold">
                        Pay Now
                    </button>
                </div>

                <div class="p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="font-semibold text-gray-900">Broadband</h4>
                        <span class="text-xs font-semibold text-yellow-600 bg-yellow-200 px-2 py-1 rounded-full">5 Days</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">Jio Fiber</p>
                    <div class="flex items-center justify-between">
                        <p class="text-lg font-bold text-gray-900">₹999</p>
                        <p class="text-xs text-yellow-600 font-medium">Due in 5 days</p>
                    </div>
                    <button class="w-full mt-3 px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700 transition-colors text-sm font-semibold">
                        Pay Now
                    </button>
                </div>

                <div class="p-4 bg-blue-50 border border-blue-200 rounded-lg">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="font-semibold text-gray-900">Gas Cylinder</h4>
                        <span class="text-xs font-semibold text-blue-600 bg-blue-200 px-2 py-1 rounded-full">8 Days</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">Indane Gas</p>
                    <div class="flex items-center justify-between">
                        <p class="text-lg font-bold text-gray-900">₹1,103</p>
                        <p class="text-xs text-blue-600 font-medium">Due in 8 days</p>
                    </div>
                    <button class="w-full mt-3 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors text-sm font-semibold">
                        Pay Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection