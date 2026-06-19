<x-layout>
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Page Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Our Academic <span class="text-purple-600">Programs</span>
                </h1>
                <div class="w-24 h-1 bg-indigo-600 mx-auto rounded-full"></div>
                <p class="mt-6 text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Discover a wide range of programs designed to nurture talent, spark curiosity, and prepare students
                    for the future.
                </p>
            </div>

            <!-- Courses Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="courses-grid">

                <!-- Sample Course Card 1 -->
                @foreach ($courses as $course)
                    <div
                        class="course-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group">
                        <div class="relative h-52">
                            <img src="{{ url('storage', $course->image) }}" alt="{{ $course->name }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-7">
                            <div class="flex items-center gap-2 mb-4">
                                <span
                                    class="bg-purple-100 text-purple-700 text-xs font-semibold px-4 py-1 rounded-full">{{ $course->duration }}
                                    Years</span>
                            </div>
                            <h3
                                class="text-2xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-indigo-600 transition-colors">
                                {{ $course->name }}
                            </h3>
                            <p class="text-gray-600 text-[15.5px] line-clamp-3 mb-6">
                                {{ $course->description }}
                            </p>
                            <div class="flex justify-between items-center">
                                <a href="/courses/{{ $course->slug }}"
                                    class="text-indigo-600 font-medium hover:text-indigo-700 flex items-center gap-1">
                                    View Details →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

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
