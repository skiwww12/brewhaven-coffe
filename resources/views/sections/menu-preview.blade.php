<section id="menu" class="px-4 py-16 md:py-20 bg-[#EFE7DA]">

    <div class="max-w-7xl mx-auto">

        <div class="grid lg:grid-cols-[0.9fr_1.8fr] gap-8 lg:gap-10 items-start">

            {{-- Left Intro --}}
            <div class="lg:sticky lg:top-32">

                <p class="text-[#B5743E] uppercase tracking-[3px] text-[11px] md:text-xs font-bold mb-3 md:mb-4">
                    our favorite picks
                </p>

                <h2 class="font-['Playfair_Display'] text-4xl sm:text-5xl md:text-6xl lg:text-5xl leading-[1.05] text-[#3B2216]">
                    Menu favorit kami
                    <span class="block italic text-[#B5743E]">
                        yang selalu pas.
                    </span>
                </h2>

                <p class="mt-5 text-sm sm:text-base leading-relaxed text-[#3B2216]/60 max-w-md">
                    Pilihan menu yang paling sering jadi teman nugas,
                    ngobrol santai, atau sekadar menikmati sore.
                </p>

                <a href="/menu"
                   class="inline-flex mt-7 md:mt-8 text-sm font-semibold text-[#3B2216] hover:text-[#B5743E] duration-300">
                    lihat semua menu →
                </a>

            </div>

            @php
                $menus = [
                    [
                        'name' => 'Iced Latte',
                        'desc' => 'smooth, creamy, and always a mood.',
                        'price' => '28k',
                        'img' => 'images/menu/icelatte.jpg'
                    ],
                    [
                        'name' => 'Cappuccino',
                        'desc' => 'bold espresso with a soft milky touch.',
                        'price' => '26k',
                        'img' => 'https://images.unsplash.com/photo-1572442388796-11668a67e53d'
                    ],
                    [
                        'name' => 'Mocha',
                        'desc' => 'rich chocolate with coffee goodness.',
                        'price' => '30k',
                        'img' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735'
                    ],
                ];
            @endphp

            {{-- Desktop --}}
            <div class="hidden md:grid grid-cols-2 xl:grid-cols-3 gap-4 sm:gap-5 md:gap-6">

                @foreach ($menus as $menu)

                    <div class="group bg-[#F7EFE4] rounded-[1.5rem] md:rounded-[1.8rem] overflow-hidden border border-[#3B2216]/10 shadow-sm hover:border-[#B5743E]/40 md:hover:-translate-y-1 duration-300">

                        <div class="relative overflow-hidden">

                            <img src="{{ $menu['img'] }}"
                                 alt="{{ $menu['name'] }}"
                                 loading="lazy"
                                 class="h-56 md:h-60 xl:h-56 w-full object-cover group-hover:scale-105 duration-500">

                        </div>

                        <div class="p-5 md:p-6">

                            <div class="flex items-start justify-between gap-4">

                                <h3 class="font-['Playfair_Display'] text-2xl font-bold leading-tight text-[#3B2216]">
                                    {{ $menu['name'] }}
                                </h3>

                                <p class="font-bold text-[#3B2216] whitespace-nowrap">
                                    {{ $menu['price'] }}
                                </p>

                            </div>

                            <p class="mt-3 text-sm leading-relaxed text-[#3B2216]/60">
                                {{ $menu['desc'] }}
                            </p>

                            <a href="https://wa.me/628123747398?text=Halo%20Brew%20Haven,%20saya%20mau%20order%20{{ urlencode($menu['name']) }}"
                               class="inline-flex mt-5 text-sm font-bold text-[#B5743E] hover:text-[#3B2216] duration-300">
                                order this →
                            </a>

                        </div>

                    </div>

                @endforeach

            </div>

            {{-- Mobile Slider --}}
            <div class="md:hidden overflow-hidden">

                <div id="menuSlider"
                     class="flex gap-4 transition-transform duration-500">

                    @foreach ($menus as $menu)

                        <div class="min-w-[calc(50%-8px)] bg-[#F7EFE4] rounded-[1.5rem] overflow-hidden border border-[#3B2216]/10 shadow-sm">

                            <img src="{{ $menu['img'] }}"
                                 alt="{{ $menu['name'] }}"
                                 class="h-44 w-full object-cover">

                            <div class="p-4">

                                <div class="flex items-start justify-between gap-3">

                                    <h3 class="font-['Playfair_Display'] text-xl font-bold text-[#3B2216]">
                                        {{ $menu['name'] }}
                                    </h3>

                                    <p class="font-bold text-[#3B2216] text-sm">
                                        {{ $menu['price'] }}
                                    </p>

                                </div>

                                <p class="mt-2 text-xs leading-relaxed text-[#3B2216]/60">
                                    {{ $menu['desc'] }}
                                </p>

                                <a href="https://wa.me/628123747398?text=Halo%20Brew%20Haven,%20saya%20mau%20order%20{{ urlencode($menu['name']) }}"
                                   class="inline-flex mt-4 text-xs font-bold text-[#B5743E]">
                                    order this →
                                </a>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>

<script>
    const slider = document.getElementById('menuSlider');

    if (window.innerWidth < 768) {

        let currentSlide = 0;

        setInterval(() => {

            currentSlide++;

            if (currentSlide > 1) {
                currentSlide = 0;
            }

            slider.style.transform = `translateX(-${currentSlide * 52}%)`;

        }, 3000);

    }
</script>