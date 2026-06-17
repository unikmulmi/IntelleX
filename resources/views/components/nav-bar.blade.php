<!-- resources/views/components/navbar.blade.php or layouts/app.blade.php -->

<nav
    class="bg-white/95 backdrop-blur-sm border-b border-gray-200 shadow-sm sticky top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20 lg:h-24">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/images/Intellex.svg') }}" alt="IntelleX"
                        class="h-20 lg:h-20 xl:h-24 w-auto">
                </a>
            </div>

            <!-- DESKTOP MENU – Visible from md (768px) and up -->
            <div class="hidden md:flex items-center gap-x-8 lg:gap-x-10 xl:gap-x-14 2xl:gap-x-16">
                <a href="{{ route('about') }}"
                    class="group relative px-3 py-2 {{ request()->is('about') ? 'text-indigo-700 transition-colors duration-300 font-medium tracking-wide text-base lg:text-lg' : ' text-gray-800 font-medium tracking-wide text-base lg:text-lg hover:text-indigo-700 transition-colors duration-300' }}">
                    About
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-600 rounded-full transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ route('courses') }}"
                    class="group relative px-3 py-2 {{ request()->is('courses') ? 'text-indigo-700 transition-colors duration-300 font-medium tracking-wide text-base lg:text-lg' : ' text-gray-800 font-medium tracking-wide text-base lg:text-lg hover:text-indigo-700 transition-colors duration-300' }}">
                    Courses
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-600 rounded-full transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ route('gallery') }}"
                    class="group relative px-3 py-2 {{ request()->is('gallery') ? 'text-indigo-700 transition-colors duration-300 font-medium tracking-wide text-base lg:text-lg' : ' text-gray-800 font-medium tracking-wide text-base lg:text-lg hover:text-indigo-700 transition-colors duration-300' }}">
                    Gallery
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-600 rounded-full transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ route('events') }}"
                    class="group relative px-3 py-2 {{ request()->is('events') ? 'text-indigo-700 transition-colors duration-300 font-medium tracking-wide text-base lg:text-lg' : ' text-gray-800 font-medium tracking-wide text-base lg:text-lg hover:text-indigo-700 transition-colors duration-300' }}">
                    Events
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-600 rounded-full transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{ route('contact') }}"
                    class="group relative px-3 py-2 {{ request()->is('contact') ? 'text-indigo-700 transition-colors duration-300 font-medium tracking-wide text-base lg:text-lg' : ' text-gray-800 font-medium tracking-wide text-base lg:text-lg hover:text-indigo-700 transition-colors duration-300' }}">
                    Contact
                    <span
                        class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-600 rounded-full transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <!-- HAMBURGER BUTTON – Only visible on screens SMALLER than md (768px) -->
            <div class="md:hidden">
                <button id="mobile-menu-btn"
                    class="text-gray-700 hover:text-indigo-600 focus:outline-none transition-colors"
                    aria-label="Toggle menu">
                    <svg class="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 shadow-lg">
        <div class="px-4 py-6 space-y-3">
            <a href="{{ route('about') }}"
                class="block px-5 py-3 text-lg font-medium rounded-xl transition-colors 
              {{ request()->is('about') ? 'text-indigo-700' : 'text-gray-800 hover:bg-indigo-50 hover:text-indigo-700' }}">
                About
            </a>
            <a href="{{ route('courses') }}"
                class="block px-5 py-3 text-lg font-medium rounded-xl transition-colors 
              {{ request()->is('courses') ? 'text-indigo-700' : 'text-gray-800 hover:bg-indigo-50 hover:text-indigo-700' }}">
                Courses
            </a>
            <a href="{{ route('gallery') }}"
                class="block px-5 py-3 text-lg font-medium rounded-xl transition-colors 
              {{ request()->is('gallery') ? 'text-indigo-700' : 'text-gray-800 hover:bg-indigo-50 hover:text-indigo-700' }}">
                Gallery
            </a>
            <a href="{{ route('events') }}"
                class="block px-5 py-3 text-lg font-medium rounded-xl transition-colors 
              {{ request()->is('events') ? 'text-indigo-700' : 'text-gray-800 hover:bg-indigo-50 hover:text-indigo-700' }}">
                Events
            </a>
            <a href="{{ route('contact') }}"
                class="block px-5 py-3 text-lg font-medium rounded-xl transition-colors 
              {{ request()->is('contact') ? 'text-indigo-700' : 'text-gray-800 hover:bg-indigo-50 hover:text-indigo-700' }}">
                Contact
            </a>
        </div>
    </div>
</nav>

<!-- Mobile menu toggle script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    });
</script>
