<aside class="print:hidden fixed top-0 -left-[280px] w-[280px] h-screen bg-gradient-to-b from-[#1a1a2e] to-[#16213e] shadow-[4px_0_20px_rgba(0,0,0,0.1)] transition-all duration-300 ease-in-out z-[1050] overflow-y-auto overflow-x-hidden lg:left-0" id="sidebar">
    
    <!-- Sidebar Header -->
    <div class="p-6 bg-black/20 border-b border-white/10">
        <a href="" class="flex items-center text-white text-2xl font-bold transition-all duration-300 hover:text-accent hover:translate-x-1 no-underline">
            <div class="w-10 h-10 bg-gradient-to-br from-primary to-secondary rounded-lg flex items-center justify-center mr-3 text-xl">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <span>Tpoint Tech</span>
        </a>
    </div>
    
    <!-- Sidebar Menu -->
    <div class="py-5">
        <!-- Main Navigation -->
        <div class="text-white/50 text-xs font-semibold uppercase tracking-wider px-5 py-4 mt-2">Main Navigation</div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 {{ request()->routeIs('home') ? 'text-white bg-white/10 before:scale-y-100' : '' }} no-underline">
                <i class="fas fa-home w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">Home</span>
            </a>
        </div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 {{ request()->routeIs('tutorials.*') ? 'text-white bg-white/10 before:scale-y-100' : '' }} no-underline">
                <i class="fas fa-book w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">All Tutorials</span>
                <span class="bg-accent text-dark-bg text-[11px] font-bold px-2 py-0.5 rounded-xl">500+</span>
            </a>
        </div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 {{ request()->routeIs('search') ? 'text-white bg-white/10 before:scale-y-100' : '' }} no-underline">
                <i class="fas fa-search w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">Search</span>
            </a>
        </div>
        
        <!-- Programming Languages -->
        <div class="text-white/50 text-xs font-semibold uppercase tracking-wider px-5 py-4 mt-2">Programming Languages</div>
        
        <div class="relative menu-item">
            <a href="javascript:void(0)" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline" onclick="toggleSubmenu(this)">
                <i class="fab fa-python w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">Python</span>
                <i class="fas fa-chevron-right text-xs transition-transform duration-300 menu-arrow"></i>
            </a>
            <div class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-black/20 submenu">
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">Python Tutorial</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">Django</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">Flask</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">Selenium Python</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">NumPy</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">Pandas</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">PyTorch</a>
            </div>
        </div>
        
        <div class="relative menu-item">
            <a href="javascript:void(0)" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline" onclick="toggleSubmenu(this)">
                <i class="fab fa-java w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">Java</span>
                <i class="fas fa-chevron-right text-xs transition-transform duration-300 menu-arrow"></i>
            </a>
            <div class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-black/20 submenu">
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">Java Tutorial</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">Spring Boot</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">Hibernate</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">JSP</a>
            </div>
        </div>
        
        <div class="relative menu-item">
            <a href="javascript:void(0)" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline" onclick="toggleSubmenu(this)">
                <i class="fab fa-js w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">JavaScript</span>
                <i class="fas fa-chevron-right text-xs transition-transform duration-300 menu-arrow"></i>
            </a>
            <div class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-black/20 submenu">
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">JavaScript Tutorial</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">React</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">Node.js</a>
                <a href="" class="block py-2.5 pl-[55px] pr-5 text-white/70 text-[13px] transition-all duration-300 relative hover:text-white hover:bg-white/5 hover:pl-[60px] before:content-['•'] before:absolute before:left-10 before:text-secondary no-underline">Vue.js</a>
            </div>
        </div>
        
        <!-- Databases -->
        <div class="text-white/50 text-xs font-semibold uppercase tracking-wider px-5 py-4 mt-2">Databases</div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                <i class="fas fa-database w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">SQL</span>
            </a>
        </div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                <i class="fas fa-database w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">MySQL</span>
            </a>
        </div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                <i class="fas fa-leaf w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">MongoDB</span>
            </a>
        </div>
        
        <!-- Web Development -->
        <div class="text-white/50 text-xs font-semibold uppercase tracking-wider px-5 py-4 mt-2">Web Development</div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                <i class="fab fa-html5 w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">HTML</span>
            </a>
        </div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                <i class="fab fa-css3-alt w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">CSS</span>
            </a>
        </div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                <i class="fab fa-php w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">PHP</span>
            </a>
        </div>
        
        <!-- Other Topics -->
        <div class="text-white/50 text-xs font-semibold uppercase tracking-wider px-5 py-4 mt-2">Other Topics</div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                <i class="fas fa-robot w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">AI</span>
            </a>
        </div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                <i class="fas fa-brain w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">Machine Learning</span>
            </a>
        </div>
        
        <div class="relative">
            <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                <i class="fas fa-project-diagram w-5 text-lg mr-4 text-center"></i>
                <span class="flex-1 text-sm font-medium">DSA</span>
            </a>
        </div>
        
        <!-- User Section -->
        <div class="text-white/50 text-xs font-semibold uppercase tracking-wider px-5 py-4 mt-2">Account</div>
        
        @auth
            <div class="relative">
                <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                    <i class="fas fa-user w-5 text-lg mr-4 text-center"></i>
                    <span class="flex-1 text-sm font-medium">Profile</span>
                </a>
            </div>
            
            <div class="relative">
                <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                    <i class="fas fa-bookmark w-5 text-lg mr-4 text-center"></i>
                    <span class="flex-1 text-sm font-medium">Bookmarks</span>
                </a>
            </div>
            
            <div class="relative">
                <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                    <i class="fas fa-chart-line w-5 text-lg mr-4 text-center"></i>
                    <span class="flex-1 text-sm font-medium">My Progress</span>
                </a>
            </div>
        @else
            <div class="relative">
                <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                    <i class="fas fa-sign-in-alt w-5 text-lg mr-4 text-center"></i>
                    <span class="flex-1 text-sm font-medium">Login</span>
                </a>
            </div>
            
            <div class="relative">
                <a href="" class="flex items-center px-5 py-3 text-white/80 transition-all duration-300 relative overflow-hidden hover:text-white hover:bg-white/10 before:content-[''] before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:bg-accent before:scale-y-0 before:transition-transform before:duration-300 hover:before:scale-y-100 no-underline">
                    <i class="fas fa-user-plus w-5 text-lg mr-4 text-center"></i>
                    <span class="flex-1 text-sm font-medium">Register</span>
                </a>
            </div>
        @endauth
        
        <!-- Add bottom padding to prevent footer overlap -->
        <div class="h-32"></div>
    </div>
    
    <!-- Sidebar Footer -->
    @auth
        <div class="absolute bottom-0 left-0 right-0 p-5 bg-black/30 border-t border-white/10">
            <div class="flex items-center text-white">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-accent to-[#FF9800] flex items-center justify-center mr-3 font-bold">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div class="flex-1">
                    <div class="text-sm font-semibold mb-0.5">{{ auth()->user()->name }}</div>
                    <div class="text-xs text-white/60">Student</div>
                </div>
            </div>
        </div>
    @endauth
</aside>

<!-- Sidebar Overlay for Mobile -->
<div class="fixed top-0 left-0 w-full h-full bg-black/50 opacity-0 invisible transition-all duration-300 z-[1040] lg:hidden sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

<style>
    /* Custom scrollbar for sidebar - minimal CSS needed */
    #sidebar::-webkit-scrollbar {
        width: 6px;
    }
    
    #sidebar::-webkit-scrollbar-track {
        background: rgba(255,255,255,0.1);
    }
    
    #sidebar::-webkit-scrollbar-thumb {
        background: rgba(255,255,255,0.3);
        border-radius: 3px;
    }
    
    /* Active sidebar state */
    #sidebar.active {
        left: 0 !important;
    }
    
    #sidebar.active ~ .sidebar-overlay {
        opacity: 1 !important;
        visibility: visible !important;
    }
    
    /* Submenu animation */
    .menu-item.open .submenu {
        max-height: 1000px;
    }
    
    .menu-item.open .menu-arrow {
        transform: rotate(90deg);
    }
</style>

<script>
    function toggleSubmenu(element) {
        const menuItem = element.parentElement;
        const isOpen = menuItem.classList.contains('open');
        
        // Close all other submenus
        document.querySelectorAll('.menu-item.open').forEach(item => {
            if (item !== menuItem) {
                item.classList.remove('open');
            }
        });
        
        // Toggle current submenu
        menuItem.classList.toggle('open');
    }
    
    function closeSidebar() {
        document.getElementById('sidebar').classList.remove('active');
        document.getElementById('mainContent').classList.remove('sidebar-open');
    }
</script>