
<aside id="sidebar" class="sidebar-mobile md:relative fixed inset-y-0 left-0 z-40 w-64 bg-gradient-to-b from-blue-900 via-blue-800 to-blue-900 text-white transition-transform duration-300 ease-in-out overflow-y-auto">
    <!-- Logo Section -->
    <div class="flex items-center justify-between px-6 py-5 border-b border-blue-700">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div>
                <h2 class="text-xl font-bold">CMS</h2>
                <p class="text-xs text-blue-300">Management</p>
            </div>
        </div>
        <button id="sidebar-close" class="md:hidden text-white hover:text-blue-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    
    <!-- Navigation Menu -->
    <nav class="px-4 py-6 space-y-2">
        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('dashboard') ? 'bg-blue-800 shadow-lg' : '' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span class="font-medium">Dashboard</span>
        </a>
        
        <!-- Bill Payments Section -->
        <div class="pt-4">
            <p class="px-4 text-xs font-semibold text-blue-300 uppercase tracking-wider mb-2">Bill Payments</p>
            
            <!-- Electricity -->
            <a href="{{ route('admin.user-list') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('admin.user-list') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span class="font-medium">Users</span>
            </a>
             <a href="{{ route('admin.add-subject') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('add-subject') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span class="font-medium">Add Subject</span>
            </a>
            
            
            <!-- Water -->
            <a href="{{ route('admin.add-topics') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('admin.add-topics') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
                <span class="font-medium">Add Topics</span>
            </a>
            
            <!-- Gas -->
            <a href="" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('bills.gas') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
                </svg>
                <span class="font-medium">Gas</span>
            </a>
            
            <!-- Mobile Recharge -->
            <a href="" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('recharge.mobile') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                </svg>
                <span class="font-medium">Mobile Recharge</span>
            </a>
            
            <!-- DTH Recharge -->
            <a href="" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('recharge.dth') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span class="font-medium">DTH Recharge</span>
            </a>
            
            <!-- Broadband -->
            <a href="" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('bills.broadband') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                </svg>
                <span class="font-medium">Broadband</span>
            </a>
        </div>
        
        <!-- Services Section -->
        <div class="pt-4">
            <p class="px-4 text-xs font-semibold text-blue-300 uppercase tracking-wider mb-2">Services</p>
            
            <!-- Transactions -->
            <a href="" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('transactions') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                </svg>
                <span class="font-medium">Transactions</span>
            </a>
            
            <!-- Reports -->
            <a href="" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('reports') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                <span class="font-medium">Reports</span>
            </a>
            
            <!-- Wallet -->
            <a href="" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('wallet') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                </svg>
                <span class="font-medium">Wallet</span>
                <span class="ml-auto bg-green-500 text-white text-xs px-2 py-1 rounded-full">₹5,240</span>
            </a>
        </div>
        
        <!-- Settings Section -->
        <div class="pt-4">
            <p class="px-4 text-xs font-semibold text-blue-300 uppercase tracking-wider mb-2">Settings</p>
            
            <!-- Profile -->
            <a href="{{ route('admin.user-profile') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('admin.user-profile') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <span class="font-medium">Profile</span>
            </a>
            
            <!-- Settings -->
            <a href="" class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors {{ request()->routeIs('settings') ? 'bg-blue-800 shadow-lg' : '' }}">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <span class="font-medium">Settings</span>
            </a>
        </div>
    </nav>
    
    <!-- Footer -->
    <div class="absolute bottom-0 w-full p-4 border-t border-blue-700">
        <div class="flex items-center justify-between px-2">
            <div class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                <span class="text-sm text-blue-200">Online</span>
            </div>
            <span class="text-xs text-blue-300">v1.0.0</span>
        </div>
    </div>
</aside>    