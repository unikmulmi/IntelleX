<x-layout>
    <!-- Events Section for School Website -->
    <section id="events" class="py-16 md:py-24 bg-slate-50 dark:bg-slate-900">
        <div class="container mx-auto px-6 lg:px-8 max-w-7xl">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    Student Life & <span class="text-purple-600">Events</span>
                </h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto rounded-full"></div>
                <p class="mt-6 text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Our university experience goes beyond the classroom. We host a vibrant calendar of academic
                    conferences, cultural festivals, workshops, sports activities, and student-led events that enrich
                    learning and build a strong campus community. These experiences help students develop skills,
                    connections, and memories that last beyond graduation.
                </p>
            </div>

            <!-- Upcoming Events -->
            <div class="mb-20">
                <h3 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-10">
                    Upcoming Events
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    @foreach ($upcomingEvents as $upcomingEvent)
                        <!-- Event Card  -->
                        <div
                            class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 border border-gray-100 dark:border-gray-700 group">
                            <div class="relative">
                                <div
                                    class="h-56 bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center">
                                    <img src="{{ url('storage', $upcomingEvent->image) }}"
                                        alt="{{ $upcomingEvent->title }}">
                                </div>
                                <div
                                    class="absolute top-4 right-4 bg-white dark:bg-gray-900 text-purple-600 dark:text-purple-400 px-4 py-2 rounded-full font-bold shadow-md">
                                    {{ $upcomingEvent->event_datetime->format('d M Y') }}
                                </div>
                            </div>
                            <div class="p-6">
                                <a href="/events/{{ $upcomingEvent->slug }}"
                                    class="text-2xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                    {{ $upcomingEvent->title }}
                                </a>
                                <p class="text-gray-600 dark:text-gray-300 mb-4">
                                    {{ Str::words($upcomingEvent->description, 21, '...') }}
                                </p>
                                <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                    </svg>
                                    {{ $upcomingEvent->event_datetime->format('g:i A') }} onwards.
                                </div>
                                <a href="/events/{{ $upcomingEvent->slug }}"
                                    class="inline-flex items-center text-purple-600 font-medium hover:text-purple-800 transition-colors mt-4">
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

            </div>

            <!-- Past Events Highlights -->
            <div>
                <h3 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-10">
                    Glimpses of Past Events
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($pastEvents as $pastEvent)
                        <!-- Past Event  -->
                        <div class="group relative overflow-hidden rounded-xl shadow-lg">
                            <div
                                class="h-64 bg-gradient-to-br from-cyan-400 to-teal-600 flex items-center justify-center">
                                <img src="{{ url('storage', $pastEvent->image) }}" alt="{{ $pastEvent->title }}">
                            </div>
                            <div
                                class="absolute inset-0 bg-black bg-opacity-40 flex items-end p-6 transition-opacity group-hover:bg-opacity-60">
                                <h4 class="text-xl font-bold text-white">
                                    {{ $pastEvent->title }}
                                </h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
</x-layout>
