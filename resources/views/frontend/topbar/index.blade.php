<nav class="print:hidden sticky top-0 bg-white shadow-[0_2px_10px_rgba(0,0,0,0.08)] z-[1030] transition-all duration-300">
    <div class="flex items-center justify-between px-6 py-4 max-w-full md:px-4 sm:px-4">
        
        <!-- Left Section -->
        <div class="flex items-center gap-5">
            <!-- Sidebar Toggle -->
            <button class="w-10 h-10 border-0 bg-light-bg rounded-lg flex items-center justify-center cursor-pointer transition-all duration-300 text-text-dark hover:bg-primary hover:text-white hover:scale-105" id="sidebarToggle" aria-label="Toggle sidebar">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Breadcrumb -->
            <div class="hidden md:flex items-center gap-2">
                <nav aria-label="breadcrumb">
                    <ol class="flex items-center gap-2 flex-wrap bg-transparent p-0 m-0">
                        <li class="text-text-light text-sm">
                            <a href="{{ route('home') }}" class="text-text-light transition-all duration-300 hover:text-primary no-underline">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        @yield('breadcrumb')
                    </ol>
                </nav>
            </div>
        </div>
        
        <!-- Center Section - Search -->
        <div class="hidden md:flex flex-1 max-w-[600px] mx-5 relative">
            <form action="" method="GET" class="relative w-full">
                <i class="fas fa-search absolute left-[18px] top-1/2 -translate-y-1/2 text-text-light text-base"></i>
                <input 
                    type="text" 
                    name="q" 
                    class="w-full py-3 pr-12 pl-11 border-2 border-light-bg rounded-full text-sm transition-all duration-300 bg-light-bg focus:outline-none focus:border-primary focus:bg-white focus:shadow-[0_4px_15px_rgba(0,137,123,0.1)]" 
                    placeholder="Search tutorials, languages, topics..."
                    autocomplete="off"
                    id="searchInput"
                >
                <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 bg-transparent border-0 text-text-light cursor-pointer hidden transition-all duration-300 hover:text-text-dark" id="searchClear">
                    <i class="fas fa-times"></i>
                </button>
            </form>
            
            <!-- Search Suggestions -->
            <div class="absolute top-full left-0 right-0 bg-white rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.15)] mt-2.5 max-h-[400px] overflow-y-auto hidden z-[1000]" id="searchSuggestions">
                <!-- Dynamic suggestions will be loaded here -->
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="flex items-center gap-4 sm:gap-3">
            <!-- Theme Toggle -->
            <button class="w-10 h-10 border-0 bg-light-bg rounded-full flex items-center justify-center cursor-pointer transition-all duration-300 relative hover:bg-primary hover:text-white hover:scale-105 sm:w-9 sm:h-9" id="themeToggle" aria-label="Toggle theme" title="Toggle dark mode">
                <i class="fas fa-moon"></i>
            </button>
            
            @auth
                <!-- Notifications -->
                <button class="w-10 h-10 border-0 bg-light-bg rounded-full flex items-center justify-center cursor-pointer transition-all duration-300 relative hover:bg-primary hover:text-white hover:scale-105 sm:w-9 sm:h-9" title="Notifications">
                    <i class="fas fa-bell"></i>
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-xl border-2 border-white">3</span>
                </button>
                
                <!-- User Menu -->
                <div class="relative">
                    <button class="flex items-center gap-2.5 px-4 py-2 bg-light-bg border-0 rounded-full cursor-pointer transition-all duration-300 hover:bg-primary hover:text-white sm:px-3" id="userMenuToggle">
                        <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white font-bold text-sm border-2 border-transparent transition-all duration-300">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                        <span class="text-sm font-medium hidden md:inline">{{ auth()->user()->name }}</span>
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                    
                    <!-- User Dropdown -->
                    <div class="absolute top-full right-0 bg-white rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.15)] mt-2.5 min-w-[220px] hidden z-[1000] animate-[slideDown_0.3s_ease]" id="userDropdown">
                        <div class="p-4 border-b border-light-bg">
                            <div class="font-semibold text-text-dark mb-1">{{ auth()->user()->name }}</div>
                            <div class="text-[13px] text-text-light">{{ auth()->user()->email }}</div>
                        </div>
                        
                        <div class="py-2.5">
                            <a href="{{ route('profile') }}" class="flex items-center gap-3 px-5 py-3 text-text-dark transition-all duration-300 text-sm hover:bg-light-bg hover:text-primary no-underline">
                                <i class="fas fa-user w-5 text-center"></i>
                                <span>My Profile</span>
                            </a>
                            
                            <a href="{{ route('bookmarks') }}" class="flex items-center gap-3 px-5 py-3 text-text-dark transition-all duration-300 text-sm hover:bg-light-bg hover:text-primary no-underline">
                                <i class="fas fa-bookmark w-5 text-center"></i>
                                <span>Bookmarks</span>
                            </a>
                            
                            <a href="{{ route('progress') }}" class="flex items-center gap-3 px-5 py-3 text-text-dark transition-all duration-300 text-sm hover:bg-light-bg hover:text-primary no-underline">
                                <i class="fas fa-chart-line w-5 text-center"></i>
                                <span>Learning Progress</span>
                            </a>
                            
                            <a href="{{ route('settings') }}" class="flex items-center gap-3 px-5 py-3 text-text-dark transition-all duration-300 text-sm hover:bg-light-bg hover:text-primary no-underline">
                                <i class="fas fa-cog w-5 text-center"></i>
                                <span>Settings</span>
                            </a>
                            
                            <div class="h-px bg-light-bg my-2.5"></div>
                            
                            <a href="{{ route('help') }}" class="flex items-center gap-3 px-5 py-3 text-text-dark transition-all duration-300 text-sm hover:bg-light-bg hover:text-primary no-underline">
                                <i class="fas fa-question-circle w-5 text-center"></i>
                                <span>Help Center</span>
                            </a>
                            
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="flex items-center gap-3 px-5 py-3 text-text-dark transition-all duration-300 text-sm hover:bg-light-bg hover:text-primary w-full border-0 bg-transparent cursor-pointer text-left">
                                    <i class="fas fa-sign-out-alt w-5 text-center"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <!-- Login Button for Guests -->
                <a href="" class="py-2.5 px-6 bg-gradient-to-r from-primary to-secondary text-white border-0 rounded-full font-medium cursor-pointer transition-all duration-300 inline-block hover:-translate-y-0.5 hover:shadow-[0_5px_15px_rgba(0,137,123,0.3)] no-underline">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
            @endauth
        </div>
    </div>
