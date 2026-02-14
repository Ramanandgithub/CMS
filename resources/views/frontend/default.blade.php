<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rpoint Tech - Learn Programming from Top Instructors</title>
    <meta name="description" content="Get access to 500+ programming tutorials from top instructors. Learn Python, Java, JavaScript, Web Development, AI, Machine Learning and more.">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#3b82f6',
                        'secondary': '#8b5cf6',
                        'accent': '#ffc107',
                        'dark-bg': '#1a1a2e',
                        'light-bg': '#f8f9fa',
                        'text-dark': '#2c3e50',
                        'text-light': '#6c757d'
                    }
                }
            }
        }
    </script>
    
    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fade-in 0.6s ease-out forwards;
        }
        
        .no-underline {
            text-decoration: none;
        }
    </style>
</head>
<body class="bg-gray-50">
    
    @include('frontend.topbar.index')

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-12">
        <!-- Hero Section -->
        <section class="relative bg-gradient-to-br from-gray-50 to-gray-100 rounded-3xl p-12 lg:p-16 mb-16 overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-10 right-1/4 w-4 h-4 bg-orange-400 rounded-full"></div>
            <div class="absolute top-20 right-1/3 w-2 h-2 bg-orange-400 rounded-full"></div>
            <div class="absolute bottom-20 left-1/4 text-orange-400 text-6xl opacity-30 font-bold">500+</div>
            <div class="absolute top-1/4 right-1/4 grid grid-cols-10 gap-1 opacity-20">
                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12 items-center relative z-10">
                <!-- Left Content -->
                <div>
                    <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Welcome to Rpoint Tech
                    </h1>
                    <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                        Get access to 500+ tutorials from top instructors around the world in one place.
                    </p>
                    
                    <!-- Search Bar -->
                    <form class="relative max-w-xl">
                        <input 
                            type="text" 
                            placeholder="Search..." 
                            class="w-full py-4 px-6 pr-14 border-2 border-gray-200 rounded-full text-base focus:outline-none focus:border-teal-500"
                        >
                        <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 bg-teal-600 text-white rounded-full flex items-center justify-center hover:bg-teal-700">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>

                <!-- Right Content - Hero Images -->
                <div class="relative hidden lg:block">
                    <!-- Main Image Card -->
                    <div class="relative z-10 ml-auto max-w-md">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=500&fit=crop" alt="Student" class="rounded-2xl shadow-2xl w-full">
                    </div>
                    
                    <!-- Floating Card - Yellow Background Student -->
                    <div class="absolute -left-8 top-20 z-20 bg-yellow-400 rounded-2xl shadow-xl p-4 w-48">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=200&h=200&fit=crop" alt="Student" class="rounded-lg w-full">
                    </div>

                    <!-- Stat Card -->
                    <div class="absolute -bottom-4 left-1/4 z-30 bg-white rounded-2xl shadow-xl p-6 text-center">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                                <i class="fas fa-users text-white text-xl"></i>
                            </div>
                            <div class="text-left">
                                <div class="text-3xl font-bold text-gray-900">500+</div>
                                <div class="text-sm text-gray-600">TUTORIALS</div>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative Triangle -->
                    <div class="absolute -right-8 top-1/2 w-16 h-16 border-t-[32px] border-t-transparent border-l-[56px] border-l-orange-400 border-b-[32px] border-b-transparent opacity-60"></div>
                </div>
            </div>
        </section>

        <!-- Popular Categories Section -->
        <section class="mb-16">
            <div class="mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-text-dark mb-2">Python</h2>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-4 mb-12">
                <!-- Python -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-python text-5xl text-[#3776AB]"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Python</h3>
                </a>

                <!-- Selenium Python -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center relative">
                        <i class="fab fa-python text-4xl text-[#3776AB]"></i>
                        <div class="absolute -top-1 -right-1 w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-check text-white text-xs"></i>
                        </div>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Selenium<br/>Python</h3>
                </a>

                <!-- Django -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#092E20">
                            <path d="M11.146 0h3.924v18.166c-2.013.382-3.491.535-5.096.535-4.791 0-7.288-2.166-7.288-6.32 0-4.001 2.65-6.6 6.753-6.6.637 0 1.121.05 1.707.203zm0 9.143a3.894 3.894 0 00-1.325-.204c-1.988 0-3.134 1.223-3.134 3.365 0 2.09 1.096 3.236 3.109 3.236.433 0 .79-.025 1.35-.102V9.142zM21.314 6.06v9.097c0 3.134-.229 4.638-.917 5.937-.637 1.249-1.478 2.039-3.211 2.905l-3.644-1.733c1.733-.815 2.574-1.529 3.109-2.625.561-1.121.739-2.421.739-5.835V6.059h3.924zM17.39.021h3.924v4.026H17.39z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Django</h3>
                </a>

                <!-- Flask -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 2c5.5 0 10 4.5 10 10s-4.5 10-10 10S2 17.5 2 12 6.5 2 12 2z" class="text-gray-800"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Flask</h3>
                </a>

                <!-- NumPy -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#013243">
                            <path d="M10.315 4.876L6.3 2.254v5.268zm-2.332 7.338L12 14.89l4.017-2.676-4.017-2.594zm7.033 9.53L19.7 19.067v-5.268zm-6.83-9.642L4.17 9.645l4.015-2.593zm7.033.115l4.016-2.558-4.016-2.594zM3.42 18.334l4.015-2.558V8.363L3.42 5.718zm15.296.14l4.015 2.558V8.22l-4.015 2.645zm-6.831-9.53l4.016-2.594-4.016-2.558-4.015 2.558zm.115 1.274L3.42 5.715l4.015-2.558L12 5.715zm-.115 9.526L7.87 17.09l4.015 2.557 4.016-2.557z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">NumPy</h3>
                </a>

                <!-- Tkinter -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fas fa-window-maximize text-4xl text-blue-500"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Tkinter</h3>
                </a>

                <!-- PyTorch -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#EE4C2C">
                            <path d="M12.005 0L3.952 8.053c-5.27 5.27-5.27 13.82 0 19.091 5.27 5.27 13.819 5.27 19.09 0 5.27-5.27 5.27-13.82 0-19.09l-6.024-6.025v4.994l3.013 3.013c3.16 3.16 3.16 8.287 0 11.447-3.16 3.16-8.286 3.16-11.446 0-3.16-3.16-3.16-8.287 0-11.447L12.005 6z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Pytorch</h3>
                </a>

                <!-- Pygame -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fas fa-gamepad text-4xl text-purple-600"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Pygame</h3>
                </a>

                <!-- Scipy -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#8CAAE6">
                            <circle cx="12" cy="12" r="10"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Scipy</h3>
                </a>

                <!-- Pandas -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24">
                            <path fill="#130754" d="M16.922 0h2.623v18.104h-2.623zm-5.653 3.478h2.622v18.104h-2.622zm-5.652 3.565h2.623v18.104H5.617z"/>
                            <path fill="#FFD43B" d="M24 7.043V24H0V7.043z" opacity="0.3"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Pandas</h3>
                </a>

                <!-- OpenCV -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#5C3EE8">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">OpenCV</h3>
                </a>

                <!-- Matplotlib -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24">
                            <path fill="#11557c" d="M0 0v24h24V0z"/>
                            <path fill="#3776ab" d="M2 2v20h20V2z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Matplotlib</h3>
                </a>

                <!-- Openpyxl -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fas fa-file-excel text-4xl text-green-600"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Openpyxl</h3>
                </a>

                <!-- Kivy -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#2C2C2C">
                            <circle cx="12" cy="12" r="10"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Kivy</h3>
                </a>

                <!-- Jupyter -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24">
                            <circle cx="5" cy="5" r="4" fill="#F37726"/>
                            <circle cx="19" cy="5" r="4" fill="#989898"/>
                            <circle cx="12" cy="19" r="4" fill="#989898"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Jupyter</h3>
                </a>

                <!-- Python CGI Programming -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-12 h-12" viewBox="0 0 24 24" fill="#CC0000">
                            <path d="M2 2h20v20H2z"/>
                            <text x="12" y="16" text-anchor="middle" fill="white" font-size="10" font-weight="bold">CGI</text>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Python CGI<br/>Programming</h3>
                </a>
            </div>

            <!-- Java Section -->
            <div class="mb-8 mt-16">
                <h2 class="text-2xl md:text-3xl font-bold text-text-dark mb-2">Java</h2>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-4 mb-12">
                <!-- Core Java -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-java text-5xl text-[#007396]"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Core Java</h3>
                </a>

                <!-- Spring Boot -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#6DB33F">
                            <path d="M20.205 16.392c-2.469 3.289-7.741 2.179-11.122 2.338 0 0-.599.034-1.201.133 0 0 .228-.097.519-.198 2.374-.821 3.496-.986 4.939-1.727 2.71-1.388 5.408-4.413 5.957-7.555-1.032 3.022-4.17 5.623-7.027 6.679-1.955.722-5.492 1.424-5.493 1.424a5.28 5.28 0 01-.143-.076c-2.405-1.17-2.475-6.38 1.894-8.059 1.916-.736 3.747-.332 5.818-.732 2.098-.404 4.394-1.264 5.857-2.738-1.146 4.162-5.318 5.635-9.374 6.215-2.007.287-4.005.19-5.964.651-1.959.462-3.64 1.469-4.289 3.533-.649 2.064.332 4.331 2.179 5.309 1.847.978 4.331.8 6.394.133 2.063-.667 4.129-1.869 5.949-3.267z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Spring Boot</h3>
                </a>

                <!-- Hibernate -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#59666C">
                            <path d="M5.5 1.5L1.5 5.5v13l4 4h13l4-4v-13l-4-4h-13z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Hibernate</h3>
                </a>

                <!-- JSP -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-java text-4xl text-orange-600"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">JSP</h3>
                </a>

                <!-- Servlet -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fas fa-server text-4xl text-blue-700"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Servlet</h3>
                </a>

                <!-- JDBC -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fas fa-database text-4xl text-teal-600"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">JDBC</h3>
                </a>

                <!-- JUnit -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#25A162">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 2a10 10 0 110 20 10 10 0 010-20z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">JUnit</h3>
                </a>
            </div>

            <!-- JavaScript Section -->
            <div class="mb-8 mt-16">
                <h2 class="text-2xl md:text-3xl font-bold text-text-dark mb-2">JavaScript</h2>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-4 mb-12">
                <!-- JavaScript -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-js-square text-5xl text-[#F7DF1E]"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">JavaScript</h3>
                </a>

                <!-- React -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-react text-5xl text-[#61DAFB]"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">React</h3>
                </a>

                <!-- Vue.js -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-vuejs text-5xl text-[#42B883]"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Vue.js</h3>
                </a>

                <!-- Angular -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-angular text-5xl text-[#DD0031]"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Angular</h3>
                </a>

                <!-- Node.js -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-node-js text-5xl text-[#339933]"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Node.js</h3>
                </a>

                <!-- Express.js -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#000000">
                            <path d="M24 18.588a1.529 1.529 0 01-1.895-.72l-3.45-4.771-.5-.667-4.003 5.444a1.466 1.466 0 01-1.802.708l5.158-6.92-4.798-6.251a1.595 1.595 0 011.9.666l3.576 4.83 3.596-4.81a1.435 1.435 0 011.788-.668L21.708 7.9l-2.522 3.283a.666.666 0 000 .994l4.804 6.412zM.002 11.576l.42-2.075c1.154-4.103 5.858-5.81 9.094-3.27 1.895 1.489 2.368 3.597 2.275 5.973H1.116C.943 16.447 4.005 19.009 7.92 17.7a4.078 4.078 0 002.582-2.876c.207-.666.548-.78 1.174-.588a5.417 5.417 0 01-2.589 3.957 6.272 6.272 0 01-7.306-.933 6.575 6.575 0 01-1.64-3.858c0-.235-.08-.455-.134-.666A88.33 88.33 0 010 11.577zm1.127-.286h9.654c-.06-3.076-2.001-5.258-4.59-5.278-2.882-.04-4.944 2.094-5.071 5.264z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Express.js</h3>
                </a>

                <!-- TypeScript -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#3178C6">
                            <path d="M0 12v12h24V0H0zm19.341-.956c.61.152 1.074.423 1.501.865.221.236.549.666.575.77.008.03-1.036.73-1.668 1.123-.023.015-.115-.084-.217-.236-.31-.45-.633-.644-1.128-.678-.728-.05-1.196.331-1.192.967a.88.88 0 00.102.45c.16.331.457.53 1.39.933 1.719.74 2.454 1.227 2.911 1.92.51.773.625 2.008.278 2.926-.38.998-1.325 1.676-2.655 1.9-.411.073-1.386.062-1.828-.018-.964-.172-1.878-.648-2.442-1.273-.221-.244-.651-.88-.625-.924.011-.016.11-.077.22-.141.108-.061.511-.294.892-.515l.69-.4.145.214c.202.308.643.731.91.872.766.404 1.817.347 2.335-.118a.883.883 0 00.313-.72c0-.278-.035-.4-.18-.61-.186-.266-.567-.49-1.649-.96-1.238-.533-1.771-.864-2.259-1.39a3.165 3.165 0 01-.659-1.2c-.091-.339-.114-1.189-.042-1.531.255-1.197 1.158-2.03 2.461-2.278.423-.08 1.406-.05 1.821.053zm-5.634 1.002l.008.983H10.59v8.876H8.38v-8.876H5.258v-.964c0-.534.011-.98.026-.992.01-.016 1.913-.024 4.217-.02l4.195.012z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">TypeScript</h3>
                </a>
            </div>

            <!-- Other Languages Section -->
            <div class="mb-8 mt-16">
                <h2 class="text-2xl md:text-3xl font-bold text-text-dark mb-2">Other Languages</h2>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-4">
                <!-- C -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#A8B9CC">
                            <path d="M16.5922 9.1807C15.5018 7.6842 13.7523 6.7617 11.8177 6.7617c-3.7203 0-6.7344 3.0141-6.7344 6.7344s3.0141 6.7344 6.7344 6.7344c1.9346 0 3.6841-.9225 4.7745-2.419l-3.1646-1.8274c-.5143.7485-1.3738 1.2426-2.3644 1.2426-1.5663 0-2.8361-1.2698-2.8361-2.8361s1.2698-2.8361 2.8361-2.8361c.9906 0 1.8501.494 2.3644 1.2426z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">C</h3>
                </a>

                <!-- C++ -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#00599C">
                            <path d="M22.394 6c0-.167-.029-.33-.067-.487a.999.999 0 00-.024-.095.997.997 0 00-.047-.123.998.998 0 00-.082-.126.997.997 0 00-.104-.109.999.999 0 00-.112-.098.999.999 0 00-.126-.082.998.998 0 00-.124-.047.999.999 0 00-.095-.024A1.002 1.002 0 0021.126 5h-2.814l-2.506-4.343a1.001 1.001 0 00-.866-.5h-5.68a1 1 0 00-.866.5L5.888 5H3.074a1.001 1.001 0 00-.487.067.999.999 0 00-.095.024.997.997 0 00-.123.047.998.998 0 00-.126.082.999.999 0 00-.109.104.999.999 0 00-.098.112.999.999 0 00-.082.126.998.998 0 00-.047.124.999.999 0 00-.024.095A1.002 1.002 0 001.874 6v12c0 .167.029.33.067.487.008.032.015.063.024.095a.998.998 0 00.047.123c.023.043.05.085.082.126.03.04.065.076.104.109.037.037.075.068.112.098.04.032.083.059.126.082.041.024.082.04.124.047.031.009.063.016.095.024.157.038.32.067.487.067h2.814l2.506 4.343a1.001 1.001 0 00.866.5h5.68a1 1 0 00.866-.5l2.506-4.343h2.814c.167 0 .33-.029.487-.067.032-.008.063-.015.095-.024a.998.998 0 00.124-.047c.043-.023.085-.05.126-.082.037-.03.076-.065.109-.104.037-.037.068-.075.098-.112.032-.04.059-.083.082-.126.024-.041.04-.082.047-.123.009-.031.016-.063.024-.095A1.002 1.002 0 0022.394 18V6z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">C++</h3>
                </a>

                <!-- C# -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#239120">
                            <path d="M12 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0zM9.426 7.12a5.55 5.55 0 011.985.38v1.181a4.5 4.5 0 00-2.025-.566 2.9 2.9 0 00-2.091.806 2.74 2.74 0 00-.82 2.065c0 .838.28 1.517.84 2.04a2.88 2.88 0 002.085.795c.683 0 1.39-.195 2.025-.585v1.181a5.5 5.5 0 01-2.02.38c-1.19 0-2.145-.365-2.867-1.096-.722-.73-1.084-1.683-1.084-2.858 0-1.21.374-2.178 1.12-2.903.747-.725 1.702-1.087 2.867-1.087zm6.12.574h.975v2.97h3.03v.93h-3.03v2.97h-.975v-2.97h-3.03v-.93h3.03v-2.97z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">C#</h3>
                </a>

                <!-- PHP -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-php text-5xl text-[#777BB4]"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">PHP</h3>
                </a>

                <!-- Ruby -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#CC342D">
                            <path d="M20.156.083c3.033.525 3.893 2.598 3.829 4.77L24 23.911l-11.959-.366s.003-.957.002-1.591c0-.634.003-1.592.003-1.592l5.093-.12-.156-8.55-5.003.155c.001-1.104.001-2.248 0-3.376l5.003-.155-.159-3.013-5.079.155c-.003-1.005-.001-1.893.003-2.632.001-.739.002-1.265.002-1.265l8.063-.156s-.003.857-.004 1.606c-.001.749-.003 1.567-.003 1.567l-3.98.155.159 3.013 3.98-.155s-.001.896-.003 1.642c-.002.746-.003 1.518-.003 1.518l-3.98.155.159 8.55 3.981-.155-.037 1.794L15.992 24l-6.054-.256L0 23.573V7.256c1.817-.126 3.199-.248 4.403-.366l.074 9.147 2.474.066.064-9.158c.78-.053 1.47-.104 2.011-.149V13.5l2.464.062V6.73c.516-.041.968-.079 1.323-.115l.003-.005.006-.004-.007-.011c.018.004.028.007.028.007l-.001-.004.001-.003v-.001c-.008.002-.013.002-.013.002V4.573c-1.583.111-3.926.247-6.644.369l-.029-.495c-.037-.619-.061-1.248-.084-1.878-.025-.63-.05-1.26-.084-1.878-.033-.619-.07-1.234-.106-1.849-.036-.615-.074-1.224-.111-1.831 3.163.158 6.325.316 9.488.474l.006.005.005.003.002.003-.006.011.021-.003h.005l.006.001c-.011.001-.013.001-.013.001z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Ruby</h3>
                </a>

                <!-- Go -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <svg class="w-14 h-14" viewBox="0 0 24 24" fill="#00ADD8">
                            <path d="M1.811 10.231c-.047 0-.058-.023-.035-.059l.246-.315c.023-.035.081-.058.128-.058h4.172c.046 0 .058.035.035.07l-.199.303c-.023.036-.082.07-.117.07zM.047 11.306c-.047 0-.059-.023-.035-.058l.245-.316c.023-.035.082-.058.129-.058h5.328c.047 0 .07.035.058.07l-.093.28c-.012.047-.058.07-.105.07zm2.828 1.075c-.047 0-.059-.035-.035-.07l.163-.292c.023-.035.07-.07.117-.07h2.337c.047 0 .07.035.07.082l-.023.28c0 .047-.047.082-.082.082zm12.129-2.36c-.736.187-1.239.327-1.963.514-.176.046-.187.058-.34-.117-.174-.199-.303-.327-.548-.444-.737-.362-1.45-.257-2.115.175-.795.514-1.204 1.274-1.192 2.22.011.935.654 1.706 1.577 1.835.795.105 1.46-.175 1.987-.768.105-.105.198-.211.315-.34H10.47c-.245 0-.304-.152-.222-.35.152-.362.432-.97.596-1.274a.315.315 0 01.292-.187h4.253c-.023.316-.023.631-.07.947a4.983 4.983 0 01-.958 2.29c-1.044 1.45-2.406 2.172-4.172 2.172-1.192 0-2.266-.362-3.064-1.239-.795-.876-1.133-1.964-.983-3.168.163-1.345.78-2.42 1.835-3.214.97-.736 2.1-1.075 3.39-.923 1.239.14 2.266.667 3.064 1.706.07.093.117.21.175.315zm-7.63 2.243c-.047.094-.058.187-.113.28-.396.748-.795 1.496-1.204 2.232-.094.164-.152.211-.34.117-.396-.187-.796-.373-1.192-.573-.188-.094-.223-.176-.152-.351.071-.163.14-.327.222-.514.023-.047.023-.117.07-.164.023-.047.058-.082.035-.152-.023-.07-.093-.07-.152-.094a2.945 2.945 0 01-2.115-2.335c-.117-.514-.093-1.028.07-1.542.28-.862.888-1.461 1.706-1.823a3.428 3.428 0 012.103-.21c.678.117 1.239.444 1.752.912.677.608 1.075 1.368 1.192 2.232.117.864 0 1.682-.444 2.407zm8.293-.445c0 .373 0 .746.023 1.12.011.187.023.374.046.561.012.187.058.21.21.152.396-.129.793-.245 1.192-.373.093-.023.21-.047.21-.175.011-1.426.011-2.852.011-4.29 0-.21-.023-.257-.245-.257H14.5c-.093 0-.21 0-.245.093-.023.093 0 .21.023.327.082.245.152.49.245.723a.135.135 0 00.152.117c.374 0 .747.011 1.12.011.047 0 .093 0 .152.011-.094.094-.152.175-.222.257a4.933 4.933 0 00-1.275 2.407 4.469 4.469 0 00.444 2.782c.865 1.68 2.232 2.56 4.055 2.63 1.379.047 2.56-.444 3.54-1.472.023-.023.047-.046.082-.07.023-.023.047-.07.105-.035.059.023.047.082.047.117v.82c0 .094.023.152.128.175.362.093.724.175 1.075.245.152.035.199 0 .199-.163V5.474c0-.187-.023-.21-.222-.21h-1.24c-.199 0-.222.023-.222.233v3.645c0 .093-.011.187 0 .28-.012.047-.047.047-.082.023-.094-.117-.152-.257-.245-.374a4.469 4.469 0 00-2.103-1.518c-.573-.175-1.169-.245-1.776-.175-1.45.163-2.595.912-3.401 2.115-.35.514-.514 1.098-.619 1.717-.023.152-.047.303-.058.455z"/>
                        </svg>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Go</h3>
                </a>

                <!-- Swift -->
                <a href="#" class="group block bg-white rounded-xl p-6 text-center transition-all duration-300 hover:shadow-lg hover:-translate-y-1 no-underline border border-gray-100">
                    <div class="w-16 h-16 mx-auto mb-3 flex items-center justify-center">
                        <i class="fab fa-swift text-5xl text-[#FA7343]"></i>
                    </div>
                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-gray-900">Swift</h3>
                </a>
            </div>
        </section>

        <!-- YouTube Channel Section -->
        <section class="mb-16">
            <div class="grid lg:grid-cols-2 gap-12 items-center bg-gradient-to-br from-gray-50 to-white rounded-3xl p-12">
                <!-- Left - Image -->
                <div class="relative">
                    <div class="relative inline-block">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop" alt="YouTube" class="rounded-2xl shadow-xl">
                        <div class="absolute top-8 -right-12 bg-yellow-400 rounded-2xl p-4 shadow-xl">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-white rounded-full mx-auto mb-2 flex items-center justify-center">
                                    <i class="fab fa-youtube text-red-600 text-2xl"></i>
                                </div>
                                <div class="text-2xl font-bold text-gray-900">100K+</div>
                                <div class="text-xs text-gray-700 font-medium">SUBSCRIBERS</div>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative Circle -->
                    <div class="absolute -bottom-8 -left-8 w-32 h-32 border-8 border-teal-500 rounded-full -z-10"></div>
                </div>

                <!-- Right - Content -->
                <div>
                    <div class="text-sm text-teal-600 font-semibold mb-2">Youtube Channel</div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                        Explore Latest Tutorials by Subscribing to Our YouTube Channel
                    </h2>
                    <a href="#" class="inline-flex items-center gap-2 bg-gray-900 text-white px-8 py-4 rounded-lg font-semibold hover:bg-gray-800 transition-all">
                        <i class="fas fa-arrow-right"></i>
                        Join Now
                    </a>
                </div>
            </div>
        </section>

        <!-- Latest Update Section -->
        <section class="mb-16">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Latest Update</h2>
                <div class="w-24 h-1 bg-teal-600"></div>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Column 1 -->
                <ul class="space-y-3">
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Exception Handling</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Try Catch</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Multiple Catch</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Nested Try</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Finally Block</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Throw</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Exception Propagation</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Throws</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Throw vs Throws</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Final vs Finally vs Finalize</a></li>
                </ul>

                <!-- Column 2 -->
                <ul class="space-y-3">
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Exception Handling with Overriding</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Custom Exception</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Inner Classes</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Member Inner Class</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Anonymous Inner Class</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Local Inner Class</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Static Nested Class</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Nested Interface</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Multithreading</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Thread Life Cycle</a></li>
                </ul>

                <!-- Column 3 -->
                <ul class="space-y-3">
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Create Thread</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Thread Scheduler</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Thread Sleep</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Start Thread Twice</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java run vs start</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Thread Join</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Thread Naming</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Thread Priority</a></li>
                    <li><a href="#" class="text-teal-700 hover:text-teal-900 hover:underline">Java Daemon Thread</a></li>
                </ul>
            </div>
        </section>
    </div>

    <!-- Scroll to Top Button -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fixed bottom-8 right-8 w-14 h-14 bg-teal-500 text-white rounded-full shadow-lg hover:bg-teal-600 transition-all flex items-center justify-center z-50">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Footer -->
    @include('frontend.footer.index')

    <!-- Scripts -->
    <script>
        // Animate elements on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        });
        
        document.querySelectorAll('.block').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>