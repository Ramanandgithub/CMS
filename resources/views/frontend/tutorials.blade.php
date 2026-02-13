@extends('layouts.app')

@section('title', 'All Tutorials - Tpoint Tech')
@section('meta_description', 'Browse all 500+ programming tutorials on Tpoint Tech. Learn Python, Java, JavaScript, Web Development, AI, and more.')

@section('breadcrumb')
    <li class="text-text-dark text-sm font-medium">Tutorials</li>
@endsection

@section('content')

<!-- Page Header -->
<div class="bg-gradient-to-br from-primary to-secondary rounded-2xl p-8 md:p-10 mb-10 text-white">
    <h1 class="text-3xl md:text-4xl font-bold mb-2">All Tutorials</h1>
    <p class="text-base text-white/90">
        Explore our complete collection of 500+ programming tutorials
    </p>
</div>

<!-- Filters Section -->
<div class="bg-white rounded-2xl p-6 mb-8 shadow-sm">
    <form action="{{ route('tutorials.index') }}" method="GET">
        <div class="flex flex-wrap gap-4 items-end">
            <div class="flex-1 min-w-[200px]">
                <label class="block text-[13px] font-semibold text-text-dark mb-2">Category</label>
                <select name="category" class="w-full py-2.5 px-4 border-2 border-light-bg rounded-lg text-sm transition-all duration-300 focus:outline-none focus:border-primary">
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
            
            <div class="flex-1 min-w-[200px]">
                <label class="block text-[13px] font-semibold text-text-dark mb-2">Difficulty</label>
                <select name="difficulty" class="w-full py-2.5 px-4 border-2 border-light-bg rounded-lg text-sm transition-all duration-300 focus:outline-none focus:border-primary">
                    <option value="">All Levels</option>
                    <option value="beginner" {{ request('difficulty') == 'beginner' ? 'selected' : '' }}>Beginner</option>
                    <option value="intermediate" {{ request('difficulty') == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                    <option value="advanced" {{ request('difficulty') == 'advanced' ? 'selected' : '' }}>Advanced</option>
                </select>
            </div>
            
            <div class="flex-1 min-w-[200px]">
                <label class="block text-[13px] font-semibold text-text-dark mb-2">Sort By</label>
                <select name="sort" class="w-full py-2.5 px-4 border-2 border-light-bg rounded-lg text-sm transition-all duration-300 focus:outline-none focus:border-primary">
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest</option>
                    <option value="popular" {{ request('sort') == 'popular' ? 'selected' : '' }}>Most Popular</option>
                    <option value="title" {{ request('sort') == 'title' ? 'selected' : '' }}>Title (A-Z)</option>
                </select>
            </div>
            
            <button type="submit" class="py-2.5 px-6 bg-gradient-to-r from-primary to-secondary text-white rounded-lg font-medium transition-all duration-300 hover:-translate-y-0.5 hover:shadow-md">
                <i class="fas fa-filter mr-1"></i> Apply Filters
            </button>
            
            @if(request()->hasAny(['category', 'difficulty', 'sort']))
                <a href="{{ route('tutorials.index') }}" class="py-2.5 px-5 bg-transparent text-text-light border-2 border-light-bg rounded-lg font-medium transition-all duration-300 hover:border-text-light hover:text-text-dark no-underline">
                    <i class="fas fa-times mr-1"></i> Clear
                </a>
            @endif
        </div>
        
        @if(request()->hasAny(['category', 'difficulty']))
            <div class="flex flex-wrap gap-2.5 mt-4 pt-4 border-t border-light-bg">
                @if(request('category'))
                    <div class="flex items-center gap-2 py-1.5 px-4 bg-light-bg text-text-dark rounded-full text-[13px]">
                        <span>Category: {{ ucfirst(request('category')) }}</span>
                        <i class="fas fa-times cursor-pointer text-text-light transition-all duration-300 hover:text-text-dark" onclick="removeFilter('category')"></i>
                    </div>
                @endif
                
                @if(request('difficulty'))
                    <div class="flex items-center gap-2 py-1.5 px-4 bg-light-bg text-text-dark rounded-full text-[13px]">
                        <span>Level: {{ ucfirst(request('difficulty')) }}</span>
                        <i class="fas fa-times cursor-pointer text-text-light transition-all duration-300 hover:text-text-dark" onclick="removeFilter('difficulty')"></i>
                    </div>
                @endif
            </div>
        @endif
    </form>
</div>

<!-- Results Header -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-6">
    <div class="text-lg font-semibold text-text-dark">
        <strong>{{ $tutorials->total() ?? 500 }}</strong> tutorials found
    </div>
    
    <div class="flex gap-2.5">
        <button class="w-10 h-10 border-2 border-light-bg bg-white rounded-lg flex items-center justify-center transition-all duration-300 text-text-light hover:border-primary hover:text-primary" onclick="switchView('grid')" id="gridViewBtn">
            <i class="fas fa-th"></i>
        </button>
        <button class="w-10 h-10 border-2 border-light-bg bg-white rounded-lg flex items-center justify-center transition-all duration-300 text-text-light hover:border-primary hover:text-primary" onclick="switchView('list')" id="listViewBtn">
            <i class="fas fa-list"></i>
        </button>
    </div>
</div>

<!-- Tutorials Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-10" id="tutorialsContainer">
    @forelse($tutorials ?? [] as $tutorial)
        <a href="{{ route('tutorial.show', $tutorial->slug) }}" class="tutorial-card block bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl no-underline">
            <img 
                data-src="{{ $tutorial->image ?? asset('images/default-tutorial.jpg') }}" 
                alt="{{ $tutorial->title }}" 
                class="w-full h-44 object-cover bg-gradient-to-br from-primary to-secondary"
                loading="lazy"
            >
            <div class="p-5">
                <span class="inline-block py-1 px-3 bg-gradient-to-r from-accent to-[#FF9800] text-dark-bg text-[11px] font-semibold rounded-2xl mb-3 uppercase">{{ $tutorial->category }}</span>
                <h3 class="text-[17px] font-semibold text-text-dark mb-2 leading-snug">{{ $tutorial->title }}</h3>
                <p class="text-text-light text-[13px] leading-relaxed mb-4">
                    {{ Str::limit($tutorial->description, 120) }}
                </p>
                <div class="flex items-center justify-between pt-3 border-t border-light-bg text-xs">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white text-[10px] font-semibold">
                            {{ strtoupper(substr($tutorial->author ?? 'T', 0, 1)) }}
                        </div>
                        <span class="text-text-dark font-medium">{{ $tutorial->author ?? 'Tpoint Tech' }}</span>
                    </div>
                    <div class="flex gap-3 text-text-light">
                        <span><i class="fas fa-eye mr-1"></i> {{ $tutorial->views ?? rand(100, 1000) }}</span>
                        <span><i class="fas fa-clock mr-1"></i> {{ $tutorial->reading_time ?? rand(5, 15) }} min</span>
                    </div>
                </div>
            </div>
        </a>
    @empty
        <!-- Sample Cards -->
        @for($i = 1; $i <= 12; $i++)
            <a href="#" class="tutorial-card block bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl no-underline">
                <div class="w-full h-44 bg-gradient-to-br from-primary to-secondary"></div>
                <div class="p-5">
                    <span class="inline-block py-1 px-3 bg-gradient-to-r from-accent to-[#FF9800] text-dark-bg text-[11px] font-semibold rounded-2xl mb-3 uppercase">Python</span>
                    <h3 class="text-[17px] font-semibold text-text-dark mb-2 leading-snug">Sample Tutorial {{ $i }}</h3>
                    <p class="text-text-light text-[13px] leading-relaxed mb-4">
                        Learn programming concepts with practical examples and hands-on exercises.
                    </p>
                    <div class="flex items-center justify-between pt-3 border-t border-light-bg text-xs">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center text-white text-[10px] font-semibold">T</div>
                            <span class="text-text-dark font-medium">Tpoint Tech</span>
                        </div>
                        <div class="flex gap-3 text-text-light">
                            <span><i class="fas fa-eye mr-1"></i> {{ rand(100, 1000) }}</span>
                            <span><i class="fas fa-clock mr-1"></i> {{ rand(5, 15) }} min</span>
                        </div>
                    </div>
                </div>
            </a>
        @endfor
    @endforelse
</div>

<!-- Pagination -->
@if(isset($tutorials) && $tutorials->hasPages())
    <div class="flex justify-center mt-10">
        <nav class="flex gap-2.5">
            {{ $tutorials->links() }}
        </nav>
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
            container.className = 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-10';
            gridBtn.classList.add('bg-primary', 'border-primary', 'text-white');
            gridBtn.classList.remove('text-text-light');
            listBtn.classList.remove('bg-primary', 'border-primary', 'text-white');
            listBtn.classList.add('text-text-light');
            
            cards.forEach(card => {
                card.classList.remove('flex', 'flex-col', 'md:flex-row');
                const img = card.querySelector('img, div');
                const content = card.querySelector('.p-5, .p-6');
                if (img) {
                    img.classList.remove('md:w-64', 'md:h-auto', 'w-full', 'h-full');
                    img.classList.add('w-full', 'h-44');
                }
                if (content) {
                    content.classList.remove('flex-1', 'p-6');
                    content.classList.add('p-5');
                }
            });
        } else {
            container.className = 'flex flex-col gap-5 mb-10';
            listBtn.classList.add('bg-primary', 'border-primary', 'text-white');
            listBtn.classList.remove('text-text-light');
            gridBtn.classList.remove('bg-primary', 'border-primary', 'text-white');
            gridBtn.classList.add('text-text-light');
            
            cards.forEach(card => {
                card.classList.add('flex', 'flex-col', 'md:flex-row');
                const img = card.querySelector('img, div');
                const content = card.querySelector('.p-5');
                if (img) {
                    img.classList.remove('w-full', 'h-44');
                    img.classList.add('md:w-64', 'w-full', 'md:h-auto', 'h-44');
                }
                if (content) {
                    content.classList.remove('p-5');
                    content.classList.add('flex-1', 'p-6');
                }
            });
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
    } else {
        // Set grid as default active
        document.getElementById('gridViewBtn').classList.add('bg-primary', 'border-primary', 'text-white');
        document.getElementById('gridViewBtn').classList.remove('text-text-light');
    }
</script>
@endpush

<style>
    /* Custom pagination styles to match Tailwind theme */
    .pagination {
        display: flex;
        gap: 10px;
        list-style: none;
        padding: 0;
    }
    
    .page-link {
        padding: 10px 16px;
        background: white;
        border: 2px solid #f8f9fa;
        border-radius: 8px;
        color: #2d3748;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s;
        display: inline-block;
    }
    
    .page-link:hover {
        background: #00897B;
        border-color: #00897B;
        color: white;
    }
    
    .page-item.active .page-link {
        background: #00897B;
        border-color: #00897B;
        color: white;
    }
    
    .page-item.disabled .page-link {
        opacity: 0.5;
        cursor: not-allowed;
    }
</style>