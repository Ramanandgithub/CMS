<aside
    class="print:hidden fixed top-[124px] left-0 w-[280px] h-[calc(100vh-124px)] bg-white shadow-lg transition-all duration-300 ease-in-out z-[1040] overflow-y-auto overflow-x-hidden border-r border-gray-200 mt-[120px]"
    id="sidebar">

    <!-- Sidebar Content -->
    <div class="py-4">

        <!-- Dynamic Topic Menu -->
        <div class="topic-menu">

            <!-- Python Tutorial Section -->
            <div class="topic-section">
                {{-- @foreach ($subjects as $topic)
                    <button
                        class="topic-header w-full flex items-center justify-between px-5 py-3 text-left text-gray-800 font-semibold hover:bg-gray-50 transition-colors"
                        onclick="toggleTopic(this)">
                        <span class="text-base">{{ $topic->title }}</span>
                        <i class="fas fa-chevron-down text-sm transition-transform duration-300 topic-arrow"></i>
                    </button>
                @endforeach --}}
                <div class="topic-content max-h-0 overflow-hidden transition-all duration-300 bg-gray-50">
                    <div class="py-2">
                        <!-- Subtopic: Python Variable & Data Type -->
                        <div class="subtopic-section">
                            @foreach ($subject['subjects']->topics as $topic)
                                <button
                                    class="subtopic-header w-full flex items-center justify-between px-5 py-2 text-left text-gray-700 font-medium hover:bg-gray-100 transition-colors"
                                    onclick="toggleSubtopic(this)">
                                    <a
                                        href="{{ route('subtopic.show', ['subject','slug' => $topic->slug, 'id' => $topic->id]) }}"><span
                                            class="text-sm">{{ $topic->title }}</span><a>
                                            <i
                                                class="fas fa-chevron-up text-xs transition-transform duration-300 subtopic-arrow"></i>
                                </button>
                            @endforeach
                            @foreach ($subject['subtopics'] as $subtopic)
                                <div class="subtopic-content max-h-96 overflow-hidden transition-all duration-300">
                                    <a href="#"
                                        class="block px-5 py-2 pl-8 text-sm text-gray-600 hover:text-green-600 hover:bg-gray-100 transition-colors border-l-2 border-transparent hover:border-green-600">
                                        {{ $subtopic->title }}
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

            <!-- Java Tutorial Section -->
            <div class="topic-section border-t border-gray-200">
                <button
                    class="topic-header w-full flex items-center justify-between px-5 py-3 text-left text-gray-800 font-semibold hover:bg-gray-50 transition-colors"
                    onclick="toggleTopic(this)">
                    <span class="text-base">Java Tutorial</span>
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300 topic-arrow"></i>
                </button>
                <div class="topic-content max-h-0 overflow-hidden transition-all duration-300 bg-gray-50">
                    <div class="py-2">
                        <div class="subtopic-section">
                            <button
                                class="subtopic-header w-full flex items-center justify-between px-5 py-2 text-left text-gray-700 font-medium hover:bg-gray-100 transition-colors"
                                onclick="toggleSubtopic(this)">
                                <span class="text-sm">Java Basics</span>
                                <i
                                    class="fas fa-chevron-down text-xs transition-transform duration-300 subtopic-arrow"></i>
                            </button>
                            <div class="subtopic-content max-h-0 overflow-hidden transition-all duration-300">
                                <a href="#"
                                    class="block px-5 py-2 pl-8 text-sm text-gray-600 hover:text-green-600 hover:bg-gray-100 transition-colors border-l-2 border-transparent hover:border-green-600">Java
                                    Introduction</a>
                                <a href="#"
                                    class="block px-5 py-2 pl-8 text-sm text-gray-600 hover:text-green-600 hover:bg-gray-100 transition-colors border-l-2 border-transparent hover:border-green-600">Java
                                    Variables</a>
                                <a href="#"
                                    class="block px-5 py-2 pl-8 text-sm text-gray-600 hover:text-green-600 hover:bg-gray-100 transition-colors border-l-2 border-transparent hover:border-green-600">Java
                                    Data Types</a>
                                <a href="#"
                                    class="block px-5 py-2 pl-8 text-sm text-gray-600 hover:text-green-600 hover:bg-gray-100 transition-colors border-l-2 border-transparent hover:border-green-600">Java
                                    Operators</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Database Section -->
            <div class="topic-section border-t border-gray-200">
                <button
                    class="topic-header w-full flex items-center justify-between px-5 py-3 text-left text-gray-800 font-semibold hover:bg-gray-50 transition-colors"
                    onclick="toggleTopic(this)">
                    <span class="text-base">Databases</span>
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300 topic-arrow"></i>
                </button>
                <div class="topic-content max-h-0 overflow-hidden transition-all duration-300 bg-gray-50">
                    <div class="py-2">
                        <a href="#"
                            class="block px-5 py-2 text-sm text-gray-600 hover:text-green-600 hover:bg-gray-100 transition-colors">SQL
                            Tutorial</a>
                        <a href="#"
                            class="block px-5 py-2 text-sm text-gray-600 hover:text-green-600 hover:bg-gray-100 transition-colors">MySQL
                            Tutorial</a>
                        <a href="#"
                            class="block px-5 py-2 text-sm text-gray-600 hover:text-green-600 hover:bg-gray-100 transition-colors">MongoDB
                            Tutorial</a>
                        <a href="#"
                            class="block px-5 py-2 text-sm text-gray-600 hover:text-green-600 hover:bg-gray-100 transition-colors">PostgreSQL
                            Tutorial</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Add bottom padding -->
        <div class="h-20"></div>
    </div>
