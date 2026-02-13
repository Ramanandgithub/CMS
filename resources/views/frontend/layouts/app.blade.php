<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Get access to 500+ tutorials from top instructors around the world in one place.')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Rpoint Tech - 500+ Programming Tutorials')</title>
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#00897B',
                        secondary: '#4CAF50',
                        accent: '#FFC107',
                        'dark-bg': '#1a1a2e',
                        'light-bg': '#f8f9fa',
                        'text-dark': '#2d3748',
                        'text-light': '#718096',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'spin-slow': 'spin 1s linear infinite',
                        'fade-in': 'fadeIn 0.5s ease-in',
                        'slide-in-left': 'slideInLeft 0.5s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-30px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        }
                    }
                }
            }
        }
    </script>
    
    @stack('styles')
</head>
<body class="font-sans bg-light-bg text-text-dark overflow-x-hidden">
    <!-- Page Loader -->
    <div class="fixed inset-0 bg-white flex justify-center items-center z-[9999] transition-opacity duration-500 opacity-100 visible" id="pageLoader">
        <div class="w-12 h-12 border-4 border-light-bg border-t-primary rounded-full animate-spin-slow"></div>
    </div>
    
    <!-- Main Wrapper -->
    <div class="flex min-h-screen relative">
        <!-- Sidebar -->
        @include('frontend.sidebar.sidebar')
        
        <!-- Main Content -->
        <div class="flex-1 transition-all duration-300 ease-in-out ml-0 lg:ml-[280px] relative z-10" id="mainContent">
            <!-- Top Navigation Bar -->
            @include('frontend.topbar.index')
            
            <!-- Page Content -->
            <div class="p-5 max-w-screen-2xl mx-auto animate-fade-in">
                @yield('content')
            </div>
            
            <!-- Footer -->
            @include('frontend.footer.index')
        </div>
    </div>
    
    <!-- Back to Top Button -->
    <button 
        class="fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-br from-primary to-secondary text-white rounded-full hidden justify-center items-center cursor-pointer shadow-lg transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-2xl z-[1000] print:hidden" 
        id="backToTop" 
        aria-label="Back to top"
    >
        <i class="fas fa-arrow-up"></i>
    </button>
    
    <!-- Custom JavaScript -->
    <script>
        // Page loader
        window.addEventListener('load', function() {
            const loader = document.getElementById('pageLoader');
            loader.classList.add('opacity-0', 'invisible');
        });
        
        // Sidebar toggle
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        
        if (sidebarToggle && sidebar && mainContent) {
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                
                // Save state to localStorage
                const isOpen = sidebar.classList.contains('active');
                localStorage.setItem('sidebarOpen', isOpen);
            });
        }
        
        // Restore sidebar state on desktop
        const sidebarOpen = localStorage.getItem('sidebarOpen') === 'true';
        if (sidebarOpen && window.innerWidth > 1024 && sidebar) {
            sidebar.classList.add('active');
        }
        
        // Back to top button
        const backToTop = document.getElementById('backToTop');
        
        if (backToTop) {
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTop.classList.remove('hidden');
                    backToTop.classList.add('flex');
                } else {
                    backToTop.classList.add('hidden');
                    backToTop.classList.remove('flex');
                }
            });
            
            backToTop.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
        
        // Close sidebar on mobile when clicking outside
        document.addEventListener('click', function(event) {
            if (window.innerWidth <= 1024 && sidebar && sidebarToggle) {
                const isClickInsideSidebar = sidebar.contains(event.target);
                const isClickOnToggle = sidebarToggle.contains(event.target);
                
                if (!isClickInsideSidebar && !isClickOnToggle && sidebar.classList.contains('active')) {
                    sidebar.classList.remove('active');
                }
            }
        });
        
        // Lazy loading images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.classList.add('animate-fade-in');
                            imageObserver.unobserve(img);
                        }
                    }
                });
            });
            
            const images = document.querySelectorAll('img[data-src]');
            images.forEach(img => imageObserver.observe(img));
        }
        
        // Service Worker registration (PWA)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js').then(function(registration) {
                    console.log('ServiceWorker registered: ', registration);
                }).catch(function(error) {
                    console.log('ServiceWorker registration failed: ', error);
                });
            });
        }
    </script>
    
    @stack('scripts')
</body>
</html>