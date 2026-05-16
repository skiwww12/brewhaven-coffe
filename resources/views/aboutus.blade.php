@extends('layouts.app')

@section('content')

@include('sections.navbar')

<section class="pt-32 px-4 pb-20 bg-[#EFE7DA] overflow-hidden">

    <div class="max-w-7xl mx-auto">

        {{-- Hero --}}
        <div class="reveal relative rounded-[2rem] overflow-hidden bg-[#F7EFE4] border border-[#3B2216]/10 mb-12">

            <div class="grid lg:grid-cols-[1fr_0.95fr] items-stretch">

                <div class="p-7 sm:p-10 md:p-14 flex flex-col justify-center">
                    <p class="text-[#B5743E] uppercase tracking-[3px] text-xs font-bold mb-4">
                        about brew haven
                    </p>

                    <h1 class="font-['Playfair_Display'] text-5xl sm:text-6xl md:text-7xl leading-[1.03] text-[#3B2216]">
                        Cerita kecil
                        <span class="block italic text-[#B5743E]">
                            dari secangkir kopi.
                        </span>
                    </h1>

                    <p class="mt-6 max-w-xl text-sm sm:text-base text-[#3B2216]/65 leading-relaxed">
                        Brew Haven hadir sebagai ruang hangat untuk orang-orang yang ingin
                        menikmati kopi dengan pelan. Bukan cuma tempat membeli minuman,
                        tapi tempat untuk berhenti sebentar.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3 text-sm text-[#3B2216]/70">
                        <span class="rounded-full border border-[#3B2216]/10 px-4 py-2">slow coffee</span>
                        <span class="rounded-full border border-[#3B2216]/10 px-4 py-2">warm space</span>
                        <span class="rounded-full border border-[#3B2216]/10 px-4 py-2">human touch</span>
                    </div>
                </div>

                <div class="relative min-h-[360px] lg:min-h-[560px] overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24"
                         alt="Brew Haven Cafe"
                         loading="lazy"
                         class="h-full w-full object-cover scale-[1.03]">

                    <div class="absolute inset-0 bg-gradient-to-t from-[#2B1A12]/45 via-transparent to-transparent"></div>

                    
                </div>

            </div>

        </div>

        {{-- Story --}}
        <div class="grid lg:grid-cols-[0.8fr_1.2fr] gap-6 md:gap-8 mb-12">

            <div class="reveal bg-[#3B2216] text-[#FFF8EF] rounded-[2rem] p-8 md:p-12 flex flex-col justify-between min-h-[320px]">
                <div>
                    <p class="text-[#D99A5F] uppercase tracking-[3px] text-xs font-bold mb-4">
                        our journey
                    </p>

                    <h2 class="font-['Playfair_Display'] text-4xl md:text-5xl leading-tight">
                        Dari ide sederhana,
                        <span class="block italic text-[#D99A5F]">
                            jadi tempat bertemu.
                        </span>
                    </h2>
                </div>

                <p class="mt-8 text-sm text-[#FFF8EF]/55 leading-relaxed">
                    Setiap sudutnya dibuat pelan-pelan, seperti kopi yang baik:
                    tidak terburu-buru, tapi meninggalkan rasa.
                </p>
            </div>

            <div class="reveal bg-[#F7EFE4] rounded-[2rem] border border-[#3B2216]/10 p-8 md:p-12">
                <p class="font-['Playfair_Display'] text-3xl md:text-4xl leading-snug text-[#3B2216]">
                    Kami percaya café yang baik bukan hanya soal rasa kopi,
                    tapi juga soal bagaimana seseorang merasa ketika berada di dalamnya.
                </p>

                <div class="mt-8 grid md:grid-cols-2 gap-6 text-sm sm:text-base text-[#3B2216]/65 leading-relaxed">
                    <p>
                        Perjalanan Brew Haven dimulai dari kecintaan terhadap kopi dan
                        ruang-ruang kecil yang nyaman.
                    </p>

                    <p>
                        Dari memilih biji kopi, menyusun menu, menentukan warna interior,
                        sampai membangun suasana yang tenang, semuanya dibuat dengan perhatian kecil.
                    </p>
                </div>
            </div>

        </div>

        {{-- Timeline --}}
        <div class="reveal mb-12">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 mb-8">
                <div>
                    <p class="text-[#B5743E] uppercase tracking-[3px] text-xs font-bold mb-3">
                        timeline
                    </p>

                    <h2 class="font-['Playfair_Display'] text-4xl md:text-6xl text-[#3B2216] leading-tight">
                        Perjalanan kami
                    </h2>
                </div>

                <p class="max-w-md text-sm sm:text-base text-[#3B2216]/60 leading-relaxed">
                    Bukan perjalanan yang besar, tapi perjalanan kecil yang tumbuh
                    dari obrolan, rasa, dan orang-orang yang datang.
                </p>
            </div>

            <div class="relative bg-[#F7EFE4] rounded-[2rem] border border-[#3B2216]/10 p-8 md:p-12 overflow-hidden">

                <div class="hidden md:block absolute top-[92px] left-12 right-12 h-px bg-[#B5743E]/25"></div>

                <div class="relative grid md:grid-cols-3 gap-8 md:gap-10">
                    @php
                        $timelines = [
                            ['year' => '2022', 'short' => '22', 'title' => 'Ide Pertama', 'desc' => 'Dimulai dari obrolan kecil tentang tempat ngopi yang nyaman, hangat, dan tidak terburu-buru.'],
                            ['year' => '2023', 'short' => '23', 'title' => 'Brew Haven Dibuka', 'desc' => 'Café pertama kami mulai menyambut pelanggan dengan menu kopi klasik dan suasana cozy.'],
                            ['year' => '2024', 'short' => '24', 'title' => 'Tumbuh Bersama', 'desc' => 'Brew Haven menjadi ruang kecil untuk komunitas, pekerja kreatif, mahasiswa, dan pecinta kopi.'],
                        ];
                    @endphp

                    @foreach ($timelines as $timeline)
                        <div class="timeline-item">
                            <div class="w-12 h-12 rounded-full bg-[#3B2216] text-[#FFF8EF] flex items-center justify-center font-bold">
                                {{ $timeline['short'] }}
                            </div>

                            <p class="mt-5 text-[#B5743E] font-bold">
                                {{ $timeline['year'] }}
                            </p>

                            <h3 class="mt-2 font-bold text-[#3B2216]">
                                {{ $timeline['title'] }}
                            </h3>

                            <p class="mt-2 text-sm leading-relaxed text-[#3B2216]/60">
                                {{ $timeline['desc'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

        {{-- Values --}}
        <div class="grid md:grid-cols-3 gap-6 mb-10">

            <div class="reveal value-card bg-[#F7EFE4] rounded-[2rem] border border-[#3B2216]/10 p-8">
                <p class="text-[#B5743E] text-sm font-bold mb-5">01</p>
                <h3 class="font-['Playfair_Display'] text-3xl font-bold text-[#3B2216]">Quality Beans</h3>
                <p class="mt-4 text-[#3B2216]/60 leading-relaxed">
                    Kami memilih biji kopi dengan karakter yang seimbang, agar setiap cup terasa nyaman dinikmati kapan saja.
                </p>
            </div>

            <div class="reveal value-card bg-[#F7EFE4] rounded-[2rem] border border-[#3B2216]/10 p-8">
                <p class="text-[#B5743E] text-sm font-bold mb-5">02</p>
                <h3 class="font-['Playfair_Display'] text-3xl font-bold text-[#3B2216]">Warm Space</h3>
                <p class="mt-4 text-[#3B2216]/60 leading-relaxed">
                    Ruang kami dirancang untuk terasa hangat, ramah, dan tidak intimidating untuk siapa pun yang datang.
                </p>
            </div>

            <div class="reveal value-card bg-[#F7EFE4] rounded-[2rem] border border-[#3B2216]/10 p-8">
                <p class="text-[#B5743E] text-sm font-bold mb-5">03</p>
                <h3 class="font-['Playfair_Display'] text-3xl font-bold text-[#3B2216]">Human Touch</h3>
                <p class="mt-4 text-[#3B2216]/60 leading-relaxed">
                    Dari pelayanan sampai racikan kopi, kami ingin semuanya terasa personal, sederhana, dan tulus.
                </p>
            </div>

        </div>

    </div>

</section>

@include('sections.footer')

<style>
    .reveal {
        opacity: 0;
        transform: translateY(22px);
        transition: opacity 700ms ease, transform 700ms ease;
    }

    .reveal.show {
        opacity: 1;
        transform: translateY(0);
    }

    .value-card {
        transition: transform 300ms ease, border-color 300ms ease;
    }

    .value-card:hover {
        transform: translateY(-6px);
        border-color: rgba(181, 116, 62, 0.35);
    }

    .timeline-item {
        opacity: 0;
        transform: translateY(16px);
        animation: timelineFade 700ms ease forwards;
    }

    .timeline-item:nth-child(2) {
        animation-delay: 160ms;
    }

    .timeline-item:nth-child(3) {
        animation-delay: 320ms;
    }

    @keyframes timelineFade {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const reveals = document.querySelectorAll('.reveal');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        }, {
            threshold: 0.15
        });

        reveals.forEach((item) => observer.observe(item));
    });
</script>

@endsection