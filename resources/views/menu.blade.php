@extends('layouts.app')

@section('content')

@include('sections.navbar')

<section id="menu" class="pt-28 sm:pt-32 px-4 pb-16 md:pb-20 bg-[#EFE7DA]">

    <div class="max-w-7xl mx-auto">

        {{-- Header --}}
        <div class="rounded-[1.5rem] md:rounded-[2rem] bg-[#F7EFE4] border border-[#3B2216]/10 overflow-hidden mb-10 md:mb-12">
            <div class="grid lg:grid-cols-[1fr_0.9fr] items-center">

                <div class="p-6 sm:p-8 md:p-14">
                    <p class="text-[#B5743E] uppercase tracking-[3px] text-xs font-bold mb-4">
                        brew haven menu
                    </p>

                    <h1 class="font-['Playfair_Display'] text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-[1.1] text-[#3B2216]">
                        Pilihan rasa
                        <span class="block italic text-[#B5743E]">
                            buat mood kamu.
                        </span>
                    </h1>

                    <p class="mt-5 md:mt-6 max-w-xl text-sm sm:text-base text-[#3B2216]/60 leading-relaxed">
                        Dari kopi klasik, signature drinks, sampai pastry hangat.
                        Semua dibuat fresh biar pas buat nugas, ngobrol, atau me-time.
                    </p>
                </div>

                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93"
                     alt="Coffee Menu"
                     class="h-64 sm:h-80 lg:h-full w-full object-cover">

            </div>
        </div>

        @php
            $menus = [
                ['name' => 'Iced Latte', 'category' => 'Coffee', 'desc' => 'Smooth, creamy, and always a mood.', 'price' => '28k', 'img' => asset('images/menu/icelatte.jpg'), 'tag' => 'best seller'],
                ['name' => 'Cappuccino', 'category' => 'Coffee', 'desc' => 'Bold espresso with a soft milky touch.', 'price' => '26k', 'img' => asset('images/menu/cappuchino.jpg'), 'tag' => 'classic'],
                ['name' => 'Mocha', 'category' => 'Coffee', 'desc' => 'Rich chocolate with coffee goodness.', 'price' => '30k', 'img' => asset('images/menu/mocha.jpg'), 'tag' => 'sweet'],
                ['name' => 'Caramel Macchiato', 'category' => 'Signature', 'desc' => 'Milky coffee with soft caramel notes.', 'price' => '32k', 'img' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735', 'tag' => 'signature'],
                ['name' => 'Matcha Latte', 'category' => 'Non Coffee', 'desc' => 'Earthy matcha with creamy milk.', 'price' => '30k', 'img' => 'https://images.unsplash.com/photo-1515823064-d6e0c04616a7', 'tag' => 'non coffee'],
                ['name' => 'Butter Croissant', 'category' => 'Pastry', 'desc' => 'Flaky, buttery, perfect with coffee.', 'price' => '24k', 'img' => 'https://images.unsplash.com/photo-1555507036-ab1f4038808a', 'tag' => 'pastry'],
            ];
        @endphp

        {{-- Filter & Search --}}
        <div class="mb-8 md:mb-10">

            {{-- Mobile Filter --}}
            <div class="md:hidden space-y-3">

                <div class="relative">
                    <input id="menuSearchMobile"
                        type="text"
                        placeholder="Cari menu..."
                        class="w-full bg-[#F7EFE4] border border-[#3B2216]/10 focus:border-[#B5743E] rounded-full pl-5 pr-12 py-3 text-base text-[#3B2216] placeholder:text-[#3B2216]/35 outline-none">

                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-[#3B2216]/35">
                        ⌕
                    </span>
                </div>

                <button id="categoryBtn"
                        type="button"
                        class="w-full bg-[#F7EFE4] border border-[#3B2216]/10 rounded-full px-5 py-3 flex items-center justify-between text-[#3B2216] text-sm font-semibold">
                    <span id="selectedCategoryText">All Menu</span>
                    <span>☰</span>
                </button>

                <div id="categoryMenu"
                    class="hidden bg-[#F7EFE4] border border-[#3B2216]/10 rounded-[1.5rem] p-2">
                    @foreach (['All Menu' => 'all', 'Coffee' => 'Coffee', 'Non Coffee' => 'Non Coffee', 'Pastry' => 'Pastry', 'Signature' => 'Signature'] as $label => $category)
                        <button type="button"
                                class="menu-filter-mobile w-full text-left px-4 py-3 rounded-2xl text-sm font-semibold text-[#3B2216] hover:bg-[#EADBC7]"
                                data-label="{{ $label }}"
                                data-category="{{ $category }}">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>

            </div>

            {{-- Desktop Filter --}}
            <div class="hidden md:flex md:items-center md:justify-between gap-4">

                <div class="flex flex-wrap gap-3">
                    @foreach (['All Menu' => 'all', 'Coffee' => 'Coffee', 'Non Coffee' => 'Non Coffee', 'Pastry' => 'Pastry', 'Signature' => 'Signature'] as $label => $category)
                        <button type="button"
                                class="menu-filter px-5 py-2.5 rounded-full text-sm font-semibold duration-300
                                {{ $category === 'all'
                                    ? 'bg-[#3B2216] text-[#FFF8EF]'
                                    : 'bg-[#F7EFE4] border border-[#3B2216]/10 text-[#3B2216] hover:bg-[#EADBC7]' }}"
                                data-category="{{ $category }}">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>

                <div class="relative w-72 lg:w-80 shrink-0">
                    <input id="menuSearchDesktop"
                        type="text"
                        placeholder="Cari menu favorit kamu..."
                        class="w-full bg-[#F7EFE4] border border-[#3B2216]/10 focus:border-[#B5743E] rounded-full pl-5 pr-12 py-3 text-sm text-[#3B2216] placeholder:text-[#3B2216]/35 outline-none">

                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-[#3B2216]/35">
                        ⌕
                    </span>
                </div>

            </div>

        </div>

        {{-- Menu Grid --}}
        <div id="menuGrid" class="grid grid-cols-2 xl:grid-cols-3 gap-4 sm:gap-5 md:gap-6">

            @foreach ($menus as $menu)

                <div class="menu-card group bg-[#F7EFE4] rounded-[1.3rem] md:rounded-[2rem] overflow-hidden border border-[#3B2216]/10 hover:border-[#B5743E]/40 md:hover:-translate-y-1 active:scale-[0.98] duration-300"
                     data-category="{{ $menu['category'] }}"
                     data-name="{{ strtolower($menu['name']) }}"
                     data-desc="{{ strtolower($menu['desc']) }}">

                    <div class="relative overflow-hidden">
                        <img src="{{ $menu['img'] }}"
                             alt="{{ $menu['name'] }}"
                             loading="lazy"
                             class="aspect-[4/5] md:h-64 w-full object-cover group-hover:scale-105 duration-500">

                        <div class="absolute top-3 left-3 md:top-4 md:left-4 px-2.5 md:px-3 py-1 rounded-full bg-[#FFF8EF]/90 text-[#3B2216] text-[9px] md:text-xs font-bold">
                            {{ $menu['tag'] }}
                        </div>
                    </div>

                    <div class="p-4 md:p-6">

                        <p class="text-[9px] sm:text-[10px] md:text-xs uppercase tracking-[2px] text-[#B5743E] font-bold mb-2">
                            {{ $menu['category'] }}
                        </p>

                        <div class="flex items-start justify-between gap-3">
                            <h3 class="font-['Playfair_Display'] text-xl md:text-2xl font-bold text-[#3B2216] leading-tight">
                                {{ $menu['name'] }}
                            </h3>

                            <p class="font-bold text-[#3B2216] text-sm md:text-base whitespace-nowrap">
                                {{ $menu['price'] }}
                            </p>
                        </div>

                        <p class="mt-3 md:mt-4 text-[11px] sm:text-xs md:text-sm leading-relaxed text-[#3B2216]/60">
                            {{ $menu['desc'] }}
                        </p>

                        <a href="https://wa.me/628123456789?text=Halo%20Brew%20Haven,%20saya%20mau%20order%20{{ urlencode($menu['name']) }}"
                           class="inline-flex mt-5 md:mt-6 text-xs md:text-sm font-bold text-[#B5743E] hover:text-[#3B2216] duration-300">
                            order this →
                        </a>

                    </div>

                </div>

            @endforeach

        </div>

        {{-- Empty State --}}
        <div id="emptyMenu"
             class="hidden mt-10 rounded-[1.5rem] md:rounded-[2rem] bg-[#F7EFE4] border border-[#3B2216]/10 p-8 md:p-10 text-center">

            <h3 class="font-['Playfair_Display'] text-3xl font-bold text-[#3B2216]">
                Menu tidak ditemukan
            </h3>

            <p class="mt-3 text-sm md:text-base text-[#3B2216]/60">
                Coba cari dengan kata lain atau pilih kategori berbeda.
            </p>

        </div>

    </div>

</section>

@include('sections.footer')

<style>
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const desktopButtons = document.querySelectorAll('.menu-filter');
        const mobileButtons = document.querySelectorAll('.menu-filter-mobile');
        const menuCards = document.querySelectorAll('.menu-card');

        const searchMobile = document.getElementById('menuSearchMobile');
        const searchDesktop = document.getElementById('menuSearchDesktop');

        const emptyMenu = document.getElementById('emptyMenu');
        const categoryBtn = document.getElementById('categoryBtn');
        const categoryMenu = document.getElementById('categoryMenu');
        const selectedCategoryText = document.getElementById('selectedCategoryText');

        let selectedCategory = 'all';
        let searchValue = '';

        function filterMenu() {
            let visibleCount = 0;

            menuCards.forEach(card => {
                const category = card.dataset.category;
                const name = card.dataset.name;
                const desc = card.dataset.desc;

                const matchCategory = selectedCategory === 'all' || category === selectedCategory;
                const matchSearch = name.includes(searchValue) || desc.includes(searchValue);

                card.classList.toggle('hidden', !(matchCategory && matchSearch));

                if (matchCategory && matchSearch) visibleCount++;
            });

            emptyMenu.classList.toggle('hidden', visibleCount !== 0);
        }

        function setDesktopActive(category) {
            desktopButtons.forEach(button => {
                button.classList.remove('bg-[#3B2216]', 'text-[#FFF8EF]');
                button.classList.add('bg-[#F7EFE4]', 'border', 'border-[#3B2216]/10', 'text-[#3B2216]');

                if (button.dataset.category === category) {
                    button.classList.remove('bg-[#F7EFE4]', 'border', 'border-[#3B2216]/10', 'text-[#3B2216]');
                    button.classList.add('bg-[#3B2216]', 'text-[#FFF8EF]');
                }
            });
        }

        desktopButtons.forEach(button => {
            button.addEventListener('click', function () {
                selectedCategory = this.dataset.category;
                setDesktopActive(selectedCategory);
                filterMenu();
            });
        });

        categoryBtn.addEventListener('click', function () {
            categoryMenu.classList.toggle('hidden');
        });

        mobileButtons.forEach(button => {
            button.addEventListener('click', function () {
                selectedCategory = this.dataset.category;
                selectedCategoryText.textContent = this.dataset.label;
                categoryMenu.classList.add('hidden');
                setDesktopActive(selectedCategory);
                filterMenu();
            });
        });

        [searchMobile, searchDesktop].forEach(input => {
            if (!input) return;

            input.addEventListener('input', function () {
                searchValue = this.value.toLowerCase().trim();

                if (searchMobile && searchMobile !== this) searchMobile.value = this.value;
                if (searchDesktop && searchDesktop !== this) searchDesktop.value = this.value;

                filterMenu();
            });
        });
    });
</script>

@endsection