<aside class="sidebar no-print" id="sidebar">
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            left: -280px;
            width: 280px;
            height: 100vh;
            background: linear-gradient(180deg, #1a1a2e 0%, #16213e 100%);
            box-shadow: 4px 0 20px rgba(0,0,0,0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1050;
            overflow-y: auto;
            overflow-x: hidden;
        }
        
        .sidebar.active {
            left: 0;
        }
        
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }
        
        .sidebar::-webkit-scrollbar-track {
            background: rgba(255,255,255,0.1);
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.3);
            border-radius: 3px;
        }
        
        .sidebar-header {
            padding: 25px 20px;
            background: rgba(0,0,0,0.2);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .sidebar-brand {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            font-size: 24px;
            font-weight: 700;
            transition: var(--transition);
        }
        
        .sidebar-brand:hover {
            color: var(--accent-color);
            transform: translateX(5px);
        }
        
        .brand-icon {
            width: 40px;
            height: 40px;
            background: var(--gradient-primary);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 20px;
        }
        
        .sidebar-menu {
            padding: 20px 0;
        }
        
        .menu-section-title {
            color: rgba(255,255,255,0.5);
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 15px 20px 10px;
            margin-top: 10px;
        }
        
        .menu-item {
            position: relative;
        }
        
        .menu-link {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }
        
        .menu-link::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: var(--accent-color);
            transform: scaleY(0);
            transition: var(--transition);
        }
        
        .menu-link:hover,
        .menu-link.active {
            color: white;
            background: rgba(255,255,255,0.1);
        }
        
        .menu-link.active::before,
        .menu-link:hover::before {
            transform: scaleY(1);
        }
        
        .menu-icon {
            width: 20px;
            font-size: 18px;
            margin-right: 15px;
            text-align: center;
        }
        
        .menu-text {
            flex: 1;
            font-size: 14px;
            font-weight: 500;
        }
        
        .menu-badge {
            background: var(--accent-color);
            color: var(--dark-bg);
            font-size: 11px;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 12px;
        }
        
        .menu-arrow {
            transition: var(--transition);
            font-size: 12px;
        }
        
        .menu-item.open .menu-arrow {
            transform: rotate(90deg);
        }
        
        /* Submenu */
        .submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            background: rgba(0,0,0,0.2);
        }
        
        .menu-item.open .submenu {
            max-height: 1000px;
        }
        
        .submenu-link {
            display: block;
            padding: 10px 20px 10px 55px;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 13px;
            transition: var(--transition);
            position: relative;
        }
        
        .submenu-link::before {
            content: '•';
            position: absolute;
            left: 40px;
            color: var(--secondary-color);
        }
        
        .submenu-link:hover,
        .submenu-link.active {
            color: white;
            background: rgba(255,255,255,0.05);
            padding-left: 60px;
        }
        
        /* Sidebar footer */
        .sidebar-footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 20px;
            background: rgba(0,0,0,0.3);
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        
        .user-info {
            display: flex;
            align-items: center;
            color: white;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--gradient-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-weight: 700;
        }
        
        .user-details {
            flex: 1;
        }
        
        .user-name {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 2px;
        }
        
        .user-role {
            font-size: 12px;
            color: rgba(255,255,255,0.6);
        }
        
        /* Responsive */
        @media (min-width: 993px) {
            .sidebar {
                left: 0;
            }
            
            .main-content {
                margin-left: 280px;
            }
        }
        
        @media (max-width: 992px) {
            .sidebar-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.5);
                opacity: 0;
                visibility: hidden;
                transition: var(--transition);
                z-index: 1040;
            }
            
            .sidebar.active ~ .sidebar-overlay {
                opacity: 1;
                visibility: visible;
            }
        }
    </style>
    
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <a href="" class="sidebar-brand">
            <div class="brand-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <span>Tpoint Tech</span>
        </a>
    </div>
    
    <!-- Sidebar Menu -->
    <div class="sidebar-menu">
        <!-- Main Navigation -->
        <div class="menu-section-title">Main Navigation</div>
        
        <div class="menu-item">
            <a href="" class="menu-link {{ request()->routeIs('home') ? 'active' : '' }}">
                <i class="fas fa-home menu-icon"></i>
                <span class="menu-text">Home</span>
            </a>
        </div>
        
        <div class="menu-item">
            <a href="" class="menu-link {{ request()->routeIs('tutorials.*') ? 'active' : '' }}">
                <i class="fas fa-book menu-icon"></i>
                <span class="menu-text">All Tutorials</span>
                <span class="menu-badge">500+</span>
            </a>
        </div>
        
        <div class="menu-item">
            <a href="" class="menu-link {{ request()->routeIs('search') ? 'active' : '' }}">
                <i class="fas fa-search menu-icon"></i>
                <span class="menu-text">Search</span>
            </a>
        </div>
        
        <!-- Programming Languages -->
        <div class="menu-section-title">Programming Languages</div>
        
        <div class="menu-item">
            <a href="javascript:void(0)" class="menu-link" onclick="toggleSubmenu(this)">
                <i class="fab fa-python menu-icon"></i>
                <span class="menu-text">Python</span>
                <i class="fas fa-chevron-right menu-arrow"></i>
            </a>
            <div class="submenu">
                <a href="" class="submenu-link">Python Tutorial</a>
                <a href="" class="submenu-link">Django</a>
                <a href="" class="submenu-link">Flask</a>
                <a href="" class="submenu-link">Selenium Python</a>
                <a href="" class="submenu-link">NumPy</a>
                <a href="" class="submenu-link">Pandas</a>
                <a href="" class="submenu-link">PyTorch</a>
            </div>
        </div>
        
        <div class="menu-item">
            <a href="javascript:void(0)" class="menu-link" onclick="toggleSubmenu(this)">
                <i class="fab fa-java menu-icon"></i>
                <span class="menu-text">Java</span>
                <i class="fas fa-chevron-right menu-arrow"></i>
            </a>
            <div class="submenu">
                <a href="" class="submenu-link">Java Tutorial</a>
                <a href="" class="submenu-link">Spring Boot</a>
                <a href="" class="submenu-link">Hibernate</a>
                <a href="" class="submenu-link">JSP</a>
            </div>
        </div>
        
        <div class="menu-item">
            <a href="javascript:void(0)" class="menu-link" onclick="toggleSubmenu(this)">
                <i class="fab fa-js menu-icon"></i>
                <span class="menu-text">JavaScript</span>
                <i class="fas fa-chevron-right menu-arrow"></i>
            </a>
            <div class="submenu">
                <a href="" class="submenu-link">JavaScript Tutorial</a>
                <a href="" class="submenu-link">React</a>
                <a href="" class="submenu-link">Node.js</a>
                <a href="" class="submenu-link">Vue.js</a>
            </div>
        </div>
        
        <!-- Databases -->
        <div class="menu-section-title">Databases</div>
        
        <div class="menu-item">
            <a href="" class="menu-link">
                <i class="fas fa-database menu-icon"></i>
                <span class="menu-text">SQL</span>
            </a>
        </div>
        
        <div class="menu-item">
            <a href="" class="menu-link">
                <i class="fas fa-database menu-icon"></i>
                <span class="menu-text">MySQL</span>
            </a>
        </div>
        
        <div class="menu-item">
            <a href="" class="menu-link">
                <i class="fas fa-leaf menu-icon"></i>
                <span class="menu-text">MongoDB</span>
            </a>
        </div>
        
        <!-- Web Development -->
        <div class="menu-section-title">Web Development</div>
        
        <div class="menu-item">
            <a href="" class="menu-link">
                <i class="fab fa-html5 menu-icon"></i>
                <span class="menu-text">HTML</span>
            </a>
        </div>
        
        <div class="menu-item">
            <a href="" class="menu-link">
                <i class="fab fa-css3-alt menu-icon"></i>
                <span class="menu-text">CSS</span>
            </a>
        </div>
        
        <div class="menu-item">
            <a href="" class="menu-link">
                <i class="fab fa-php menu-icon"></i>
                <span class="menu-text">PHP</span>
            </a>
        </div>
        
        <!-- Other Topics -->
        <div class="menu-section-title">Other Topics</div>
        
        <div class="menu-item">
            <a href="" class="menu-link">
                <i class="fas fa-robot menu-icon"></i>
                <span class="menu-text">AI</span>
            </a>
        </div>
        
        <div class="menu-item">
            <a href="" class="menu-link">
                <i class="fas fa-brain menu-icon"></i>
                <span class="menu-text">Machine Learning</span>
            </a>
        </div>
        
        <div class="menu-item">
            <a href="" class="menu-link">
                <i class="fas fa-project-diagram menu-icon"></i>
                <span class="menu-text">DSA</span>
            </a>
        </div>
        
        <!-- User Section -->
        <div class="menu-section-title">Account</div>
        
        @auth
            <div class="menu-item">
                <a href="" class="menu-link">
                    <i class="fas fa-user menu-icon"></i>
                    <span class="menu-text">Profile</span>
                </a>
            </div>
            
            <div class="menu-item">
                <a href="" class="menu-link">
                    <i class="fas fa-bookmark menu-icon"></i>
                    <span class="menu-text">Bookmarks</span>
                </a>
            </div>
            
            <div class="menu-item">
                <a href="" class="menu-link">
                    <i class="fas fa-chart-line menu-icon"></i>
                    <span class="menu-text">My Progress</span>
                </a>
            </div>
        @else
            <div class="menu-item">
                <a href="" class="menu-link">
                    <i class="fas fa-sign-in-alt menu-icon"></i>
                    <span class="menu-text">Login</span>
                </a>
            </div>
            
            <div class="menu-item">
                <a href="" class="menu-link">
                    <i class="fas fa-user-plus menu-icon"></i>
                    <span class="menu-text">Register</span>
                </a>
            </div>
        @endauth
    </div>
    
    <!-- Sidebar Footer -->
    @auth
        <div class="sidebar-footer">
            <div class="user-info">
                <div class="user-avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div class="user-details">
                    <div class="user-name">{{ auth()->user()->name }}</div>
                    <div class="user-role">Student</div>
                </div>
            </div>
        </div>
    @endauth
</aside>

<!-- Sidebar Overlay for Mobile -->
<div class="sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar()"></div>

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