</aside>

<!-- Sidebar Overlay for Mobile -->
<div class="fixed top-0 left-0 w-full h-full bg-black/50 opacity-0 invisible transition-all duration-300 z-[1030] lg:hidden sidebar-overlay"
    id="sidebarOverlay" onclick="closeSidebar()"></div>

<style>
    /* Custom scrollbar for sidebar */
    #sidebar::-webkit-scrollbar {
        width: 6px;
    }

    #sidebar::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    #sidebar::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 3px;
    }

    #sidebar::-webkit-scrollbar-thumb:hover {
        background: #a8a8a8;
    }

    /* Active states */
    #sidebar.active {
        left: 0 !important;
    }

    #sidebar.active~.sidebar-overlay {
        opacity: 1 !important;
        visibility: visible !important;
    }

    /* Topic animation */
    .topic-section.open .topic-content {
        max-height: 2000px;
    }

    .topic-section.open .topic-arrow {
        transform: rotate(180deg);
    }

    /* Subtopic animation */
    .subtopic-section.open .subtopic-content {
        max-height: 1000px;
    }

    .subtopic-section.open .subtopic-arrow {
        transform: rotate(180deg);
    }

    /* Mobile responsive */
    @media (max-width: 1024px) {
        #sidebar {
            left: -280px;
        }
    }
</style>

<script>
    function toggleTopic(element) {
        const topicSection = element.parentElement;
        const isOpen = topicSection.classList.contains('open');

        // Close all other topics
        document.querySelectorAll('.topic-section.open').forEach(section => {
            if (section !== topicSection) {
                section.classList.remove('open');
            }
        });

        // Toggle current topic
        topicSection.classList.toggle('open');
    }

    function toggleSubtopic(element) {
        const subtopicSection = element.parentElement;
        const isOpen = subtopicSection.classList.contains('open');

        // Toggle current subtopic
        subtopicSection.classList.toggle('open');
    }

    function closeSidebar() {
        document.getElementById('sidebar').classList.remove('active');
    }

    // Open first topic by default
    document.addEventListener('DOMContentLoaded', function() {
        const firstTopic = document.querySelector('.topic-section');
        const firstSubtopic = document.querySelector('.subtopic-section');
        if (firstTopic) {
            firstTopic.classList.add('open');
        }
        if (firstSubtopic) {
            firstSubtopic.classList.add('open');
        }
    });
</script>
