<x-layout>
    <!-- Contact Us Section for School Website -->
    <section id="contact" class="py-16 md:py-24 bg-slate-50 dark:bg-slate-900">
        <div class="container mx-auto px-6 lg:px-8 max-w-7xl">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    Get in <span class="text-purple-600">Touch</span>
                </h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto rounded-full"></div>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    We’d love to hear from you! Whether you have a query about admissions, academics, or just want to
                    visit our campus — we're here to help.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <!-- Left: Contact Info + Map -->
                <div class="space-y-10">
                    <!-- Contact Details -->
                    <div
                        class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 border border-gray-100 dark:border-gray-700">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                            Reach Us
                        </h3>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="text-purple-600 dark:text-purple-400 text-3xl mr-4">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 dark:text-white">Email</p>
                                    <a href="mailto:info@your-schoolname.com"
                                        class="text-blue-600 dark:text-blue-400 hover:underline">
                                        info@intelleX.com
                                    </a>
                                    <p class="mt-1 text-gray-600 dark:text-gray-300">
                                        admissions@intelleX.com (for admissions queries)
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="text-purple-600 dark:text-purple-400 text-3xl mr-4">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 dark:text-white">Phone</p>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        +977 11 1234 5678<br>
                                        +977 98765 43210 (Admissions)
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="text-purple-600 dark:text-purple-400 text-3xl mr-4">
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 dark:text-white">Address</p>
                                    <p class="text-gray-600 dark:text-gray-300">
                                        IntelleX University <br>
                                        Dhobighat,<br>
                                        Lalitpur - 44600<br>
                                        Nepal
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Google Maps Embed -->
                    <div class="rounded-2xl overflow-hidden shadow-2xl border border-gray-100 dark:border-gray-700">
                        <iframe src="https://www.google.com/maps?q=27.674444,85.302500&z=17&output=embed" width="100%"
                            height="350" style="border:0;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Right: Enquiry Form -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 lg:p-10 border border-gray-100 dark:border-gray-700">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">
                        Send us a Message
                    </h3>

                    <form action="/contact" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Full Name
                            </label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition"
                                placeholder="Your Name">
                        </div>

                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Email Address
                            </label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition"
                                placeholder="your.email@example.com">
                        </div>

                        <div>
                            <label for="phone"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Phone Number
                            </label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition"
                                placeholder="+977 XXXXXXXXXX">
                        </div>

                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Your Message
                            </label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 outline-none transition"
                                placeholder="How can we help you?"></textarea>
                        </div>

                        <div class="text-right">
                            <button type="submit"
                                class="inline-block px-10 py-4 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-full text-lg transition duration-300 shadow-lg hover:shadow-xl">
                                Send Message →
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Social Links -->
            <div class="mt-16 text-center">
                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-6">
                    Connect with us on Social Media
                </h4>
                <div class="flex justify-center space-x-6">
                    <a href="#"
                        class="text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-blue-400 transition text-3xl">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.294h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-blue-400 transition text-3xl">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.225.273 2.649.12 7.007.062 8.287.048 8.695.048 12c0 3.305.014 3.713.072 4.993.153 4.358 2.575 6.782 6.933 6.935 1.28.058 1.688.072 4.947.072 3.259 0 3.667-.014 4.947-.072 4.358-.153 6.78-2.577 6.933-6.935.058-1.28.072-1.688.072-4.993 0-3.305-.014-3.713-.072-4.993C22.727 2.649 20.205.225 15.847.072 15.667.014 15.259 0 12 0zM12 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="text-gray-600 dark:text-gray-300 hover:text-purple-600 dark:hover:text-purple-400 transition text-3xl">
                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19.633 7.111c.805-.512 1.512-1.151 2.107-1.88-.748.332-1.553.556-2.396.662.862-.517 1.524-1.336 1.836-2.312-.809.479-1.703.826-2.658 1.014-.765-.815-1.855-1.324-3.059-1.324-2.315 0-4.193 1.878-4.193 4.193 0 .328.037.647.108.953-3.486-.175-6.577-1.845-8.645-4.385-.36.623-.567 1.349-.567 2.119 0 1.461.744 2.749 1.874 3.505-.691-.022-1.346-.212-1.917-.528v.053c0 2.041 1.452 3.743 3.38 4.129-.354.096-.724.147-1.107.147-.271 0-.533-.026-.789-.078.533 1.664 2.079 2.876 3.914 2.91-1.444 1.132-3.263 1.806-5.24 1.806-.34 0-.676-.02-1.005-.058 1.855 1.19 4.06 1.885 6.427 1.885 7.71 0 11.925-6.387 11.925-11.925 0-.182-.004-.363-.012-.543.819-.591 1.528-1.329 2.088-2.168z" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>
</x-layout>
