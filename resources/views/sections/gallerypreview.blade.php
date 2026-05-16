<section id="gallerypreview" class="px-4 pb-20 bg-[#EFE7DA]">
    <div class="max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
            <div>
                <p class="text-[#B5743E] uppercase tracking-[3px] text-xs font-bold mb-3">
                    gallery
                </p>

                <h2 class="font-['Playfair_Display'] text-4xl md:text-5xl text-[#3B2216]">
                    Moments at Brew Haven
                </h2>
            </div>

            <a href="/gallery" class="text-sm font-semibold text-[#3B2216] hover:text-[#B5743E]">
                lihat semua foto →
            </a>
        </div>

        @php
            $photos = [
                asset('images/brew1.jpg'),
                asset('images/brew2.jpg'),
                asset('images/brew3.jpg'),
            ];
        @endphp

        <div class="relative overflow-hidden rounded-[2rem] border border-[#3B2216]/10 bg-[#F7EFE4]">

            <div id="gallerySlider" class="flex transition-transform duration-700 ease-in-out">
                @foreach ($photos as $photo)
                    <div class="min-w-full">
                        <img src="{{ $photo }}"
                             alt="Brew Haven Gallery"
                             class="h-[320px] md:h-[560px] w-full object-cover">
                    </div>
                @endforeach
            </div>

            
            <div class="absolute inset-0 bg-gradient-to-t from-[#2B1A12]/40 via-transparent to-transparent pointer-events-none"></div>

            {{-- Dots --}}
            <div class="absolute bottom-5 left-1/2 -translate-x-1/2 flex items-center gap-2">
                @foreach ($photos as $index => $photo)
                    <button
                        class="gallery-dot w-2.5 h-2.5 rounded-full bg-white/50 duration-300"
                        data-index="{{ $index }}">
                    </button>
                @endforeach
            </div>

            {{-- Prev --}}
            <button id="galleryPrev"
                    class="absolute left-5 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-[#F7EFE4]/80 hover:bg-[#F7EFE4] text-[#3B2216] flex items-center justify-center duration-300">
                ←
            </button>

            {{-- Next --}}
            <button id="galleryNext"
                    class="absolute right-5 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full bg-[#F7EFE4]/80 hover:bg-[#F7EFE4] text-[#3B2216] flex items-center justify-center duration-300">
                →
            </button>

        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slider = document.getElementById('gallerySlider');
        const dots = document.querySelectorAll('.gallery-dot');
        const nextBtn = document.getElementById('galleryNext');
        const prevBtn = document.getElementById('galleryPrev');

        let currentSlide = 0;
        const totalSlides = dots.length;

        function updateSlider() {
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;

            dots.forEach((dot, index) => {
                dot.classList.toggle('bg-white', index === currentSlide);
                dot.classList.toggle('w-6', index === currentSlide);
                dot.classList.toggle('bg-white/50', index !== currentSlide);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        dots.forEach((dot) => {
            dot.addEventListener('click', function () {
                currentSlide = parseInt(this.dataset.index);
                updateSlider();
            });
        });

        updateSlider();

        setInterval(nextSlide, 3500);
    });
</script>