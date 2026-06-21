<x-layout>
    <!-- Gallery Section for University Website -->
    <section id="gallery" class="py-16 md:py-24 bg-slate-50 dark:bg-slate-900">
        <div class="container mx-auto px-6 lg:px-8 max-w-7xl">

            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    IntelleX <span class="text-purple-600">Gallery</span>
                </h2>
                <div class="w-24 h-1 bg-indigo-600 mx-auto rounded-full"></div>
                <p class="mt-6 text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Discover the vibrant life at IntelleX through our university moments — from state-of-the-art facilities 
                    to unforgettable events and student experiences.
                </p>
            </div>


            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 gallery-grid">

                <!-- Static Gallery Items -->
                <div class="gallery-item group relative overflow-hidden rounded-xl shadow-xl cursor-pointer aspect-square" data-category="campus">
                    <img src="{{ Vite::asset('resources/images/campus.png') }}" 
                         alt="Main Campus Building"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                        <div class="p-6 w-full">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-white/20 text-white rounded-full mb-3">University</span>
                            <h4 class="text-white text-xl font-semibold">Central Academic Block</h4>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-xl shadow-xl cursor-pointer aspect-square" data-category="events">
                    <img src="{{ Vite::asset('resources/images/farewell.jpg') }}" 
                         alt="Graduation Ceremony"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                        <div class="p-6 w-full">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-white/20 text-white rounded-full mb-3">Events</span>
                            <h4 class="text-white text-xl font-semibold">Convocation 2025</h4>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-xl shadow-xl cursor-pointer aspect-square" data-category="students">
                    <img src="{{ Vite::asset('resources/images/library.jpg') }}" 
                         alt="Students in Library"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                        <div class="p-6 w-full">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-white/20 text-white rounded-full mb-3">Student Life</span>
                            <h4 class="text-white text-xl font-semibold">Library Study Session</h4>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-xl shadow-xl cursor-pointer aspect-square" data-category="academics">
                    <img src="{{ Vite::asset('resources/images/lab.jpg') }}" 
                         alt="Lab Session"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                        <div class="p-6 w-full">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-white/20 text-white rounded-full mb-3">Academics</span>
                            <h4 class="text-white text-xl font-semibold">Research Laboratory</h4>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-xl shadow-xl cursor-pointer aspect-square" data-category="campus">
                    <img src="{{ Vite::asset('resources/images/interior.jpg') }}" 
                         alt="Campus Garden"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                        <div class="p-6 w-full">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-white/20 text-white rounded-full mb-3">University</span>
                            <h4 class="text-white text-xl font-semibold">University Interior</h4>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-xl shadow-xl cursor-pointer aspect-square" data-category="events">
                    <img src="{{ Vite::asset('resources/images/fest.jpg') }}" 
                         alt="Cultural Festival"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                        <div class="p-6 w-full">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-white/20 text-white rounded-full mb-3">Events</span>
                            <h4 class="text-white text-xl font-semibold">Annual Cultural Fest</h4>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-xl shadow-xl cursor-pointer aspect-square" data-category="students">
                    <img src="{{ Vite::asset('resources/images/basketball.webp') }}" 
                         alt="Sports Activity"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                        <div class="p-6 w-full">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-white/20 text-white rounded-full mb-3">Student Life</span>
                            <h4 class="text-white text-xl font-semibold">Basketball Tournament</h4>
                        </div>
                    </div>
                </div>

                <div class="gallery-item group relative overflow-hidden rounded-xl shadow-xl cursor-pointer aspect-square" data-category="academics">
                    <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?w=1920&auto=format&fit=crop" 
                         alt="Lecture Hall"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-end">
                        <div class="p-6 w-full">
                            <span class="inline-block px-3 py-1 text-xs font-medium bg-white/20 text-white rounded-full mb-3">Academics</span>
                            <h4 class="text-white text-xl font-semibold">Smart Lecture Hall</h4>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Load More -->
            <div class="text-center mt-16">
                <button onclick="loadMoreImages()" 
                        class="px-8 py-4 bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-2xl font-semibold text-gray-700 dark:text-gray-300 transition-all flex items-center gap-3 mx-auto">
                    <span>Load More Moments</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>

            <!-- Lightbox Modal -->
            <div id="lightbox" class="hidden fixed inset-0 bg-black/90 z-50 flex items-center justify-center p-4">
                <div class="relative max-w-5xl w-full">
                    <button onclick="closeLightbox()" 
                            class="absolute -top-4 -right-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-full p-3 shadow-xl z-10">
                        ✕
                    </button>
                    <img id="lightbox-image" src="" alt="" class="max-h-[85vh] w-full object-contain rounded-3xl">
                    <div id="lightbox-caption" class="text-white text-center mt-6 text-lg"></div>
                </div>
            </div>

        </div>
    </section>

    <script>
        function filterGallery(category) {
            const items = document.querySelectorAll('.gallery-item');
            const buttons = document.querySelectorAll('button[onclick^="filterGallery"]');
            
            buttons.forEach(btn => btn.classList.remove('active-filter', 'bg-indigo-600', 'text-white'));
            
            if (category === 'all') {
                items.forEach(item => item.style.display = 'block');
                buttons[0].classList.add('active-filter', 'bg-indigo-600', 'text-white');
            } else {
                items.forEach(item => {
                    item.style.display = item.dataset.category === category ? 'block' : 'none';
                });
                
                document.querySelectorAll('button').forEach(btn => {
                    if (btn.getAttribute('onclick') && btn.getAttribute('onclick').includes(`'${category}'`)) {
                        btn.classList.add('active-filter', 'bg-indigo-600', 'text-white');
                    }
                });
            }
        }

        function loadMoreImages() {
            alert("More beautiful campus moments coming soon! ✨");
        }

        // Lightbox
        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('.gallery-item');
            
            items.forEach(item => {
                item.addEventListener('click', () => {
                    const imgSrc = item.querySelector('img').src;
                    const caption = item.querySelector('h4').textContent;
                    
                    document.getElementById('lightbox-image').src = imgSrc;
                    document.getElementById('lightbox-caption').textContent = caption;
                    document.getElementById('lightbox').classList.remove('hidden');
                    document.getElementById('lightbox').classList.add('flex');
                });
            });
        });

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === "Escape") closeLightbox();
        });
    </script>
</x-layout>