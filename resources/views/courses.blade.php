<x-layout>
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Page Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Our Academic <span class="text-purple-600">Programs</span>
                </h1>
                <div class="w-24 h-1 bg-indigo-600 mx-auto rounded-full"></div>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Discover a wide range of programs designed to nurture talent, spark curiosity, and prepare students
                    for the future.
                </p>
            </div>

            <!-- Courses Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="courses-grid">

                <!-- Sample Course Card 1 -->
                <div class="course-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group"
                    data-category="science">
                    <div class="relative h-52">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a9d6f2c4e0?w=800&auto=format&fit=crop"
                            alt="Advanced Biology"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-7">
                        <div class="flex items-center gap-2 mb-4">
                            <span
                                class="bg-emerald-100 text-emerald-700 text-xs font-semibold px-4 py-1 rounded-full">Science</span>
                            <span class="text-gray-500 text-sm">2 Years</span>
                        </div>
                        <h3
                            class="text-2xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-indigo-600 transition-colors">
                            Advanced Biology & Biotechnology
                        </h3>
                        <p class="text-gray-600 text-[15.5px] line-clamp-3 mb-6">
                            In-depth study of living systems, genetics, microbiology, and hands-on biotechnology
                            research.
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="#"
                                class="text-indigo-600 font-medium hover:text-indigo-700 flex items-center gap-1">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sample Course Card 2 -->
                <div class="course-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group"
                    data-category="arts">
                    <div class="relative h-52">
                        <img src="https://images.unsplash.com/photo-1541963463537-5d3a7c0f3e0f?w=800&auto=format&fit=crop"
                            alt="Creative Arts"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-7">
                        <div class="flex items-center gap-2 mb-4">
                            <span
                                class="bg-purple-100 text-purple-700 text-xs font-semibold px-4 py-1 rounded-full">Arts</span>
                            <span class="text-gray-500 text-sm">3 Years</span>
                        </div>
                        <h3
                            class="text-2xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-indigo-600 transition-colors">
                            Creative Arts & Digital Design
                        </h3>
                        <p class="text-gray-600 text-[15.5px] line-clamp-3 mb-6">
                            Develop artistic skills in painting, digital media, graphic design, and visual storytelling.
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="#"
                                class="text-indigo-600 font-medium hover:text-indigo-700 flex items-center gap-1">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sample Course Card 3 -->
                <div class="course-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group"
                    data-category="business">
                    <div class="relative h-52">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&auto=format&fit=crop"
                            alt="Entrepreneurship"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                    </div>
                    <div class="p-7">
                        <div class="flex items-center gap-2 mb-4">
                            <span
                                class="bg-amber-100 text-amber-700 text-xs font-semibold px-4 py-1 rounded-full">Business</span>
                            <span class="text-gray-500 text-sm">2 Years</span>
                        </div>
                        <h3
                            class="text-2xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-indigo-600 transition-colors">
                            Entrepreneurship & Leadership
                        </h3>
                        <p class="text-gray-600 text-[15.5px] line-clamp-3 mb-6">
                            Master business fundamentals, innovation, leadership, and real-world entrepreneurial skills.
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="#"
                                class="text-indigo-600 font-medium hover:text-indigo-700 flex items-center gap-1">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More -->
            <div class="text-center mt-16">
                <button onclick="#"
                    class="px-10 py-4 border-2 border-indigo-600 text-indigo-600 font-semibold rounded-full hover:bg-indigo-600 hover:text-white transition-all">
                    Load More Courses
                </button>
            </div>

    </section>

    <style>
        .course-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .active-filter {
            background-color: rgb(79 70 229) !important;
            color: white !important;
            border: none !important;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

</x-layout>
