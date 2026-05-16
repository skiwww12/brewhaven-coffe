<footer class="px-4 pb-4 bg-[#EFE7DA]">

    <div class="max-w-7xl mx-auto bg-[#2B1A12] text-[#FFF8EF] rounded-[1.8rem] md:rounded-[2rem] px-6 sm:px-8 md:px-12 py-10 md:py-12 overflow-hidden">

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-12">

            {{-- Brand --}}
            <div class="sm:col-span-2 lg:col-span-1">

                <h2 class="font-['Playfair_Display'] text-3xl md:text-4xl font-bold leading-none">
                    brew<span class="text-[#C9844E]">haven</span>
                </h2>

                <p class="mt-4 text-sm md:text-base text-[#FFF8EF]/60 leading-relaxed max-w-xs">
                    slow coffee. soft place.
                    dibuat buat nemenin hari yang kadang terlalu rame.
                </p>

            </div>

            {{-- Navigation --}}
            <div>

                <p class="font-bold text-sm md:text-base mb-4">
                    Navigation
                </p>

                <ul class="space-y-3 text-sm text-[#FFF8EF]/60">

                    <li>
                        <a href="/menu"
                           class="hover:text-[#C9844E] duration-300">
                            Menu
                        </a>
                    </li>

                    <li>
                        <a href="/aboutus"
                           class="hover:text-[#C9844E] duration-300">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="/gallery"
                           class="hover:text-[#C9844E] duration-300">
                            Gallery
                        </a>
                    </li>

                    <li>
                        <a href="/#contact"
                           class="hover:text-[#C9844E] duration-300">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Info --}}
            <div>

                <p class="font-bold text-sm md:text-base mb-4">
                    Info
                </p>

                <ul class="space-y-3 text-sm text-[#FFF8EF]/60">

                    <li>
                        <a href="#"
                           class="hover:text-[#C9844E] duration-300">
                            Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-[#C9844E] duration-300">
                            Terms of Service
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-[#C9844E] duration-300">
                            FAQ
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-[#C9844E] duration-300">
                            Support
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Newsletter --}}
            <div>

                <p class="font-bold text-sm md:text-base leading-relaxed max-w-xs">
                    Dapatkan update & promo menarik
                </p>

                {{-- Input --}}
                <form action="{{ route('subscribe') }}"
                method="POST"
                class="mt-5">

                @csrf

                <div class="flex items-center rounded-full border border-[#C9844E]/20 overflow-hidden bg-white/[0.03] focus-within:border-[#C9844E]/50 duration-300">

                    <input type="email"
                        name="email"
                        required
                        placeholder="email kamu"
                        class="w-full bg-transparent px-4 py-3 text-sm outline-none placeholder:text-white/30">

                    <button type="submit"
                            class="px-5 text-[#C9844E] hover:text-[#E2A56B] duration-300">
                        →
                    </button>

                </div>

                @error('email')
                    <p class="mt-3 text-xs text-red-300">
                        {{ $message }}
                    </p>
                @enderror

                @if (session('success'))
                    <p class="mt-3 text-xs text-[#C9844E]">
                        {{ session('success') }}
                    </p>
                @endif

            </form>

                {{-- Social --}}
                <div class="flex gap-3 mt-6">

                    {{-- Instagram --}}
                    <a href="https://instagram.com/brewhaven.id"
                    target="_blank"
                    class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-[#FFF8EF]/70 hover:border-pink-400/40 hover:text-pink-400 duration-300">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="currentColor"
                            viewBox="0 0 24 24">

                            <path d="M7.75 2C4.57 2 2 4.57 2 7.75v8.5C2 19.43 4.57 22 7.75 22h8.5C19.43 22 22 19.43 22 16.25v-8.5C22 4.57 19.43 2 16.25 2h-8.5zm0 2h8.5C18.32 4 20 5.68 20 7.75v8.5c0 2.07-1.68 3.75-3.75 3.75h-8.5C5.68 20 4 18.32 4 16.25v-8.5C4 5.68 5.68 4 7.75 4zm8.88 1.5a.88.88 0 100 1.75.88.88 0 000-1.75zM12 7a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6z"/>

                        </svg>

                    </a>

                    {{-- TikTok --}}
                    <a href="https://tiktok.com/@brewhaven.id"
                    target="_blank"
                    class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-[#FFF8EF]/70 hover:border-white/40 hover:text-white duration-300">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="currentColor"
                            viewBox="0 0 24 24">

                            <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.12v13.59a2.9 2.9 0 11-2.9-2.9c.24 0 .47.03.69.08V9.6a6.01 6.01 0 00-.69-.04A6.02 6.02 0 1015.82 15V8.23a8 8 0 004.77 1.58V6.69z"/>

                        </svg>

                    </a>

                    {{-- WhatsApp --}}
                    <a href="https://wa.me/628123456789"
                    target="_blank"
                    class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-[#FFF8EF]/70 hover:border-[#25D366]/40 hover:text-[#25D366] duration-300">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4"
                            fill="currentColor"
                            viewBox="0 0 24 24">

                            <path d="M20.52 3.48A11.82 11.82 0 0012.05 0C5.5 0 .16 5.34.16 11.89c0 2.1.55 4.15 1.6 5.96L0 24l6.34-1.66a11.9 11.9 0 005.7 1.45h.01c6.55 0 11.89-5.34 11.89-11.89 0-3.18-1.24-6.17-3.42-8.42zm-8.47 18.3h-.01a9.88 9.88 0 01-5.03-1.37l-.36-.21-3.76.99 1-3.66-.24-.38a9.86 9.86 0 01-1.52-5.27c0-5.47 4.45-9.92 9.93-9.92 2.65 0 5.14 1.03 7.01 2.9a9.86 9.86 0 012.91 7.01c0 5.48-4.45 9.92-9.93 9.92z"/>

                        </svg>

                    </a>

                </div>

            </div>

        </div>

        {{-- Bottom --}}
        <div class="mt-10 md:mt-12 pt-5 md:pt-6 border-t border-white/10 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">

            <p class="text-[11px] md:text-xs text-white/40 text-center sm:text-left">
                © 2025 Brew Haven. All rights reserved.
            </p>

            <p class="text-[11px] md:text-xs text-white/30 text-center sm:text-right">
                crafted with warmth in Bandung.
            </p>

        </div>

    </div>

</footer>