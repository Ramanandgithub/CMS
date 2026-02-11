<nav class="topbar no-print">
    <style>
        .topbar {
            position: sticky;
            top: 0;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            z-index: 1030;
            transition: var(--transition);
        }
        
        .topbar-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 25px;
            max-width: 100%;
        }
        
        /* Left Section */
        .topbar-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .sidebar-toggle {
            width: 40px;
            height: 40px;
            border: none;
            background: var(--light-bg);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            color: var(--text-dark);
        }
        
        .sidebar-toggle:hover {
            background: var(--primary-color);
            color: white;
            transform: scale(1.05);
        }
        
        .breadcrumb-container {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .breadcrumb {
            background: transparent;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }
        
        .breadcrumb-item {
            color: var(--text-light);
            font-size: 14px;
        }
        
        .breadcrumb-item a {
            color: var(--text-light);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .breadcrumb-item a:hover {
            color: var(--primary-color);
        }
        
        .breadcrumb-item.active {
            color: var(--text-dark);
            font-weight: 500;
        }
        
        /* Center Section - Search */
        .topbar-search {
            flex: 1;
            max-width: 600px;
            margin: 0 20px;
            position: relative;
        }
        
        .search-form {
            position: relative;
        }
        
        .search-input {
            width: 100%;
            padding: 12px 50px 12px 45px;
            border: 2px solid var(--light-bg);
            border-radius: 25px;
            font-size: 14px;
            transition: var(--transition);
            background: var(--light-bg);
        }
        
        .search-input:focus {
            outline: none;
            border-color: var(--primary-color);
            background: white;
            box-shadow: 0 4px 15px rgba(0,137,123,0.1);
        }
        
        .search-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            font-size: 16px;
        }
        
        .search-clear {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-light);
            cursor: pointer;
            display: none;
            transition: var(--transition);
        }
        
        .search-clear:hover {
            color: var(--text-dark);
        }
        
        .search-input:not(:placeholder-shown) ~ .search-clear {
            display: block;
        }
        
        /* Search Suggestions */
        .search-suggestions {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            margin-top: 10px;
            max-height: 400px;
            overflow-y: auto;
            display: none;
            z-index: 1000;
        }
        
        .search-suggestions.show {
            display: block;
        }
        
        .suggestion-item {
            padding: 12px 20px;
            border-bottom: 1px solid var(--light-bg);
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .suggestion-item:hover {
            background: var(--light-bg);
        }
        
        .suggestion-icon {
            width: 40px;
            height: 40px;
            background: var(--gradient-primary);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }
        
        .suggestion-content {
            flex: 1;
        }
        
        .suggestion-title {
            font-weight: 500;
            color: var(--text-dark);
            margin-bottom: 3px;
        }
        
        .suggestion-category {
            font-size: 12px;
            color: var(--text-light);
        }
        
        /* Right Section */
        .topbar-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .theme-toggle,
        .notification-btn {
            width: 40px;
            height: 40px;
            border: none;
            background: var(--light-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
        }
        
        .theme-toggle:hover,
        .notification-btn:hover {
            background: var(--primary-color);
            color: white;
            transform: scale(1.05);
        }
        
        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #f44336;
            color: white;
            font-size: 10px;
            font-weight: 700;
            padding: 2px 6px;
            border-radius: 10px;
            border: 2px solid white;
        }
        
        /* User Menu */
        .user-menu {
            position: relative;
        }
        
        .user-menu-toggle {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 15px;
            background: var(--light-bg);
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .user-menu-toggle:hover {
            background: var(--primary-color);
            color: white;
        }
        
        .user-menu-toggle:hover .user-avatar-sm {
            border-color: white;
        }
        
        .user-avatar-sm {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 14px;
            border: 2px solid transparent;
            transition: var(--transition);
        }
        
        .user-name-display {
            font-size: 14px;
            font-weight: 500;
        }
        
        .user-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            margin-top: 10px;
            min-width: 220px;
            display: none;
            z-index: 1000;
        }
        
        .user-dropdown.show {
            display: block;
            animation: slideDown 0.3s ease;
        }
        
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
        
        .dropdown-header {
            padding: 15px 20px;
            border-bottom: 1px solid var(--light-bg);
        }
        
        .dropdown-user-name {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 3px;
        }
        
        .dropdown-user-email {
            font-size: 13px;
            color: var(--text-light);
        }
        
        .dropdown-menu-list {
            padding: 10px 0;
        }
        
        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            color: var(--text-dark);
            text-decoration: none;
            transition: var(--transition);
            font-size: 14px;
        }
        
        .dropdown-item:hover {
            background: var(--light-bg);
            color: var(--primary-color);
        }
        
        .dropdown-item i {
            width: 20px;
            text-align: center;
        }
        
        .dropdown-divider {
            height: 1px;
            background: var(--light-bg);
            margin: 10px 0;
        }
        
        /* Login Button */
        .login-btn {
            padding: 10px 25px;
            background: var(--gradient-primary);
            color: white;
            border: none;
            border-radius: 25px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
        }
        
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,137,123,0.3);
            color: white;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .topbar-search {
                display: none;
            }
            
            .breadcrumb-container {
                display: none;
            }
            
            .user-name-display {
                display: none;
            }
        }
        
        @media (max-width: 576px) {
            .topbar-container {
                padding: 12px 15px;
            }
            
            .theme-toggle,
            .notification-btn,
            .user-menu-toggle {
                width: 36px;
                height: 36px;
            }
        }
    </style>
    
    <div class="topbar-container">
        <!-- Left Section -->
        <div class="topbar-left">
            <!-- Sidebar Toggle -->
            <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle sidebar">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Breadcrumb -->
            <div class="breadcrumb-container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        @yield('breadcrumb')
                    </ol>
                </nav>
            </div>
        </div>
        
        <!-- Center Section - Search -->
        <div class="topbar-search">
            <form action="" method="GET" class="search-form">
                <i class="fas fa-search search-icon"></i>
                <input 
                    type="text" 
                    name="q" 
                    class="search-input" 
                    placeholder="Search tutorials, languages, topics..."
                    autocomplete="off"
                    id="searchInput"
                >
                <button type="button" class="search-clear" id="searchClear">
                    <i class="fas fa-times"></i>
                </button>
            </form>
            
            <!-- Search Suggestions -->
            <div class="search-suggestions" id="searchSuggestions">
                <!-- Dynamic suggestions will be loaded here -->
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="topbar-right">
            <!-- Theme Toggle -->
            <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme" data-bs-toggle="tooltip" title="Toggle dark mode">
                <i class="fas fa-moon"></i>
            </button>
            
            @auth
                <!-- Notifications -->
                <button class="notification-btn" data-bs-toggle="tooltip" title="Notifications">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </button>
                
                <!-- User Menu -->
                <div class="user-menu">
                    <button class="user-menu-toggle" id="userMenuToggle">
                        <div class="user-avatar-sm">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>
                        <span class="user-name-display">{{ auth()->user()->name }}</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    
                    <!-- User Dropdown -->
                    <div class="user-dropdown" id="userDropdown">
                        <div class="dropdown-header">
                            <div class="dropdown-user-name">{{ auth()->user()->name }}</div>
                            <div class="dropdown-user-email">{{ auth()->user()->email }}</div>
                        </div>
                        
                        <div class="dropdown-menu-list">
                            <a href="{{ route('profile') }}" class="dropdown-item">
                                <i class="fas fa-user"></i>
                                <span>My Profile</span>
                            </a>
                            
                            <a href="{{ route('bookmarks') }}" class="dropdown-item">
                                <i class="fas fa-bookmark"></i>
                                <span>Bookmarks</span>
                            </a>
                            
                            <a href="{{ route('progress') }}" class="dropdown-item">
                                <i class="fas fa-chart-line"></i>
                                <span>Learning Progress</span>
                            </a>
                            
                            <a href="{{ route('settings') }}" class="dropdown-item">
                                <i class="fas fa-cog"></i>
                                <span>Settings</span>
                            </a>
                            
                            <div class="dropdown-divider"></div>
                            
                            <a href="{{ route('help') }}" class="dropdown-item">
                                <i class="fas fa-question-circle"></i>
                                <span>Help Center</span>
                            </a>
                            
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item" style="width: 100%; border: none; background: none; cursor: pointer;">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <!-- Login Button for Guests -->
                <a href="" class="login-btn">
                    <i class="fas fa-sign-in-alt"></i> Login
                </a>
            @endauth
        </div>
    </div>
</nav>

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
    
    searchClear.addEventListener('click', function() {
        searchInput.value = '';
        searchSuggestions.classList.remove('show');
        searchInput.focus();
    });
    
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
            <a href="${item.url}" class="suggestion-item">
                <div class="suggestion-icon">
                    <i class="${item.icon}"></i>
                </div>
                <div class="suggestion-content">
                    <div class="suggestion-title">${item.title}</div>
                    <div class="suggestion-category">${item.category}</div>
                </div>
            </a>
        `).join('');
        
        searchSuggestions.innerHTML = html;
        searchSuggestions.classList.add('show');
    }
    
    // Close suggestions when clicking outside
    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target) && !searchSuggestions.contains(e.target)) {
            searchSuggestions.classList.remove('show');
        }
    });
</script>