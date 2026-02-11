@extends('layouts.app')

@section('title', 'All Tutorials - Tpoint Tech')
@section('meta_description', 'Browse all 500+ programming tutorials on Tpoint Tech. Learn Python, Java, JavaScript, Web Development, AI, and more.')

@section('breadcrumb')
    <li class="breadcrumb-item active">Tutorials</li>
@endsection

@section('content')
<style>
    .page-header {
        background: linear-gradient(135deg, #00897B 0%, #4CAF50 100%);
        border-radius: 15px;
        padding: 40px;
        margin-bottom: 40px;
        color: white;
    }
    
    .page-title {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 10px;
    }
    
    .page-description {
        font-size: 16px;
        color: rgba(255,255,255,0.9);
    }
    
    /* Filters */
    .filters-section {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
        box-shadow: var(--shadow-sm);
    }
    
    .filters-row {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        align-items: center;
    }
    
    .filter-group {
        flex: 1;
        min-width: 200px;
    }
    
    .filter-label {
        font-size: 13px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 8px;
        display: block;
    }
    
    .filter-select {
        width: 100%;
        padding: 10px 15px;
        border: 2px solid var(--light-bg);
        border-radius: 8px;
        font-size: 14px;
        transition: var(--transition);
    }
    
    .filter-select:focus {
        outline: none;
        border-color: var(--primary-color);
    }
    
    .filter-btn {
        padding: 10px 25px;
        background: var(--gradient-primary);
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
        transition: var(--transition);
        margin-top: 23px;
    }
    
    .filter-btn:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }
    
    .filter-clear {
        padding: 10px 20px;
        background: transparent;
        color: var(--text-light);
        border: 2px solid var(--light-bg);
        border-radius: 8px;
        font-weight: 500;
        cursor: pointer;
        transition: var(--transition);
        margin-top: 23px;
    }
    
    .filter-clear:hover {
        border-color: var(--text-light);
        color: var(--text-dark);
    }
    
    /* Active Filters */
    .active-filters {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid var(--light-bg);
    }
    
    .filter-tag {
        padding: 6px 15px;
        background: var(--light-bg);
        color: var(--text-dark);
        border-radius: 20px;
        font-size: 13px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .filter-tag i {
        cursor: pointer;
        color: var(--text-light);
        transition: var(--transition);
    }
    
    .filter-tag i:hover {
        color: var(--text-dark);
    }
    
    /* Results Header */
    .results-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }
    
    .results-count {
        font-size: 18px;
        font-weight: 600;
        color: var(--text-dark);
    }
    
    .view-toggle {
        display: flex;
        gap: 10px;
    }
    
    .view-btn {
        width: 40px;
        height: 40px;
        border: 2px solid var(--light-bg);
        background: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: var(--transition);
        color: var(--text-light);
    }
    
    .view-btn.active {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }
    
    .view-btn:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
    }
    
    /* Tutorials Grid */
    .tutorials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }
    
    .tutorials-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-bottom: 40px;
    }
    
    /* Tutorial Card */
    .tutorial-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        transition: var(--transition);
        text-decoration: none;
        display: block;
    }
    
    .tutorial-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .tutorial-image {
        width: 100%;
        height: 180px;
        object-fit: cover;
        background: var(--gradient-primary);
    }
    
    .tutorial-content {
        padding: 20px;
    }
    
    .tutorial-category {
        display: inline-block;
        padding: 4px 12px;
        background: var(--gradient-accent);
        color: var(--dark-bg);
        font-size: 11px;
        font-weight: 600;
        border-radius: 15px;
        margin-bottom: 12px;
        text-transform: uppercase;
    }
    
    .tutorial-title {
        font-size: 17px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 8px;
        line-height: 1.4;
    }
    
    .tutorial-description {
        color: var(--text-light);
        font-size: 13px;
        line-height: 1.6;
        margin-bottom: 15px;
    }
    
    .tutorial-meta {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 12px;
        border-top: 1px solid var(--light-bg);
        font-size: 12px;
    }
    
    .tutorial-author {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .author-avatar {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: var(--gradient-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 10px;
        font-weight: 600;
    }
    
    .tutorial-stats {
        display: flex;
        gap: 12px;
        color: var(--text-light);
    }
    
    /* List View */
    .tutorial-card.list-view {
        display: flex;
    }
    
    .tutorial-card.list-view .tutorial-image {
        width: 250px;
        height: auto;
    }
    
    .tutorial-card.list-view .tutorial-content {
        flex: 1;
        padding: 25px;
    }
    
    /* Pagination */
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }
    
    .pagination {
        display: flex;
        gap: 10px;
        list-style: none;
        padding: 0;
    }
    
    .page-item {
        
    }
    
    .page-link {
        padding: 10px 16px;
        background: white;
        border: 2px solid var(--light-bg);
        border-radius: 8px;
        color: var(--text-dark);
        text-decoration: none;
        font-weight: 500;
        transition: var(--transition);
        display: inline-block;
    }
    
    .page-link:hover {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }
    
    .page-item.active .page-link {
        background: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }
    
    .page-item.disabled .page-link {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
    }
    
    .empty-icon {
        font-size: 80px;
        color: var(--text-light);
        margin-bottom: 20px;
    }
    
    .empty-title {
        font-size: 24px;
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 10px;
    }
    
    .empty-description {
        color: var(--text-light);
        margin-bottom: 20px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .page-header {
            padding: 30px 20px;
        }
        
        .page-title {
            font-size: 28px;
        }
        
        .filters-row {
            flex-direction: column;
        }
        
        .filter-group {
            width: 100%;
        }
        
        .results-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }
        
        .tutorials-grid {
            grid-template-columns: 1fr;
        }
        
        .tutorial-card.list-view {
            flex-direction: column;
        }
        
        .tutorial-card.list-view .tutorial-image {
            width: 100%;
            height: 180px;
        }
    }
