<x-layout>
    <section class="bg-gray-50 dark:bg-slate-900 min-h-screen">

        <!-- Course Hero -->
        <div class="relative h-[500px] md:h-[550px]">
            <img src="{{ url('storage', $course->image) }}" 
                 alt="{{ $course->name }}"
                 class="w-full h-[500px] md:h-[550px] object-cover">

            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>

            <div class="absolute bottom-0 left-0 right-0">
                <div class="max-w-7xl mx-auto px-6 lg:px-8 pb-12">
                    <div class="inline-block bg-white/10 backdrop-blur-md text-white text-sm font-medium px-5 py-2 rounded-full mb-4">
                        {{ $course->duration }} Years
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                        {{ $course->name }}
                    </h1>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-12">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- Main Content -->
                <div class="lg:col-span-8 space-y-12">

                    <!-- Overview -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Program Overview</h2>
                        <div class="prose prose-lg dark:prose-invert max-w-none text-gray-700 dark:text-gray-300 leading-relaxed">
                            {!! nl2br($course->description) !!}
                        </div>
                    </div>

                    <!-- Key Highlights -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Why Choose This Program?</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-2xl bg-purple-100 dark:bg-purple-900/50 flex items-center justify-center text-2xl flex-shrink-0">🎯</div>
                                <div>
                                    <h4 class="font-semibold text-lg">Industry-Relevant Curriculum</h4>
                                    <p class="text-gray-600 dark:text-gray-400">Updated regularly with current industry trends.</p>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-2xl bg-purple-100 dark:bg-purple-900/50 flex items-center justify-center text-2xl flex-shrink-0">👨‍🏫</div>
                                <div>
                                    <h4 class="font-semibold text-lg">Expert Faculty</h4>
                                    <p class="text-gray-600 dark:text-gray-400">Learn from experienced professors and industry experts.</p>
                                </div>
                            </div>
                            <!-- Add more highlights as needed -->
                        </div>
                    </div>

                    <!-- Curriculum -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Curriculum</h2>
                        <div class="bg-white dark:bg-gray-800 rounded-3xl p-8 shadow-sm">
                            <p class="text-gray-600 dark:text-gray-400 mb-6">
                                The program is divided into {{ $course->duration }} years with a perfect balance of theory, practical, and industry exposure.
                            </p>
                            <!-- You can make this dynamic later -->
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3"><span class="text-green-500 font-bold">•</span> Foundation Courses</li>
                                <li class="flex items-start gap-3"><span class="text-green-500 font-bold">•</span> Core Specialization Subjects</li>
                                <li class="flex items-start gap-3"><span class="text-green-500 font-bold">•</span> Elective Courses</li>
                                <li class="flex items-start gap-3"><span class="text-green-500 font-bold">•</span> Internship / Project Work</li>
                                <li class="flex items-start gap-3"><span class="text-green-500 font-bold">•</span> Research & Dissertation</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-4">
                    <div class="sticky top-8 space-y-8">

                        <!-- Quick Info Card -->
                        <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl p-8">
                            <h3 class="font-semibold text-xl mb-6">Program Details</h3>
                            
                            <div class="space-y-6">
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">Duration</span>
                                    <span class="font-semibold">{{ $course->duration }} Years</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">Degree Awarded</span>
                                    <span class="font-semibold">Bachelor's Degree</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">Intake</span>
                                    <span class="font-semibold">Fall & Spring</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600 dark:text-gray-400">Mode</span>
                                    <span class="font-semibold">Full Time</span>
                                </div>
                            </div>

                            <a href="{{ route('contact') }}" 
                               class="mt-8 block w-full text-center bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-4 rounded-2xl transition">
                                Apply Now
                            </a>
                        </div>

                        <!-- Contact for More Info -->
                        <div class="bg-purple-50 dark:bg-purple-900/20 rounded-3xl p-8 text-center">
                            <h4 class="font-semibold mb-3">Have Questions?</h4>
                            <p class="text-gray-600 dark:text-gray-400 mb-6">Speak directly with our admissions counselor</p>
                            <a href="{{ route('contact') }}" 
                               class="inline-block px-8 py-3 bg-white dark:bg-gray-800 border border-purple-600 text-purple-600 font-medium rounded-2xl hover:bg-purple-600 hover:text-white transition">
                                Contact Admissions
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>