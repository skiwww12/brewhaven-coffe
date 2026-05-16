@extends('layouts.app')

@section('content')

@include('sections.navbar')

<section class="pt-28 sm:pt-32 px-4 pb-16 md:pb-20 bg-[#EFE7DA]">

    <div class="max-w-7xl mx-auto">

        <div class="relative rounded-[1.5rem] md:rounded-[2rem] bg-[#2B1A12] text-[#FFF8EF] overflow-hidden px-5 sm:px-8 md:px-14 py-8 sm:py-10 md:py-14">

            <div class="absolute top-6 right-4 sm:right-8 text-[#FFF8EF]/10 font-['Playfair_Display'] text-[5rem] sm:text-[8rem] md:text-[13rem] leading-none pointer-events-none">
                gallery
            </div>

            {{-- Header --}}
            <div class="relative z-10 grid lg:grid-cols-[1.1fr_0.9fr] gap-6 md:gap-12 items-end mb-10 md:mb-14">

                <div>
                    <p class="text-[#C9844E] uppercase tracking-[3px] text-[11px] md:text-xs font-bold mb-4 md:mb-5">
                        brew haven gallery
                    </p>

                    <h1 class="font-['Playfair_Display'] text-5xl sm:text-6xl md:text-8xl leading-[0.95]">
                        Little corners,
                        <span class="block italic text-[#E8C29A]">
                            quiet stories.
                        </span>
                    </h1>
                </div>

                <p class="text-sm sm:text-base text-[#FFF8EF]/60 leading-relaxed max-w-md lg:pb-3">
                    Bukan sekadar foto tempat. Ini potongan suasana Brew Haven:
                    meja kecil, cahaya hangat, kopi yang pelan, dan ruang yang
                    terasa dekat.
                </p>

            </div>

            @php
                $photos = [
                    [
                        'img' => 'https://images.unsplash.com/photo-1554118811-1e0d58224f24',
                        'title' => 'corner seat',
                        'desc' => 'tempat duduk yang sering jadi pilihan buat diam sebentar.'
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1521017432531-fbd92d768814',
                        'title' => 'table talks',
                        'desc' => 'meja kecil, cerita panjang, dan kopi yang belum habis.'
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1525610553991-2bede1a236e2',
                        'title' => 'soft light',
                        'desc' => 'cahaya hangat yang jatuh pelan di sudut ruangan.'
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1511081692775-05d0f180a065',
                        'title' => 'slow cup',
                        'desc' => 'secangkir kopi yang menemani jam-jam tenang.'
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1559925393-8be0ec4767c8',
                        'title' => 'front mood',
                        'desc' => 'kesan pertama sebelum masuk dan duduk lebih lama.'
                    ],
                ];
            @endphp

            {{-- Editorial Layout --}}
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 sm:gap-5 md:gap-7">

                {{-- Left note --}}
                <div class="lg:col-span-3 flex flex-col justify-between gap-5 md:gap-8 order-2 lg:order-1">
                    <div class="border-t border-[#FFF8EF]/15 pt-5">
                        <p class="font-['Playfair_Display'] text-4xl sm:text-5xl text-[#E8C29A]">
                            01
                        </p>

                        <p class="mt-3 sm:mt-4 text-sm leading-relaxed text-[#FFF8EF]/55">
                            Setiap sudut dibuat untuk terasa sederhana,
                            bukan sempurna. Karena tempat yang nyaman biasanya
                            punya sedikit rasa manusia di dalamnya.
                        </p>
                    </div>

                    <div class="relative overflow-hidden rounded-[1.25rem] md:rounded-[1.5rem] border border-[#FFF8EF]/10">
                        <img src="{{ $photos[3]['img'] }}"
                             alt="{{ $photos[3]['title'] }}"
                             loading="lazy"
                             class="h-56 sm:h-64 md:h-72 lg:h-64 w-full object-cover opacity-90">
                    </div>

                </div>

                {{-- Main image --}}
                <div class="md:col-span-2 lg:col-span-6 order-1 lg:order-2">
                    <div class="group relative overflow-hidden rounded-[1.5rem] md:rounded-[2rem] border border-[#FFF8EF]/10">
                        <img src="{{ $photos[0]['img'] }}"
                             alt="{{ $photos[0]['title'] }}"
                             loading="lazy"
                             class="h-[340px] sm:h-[430px] md:h-[500px] lg:h-[560px] w-full object-cover group-hover:scale-[1.03] duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#2B1A12]/70 via-transparent to-transparent"></div>

                        <div class="absolute bottom-5 left-5 right-5 md:bottom-6 md:left-6 md:right-6">
                            <p class="text-[#C9844E] uppercase tracking-[3px] text-[10px] md:text-xs font-bold">
                                featured corner
                            </p>

                            <h2 class="mt-2 font-['Playfair_Display'] text-3xl sm:text-4xl md:text-5xl leading-tight">
                                {{ $photos[0]['title'] }}
                            </h2>

                            <p class="mt-2 text-xs sm:text-sm text-[#FFF8EF]/65 max-w-md">
                                {{ $photos[0]['desc'] }}
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Right column --}}
                <div class="lg:col-span-3 space-y-4 md:space-y-7 order-3">

                    <div class="relative overflow-hidden rounded-[1.25rem] md:rounded-[1.5rem] border border-[#FFF8EF]/10 group">
                        <img src="{{ $photos[1]['img'] }}"
                             alt="{{ $photos[1]['title'] }}"
                             loading="lazy"
                             class="h-56 sm:h-64 md:h-72 lg:h-56 w-full object-cover group-hover:scale-[1.04] duration-700">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#2B1A12]/60 via-transparent to-transparent"></div>

                        <p class="absolute bottom-4 left-4 right-4 font-['Playfair_Display'] text-2xl md:text-3xl">
                            {{ $photos[1]['title'] }}
                        </p>
                    </div>

                    <div class="rounded-[1.25rem] md:rounded-[1.5rem] border border-[#FFF8EF]/10 bg-[#FFF8EF]/5 p-5 md:p-6">
                        <p class="font-['Playfair_Display'] text-4xl text-[#E8C29A]">
                            02
                        </p>

                        <p class="mt-3 md:mt-4 text-sm leading-relaxed text-[#FFF8EF]/55">
                            Kami tidak mencari dekorasi yang terlalu sempurna.
                            Kami mencari rasa yang membuat orang ingin tinggal
                            sedikit lebih lama.
                        </p>
                    </div>

                </div>

                {{-- Bottom wide image --}}
                <div class="md:col-span-2 lg:col-span-7 lg:col-start-2 order-4">
                    <div class="relative overflow-hidden rounded-[1.5rem] md:rounded-[2rem] border border-[#FFF8EF]/10 group">
                        <img src="{{ $photos[2]['img'] }}"
                             alt="{{ $photos[2]['title'] }}"
                             loading="lazy"
                             class="h-[260px] sm:h-[320px] md:h-[360px] lg:h-[380px] w-full object-cover group-hover:scale-[1.03] duration-700">

                        <div class="absolute inset-0 bg-gradient-to-r from-[#2B1A12]/65 via-transparent to-transparent"></div>

                        <div class="absolute bottom-5 left-5 right-5 md:bottom-6 md:left-6 md:right-6">
                            <h3 class="font-['Playfair_Display'] text-3xl sm:text-4xl text-[#FFF8EF]">
                                {{ $photos[2]['title'] }}
                            </h3>

                            <p class="mt-2 text-xs sm:text-sm text-[#FFF8EF]/65 max-w-md">
                                {{ $photos[2]['desc'] }}
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Bottom text --}}
                <div class="lg:col-span-4 flex items-center order-5">
                    <div class="border-l border-[#C9844E]/40 pl-5 py-2">
                        <p class="font-['Playfair_Display'] text-4xl sm:text-5xl text-[#E8C29A]">
                            03
                        </p>

                        <h3 class="mt-3 md:mt-4 font-['Playfair_Display'] text-3xl md:text-4xl leading-tight">
                            coffee, light,
                            <span class="block italic text-[#E8C29A]">
                                and slow hours.
                            </span>
                        </h3>

                        <p class="mt-3 md:mt-4 text-sm leading-relaxed text-[#FFF8EF]/55">
                            Brew Haven dirancang bukan untuk terlihat ramai,
                            tapi untuk terasa dekat.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

@include('sections.footer')

@endsection