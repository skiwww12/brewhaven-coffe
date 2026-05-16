<nav id="navbar"
     class="fixed top-0 left-0 w-full z-50 px-4 pt-4 transition-transform duration-500 ease-in-out">

    <div id="navbarBox"
         class="max-w-7xl mx-auto bg-[#F7EFE4]/88 backdrop-blur-xl border border-[#3B2216]/10 rounded-[2rem] px-5 md:px-10 py-4 shadow-sm transition-all duration-300">

        <div class="flex items-center justify-between">

            <a href="/"
               class="font-['Playfair_Display'] text-2xl md:text-3xl font-bold tracking-tight text-[#3B2216]">
                brew<span class="text-[#B5743E]">haven</span>
            </a>

            <ul class="hidden lg:flex items-center gap-8 text-sm font-medium text-[#3B2216]/80">
                <li><a href="/" class="hover:text-[#B5743E] duration-300">Home</a></li>
                <li><a href="/menu" class="hover:text-[#B5743E] duration-300">Menu</a></li>
                <li><a href="/aboutus" class="hover:text-[#B5743E] duration-300">About</a></li>
                <li><a href="/gallery" class="hover:text-[#B5743E] duration-300">Gallery</a></li>
                <li><a href="/#contact" class="hover:text-[#B5743E] duration-300">Contact</a></li>
            </ul>

            <a href="https://wa.me/628123456789"
               class="hidden lg:inline-flex bg-[#3B2216] hover:bg-[#5D3321] duration-300 text-[#FFF8EF] px-6 py-3 rounded-full text-sm font-semibold">
                order a cup
            </a>

            <button id="menuBtn"
                    class="lg:hidden w-11 h-11 rounded-full border border-[#3B2216]/10 bg-[#FFF8EF] flex items-center justify-center text-[#3B2216]">
                ☰
            </button>

        </div>

        <div id="mobileMenu" class="hidden lg:hidden pt-5">
            <div class="flex flex-col gap-2 text-sm font-medium text-[#3B2216]/80">
                <a href="/" class="px-4 py-3 rounded-2xl hover:bg-[#EADBC7]">Home</a>
                <a href="/menu" class="px-4 py-3 rounded-2xl hover:bg-[#EADBC7]">Menu</a>
                <a href="/aboutus" class="px-4 py-3 rounded-2xl hover:bg-[#EADBC7]">About</a>
                <a href="/gallery" class="px-4 py-3 rounded-2xl hover:bg-[#EADBC7]">Gallery</a>
                <a href="/#contact" class="px-4 py-3 rounded-2xl hover:bg-[#EADBC7]">Contact</a>

                <a href="https://wa.me/628123456789"
                   class="mt-3 bg-[#3B2216] text-[#FFF8EF] px-5 py-3 rounded-full text-center font-semibold">
                    order a cup
                </a>
            </div>
        </div>

    </div>

</nav>

<script>
    const navbar = document.getElementById('navbar');
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const navbarBox = document.getElementById('navbarBox');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');

        if (!mobileMenu.classList.contains('hidden')) {
            navbar.classList.remove('-translate-y-full');
        }
    });

    window.addEventListener('scroll', () => {
        const isMobileMenuOpen = !mobileMenu.classList.contains('hidden');

        if (window.scrollY > 80 && !isMobileMenuOpen) {
            navbar.classList.add('-translate-y-full');
        } else {
            navbar.classList.remove('-translate-y-full');
        }

        if (window.scrollY > 30) {
            navbarBox.classList.add('bg-[#F7EFE4]', 'shadow-md');
            navbarBox.classList.remove('bg-[#F7EFE4]/88', 'shadow-sm');
        } else {
            navbarBox.classList.remove('bg-[#F7EFE4]', 'shadow-md');
            navbarBox.classList.add('bg-[#F7EFE4]/88', 'shadow-sm');
        }
    });
</script>