</style>

<!-- Page Header -->
<div class="page-header">
    <h1 class="page-title">All Tutorials</h1>
    <p class="page-description">
        Explore our complete collection of 500+ programming tutorials
    </p>
</div>

<!-- Filters Section -->
<div class="filters-section">
    <form action="{{ route('tutorials.index') }}" method="GET">
        <div class="filters-row">
            <div class="filter-group">
                <label class="filter-label">Category</label>
                <select name="category" class="filter-select">
                    <option value="">All Categories</option>
                    <option value="python" {{ request('category') == 'python' ? 'selected' : '' }}>Python</option>
                    <option value="java" {{ request('category') == 'java' ? 'selected' : '' }}>Java</option>
                    <option value="javascript" {{ request('category') == 'javascript' ? 'selected' : '' }}>JavaScript</option>
                    <option value="react" {{ request('category') == 'react' ? 'selected' : '' }}>React</option>
                    <option value="nodejs" {{ request('category') == 'nodejs' ? 'selected' : '' }}>Node.js</option>
                    <option value="ai" {{ request('category') == 'ai' ? 'selected' : '' }}>AI & ML</option>
                    <option value="web" {{ request('category') == 'web' ? 'selected' : '' }}>Web Development</option>
                    <option value="database" {{ request('category') == 'database' ? 'selected' : '' }}>Databases</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label class="filter-label">Difficulty</label>
                <select name="difficulty" class="filter-select">
                    <option value="">All Levels</option>
                    <option value="beginner" {{ request('difficulty') == 'beginner' ? 'selected' : '' }}>Beginner</option>
                    <option value="intermediate" {{ request('difficulty') == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                    <option value="advanced" {{ request('difficulty') == 'advanced' ? 'selected' : '' }}>Advanced</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label class="filter-label">Sort By</label>
                <select name="sort" class="filter-select">
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest</option>
                    <option value="popular" {{ request('sort') == 'popular' ? 'selected' : '' }}>Most Popular</option>
                    <option value="title" {{ request('sort') == 'title' ? 'selected' : '' }}>Title (A-Z)</option>
                </select>
            </div>
            
            <button type="submit" class="filter-btn">
                <i class="fas fa-filter"></i> Apply Filters
            </button>
            
            @if(request()->hasAny(['category', 'difficulty', 'sort']))
                <a href="{{ route('tutorials.index') }}" class="filter-clear">
                    <i class="fas fa-times"></i> Clear
                </a>
            @endif
        </div>
        
        @if(request()->hasAny(['category', 'difficulty']))
            <div class="active-filters">
                @if(request('category'))
                    <div class="filter-tag">
                        <span>Category: {{ ucfirst(request('category')) }}</span>
                        <i class="fas fa-times" onclick="removeFilter('category')"></i>
                    </div>
                @endif
                
                @if(request('difficulty'))
                    <div class="filter-tag">
                        <span>Level: {{ ucfirst(request('difficulty')) }}</span>
                        <i class="fas fa-times" onclick="removeFilter('difficulty')"></i>
                    </div>
                @endif
            </div>
        @endif
    </form>
</div>

<!-- Results Header -->
<div class="results-header">
    <div class="results-count">
        <strong>{{ $tutorials->total() ?? 500 }}</strong> tutorials found
    </div>
    
    <div class="view-toggle">
        <button class="view-btn active" onclick="switchView('grid')" id="gridViewBtn">
            <i class="fas fa-th"></i>
        </button>
        <button class="view-btn" onclick="switchView('list')" id="listViewBtn">
            <i class="fas fa-list"></i>
        </button>
    </div>
</div>

<!-- Tutorials Grid -->
<div class="tutorials-grid" id="tutorialsContainer">
    @forelse($tutorials ?? [] as $tutorial)
        <a href="{{ route('tutorial.show', $tutorial->slug) }}" class="tutorial-card">
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
                    {{ Str::limit($tutorial->description, 120) }}
                </p>
                <div class="tutorial-meta">
                    <div class="tutorial-author">
                        <div class="author-avatar">
                            {{ strtoupper(substr($tutorial->author ?? 'T', 0, 1)) }}
                        </div>
                        <span>{{ $tutorial->author ?? 'Tpoint Tech' }}</span>
                    </div>
                    <div class="tutorial-stats">
                        <span><i class="fas fa-eye"></i> {{ $tutorial->views ?? rand(100, 1000) }}</span>
                        <span><i class="fas fa-clock"></i> {{ $tutorial->reading_time ?? rand(5, 15) }} min</span>
                    </div>
                </div>
            </div>
        </a>
    @empty
        <!-- Sample Cards -->
        @for($i = 1; $i <= 12; $i++)
            <a href="#" class="tutorial-card">
                <div class="tutorial-image" style="background: var(--gradient-primary);"></div>
                <div class="tutorial-content">
                    <span class="tutorial-category">Python</span>
                    <h3 class="tutorial-title">Sample Tutorial {{ $i }}</h3>
                    <p class="tutorial-description">
                        Learn programming concepts with practical examples and hands-on exercises.
                    </p>
                    <div class="tutorial-meta">
                        <div class="tutorial-author">
                            <div class="author-avatar">T</div>
                            <span>Tpoint Tech</span>
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

<!-- Pagination -->
@if(isset($tutorials) && $tutorials->hasPages())
    <div class="pagination-wrapper">
        {{ $tutorials->links() }}
    </div>
@endif

@endsection

@push('scripts')
<script>
    function switchView(view) {
        const container = document.getElementById('tutorialsContainer');
        const gridBtn = document.getElementById('gridViewBtn');
        const listBtn = document.getElementById('listViewBtn');
        const cards = container.querySelectorAll('.tutorial-card');
        
        if (view === 'grid') {
            container.className = 'tutorials-grid';
            gridBtn.classList.add('active');
            listBtn.classList.remove('active');
            cards.forEach(card => card.classList.remove('list-view'));
        } else {
            container.className = 'tutorials-list';
            listBtn.classList.add('active');
            gridBtn.classList.remove('active');
            cards.forEach(card => card.classList.add('list-view'));
        }
        
        localStorage.setItem('tutorialsView', view);
    }
    
    function removeFilter(filterName) {
        const url = new URL(window.location);
        url.searchParams.delete(filterName);
        window.location = url;
    }
    
    // Restore view preference
    const savedView = localStorage.getItem('tutorialsView');
    if (savedView === 'list') {
        switchView('list');
    }
</script>
@endpush