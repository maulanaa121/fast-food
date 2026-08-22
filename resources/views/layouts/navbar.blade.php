<nav class="fixed top-0 left-0 z-50 w-full bg-[#1B1D29] font-poppins">
    <div class="mx-auto flex h-[106px] max-w-[1920px] items-center justify-between px-6 sm:px-10 lg:px-12">

        {{-- Logo --}}
        <a href="/" class="text-[42px] font-bold leading-none text-[#FF6527]">
            Food
        </a>

        {{-- Desktop Menu --}}
        <div class="hidden items-center gap-5 md:gap-10 sm:flex xl:gap-12">
            <a href="/"
                class="text-[18px] md:text-[22px] font-medium md:font-semibold text-[#FF6527] transition duration-200 hover:text-[#FF6527]/80">
                Home
            </a>

            <a href="#about"
                class="text-[18px] md:text-[22px] font-medium md:font-semibold text-white transition duration-200 hover:text-[#FF6527]">
                About
            </a>

            <a href="#menu"
                class="text-[18px] md:text-[22px] font-medium md:font-semibold text-white transition duration-200 hover:text-[#FF6527]">
                Menu
            </a>

            <a href="#services"
                class="text-[18px] md:text-[22px] font-medium md:font-semibold text-white transition duration-200 hover:text-[#FF6527]">
                Services
            </a>

            <a href="#contact"
                class="text-[18px] md:text-[22px] font-medium md:font-semibold text-white transition duration-200 hover:text-[#FF6527]">
                Contact
            </a>
        </div>

        {{-- Mobile Button --}}
        <button
            id="mobile-menu-button"
            type="button"
            class="inline-flex items-center justify-center rounded-lg p-2 text-white transition hover:bg-white/10 sm:hidden"
            aria-controls="mobile-menu"
            aria-expanded="false"
        >
            <span class="sr-only">Open menu</span>

            {{-- Hamburger Icon --}}
            <svg
                id="menu-open-icon"
                class="h-7 w-7"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>

            {{-- Close Icon --}}
            <svg
                id="menu-close-icon"
                class="hidden h-7 w-7"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="max-h-0 translate-x-8 overflow-hidden border-t border-white/10 bg-[#1B1D29] opacity-0 transition-all duration-300 ease-out sm:hidden" >
        <div class="space-y-1 px-6 py-5 sm:px-10">

    <a href="/"
        class="block rounded-lg px-4 py-3 text-lg font-semibold text-[#FF6527] transition hover:bg-white/5">
        Home
    </a>

    <a href="#about"
        class="block rounded-lg px-4 py-3 text-lg font-semibold text-white transition hover:bg-white/5 hover:text-[#FF6527]">
        About
    </a>

    <a href="#menu"
        class="block rounded-lg px-4 py-3 text-lg font-semibold text-white transition hover:bg-white/5 hover:text-[#FF6527]">
        Menu
    </a>

    <a href="#services"
        class="block rounded-lg px-4 py-3 text-lg font-semibold text-white transition hover:bg-white/5 hover:text-[#FF6527]">
        Services
    </a>

    <a href="#contact"
        class="block rounded-lg px-4 py-3 text-lg font-semibold text-white transition hover:bg-white/5 hover:text-[#FF6527]">
        Contact
    </a>

</div>
    </div>
</nav>

<script>
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('menu-open-icon');
    const closeIcon = document.getElementById('menu-close-icon');

    menuButton.addEventListener('click', () => {
    const isOpen = menuButton.getAttribute('aria-expanded') === 'true';

    menuButton.setAttribute('aria-expanded', !isOpen);

    mobileMenu.classList.toggle('max-h-0');
    mobileMenu.classList.toggle('max-h-[500px]');

    mobileMenu.classList.toggle('translate-x-8');
    mobileMenu.classList.toggle('translate-x-0');

    mobileMenu.classList.toggle('opacity-0');
    mobileMenu.classList.toggle('opacity-100');

    openIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
});
</script>