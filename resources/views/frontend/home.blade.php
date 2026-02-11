@extends('frontend.layouts.app')

@section('title', 'Rpoint Tech - Learn Programming from Top Instructors')
@section('meta_description', 'Get access to 500+ programming tutorials from top instructors. Learn Python, Java, JavaScript, Web Development, AI, Machine Learning and more.')

@section('breadcrumb')
    <li class="breadcrumb-item active">Home</li>
@endsection

@section('content')
<style>
    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, #00897B 0%, #4CAF50 100%);
        border-radius: 20px;
        padding: 80px 40px;
        margin-bottom: 60px;
        position: relative;
        overflow: hidden;
    }
    
    .hero-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
    }
    
    .hero-section::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -10%;
        width: 400px;
        height: 400px;
        background: rgba(255,255,255,0.05);
        border-radius: 50%;
    }
    
    .hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
    }
    
    .hero-title {
        font-size: 48px;
        font-weight: 700;
        color: white;
        margin-bottom: 20px;
        line-height: 1.2;
    }
    
    .hero-description {
        font-size: 18px;
        color: rgba(255,255,255,0.9);
        margin-bottom: 30px;
        line-height: 1.6;
    }
    
    .hero-search {
        max-width: 600px;
        position: relative;
    }
    
    .hero-search-input {
        width: 100%;
        padding: 18px 180px 18px 25px;
        border: none;
        border-radius: 50px;
        font-size: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    
    .hero-search-btn {
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        padding: 12px 35px;
        background: linear-gradient(135deg, #FFC107 0%, #FF9800 100%);
        color: var(--dark-bg);
        border: none;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
    }
    
    .hero-search-btn:hover {
        transform: translateY(-50%) scale(1.05);
        box-shadow: 0 5px 20px rgba(255,193,7,0.4);
    }
    
    .hero-stats {
        display: flex;
        gap: 40px;
        margin-top: 40px;
    }
    
    .hero-stat {
        text-align: center;
    }
    
    .hero-stat-number {
        font-size: 36px;
        font-weight: 700;
        color: #FFC107;
        display: block;
    }
    
    .hero-stat-label {
        color: rgba(255,255,255,0.8);
        font-size: 14px;
        margin-top: 5px;
    }
    
    .hero-image {
        position: absolute;
        right: 40px;
        top: 50%;
        transform: translateY(-50%);
        max-width: 400px;
        z-index: 2;
    }
    
    .hero-image img {
        width: 100%;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(0,0,0,0.3);
    }
    
    /* Section Title */
    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .section-title {
        font-size: 36px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 15px;
    }
    
    .section-subtitle {
        font-size: 16px;
        color: var(--text-light);
        max-width: 600px;
        margin: 0 auto;
    }
    
    /* Category Cards */
    .categories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin-bottom: 60px;
    }
    
    .category-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        transition: var(--transition);
        border: 2px solid transparent;
        cursor: pointer;
        text-decoration: none;
        display: block;
    }
    
    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
        border-color: var(--primary-color);
    }
    
    .category-icon {
        width: 80px;
        height: 80px;
        background: var(--gradient-primary);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 36px;
        color: white;
        transition: var(--transition);
    }
    
    .category-card:hover .category-icon {
        transform: scale(1.1) rotate(5deg);
    }
    
    .category-name {
        font-size: 20px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 10px;
    }
    
    .category-count {
        color: var(--text-light);
        font-size: 14px;
    }
    
    /* Tutorial Cards */
    .tutorials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 30px;
        margin-bottom: 60px;
    }
    
    .tutorial-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        text-decoration: none;
        display: block;
    }
    
    .tutorial-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-lg);
    }
    
    .tutorial-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        background: var(--gradient-primary);
    }
    
    .tutorial-content {
        padding: 25px;
    }
    
    .tutorial-category {
        display: inline-block;
        padding: 5px 15px;
        background: var(--gradient-accent);
        color: var(--dark-bg);
        font-size: 12px;
        font-weight: 600;
        border-radius: 20px;
        margin-bottom: 15px;
    }
    
    .tutorial-title {
        font-size: 18px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 10px;
        line-height: 1.4;
    }
    
    .tutorial-description {
        color: var(--text-light);
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    
    .tutorial-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 15px;
        border-top: 1px solid var(--light-bg);
    }
    
    .tutorial-author {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .author-avatar {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: var(--gradient-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 12px;
        font-weight: 600;
    }
    
    .author-name {
        font-size: 13px;
        color: var(--text-dark);
        font-weight: 500;
    }
    
    .tutorial-stats {
        display: flex;
        gap: 15px;
        font-size: 13px;
        color: var(--text-light);
    }
    
    .tutorial-stats i {
        margin-right: 5px;
    }
    
    /* Features Section */
    .features-section {
        background: var(--light-bg);
        border-radius: 20px;
        padding: 60px 40px;
        margin-bottom: 60px;
    }
    
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-top: 40px;
    }
    
    .feature-item {
        text-align: center;
    }
    
    .feature-icon {
        width: 70px;
        height: 70px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 30px;
        color: var(--primary-color);
        box-shadow: var(--shadow-sm);
    }
    
    .feature-title {
        font-size: 18px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 10px;
    }
    
    .feature-description {
        color: var(--text-light);
        font-size: 14px;
        line-height: 1.6;
    }
    
    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        border-radius: 20px;
        padding: 60px 40px;
        text-align: center;
        color: white;
    }
    
    .cta-title {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 20px;
    }
    
    .cta-description {
        font-size: 16px;
        color: rgba(255,255,255,0.8);
        margin-bottom: 30px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .cta-btn {
        padding: 15px 40px;
        background: var(--gradient-accent);
        color: var(--dark-bg);
        border: none;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: var(--transition);
        text-decoration: none;
        display: inline-block;
    }
    
    .cta-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(255,193,7,0.4);
        color: var(--dark-bg);
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .hero-section {
            padding: 60px 30px;
        }
        
        .hero-title {
            font-size: 36px;
        }
        
        .hero-image {
            display: none;
        }
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 28px;
        }
        
        .hero-stats {
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .section-title {
            font-size: 28px;
        }
        
        .categories-grid,
        .tutorials-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section animate__animated animate__fadeIn">
    <div class="hero-content">
        <h1 class="hero-title">
            Welcome to Rpoint Tech
        </h1>
        <p class="hero-description">
            Get access to 500+ tutorials from top instructors around the world in one place. 
            Master programming, web development, data science, and more with our comprehensive guides.
        </p>
        
        <!-- Hero Search -->
        <form action="" method="GET" class="hero-search">
            <input 
                type="text" 
                name="q" 
                class="hero-search-input" 
                placeholder="Search tutorials, languages, topics..."
                autocomplete="off"
            >
            <button type="submit" class="hero-search-btn">
                <i class="fas fa-search"></i> Search
            </button>
        </form>
        
        <!-- Hero Stats -->
        <div class="hero-stats">
            <div class="hero-stat">
                <span class="hero-stat-number">500+</span>
                <span class="hero-stat-label">Tutorials</span>
            </div>
            <div class="hero-stat">
                <span class="hero-stat-number">50K+</span>
                <span class="hero-stat-label">Students</span>
            </div>
            <div class="hero-stat">
                <span class="hero-stat-number">25+</span>
                <span class="hero-stat-label">Topics</span>
            </div>
        </div>
    </div>
    
    <!-- Hero Image -->
    <div class="hero-image">
        <img data-src="{{ asset('images/hero-illustration.png') }}" alt="Learning Illustration" loading="lazy">
    </div>
</section>

<!-- Popular Categories Section -->
<section class="categories-section">
    <div class="section-header">
        <h2 class="section-title">Explore Popular Categories</h2>
        <p class="section-subtitle">
            Choose from a wide range of programming languages and technologies
        </p>
    </div>
    
    <div class="categories-grid">
        <a href="" class="category-card">
            <div class="category-icon">
                <i class="fab fa-python"></i>
            </div>
            <h3 class="category-name">Python</h3>
            <p class="category-count">150+ Tutorials</p>
        </a>
        
        <a href="" class="category-card">
            <div class="category-icon" style="background: linear-gradient(135deg, #f89820 0%, #e16428 100%);">
                <i class="fab fa-java"></i>
            </div>
            <h3 class="category-name">Java</h3>
            <p class="category-count">120+ Tutorials</p>
        </a>
        
        <a href="" class="category-card">
            <div class="category-icon" style="background: linear-gradient(135deg, #f7df1e 0%, #e4c000 100%);">
                <i class="fab fa-js"></i>
            </div>
            <h3 class="category-name">JavaScript</h3>
            <p class="category-count">180+ Tutorials</p>
        </a>
        
        <a href="" class="category-card">
            <div class="category-icon" style="background: linear-gradient(135deg, #61dafb 0%, #21a1c4 100%);">
                <i class="fab fa-react"></i>
            </div>
            <h3 class="category-name">React</h3>
            <p class="category-count">90+ Tutorials</p>
        </a>
        
        <a href="" class="category-card">
            <div class="category-icon" style="background: linear-gradient(135deg, #68a063 0%, #44883e 100%);">
                <i class="fab fa-node-js"></i>
            </div>
            <h3 class="category-name">Node.js</h3>
            <p class="category-count">75+ Tutorials</p>
        </a>
        
        <a href="" class="category-card">
            <div class="category-icon" style="background: linear-gradient(135deg, #8e44ad 0%, #6c3483 100%);">
                <i class="fas fa-robot"></i>
            </div>
            <h3 class="category-name">AI & ML</h3>
            <p class="category-count">100+ Tutorials</p>
        </a>
    </div>
</section>

<!-- Latest Tutorials Section -->
<section class="tutorials-section">
    <div class="section-header">
        <h2 class="section-title">Latest Tutorials</h2>
        <p class="section-subtitle">
            Recently added tutorials to help you learn and grow
        </p>
    </div>
    
    <div class="tutorials-grid">
        @forelse($latestTutorials ?? [] as $tutorial)
            <a href="" class="tutorial-card">
                <img 
                    data-src="{{ $tutorial->image ?? asset('images/default-tutorial.jpg') }}" 
                    alt="{{ $tutorial->title }}" 
                    class="tutorial-image"
                    loading="lazy"
                >
                <div class="tutorial-content">
                    <span class="tutorial-category">{{ $tutorial->category }}</span>
                    <h3 class="tutorial-title">{{ $tutorial->title }}</h3>
                    <p class="tutorial-description">
                        {{ Str::limit($tutorial->description, 100) }}
                    </p>
                    <div class="tutorial-meta">
                        <div class="tutorial-author">
                            <div class="author-avatar">
                                {{ strtoupper(substr($tutorial->author, 0, 1)) }}
                            </div>
                            <span class="author-name">{{ $tutorial->author }}</span>
                        </div>
                        <div class="tutorial-stats">
                            <span>
                                <i class="fas fa-eye"></i>
                                {{ $tutorial->views }}
                            </span>
                            <span>
                                <i class="fas fa-clock"></i>
                                {{ $tutorial->reading_time }} min
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <!-- Placeholder Cards -->
            @for($i = 1; $i <= 6; $i++)
                <a href="#" class="tutorial-card">
                    <div class="tutorial-image" style="background: var(--gradient-primary);"></div>
                    <div class="tutorial-content">
                        <span class="tutorial-category">Python</span>
                        <h3 class="tutorial-title">Python Tutorial {{ $i }}</h3>
                        <p class="tutorial-description">
                            Learn Python programming from basics to advanced concepts with practical examples.
                        </p>
                        <div class="tutorial-meta">
                            <div class="tutorial-author">
                                <div class="author-avatar">T</div>
                                <span class="author-name">Tpoint Instructor</span>
                            </div>
                            <div class="tutorial-stats">
                                <span><i class="fas fa-eye"></i> {{ rand(100, 1000) }}</span>
                                <span><i class="fas fa-clock"></i> {{ rand(5, 15) }} min</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endfor
        @endforelse
    </div>
    
    <div style="text-align: center;">
        <a href="" class="cta-btn">
            View All Tutorials <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="section-header">
        <h2 class="section-title">Why Choose Tpoint Tech?</h2>
        <p class="section-subtitle">
            Everything you need to master programming and technology
        </p>
    </div>
    
    <div class="features-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-book-open"></i>
            </div>
            <h3 class="feature-title">Comprehensive Content</h3>
            <p class="feature-description">
                500+ in-depth tutorials covering all major programming languages and frameworks
            </p>
        </div>
        
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <h3 class="feature-title">Expert Instructors</h3>
            <p class="feature-description">
                Learn from industry professionals with years of real-world experience
            </p>
        </div>
        
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-code"></i>
            </div>
            <h3 class="feature-title">Hands-on Practice</h3>
            <p class="feature-description">
                Interactive code examples and exercises to reinforce your learning
            </p>
        </div>
        
        <div class="feature-item">
            <div class="feature-icon">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <h3 class="feature-title">Learn Anywhere</h3>
            <p class="feature-description">
                Access tutorials on any device - desktop, tablet, or mobile
            </p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <h2 class="cta-title">Ready to Start Learning?</h2>
    <p class="cta-description">
        Join thousands of students already learning with Tpoint Tech. 
        Get started today and take your programming skills to the next level.
    </p>
    @guest
        <a href="" class="cta-btn">
            <i class="fas fa-user-plus"></i> Sign Up Now
        </a>
    @else
        <a href="" class="cta-btn">
            <i class="fas fa-book"></i> Browse Tutorials
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
                entry.target.style.animation = 'fadeInUp 0.6s ease forwards';
            }
        });
    });
    
    document.querySelectorAll('.category-card, .tutorial-card, .feature-item').forEach(el => {
        observer.observe(el);
    });
</script>
@endpush