<x-layout>
    <!-- Event Hero Section -->
    <section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ url('storage', $event->image) }}" alt="Event" class="w-full h-full object-cover" />
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/60 to-black/80"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 container mx-auto px-6 py-24 text-white text-center">
            <div class="max-w-4xl mx-auto">

                <!-- Event Title -->
                <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
                    {{ $event->title }}
                </h1>

                <!-- Time & Location -->
                <div class="flex flex-wrap justify-center gap-x-8 gap-y-3 text-lg text-gray-200 mb-10">
                    <div class="flex items-center gap-2">
                        <span class="text-yellow-300">🕒</span>
                        <span>{{ $event->event_datetime->format('d M Y') }}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-yellow-300">📍</span>
                        <span>Main Auditorium & Campus Grounds</span>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            <!-- Main Content -->
            <div class="lg:col-span-8">
                <!-- Event Description -->
                <div class="prose prose-lg max-w-none text-gray-700">
                    <h2 class="font-bold text-3xl text-gray-900 mb-6" id="details">About This Event</h2>
                    <p class="leading-relaxed">
                        {{ $event->description }}
                    </p>
                    <p class="leading-relaxed mt-6">
                        The fair features interactive exhibitions, live demonstrations, guest speaker sessions,
                        and exciting competitions. It's not just an event — it's a platform where ideas come to life
                        and tomorrow's leaders present their vision.
                    </p>

                    <h3 class="text-2xl font-bold text-gray-900 mt-12 mb-4">What to Expect</h3>
                    <ul class="list-disc pl-6 space-y-3 text-lg">
                        <li>Over 50 student innovation projects on display</li>
                        <li>Keynote speeches from renowned scientists and entrepreneurs</li>
                        <li>Live demonstrations</li>
                        <li>Research paper presentations</li>
                        <li>Interactive workshops and hands-on activities</li>
                        <li>Networking opportunities with industry professionals</li>
                    </ul>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-4">
                <div class="sticky top-8 space-y-8">

                    <!-- Event Info Card -->
                    <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100">
                        <h3 class="font-semibold text-xl text-gray-900 mb-6">Event Information</h3>

                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 flex-shrink-0">
                                    📅
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Date & Time</p>
                                    <p class="font-medium text-gray-900">
                                        {{ $event->event_datetime->format('d M Y') }}<br>
                                        <span
                                            class="text-purple-600">{{ $event->event_datetime->format('g:i A') }}</span>
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 bg-amber-100 rounded-2xl flex items-center justify-center text-amber-600 flex-shrink-0">
                                    📍
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Venue</p>
                                    <p class="font-medium text-gray-900">Main Auditorium & Campus Grounds, IntelleX
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div
                                    class="w-10 h-10 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 flex-shrink-0">
                                    👥
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Expected Participants</p>
                                    <p class="font-medium text-gray-900">500+</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="bg-white rounded-3xl shadow-xl p-8 border border-gray-100">
                        <h3 class="font-semibold text-xl text-gray-900 mb-4">Organized By</h3>
                        <p class="text-gray-700">Department of Innovation & Research</p>
                        <p class="text-sm text-gray-500 mt-1">events@intellex.edu</p>
                        <p class="text-sm text-gray-500">+977-980-1234567</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Events -->
    <div class="text-center py-16 border-t">
        <a href="{{ route('events') }}"
            class="inline-flex items-center gap-3 text-purple-600 hover:text-purple-700 font-medium text-lg transition-colors">
            ← Back to All Events
        </a>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap');

        .font-playfair {
            font-family: 'Playfair Display', serif;
        }

        .prose h2,
        .prose h3 {
            color: #4f46e5;
        }
    </style>
</x-layout>