</nav>

<style>
    /* Minimal custom CSS for features Tailwind can't handle */
    
    /* Show clear button when input has value */
    #searchInput:not(:placeholder-shown) ~ #searchClear {
        display: block;
    }
    
    /* Show dropdown */
    #searchSuggestions.show {
        display: block;
    }
    
    #userDropdown.show {
        display: block;
    }
    
    /* Slide down animation */
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Hover effect for user menu avatar border */
    #userMenuToggle:hover .w-8 {
        border-color: white;
    }
</style>

<script>
    // User menu toggle
    const userMenuToggle = document.getElementById('userMenuToggle');
    const userDropdown = document.getElementById('userDropdown');
    
    if (userMenuToggle) {
        userMenuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            userDropdown.classList.toggle('show');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!userMenuToggle.contains(e.target) && !userDropdown.contains(e.target)) {
                userDropdown.classList.remove('show');
            }
        });
    }
    
    // Theme toggle
    const themeToggle = document.getElementById('themeToggle');
    const html = document.documentElement;
    
    // Check for saved theme preference
    const currentTheme = localStorage.getItem('theme') || 'light';
    html.setAttribute('data-theme', currentTheme);
    
    if (currentTheme === 'dark') {
        themeToggle.querySelector('i').classList.replace('fa-moon', 'fa-sun');
    }
    
    themeToggle.addEventListener('click', function() {
        const theme = html.getAttribute('data-theme');
        const newTheme = theme === 'light' ? 'dark' : 'light';
        
        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        
        // Toggle icon
        const icon = this.querySelector('i');
        if (newTheme === 'dark') {
            icon.classList.replace('fa-moon', 'fa-sun');
        } else {
            icon.classList.replace('fa-sun', 'fa-moon');
        }
    });
    
    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const searchClear = document.getElementById('searchClear');
    const searchSuggestions = document.getElementById('searchSuggestions');
    
    let searchTimeout;
    
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const query = this.value.trim();
            
            clearTimeout(searchTimeout);
            
            if (query.length >= 2) {
                searchTimeout = setTimeout(() => {
                    fetchSearchSuggestions(query);
                }, 300);
            } else {
                searchSuggestions.classList.remove('show');
            }
        });
    }
    
    if (searchClear) {
        searchClear.addEventListener('click', function() {
            searchInput.value = '';
            searchSuggestions.classList.remove('show');
            searchInput.focus();
        });
    }
    
    function fetchSearchSuggestions(query) {
        // Example: Fetch suggestions via AJAX
        fetch(`/api/search/suggestions?q=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                displaySuggestions(data);
            })
            .catch(error => {
                console.error('Error fetching suggestions:', error);
            });
    }
    
    function displaySuggestions(suggestions) {
        if (suggestions.length === 0) {
            searchSuggestions.classList.remove('show');
            return;
        }
        
        const html = suggestions.map(item => `
            <a href="${item.url}" class="flex items-center gap-4 p-3 border-b border-light-bg cursor-pointer transition-all duration-300 hover:bg-light-bg no-underline">
                <div class="w-10 h-10 bg-gradient-to-br from-primary to-secondary rounded-lg flex items-center justify-center text-white text-lg">
                    <i class="${item.icon}"></i>
                </div>
                <div class="flex-1">
                    <div class="font-medium text-text-dark mb-1">${item.title}</div>
                    <div class="text-xs text-text-light">${item.category}</div>
                </div>
            </a>
        `).join('');
        
        searchSuggestions.innerHTML = html;
        searchSuggestions.classList.add('show');
    }
    
    // Close suggestions when clicking outside
    document.addEventListener('click', function(e) {
        if (searchInput && searchSuggestions && !searchInput.contains(e.target) && !searchSuggestions.contains(e.target)) {
            searchSuggestions.classList.remove('show');
        }
    });
</script>