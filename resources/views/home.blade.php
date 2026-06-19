<x-layout>
    <!-- Hero Section -->
    <!-- ===================== HERO SECTION ===================== -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">

        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 ">
            <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?w=1920&auto=format&fit=crop
"
                alt="School" class="w-full h-full object-cover" />
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-blue-950/80 via-indigo-950/70 to-purple-950/60"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 container mx-auto px-6 py-24 md:py-32 text-center text-white">
            <div class="max-w-4xl mx-auto">
                <!-- Small tagline -->
                <p class="text-lg md:text-xl font-medium tracking-wider text-blue-200 uppercase mb-4 animate-fade-in">
                    Excellence in Education Since 2015
                </p>

                <!-- Main Headline -->
                <h1
                    class="font-playfair text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6 animate-slide-up">
                    Shaping Tomorrow's <span class="text-yellow-300">Leaders</span> Today
                </h1>

                <!-- Subtitle -->
                <p
                    class="text-xl md:text-2xl text-gray-200 font-light mb-10 max-w-3xl mx-auto animate-fade-in delay-200">
                    Empowering students through academic excellence,
                    innovation, and character development.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center animate-fade-in delay-300">
                    <a href="#admissions"
                        class="px-8 py-4 bg-yellow-400 hover:bg-yellow-400 text-gray-900 font-semibold rounded-full text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Apply Now
                    </a>

                    <a href="#about"
                        class="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-sm border-2 border-white text-white font-semibold rounded-full text-lg transition-all duration-300">
                        Learn More →
                    </a>
                </div>

                <!-- Trust Indicators / Stats -->
                <div class="mt-12 grid grid-cols-1 sm:grid-cols-3 gap-8 text-center max-w-5xl mx-auto">
                    <div>
                        <div class="text-4xl md:text-5xl font-bold text-yellow-300">4.9/5</div>
                        <p class="text-gray-300 mt-2">Student Satisfaction</p>
                    </div>

                    <div>
                        <div class="text-4xl md:text-5xl font-bold text-yellow-300">95%</div>
                        <p class="text-gray-300 mt-2">Graduate Success Rate</p>
                    </div>

                    <div>
                        <div class="text-4xl md:text-5xl font-bold text-yellow-300">25+</div>
                        <p class="text-gray-300 mt-2">Academic Programs</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-10 h-10 text-white opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                </path>
            </svg>
        </div>
    </section>

    <!-- Stats / Achievements Section -->
    <section class="py-16 md:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Optional Heading -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                    Our Achievements at a Glance
                </h2>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Proud milestones that reflect our commitment to excellence in education
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10">
                <!-- Stat 1 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="p-8 text-center">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-blue-100 text-blue-600 mb-6 group-hover:scale-110 transition-transform duration-300">
                            <!-- Icon: Learners / Students -->
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-4xl md:text-5xl font-bold text-gray-900 mb-2">5,000+<span
                                class="text-blue-600">+</span></h3>
                        <p class="text-gray-600 font-medium">Alumni Worldwide</p>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="p-8 text-center">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-green-100 text-green-600 mb-6 group-hover:scale-110 transition-transform duration-300">
                            <!-- Icon: Certified Instructors -->
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-4xl md:text-5xl font-bold text-gray-900 mb-2">180<span
                                class="text-green-600">+</span></h3>
                        <p class="text-gray-600 font-medium">Faculty Members</p>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="p-8 text-center">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-purple-100 text-purple-600 mb-6 group-hover:scale-110 transition-transform duration-300">
                            <!-- Icon: Graduation Cap -->
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-4xl md:text-5xl font-bold text-gray-900 mb-2">95<span
                                class="text-purple-600">%</span></h3>
                        <p class="text-gray-600 font-medium">Graduation Success Rate</p>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div
                    class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="p-8 text-center">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-amber-100 text-amber-600 mb-6 group-hover:scale-110 transition-transform duration-300">
                            <!-- Icon: Trophy -->
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 5 9 5c0-2 .5-2 2-2s2 0 2 2c2 0 2 .5 2 2 2 0 2 2 2 2a8 8 0 01-1.343 11.314z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-4xl md:text-5xl font-bold text-gray-900 mb-2">25<span
                                class="text-amber-600">+</span></h3>
                        <p class="text-gray-600 font-medium">Academic Programs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->

    <!-- About Us Section -->
    <section class="py-16 md:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Welcome to <span class="text-purple-600">IntelleX</span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Where young minds are nurtured, creativity is encouraged, and excellence becomes a habit.
                </p>
            </div>

            <!-- Two-column layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">

                <!-- Left: Text Content -->
                <div class="space-y-8">
                    <div class="space-y-6">
                        <h3 class="text-3xl font-bold text-gray-800">Our Story</h3>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            IntelleX was founded with a clear purpose — to create a learning environment where
                            curiosity is celebrated, confidence is built, and every scholars is guided to discover
                            their true potential.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Over the years, IntelleX has grown into a trusted educational institution, known for
                            its student-centric approach, dedicated educators, and a culture that balances
                            academic excellence with character development.
                        </p>
                    </div>

                    <!-- Mission & Vision -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div
                            class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <h4 class="text-2xl font-bold text-purple-700 mb-4">Our Mission</h4>
                            <p class="text-gray-700">
                                To inspire a love for learning, foster critical thinking, and empower students
                                with the skills and values needed to succeed in a changing world.
                            </p>
                        </div>

                        <div
                            class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                            <h4 class="text-2xl font-bold text-purple-700 mb-4">Our Vision</h4>
                            <p class="text-gray-700">
                                To be a leading educational institution that shapes confident, responsible,
                                and future-ready individuals.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right: Image + Stats -->
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1470&auto=format&fit=crop"
                            alt="Students learning at IntelleX" class="w-full h-full object-cover" />
                    </div>

                    <!-- Floating Stats -->
                    <div
                        class="absolute -bottom-10 -left-8 sm:-left-12 bg-white p-6 rounded-xl shadow-xl border border-gray-100 hidden md:block">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-purple-600">10+</div>
                            <p class="text-gray-600 mt-1">Years of Excellence</p>
                        </div>
                    </div>

                    <div
                        class="absolute -top-8 -right-8 sm:-right-12 bg-white p-6 rounded-xl shadow-xl border border-gray-100 hidden md:block">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-purple-600">1000+</div>
                            <p class="text-gray-600 mt-1">Happy Learners</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Core Values -->
            <div class="mt-20 text-center">
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-12">
                    Our Core Values
                </h3>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8">
                    <div class="bg-purple-50 p-8 rounded-2xl hover:bg-purple-100 transition-colors">
                        <div class="text-5xl mb-4">🌱</div>
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Growth</h4>
                        <p class="text-gray-700">Promoting lifelong learning and continuous academic and personal development</p>
                    </div>

                    <div class="bg-pink-50 p-8 rounded-2xl hover:bg-pink-100 transition-colors">
                        <div class="text-5xl mb-4">🤝</div>
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Integrity</h4>
                        <p class="text-gray-700">Upholding honesty, ethics, and mutual respect across our academic community</p>
                    </div>

                    <div class="bg-indigo-50 p-8 rounded-2xl hover:bg-indigo-100 transition-colors">
                        <div class="text-5xl mb-4">💡</div>
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Innovation</h4>
                        <p class="text-gray-700">Advancing critical thinking, research, and creative problem-solving</p>
                    </div>

                    <div class="bg-yellow-50 p-8 rounded-2xl hover:bg-yellow-100 transition-colors">
                        <div class="text-5xl mb-4">❤️</div>
                        <h4 class="text-xl font-bold text-gray-800 mb-3">Care</h4>
                        <p class="text-gray-700">Striving for high standards in academics, teaching, and student outcomes</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Upcoming <span class="text-purple-600">Events</span> & Activities
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Join us for exciting learning experiences, celebrations, and community moments!
                </p>
            </div>

            <!-- 3-Column Events Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">

                @foreach ($upcomingEvents as $upcomingEvent)
                    
                <!-- Event Card 2 -->
                <div
                    class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100">
                    <div class="relative">
                        <img src="{{ url('storage' , $upcomingEvent->image )}}"
                            alt="{{ $upcomingEvent->title }}"
                            class="w-full h-56 object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div
                            class="absolute top-4 right-4 bg-white dark:bg-gray-900 text-purple-600 dark:text-purple-400 px-4 py-2 rounded-full font-bold shadow-md">
                            {{ $upcomingEvent->event_datetime->format('d M Y') }}
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-3">
                            <span class="text-gray-500 text-sm">{{ $upcomingEvent->event_datetime->format('g:i A') }} onwards.</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors">
                            {{ $upcomingEvent->title }}
                        </h3>
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            {{ Str::words($upcomingEvent->description, 20, '...') }}
                        </p>
                        <a href="#"
                            class="inline-flex items-center text-purple-600 font-medium hover:text-purple-800 transition-colors">
                            Learn More
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

               @endforeach
            </div>

            <!-- View All Events Button -->
            <div class="text-center mt-16">
                <a href="{{ route('events') }}"
                    class="px-10 py-4 border-2 border-purple-600 text-purple-600 font-semibold rounded-full hover:bg-indigo-600 hover:text-white transition-all">
                    View All Events & Calendar →
                </a>
            </div>
        </div>
    </section>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1.2s ease-out forwards;
        }

        .animate-slide-up {
            animation: slideUp 1s ease-out forwards;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }
    </style>
</x-layout>
