<!-- Fixed Top Navigation Bar -->
<nav class="bg-white shadow-sm fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-gray-900 flex items-center justify-center text-white font-bold text-xl">
                    R
                </div>
                <span class="text-2xl font-bold text-gray-900">point Tech</span>
            </div>
            
            <!-- Menu Items -->
            <div class="hidden lg:flex items-center gap-8">
                <div class="relative group">
                    <button class="flex items-center gap-1 text-gray-900 font-medium hover:text-teal-600">
                        Tutorials
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                </div>
                <div class="relative group">
                    <button class="flex items-center gap-1 text-gray-900 font-medium hover:text-teal-600">
                        Interviews
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                </div>
                <div class="relative group">
                    <button class="flex items-center gap-1 text-gray-900 font-medium hover:text-teal-600">
                        Compilers
                        <i class="fas fa-chevron-down text-xs"></i>
                    </button>
                </div>
            </div>

            <!-- Theme Toggles -->
            <div class="flex items-center gap-2">
                <button class="w-8 h-8 rounded-full bg-gray-300 hover:bg-gray-400"></button>
                <button class="w-8 h-8 rounded-full bg-teal-500 hover:bg-teal-600"></button>
                <button class="w-8 h-8 rounded-full bg-gray-800 hover:bg-gray-900"></button>
                <button class="w-8 h-8 rounded-full bg-indigo-900 hover:bg-indigo-950"></button>
                <button class="w-8 h-8 rounded-full bg-teal-700 hover:bg-teal-800"></button>
            </div>
        </div>
    </div>
</nav>

<!-- Category Navigation Bar -->
<div class="bg-green-600 fixed top-[72px] left-0 right-0 z-50">
    <div class="container mx-auto px-6">
        <div class="flex items-center gap-6 overflow-x-auto py-3">
            @if(isset($subjects) && count($subjects) > 0)
                @foreach($subjects as $subject)
                    <a href="{{ route('home') }}#{{ $subject->slug }}" class="text-white font-medium hover:text-gray-200 whitespace-nowrap transition-colors text-sm">
                        {{ $subject->title }}
                    </a>
                @endforeach
            @else
                <span class="text-white text-sm">Loading categories...</span>
            @endif
        </div>
    </div>
</div>