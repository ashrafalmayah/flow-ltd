<header class="sticky top-0 z-50 w-full bg-primary text-white">
    <nav class="relative mx-auto flex max-w-5xl items-center md:justify-center py-4">
        <ul :class="mobileMenuActive ? 'rtl:!right-0 !left-0' : ''"
            class="absolute -left-full rtl:left-auto rtl:-right-full md:static bottom-0 h-screen md:h-auto top-0 w-full md:w-auto gap-1 md:gap-4 bg-primary md:bg-transparent md:pt-0 pt-16 text-center text-white transition-all duration-500 flex md:flex-row flex-col text-2xl md:text-lg">
            <li @click="mobileMenuActive = false" class="md:rounded-md bg-white text-primary hover:bg-background"><a
                    class="block px-4 py-3 md:py-1" href="#">{{ __('Home') }}</a></li>
            <li @click="mobileMenuActive = false" class="md:rounded-md bg-white text-primary hover:bg-background"><a
                    class="block px-4 py-3 md:py-1" href="#message">{{ __('Our Message') }}</a></li>
            <li @click="mobileMenuActive = false" class="md:rounded-md bg-white text-primary hover:bg-background"><a
                    class="block px-4 py-3 md:py-1" href="#services">{{ __('Our Services') }}</a></li>
            <li @click="mobileMenuActive = false" class="md:rounded-md bg-white text-primary hover:bg-background"><a
                    class="block px-4 py-3 md:py-1" href="#achievements">{{ __('Our Achievements') }}</a></li>
        </ul>
        <x-contact-us-button @click="mobileMenuActive = false"
            class="bg-white !text-primary absolute rtl:left-4 rtl:right-auto right-4 z-20" />

        {{-- Mobile Menu --}}
        <span @click="mobileMenuActive = !mobileMenuActive;" class="mx-6 block cursor-pointer md:hidden z-[60]">
            <svg x-show="!mobileMenuActive" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25"
                height="25" viewBox="0 0 50 50" style="fill:#fff;">
                <path
                    d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z">
                </path>
            </svg>
            <svg x-show="mobileMenuActive" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25"
                height="25" viewBox="0 0 50 50" style="fill:#fff;">
                <path
                    d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z">
                </path>
            </svg>
        </span>

        <x-language-switcher />

    </nav>
</header>
