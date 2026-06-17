<!-- Footer Section -->
<footer class="bg-gray-900 text-gray-300">
    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-16 pb-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12">
            <!-- Column 1: Logo & About -->
            <div>
                <a href="{{ route('home') }}" class="flex items-center mb-6">
                    <img src="{{ Vite::asset('resources/images/Intellex.svg') }}" alt="IntelleX" class="h-20 w-auto">
                </a>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    Excellence in Education since 2005.
                    Shaping tomorrow's leaders today with curiosity, opportunity, and inspiration.
                </p>
                <div class="flex space-x-6"> <!-- Increased spacing for better look -->
                    <!-- Facebook -->
                    <a href="#" class="text-gray-400 hover:text-indigo-400 transition-colors duration-300">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="#" class="text-gray-400 hover:text-indigo-400 transition-colors duration-300">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5a4.25 4.25 0 004.25 4.25h8.5a4.25 4.25 0 004.25-4.25v-8.5a4.25 4.25 0 00-4.25-4.25h-8.5zM12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm5.5-.5a1 1 0 110 2 1 1 0 010-2z" />
                        </svg>
                    </a>

                    <!-- Twitter / X -->
                    <a href="#" class="text-gray-400 hover:text-indigo-400 transition-colors duration-300">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>

                    <!-- LinkedIn (optional – add if you want) -->
                    <a href="#" class="text-gray-400 hover:text-indigo-400 transition-colors duration-300">
                        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h3 class="text-xl font-bold text-white mb-6">Quick Links</h3>
                <ul class="space-y-4">
                    <li><a href="{{ route('home') }}"
                            class="hover:text-indigo-400 transition-colors duration-300">Home</a></li>
                    <li><a href="{{ route('about') }}"
                            class="hover:text-indigo-400 transition-colors duration-300">About Us</a></li>
                    <li><a href="{{ route('courses') }}"
                            class="hover:text-indigo-400 transition-colors duration-300">Courses</a></li>
                    <li><a href="{{ route('events') }}"
                            class="hover:text-indigo-400 transition-colors duration-300">Events</a></li>
                    <li><a href="{{ route('contact') }}"
                            class="hover:text-indigo-400 transition-colors duration-300">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3: Admissions & Resources -->
            <div>
                <h3 class="text-xl font-bold text-white mb-6">Admissions & Resources</h3>
                <ul class="space-y-4">
                    <li><a href="#" class="hover:text-indigo-400 transition-colors duration-300">Admissions
                            Process</a></li>
                    <li><a href="#" class="hover:text-indigo-400 transition-colors duration-300">Fee Structure</a>
                    </li>
                    <li><a href="#" class="hover:text-indigo-400 transition-colors duration-300">Scholarships</a>
                    </li>
                    <li><a href="#" class="hover:text-indigo-400 transition-colors duration-300">Gallery</a></li>
                    <li><a href="#" class="hover:text-indigo-400 transition-colors duration-300">Parent Portal</a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Contact Info -->
            <div>
                <h3 class="text-xl font-bold text-white mb-6">Contact Us</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 mr-3 text-indigo-400 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>123 Education Avenue, Lalitpur , Nepal</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 mr-3 text-indigo-400 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:info@intelex.edu"
                            class="hover:text-indigo-400 transition-colors">info@intelex.edu</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-6 h-6 mr-3 text-indigo-400 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>+91 11 2345 6789</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-6 text-center md:flex md:justify-between md:items-center text-sm">
            <p>&copy; {{ date('Y') }} IntelleX. All rights reserved.</p>
            <div class="mt-4 md:mt-0 space-x-6">
                <a href="#" class="hover:text-indigo-400 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-indigo-400 transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-indigo-400 transition-colors">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
