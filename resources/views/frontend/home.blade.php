@extends('frontend.layouts.app')

@section('title', 'Rpoint Tech - Learn Programming from Top Instructors')
@section('meta_description', 'Get access to 500+ programming tutorials from top instructors. Learn Python, Java, JavaScript, Web Development, AI, Machine Learning and more.')

@section('breadcrumb')
    <li class="text-text-dark text-sm font-medium">Home</li>
@endsection

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-primary to-secondary rounded-3xl p-10 md:p-16 lg:p-20 mb-16 overflow-hidden animate-fade-in">
    <!-- Background Decorations -->
    <div class="absolute -top-1/2 -right-1/5 w-[600px] h-[600px] bg-white/10 rounded-full"></div>
    <div class="absolute -bottom-1/3 -left-1/10 w-[400px] h-[400px] bg-white/5 rounded-full"></div>
    
    <div class="relative z-10 max-w-4xl">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-5 leading-tight">
            Welcome to Rpoint Tech
        </h1>
        <p class="text-base md:text-lg text-white/90 mb-8 leading-relaxed">
            Get access to 500+ tutorials from top instructors around the world in one place. 
            Master programming, web development, data science, and more with our comprehensive guides.
        </p>
        
        <!-- Hero Search -->
        <form action="" method="GET" class="relative max-w-2xl">
            <input 
                type="text" 
                name="q" 
                class="w-full py-4 md:py-5 pr-36 md:pr-44 pl-6 border-0 rounded-full text-base shadow-[0_10px_30px_rgba(0,0,0,0.2)] focus:outline-none focus:ring-2 focus:ring-white/50" 
                placeholder="Search tutorials, languages, topics..."
                autocomplete="off"
            >
            <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 py-3 px-6 md:px-9 bg-gradient-to-r from-accent to-[#FF9800] text-dark-bg rounded-full font-semibold transition-all duration-300 hover:scale-105 hover:shadow-[0_5px_20px_rgba(255,193,7,0.4)]">
                <i class="fas fa-search"></i> <span class="hidden sm:inline">Search</span>
            </button>
        </form>
        
        <!-- Hero Stats -->
        <div class="flex flex-wrap gap-6 md:gap-10 mt-10">
            <div class="text-center">
                <span class="block text-3xl md:text-4xl font-bold text-accent">500+</span>
                <span class="text-white/80 text-sm mt-1 block">Tutorials</span>
            </div>
            <div class="text-center">
                <span class="block text-3xl md:text-4xl font-bold text-accent">50K+</span>
                <span class="text-white/80 text-sm mt-1 block">Students</span>
            </div>
            <div class="text-center">
                <span class="block text-3xl md:text-4xl font-bold text-accent">25+</span>
                <span class="text-white/80 text-sm mt-1 block">Topics</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Image -->
    <div class="hidden lg:block absolute right-10 top-1/2 -translate-y-1/2 max-w-md z-20">
        <img data-src="{{ asset('images/hero-illustration.png') }}" alt="Learning Illustration" class="w-full rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.3)]" loading="lazy">
    </div>
</section>

<!-- Popular Categories Section -->
<section class="mb-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-text-dark mb-4">Explore Popular Categories</h2>
        <p class="text-base text-text-light max-w-2xl mx-auto">
            Choose from a wide range of programming languages and technologies
        </p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
        <a href="" class="block bg-white rounded-2xl p-8 text-center transition-all duration-300 border-2 border-transparent hover:-translate-y-2 hover:shadow-2xl hover:border-primary no-underline">
            <div class="w-20 h-20 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center mx-auto mb-5 text-4xl text-white transition-all duration-300 hover:scale-110 hover:rotate-6">
                <i class="fab fa-python"></i>
            </div>
            <h3 class="text-xl font-semibold text-text-dark mb-2">Python</h3>
            <p class="text-text-light text-sm">150+ Tutorials</p>
        </a>
        
        <a href="" class="block bg-white rounded-2xl p-8 text-center transition-all duration-300 border-2 border-transparent hover:-translate-y-2 hover:shadow-2xl hover:border-primary no-underline">
            <div class="w-20 h-20 bg-gradient-to-br from-[#f89820] to-[#e16428] rounded-2xl flex items-center justify-center mx-auto mb-5 text-4xl text-white transition-all duration-300 hover:scale-110 hover:rotate-6">
                <i class="fab fa-java"></i>
            </div>
            <h3 class="text-xl font-semibold text-text-dark mb-2">Java</h3>
            <p class="text-text-light text-sm">120+ Tutorials</p>
        </a>
        
        <a href="" class="block bg-white rounded-2xl p-8 text-center transition-all duration-300 border-2 border-transparent hover:-translate-y-2 hover:shadow-2xl hover:border-primary no-underline">
            <div class="w-20 h-20 bg-gradient-to-br from-[#f7df1e] to-[#e4c000] rounded-2xl flex items-center justify-center mx-auto mb-5 text-4xl text-white transition-all duration-300 hover:scale-110 hover:rotate-6">
                <i class="fab fa-js"></i>
            </div>
            <h3 class="text-xl font-semibold text-text-dark mb-2">JavaScript</h3>
            <p class="text-text-light text-sm">180+ Tutorials</p>
        </a>
        
        <a href="" class="block bg-white rounded-2xl p-8 text-center transition-all duration-300 border-2 border-transparent hover:-translate-y-2 hover:shadow-2xl hover:border-primary no-underline">
            <div class="w-20 h-20 bg-gradient-to-br from-[#61dafb] to-[#21a1c4] rounded-2xl flex items-center justify-center mx-auto mb-5 text-4xl text-white transition-all duration-300 hover:scale-110 hover:rotate-6">
                <i class="fab fa-react"></i>
            </div>
            <h3 class="text-xl font-semibold text-text-dark mb-2">React</h3>
            <p class="text-text-light text-sm">90+ Tutorials</p>
        </a>
        
        <a href="" class="block bg-white rounded-2xl p-8 text-center transition-all duration-300 border-2 border-transparent hover:-translate-y-2 hover:shadow-2xl hover:border-primary no-underline">
            <div class="w-20 h-20 bg-gradient-to-br from-[#68a063] to-[#44883e] rounded-2xl flex items-center justify-center mx-auto mb-5 text-4xl text-white transition-all duration-300 hover:scale-110 hover:rotate-6">
                <i class="fab fa-node-js"></i>
            </div>
            <h3 class="text-xl font-semibold text-text-dark mb-2">Node.js</h3>
            <p class="text-text-light text-sm">75+ Tutorials</p>
        </a>
        
        <a href="" class="block bg-white rounded-2xl p-8 text-center transition-all duration-300 border-2 border-transparent hover:-translate-y-2 hover:shadow-2xl hover:border-primary no-underline">
            <div class="w-20 h-20 bg-gradient-to-br from-[#8e44ad] to-[#6c3483] rounded-2xl flex items-center justify-center mx-auto mb-5 text-4xl text-white transition-all duration-300 hover:scale-110 hover:rotate-6">
                <i class="fas fa-robot"></i>
            </div>
            <h3 class="text-xl font-semibold text-text-dark mb-2">AI & ML</h3>
            <p class="text-text-light text-sm">100+ Tutorials</p>
        </a>
    </div>
</section>

<!-- Latest Tutorials Section -->
<section class="mb-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-text-dark mb-4">Latest Tutorials</h2>
        <p class="text-base text-text-light max-w-2xl mx-auto">
            Recently added tutorials to help you learn and grow
        </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        @forelse($latestTutorials ?? [] as $tutorial)
            <a href="" class="block bg-white rounded-2xl overflow-hidden shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl no-underline">
                <img 
                    data-src="{{ $tutorial->image ?? asset('images/default-tutorial.jpg') }}" 
                    alt="{{ $tutorial->title }}" 
                    class="w-full h-52 object-cover bg-gradient-to-br from-primary to-secondary"
                    loading="lazy"
                >
                <div class="p-6">
                    <span class="inline-block py-1 px-4 bg-gradient-to-r from-accent to-[#FF9800] text-dark-bg text-xs font-semibold rounded-full mb-4">{{ $tutorial->category }}</span>
                    <h3 class="text-lg font-semibold text-text-dark mb-2 leading-snug">{{ $tutorial->title }}</h3>
                    <p class="text-text-light text-sm leading-relaxed mb-4">
                        {{ Str::limit($tutorial->description, 100) }}
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-light-bg">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white text-xs font-semibold">
                                {{ strtoupper(substr($tutorial->author, 0, 1)) }}
                            </div>
                            <span class="text-[13px] text-text-dark font-medium">{{ $tutorial->author }}</span>
                        </div>
                        <div class="flex gap-4 text-[13px] text-text-light">
                            <span>
                                <i class="fas fa-eye mr-1"></i>
                                {{ $tutorial->views }}
                            </span>
                            <span>
                                <i class="fas fa-clock mr-1"></i>
                                {{ $tutorial->reading_time }} min
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <!-- Placeholder Cards -->
            @for($i = 1; $i <= 6; $i++)
                <a href="#" class="block bg-white rounded-2xl overflow-hidden shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl no-underline">
                    <div class="w-full h-52 bg-gradient-to-br from-primary to-secondary"></div>
                    <div class="p-6">
                        <span class="inline-block py-1 px-4 bg-gradient-to-r from-accent to-[#FF9800] text-dark-bg text-xs font-semibold rounded-full mb-4">Python</span>
                        <h3 class="text-lg font-semibold text-text-dark mb-2 leading-snug">Python Tutorial {{ $i }}</h3>
                        <p class="text-text-light text-sm leading-relaxed mb-4">
                            Learn Python programming from basics to advanced concepts with practical examples.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-light-bg">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white text-xs font-semibold">T</div>
                                <span class="text-[13px] text-text-dark font-medium">Tpoint Instructor</span>
                            </div>
                            <div class="flex gap-4 text-[13px] text-text-light">
                                <span><i class="fas fa-eye mr-1"></i> {{ rand(100, 1000) }}</span>
                                <span><i class="fas fa-clock mr-1"></i> {{ rand(5, 15) }} min</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endfor
        @endforelse
    </div>
    
    <div class="text-center">
        <a href="" class="inline-block py-4 px-10 bg-gradient-to-r from-accent to-[#FF9800] text-dark-bg rounded-full text-base font-semibold transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(255,193,7,0.4)] no-underline">
            View All Tutorials <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
</section>

<!-- Features Section -->
<section class="bg-light-bg rounded-3xl p-10 md:p-16 mb-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-text-dark mb-4">Why Choose Tpoint Tech?</h2>
        <p class="text-base text-text-light max-w-2xl mx-auto">
            Everything you need to master programming and technology
        </p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mt-10">
        <div class="text-center">
            <div class="w-[70px] h-[70px] bg-white rounded-full flex items-center justify-center mx-auto mb-5 text-3xl text-primary shadow-sm">
                <i class="fas fa-book-open"></i>
            </div>
            <h3 class="text-lg font-semibold text-text-dark mb-2">Comprehensive Content</h3>
            <p class="text-text-light text-sm leading-relaxed">
                500+ in-depth tutorials covering all major programming languages and frameworks
            </p>
        </div>
        
        <div class="text-center">
            <div class="w-[70px] h-[70px] bg-white rounded-full flex items-center justify-center mx-auto mb-5 text-3xl text-primary shadow-sm">
                <i class="fas fa-user-graduate"></i>
            </div>
            <h3 class="text-lg font-semibold text-text-dark mb-2">Expert Instructors</h3>
            <p class="text-text-light text-sm leading-relaxed">
                Learn from industry professionals with years of real-world experience
            </p>
        </div>
        
        <div class="text-center">
            <div class="w-[70px] h-[70px] bg-white rounded-full flex items-center justify-center mx-auto mb-5 text-3xl text-primary shadow-sm">
                <i class="fas fa-code"></i>
            </div>
            <h3 class="text-lg font-semibold text-text-dark mb-2">Hands-on Practice</h3>
            <p class="text-text-light text-sm leading-relaxed">
                Interactive code examples and exercises to reinforce your learning
            </p>
        </div>
        
        <div class="text-center">
            <div class="w-[70px] h-[70px] bg-white rounded-full flex items-center justify-center mx-auto mb-5 text-3xl text-primary shadow-sm">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <h3 class="text-lg font-semibold text-text-dark mb-2">Learn Anywhere</h3>
            <p class="text-text-light text-sm leading-relaxed">
                Access tutorials on any device - desktop, tablet, or mobile
            </p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-gradient-to-br from-[#1a1a2e] to-[#16213e] rounded-3xl p-10 md:p-16 text-center text-white">
    <h2 class="text-3xl md:text-4xl font-bold mb-5">Ready to Start Learning?</h2>
    <p class="text-base text-white/80 mb-8 max-w-2xl mx-auto">
        Join thousands of students already learning with Tpoint Tech. 
        Get started today and take your programming skills to the next level.
    </p>
    @guest
        <a href="" class="inline-block py-4 px-10 bg-gradient-to-r from-accent to-[#FF9800] text-dark-bg rounded-full text-base font-semibold transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(255,193,7,0.4)] no-underline">
            <i class="fas fa-user-plus mr-1"></i> Sign Up Now
        </a>
    @else
        <a href="" class="inline-block py-4 px-10 bg-gradient-to-r from-accent to-[#FF9800] text-dark-bg rounded-full text-base font-semibold transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(255,193,7,0.4)] no-underline">
            <i class="fas fa-book mr-1"></i> Browse Tutorials
        </a>
    @endguest
</section>

@endsection

@push('scripts')
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
@endpush