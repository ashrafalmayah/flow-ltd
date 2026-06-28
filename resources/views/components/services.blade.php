<section id="services" class="py-28 relative overflow-hidden bg-slate-50 scroll-mt-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        
        <!-- Header -->
        <x-fade-up class="text-center mb-16">
            <div class="inline-flex items-center gap-2 text-xs font-semibold tracking-[0.18em] uppercase mb-4 text-steel">
                <span class="w-6 h-px bg-steel"></span>
                {{ __('What We Offer') }}
            </div>
            <h2 class="text-4xl lg:text-5xl font-black text-navy">
                {{ __('Our Services') }}
            </h2>
        </x-fade-up>

        <!-- Services Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Service 1: Cleaning Services -->
            <div x-data="{ shown: false }"
                 x-init="new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; } }, { rootMargin: '0px 0px -60px 0px' }).observe($el)"
                 :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 -translate-y-12 scale-95'"
                 class="flex flex-col h-full transition-all duration-[900ms] ease-[cubic-bezier(0.34,1.56,0.64,1)]"
                 style="transition-delay: 0ms; will-change: transform, opacity;">
                <x-service-card :title="__('Cleaning Services')" class="h-full">
                    <x-slot name="icon">
                        <svg class="w-10 h-10 text-navy" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Semi-translucent backing bubble -->
                            <circle cx="20" cy="28" r="14" fill="currentColor" fill-opacity="0.1" />
                            <!-- Cleaning bubbles -->
                            <circle cx="12" cy="32" r="3" fill="#00f0ff" fill-opacity="0.6" class="animate-pulse" />
                            <circle cx="16" cy="18" r="2" fill="#38bdf8" fill-opacity="0.4" class="animate-pulse" style="animation-delay: 0.5s;" />
                            <circle cx="28" cy="34" r="2" fill="#0ea5e9" fill-opacity="0.5" class="animate-pulse" style="animation-delay: 1s;" />
                            <!-- Main Sparkle 1 -->
                            <path d="M 32 4 L 34 14 L 44 16 L 34 18 L 32 28 L 30 18 L 20 16 L 30 14 Z" fill="#00f0ff" class="animate-sparkle-pulse" />
                            <!-- Small Sparkle 2 -->
                            <path d="M 12 10 L 13 15 L 18 16 L 13 17 L 12 22 L 11 17 L 6 16 L 11 15 Z" fill="#38bdf8" class="animate-sparkle-pulse" style="animation-delay: 0.8s; transform-origin: 12px 16px;" />
                        </svg>
                    </x-slot>
                </x-service-card>
            </div>
 
            <!-- Service 2: Loading and Unloading Services -->
            <div x-data="{ shown: false }"
                 x-init="new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; } }, { rootMargin: '0px 0px -60px 0px' }).observe($el)"
                 :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 -translate-y-12 scale-95'"
                 class="flex flex-col h-full transition-all duration-[900ms] ease-[cubic-bezier(0.34,1.56,0.64,1)]"
                 style="transition-delay: 150ms; will-change: transform, opacity;">
                <x-service-card :title="__('Loading and Unloading Services')" class="h-full">
                    <x-slot name="icon">
                        <svg class="w-10 h-10 text-navy animate-float-drone" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Drone Body Frame -->
                            <path d="M 14 20 L 34 20 M 24 16 L 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            <!-- Motors -->
                            <rect x="10" y="17" width="4" height="6" rx="1" fill="currentColor" />
                            <rect x="34" y="17" width="4" height="6" rx="1" fill="currentColor" />
                            
                            <!-- Rotors (spinning) -->
                            <g class="animate-rotor" style="transform-origin: 12px 17px;">
                                <ellipse cx="12" cy="17" rx="8" ry="1.5" stroke="#38bdf8" stroke-width="1" fill="#38bdf8" fill-opacity="0.1" />
                                <line x1="4" y1="17" x2="20" y2="17" stroke="#00f0ff" stroke-width="0.75" />
                            </g>
                            <g class="animate-rotor" style="transform-origin: 36px 17px; animation-delay: -0.3s;">
                                <ellipse cx="36" cy="17" rx="8" ry="1.5" stroke="#38bdf8" stroke-width="1" fill="#38bdf8" fill-opacity="0.1" />
                                <line x1="28" y1="17" x2="44" y2="17" stroke="#00f0ff" stroke-width="0.75" />
                            </g>
                            
                            <!-- Translucent 3D Crate/Box -->
                            <g transform="translate(16, 24)">
                                <polygon points="4,4 12,4 12,12 4,12" fill="currentColor" fill-opacity="0.1" />
                                <polygon points="0,6 8,2 16,6 8,10" fill="currentColor" fill-opacity="0.15" stroke="currentColor" stroke-width="0.75" />
                                <polygon points="0,6 8,10 8,18 0,14" fill="currentColor" fill-opacity="0.2" stroke="currentColor" stroke-width="0.75" />
                                <polygon points="8,10 16,6 16,14 8,18" fill="currentColor" fill-opacity="0.25" stroke="currentColor" stroke-width="0.75" />
                            </g>
                        </svg>
                    </x-slot>
                </x-service-card>
            </div>
 
            <!-- Service 3: Maintenance and Operation Services -->
            <div x-data="{ shown: false }"
                 x-init="new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; } }, { rootMargin: '0px 0px -60px 0px' }).observe($el)"
                 :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 -translate-y-12 scale-95'"
                 class="flex flex-col h-full transition-all duration-[900ms] ease-[cubic-bezier(0.34,1.56,0.64,1)]"
                 style="transition-delay: 300ms; will-change: transform, opacity;">
                <x-service-card :title="__('Maintenance and Operation Services')" class="h-full">
                    <x-slot name="icon">
                        <svg class="w-10 h-10 text-navy" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Big Gear (Clockwise) -->
                            <g class="animate-gear-cw" style="transform-origin: 18px 18px;">
                                <circle cx="18" cy="18" r="10" stroke="currentColor" stroke-width="2" fill="currentColor" fill-opacity="0.1" />
                                <circle cx="18" cy="18" r="4" fill="white" stroke="currentColor" stroke-width="1.25" />
                                <path d="M 18 4 L 18 8 M 18 28 L 18 32 M 4 18 L 8 18 M 28 18 L 32 18" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" />
                                <path d="M 8 8 L 11 11 M 25 25 L 28 28 M 8 28 L 11 25 M 25 8 L 28 11" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" />
                            </g>
                            
                            <!-- Small Gear (Counter-Clockwise) -->
                            <g class="animate-gear-ccw" style="transform-origin: 32px 32px;">
                                <circle cx="32" cy="32" r="7" stroke="#38bdf8" stroke-width="1.5" fill="#38bdf8" fill-opacity="0.15" />
                                <circle cx="32" cy="32" r="2.5" fill="white" stroke="#38bdf8" stroke-width="1" />
                                <path d="M 32 22 L 32 25 M 32 39 L 32 42 M 22 32 L 25 32 M 39 32 L 42 32" stroke="#38bdf8" stroke-width="2" stroke-linecap="round" />
                                <path d="M 25 25 L 27 27 M 37 37 L 39 39 M 25 37 L 27 35 M 37 25 L 39 27" stroke="#38bdf8" stroke-width="2" stroke-linecap="round" />
                            </g>
                        </svg>
                    </x-slot>
                </x-service-card>
            </div>
 
            <!-- Service 4: Contracting and Projects Services -->
            <div x-data="{ shown: false }"
                 x-init="new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; } }, { rootMargin: '0px 0px -60px 0px' }).observe($el)"
                 :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 -translate-y-12 scale-95'"
                 class="flex flex-col h-full transition-all duration-[900ms] ease-[cubic-bezier(0.34,1.56,0.64,1)]"
                 style="transition-delay: 450ms; will-change: transform, opacity;">
                <x-service-card :title="__('Contracting and Projects Services')" class="h-full">
                    <x-slot name="icon">
                        <svg class="w-10 h-10 text-navy" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Grid Blueprint background -->
                            <rect x="4" y="4" width="40" height="40" rx="4" fill="currentColor" fill-opacity="0.05" stroke="currentColor" stroke-width="0.75" stroke-dasharray="2 2" />
                            <line x1="4" y1="24" x2="44" y2="24" stroke="currentColor" stroke-width="0.5" stroke-opacity="0.15" />
                            <line x1="24" y1="4" x2="24" y2="44" stroke="currentColor" stroke-width="0.5" stroke-opacity="0.15" />
                            
                            <!-- Semi-drawn circle -->
                            <circle cx="24" cy="28" r="10" stroke="#38bdf8" stroke-width="1.25" stroke-opacity="0.6" stroke-dasharray="40 20" class="animate-pulse" />
                            
                            <!-- Drafting Compass (Wiggling) -->
                            <g class="animate-compass-needle" style="transform-origin: 24px 8px;">
                                <circle cx="24" cy="8" r="2.2" fill="currentColor" />
                                <path d="M 24 5 L 24 8" stroke="currentColor" stroke-width="1.5" />
                                <path d="M 23 8 L 15 32" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <path d="M 25 8 L 33 32" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                <circle cx="33" cy="32" r="1" fill="#38bdf8" />
                            </g>
                        </svg>
                    </x-slot>
                </x-service-card>
            </div>
 
        </div>
    </div>
</section>
