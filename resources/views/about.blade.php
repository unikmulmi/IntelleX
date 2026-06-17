<x-layout>
    <!-- About Us Section for School Website -->
    <section id="about" class="py-16 md:py-24 bg-slate-50 dark:bg-slate-900">
        <div class="container mx-auto px-6 lg:px-8 max-w-7xl">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    About <span class="text-purple-600">IntelleX</span>
                </h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto rounded-full"></div>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Nurturing young minds with values, knowledge, and a passion for lifelong learning since 2015.
                </p>
            </div>

            <!-- Two-Column Layout: Text + Image -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
                <!-- Left: Text Content -->
                <div class="space-y-8">
                    <h3 class="text-3xl font-bold text-gray-900 dark:text-white">
                        Who We Are
                    </h3>
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                        IntelleX is a premier educational institution committed to academic excellence, character
                        development, and holistic learning in a modern environment.
                    </p>
                    <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                        Established in 2015, IntelleX has grown into a vibrant learning community of over 2,000 students
                        and dedicated educators. We focus on blending academic rigor with creativity, ensuring students
                        are prepared not just for exams, but for real-world challenges.
                    </p>

                    <!-- Mission & Vision -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
                        <div
                            class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-100 dark:border-gray-700">
                            <h4 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-3">
                                Our Vision
                            </h4>
                            <p class="text-gray-600 dark:text-gray-300">
                                To nurture confident, compassionate, and curious learners who are prepared to think
                                critically, act ethically, and thrive in an ever-evolving global world.
                            </p>
                        </div>
                        <div
                            class="bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-100 dark:border-gray-700">
                            <h4 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-3">
                                Our Mission
                            </h4>
                            <p class="text-gray-600 dark:text-gray-300">
                                To provide a supportive and inclusive learning environment that encourages academic
                                excellence, creativity, and holistic personal development.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ Vite::asset('resources/images/campus.png')}}"
                        alt="intellex_campus"
                        class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-end p-8">
                        <p class="text-white text-xl font-semibold">
                            A nurturing space where dreams take flight
                        </p>
                    </div>
                </div>
            </div>

            <!-- Principal's Message / Quick Stats -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Principal's Message -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 lg:p-10 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-20 h-20 rounded-full bg-indigo-100 dark:bg-indigo-900/40 flex items-center justify-center text-4xl mr-6">
                            👨‍🏫
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-gray-900 dark:text-white">
                                From the Vice Chancellor
                            </h4>
                            <p class="text-indigo-600 dark:text-indigo-400 font-medium">
                                Mr. Unik Mulmi
                            </p>
                        </div>
                    </div>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed mb-6">
                        "At IntelleX, education goes beyond textbooks. We focus on building curiosity, character, and
                        confidence so that every student is prepared to grow, adapt, and contribute meaningfully to the
                        world around them." </p>
                    <p class="text-right font-medium text-gray-600 dark:text-gray-400">— Warm regards</p>
                </div>

                <!-- Quick Stats -->
                <div class="space-y-8">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-indigo-50 dark:bg-indigo-900/30 rounded-xl p-6 text-center">
                            <div class="text-4xl font-bold text-indigo-600 dark:text-indigo-400 mb-2">10+</div>
                            <p class="text-gray-700 dark:text-gray-300 font-medium">Years of Excellence</p>
                        </div>
                        <div class="bg-indigo-50 dark:bg-indigo-900/30 rounded-xl p-6 text-center">
                            <div class="text-4xl font-bold text-indigo-600 dark:text-indigo-400 mb-2">5000+</div>
                            <p class="text-gray-700 dark:text-gray-300 font-medium">Global Alumni Network</p>
                        </div>
                        <div class="bg-indigo-50 dark:bg-indigo-900/30 rounded-xl p-6 text-center">
                            <div class="text-4xl font-bold text-indigo-600 dark:text-indigo-400 mb-2">50+</div>
                            <p class="text-gray-700 dark:text-gray-300 font-medium">Expert Faculty & Researchers</p>
                        </div>
                        <div class="bg-indigo-50 dark:bg-indigo-900/30 rounded-xl p-6 text-center">
                            <div class="text-4xl font-bold text-indigo-600 dark:text-indigo-400 mb-2">90%</div>
                            <p class="text-gray-700 dark:text-gray-300 font-medium">Graduate Employment Rate</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-20">
                <a href="{{ route('contact') }}"
                    class="inline-block px-10 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-full text-lg transition duration-300 shadow-lg hover:shadow-xl">
                    Contact Admissions →
                </a>
            </div>

        </div>
    </section>
</x-layout>
