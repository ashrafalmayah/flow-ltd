<nav x-data="{ scrolled: false, mobileOpen: false }"
     @scroll.window="scrolled = (window.scrollY > 48)"
     :class="scrolled ? 'bg-white/95 backdrop-blur-md shadow-[0_1px_0_rgba(27,58,107,0.08)] py-3' : 'bg-transparent py-4'"
     class="fixed top-0 inset-x-0 z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 flex items-center justify-between">
        
        <!-- Logo -->
        <a href="#home">
            <div x-show="!scrolled">
                <x-logo :onDark="true" />
            </div>
            <div x-show="scrolled" style="display: none;">
                <x-logo :onDark="false" />
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <div class="hidden md:flex items-center gap-8">
            <a href="#home" :class="scrolled ? 'text-navy hover:text-navy/80' : 'text-white/85 hover:text-white'" class="text-sm font-medium transition-colors duration-200">{{ __('Home') }}</a>
            <a href="#services" :class="scrolled ? 'text-navy hover:text-navy/80' : 'text-white/85 hover:text-white'" class="text-sm font-medium transition-colors duration-200">{{ __('Our Services') }}</a>
            <a href="#achievements" :class="scrolled ? 'text-navy hover:text-navy/80' : 'text-white/85 hover:text-white'" class="text-sm font-medium transition-colors duration-200">{{ __('Our Achievements') }}</a>
            <a href="#partners" :class="scrolled ? 'text-navy hover:text-navy/80' : 'text-white/85 hover:text-white'" class="text-sm font-medium transition-colors duration-200">{{ __('Our Partners') }}</a>
            <a href="{{ __('/blog/en') }}" :class="scrolled ? 'text-navy hover:text-navy/80' : 'text-white/85 hover:text-white'" class="text-sm font-medium transition-colors duration-200">{{ __('Blog') }}</a>
            <a href="#contact" :class="scrolled ? 'text-navy hover:text-navy/80' : 'text-white/85 hover:text-white'" class="text-sm font-medium transition-colors duration-200">{{ __('Contact Us') }}</a>
            
            <!-- Language Switcher styled button -->
            @foreach (config('app.available_locales') as $locale_name => $available_locale)
                @if ($available_locale !== app()->getLocale())
                    <a href="/{{ $available_locale }}"
                       :class="scrolled ? 'bg-navy text-white hover:bg-navy/90' : 'bg-white/15 text-white border border-white/30 hover:bg-white/25'"
                       class="text-xs font-semibold px-5 py-2 rounded-full transition-all duration-200">
                        {{ $locale_name }}
                    </a>
                @endif
            @endforeach
        </div>

        <!-- Mobile Menu Toggle Button -->
        <button
            class="md:hidden p-2 rounded-lg transition-colors"
            :class="scrolled ? 'text-navy' : 'text-white'"
            @click="mobileOpen = !mobileOpen"
            aria-label="Toggle Menu"
        >
            <!-- Menu Icon -->
            <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Close Icon -->
            <svg x-show="mobileOpen" style="display: none;" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Panel -->
    <div
        x-show="mobileOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 max-h-0"
        x-transition:enter-end="opacity-100 max-h-screen"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 max-h-screen"
        x-transition:leave-end="opacity-0 max-h-0"
        class="md:hidden overflow-hidden bg-white border-t border-navy/8 animate-fade-in"
        style="display: none;"
    >
        <div class="px-6 py-4 space-y-1">
            <a href="#home" @click="mobileOpen = false" class="flex items-center justify-between py-3 text-sm font-medium border-b border-navy/5 text-navy hover:text-navy-dark">
                {{ __('Home') }}
                <svg class="w-4 h-4 text-steel transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </a>
            <a href="#services" @click="mobileOpen = false" class="flex items-center justify-between py-3 text-sm font-medium border-b border-navy/5 text-navy hover:text-navy-dark">
                {{ __('Our Services') }}
                <svg class="w-4 h-4 text-steel transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </a>
            <a href="#achievements" @click="mobileOpen = false" class="flex items-center justify-between py-3 text-sm font-medium border-b border-navy/5 text-navy hover:text-navy-dark">
                {{ __('Our Achievements') }}
                <svg class="w-4 h-4 text-steel transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </a>
            <a href="#partners" @click="mobileOpen = false" class="flex items-center justify-between py-3 text-sm font-medium border-b border-navy/5 text-navy hover:text-navy-dark">
                {{ __('Our Partners') }}
                <svg class="w-4 h-4 text-steel transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </a>
            <a href="#contact" @click="mobileOpen = false" class="flex items-center justify-between py-3 text-sm font-medium border-b border-navy/5 text-navy hover:text-navy-dark">
                {{ __('Contact Us') }}
                <svg class="w-4 h-4 text-steel transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </a>
            <!-- Mobile Language Switcher link -->
            @foreach (config('app.available_locales') as $locale_name => $available_locale)
                @if ($available_locale !== app()->getLocale())
                    <a href="/{{ $available_locale }}" class="flex items-center justify-between py-3 text-sm font-medium text-navy hover:text-navy-dark">
                        <span>{{ $locale_name }}</span>
                        <svg class="w-4 h-4 text-steel transform rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </a>
                @endif
            @endforeach
        </div>
    </div>
</nav>
