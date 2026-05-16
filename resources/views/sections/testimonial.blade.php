<section id="testimonial" class="px-4 pb-20 bg-[#EFE7DA]">

    <div class="max-w-7xl mx-auto">

        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">

            <div>
                <p class="text-[#B5743E] uppercase tracking-[3px] text-xs font-bold mb-4">
                    what people say
                </p>

                <h2 class="font-['Playfair_Display'] text-4xl md:text-5xl leading-tight text-[#3B2216]">
                    Cerita kecil
                    <span class="block italic text-[#B5743E]">
                        dari orang-orang yang datang.
                    </span>
                </h2>
            </div>

            {{-- Navigation --}}
            <div class="hidden md:flex items-center gap-3">

                <button id="prevTesti"
                        class="w-12 h-12 rounded-full border border-[#3B2216]/10 bg-[#F7EFE4] hover:bg-[#EADBC7] duration-300 flex items-center justify-center text-[#3B2216]">
                    ←
                </button>

                <button id="nextTesti"
                        class="w-12 h-12 rounded-full border border-[#3B2216]/10 bg-[#F7EFE4] hover:bg-[#EADBC7] duration-300 flex items-center justify-center text-[#3B2216]">
                    →
                </button>

            </div>

        </div>

        {{-- Slider --}}
        <div class="overflow-hidden">

            <div id="testimonialSlider"
                 class="flex transition-transform duration-500 ease-in-out">

                {{-- Testi 1 --}}
                <div class="min-w-full md:min-w-[50%] pr-4">

                    <div class="h-full bg-[#F7EFE4] rounded-[2rem] border border-[#3B2216]/10 p-8 md:p-10">

                        <div class="flex items-center gap-1 text-[#C9844E] text-lg">
                            ★ ★ ★ ★ ★
                        </div>

                        <p class="mt-6 text-[#3B2216]/75 leading-relaxed text-lg">
                            Tempatnya nyaman banget buat kerja sore-sore.
                            Musiknya pelan, kopinya juga balance.
                            Bikin betah lama.
                        </p>

                        <div class="mt-8 flex items-center gap-4">

                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330"
                                 alt="Customer"
                                 class="w-14 h-14 rounded-full object-cover">

                            <div>
                                <p class="font-semibold text-[#3B2216]">
                                    Alya Putri
                                </p>

                                <p class="text-sm text-[#3B2216]/50">
                                    Designer
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

                {{-- Testi 2 --}}
                <div class="min-w-full md:min-w-[50%] pr-4">

                    <div class="h-full bg-[#F7EFE4] rounded-[2rem] border border-[#3B2216]/10 p-8 md:p-10">

                        <div class="flex items-center gap-1 text-[#C9844E] text-lg">
                            ★ ★ ★ ★ ★
                        </div>

                        <p class="mt-6 text-[#3B2216]/75 leading-relaxed text-lg">
                            Suka banget vibes-nya.
                            Lighting-nya warm dan tempatnya gak berisik.
                            Cocok buat ngobrol lama.
                        </p>

                        <div class="mt-8 flex items-center gap-4">

                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e"
                                 alt="Customer"
                                 class="w-14 h-14 rounded-full object-cover">

                            <div>
                                <p class="font-semibold text-[#3B2216]">
                                    Raka Satya
                                </p>

                                <p class="text-sm text-[#3B2216]/50">
                                    Photographer
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

                {{-- Testi 3 --}}
                <div class="min-w-full md:min-w-[50%] pr-4">

                    <div class="h-full bg-[#F7EFE4] rounded-[2rem] border border-[#3B2216]/10 p-8 md:p-10">

                        <div class="flex items-center gap-1 text-[#C9844E] text-lg">
                            ★ ★ ★ ★ ★
                        </div>

                        <p class="mt-6 text-[#3B2216]/75 leading-relaxed text-lg">
                            Latte-nya creamy banget.
                            Interiornya aesthetic tapi tetap nyaman,
                            gak terasa terlalu dibuat-buat.
                        </p>

                        <div class="mt-8 flex items-center gap-4">

                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80"
                                 alt="Customer"
                                 class="w-14 h-14 rounded-full object-cover">

                            <div>
                                <p class="font-semibold text-[#3B2216]">
                                    Keisha Anindya
                                </p>

                                <p class="text-sm text-[#3B2216]/50">
                                    Content Creator
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<script>
document.addEventListener("DOMContentLoaded", () => {

    const slider = document.getElementById('testimonialSlider');
    const nextBtn = document.getElementById('nextTesti');
    const prevBtn = document.getElementById('prevTesti');

    let currentSlide = 0;
    const slides = slider.children.length;

    function isMobile() {
        return window.innerWidth < 768;
    }

    function getTranslateValue() {
        return isMobile() ? 100 : 50;
    }

    function getMaxSlide() {
        return isMobile() ? slides - 1 : slides - 2;
    }

    function updateSlider() {
        slider.style.transform =
            `translateX(-${currentSlide * getTranslateValue()}%)`;
    }

    function nextSlide() {

        if (currentSlide >= getMaxSlide()) {
            currentSlide = 0;
        } else {
            currentSlide++;
        }

        updateSlider();
    }

    function prevSlide() {

        if (currentSlide <= 0) {
            currentSlide = getMaxSlide();
        } else {
            currentSlide--;
        }

        updateSlider();
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // AUTO SLIDE
    setInterval(() => {
        nextSlide();
    }, 5000);

    // Fix responsive
    window.addEventListener('resize', () => {
        updateSlider();
    });

    updateSlider();

});
</script>