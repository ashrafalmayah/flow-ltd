<section id="achievements" class="py-28 bg-white scroll-mt-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        
        <!-- Header -->
        <div class="text-center mb-16 flex flex-col items-center justify-center">
            <x-fade-up delay="0">
                <div class="inline-flex items-center gap-2 text-xs font-semibold tracking-[0.18em] uppercase mb-4 text-steel">
                    <span class="w-6 h-px bg-steel"></span>
                    {{ __('What We Achieved') }}
                </div>
            </x-fade-up>
            <x-fade-up delay="150">
                <h2 class="text-4xl lg:text-5xl font-black text-navy">
                    {{ __('Some of Our Achievements') }}
                </h2>
            </x-fade-up>
        </div>

        <!-- Grid of Achievements -->
        <div class="grid md:grid-cols-3 gap-6">
            <div x-data="{ shown: false }"
                 x-init="new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; } }, { rootMargin: '0px 0px -60px 0px' }).observe($el)"
                 :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 -translate-y-12 scale-95'"
                 class="flex flex-col h-full transition-all duration-[900ms] ease-[cubic-bezier(0.34,1.56,0.64,1)]"
                 style="transition-delay: 0ms; will-change: transform, opacity;">
                <x-achievement-card
                    year="2022"
                    :title="__('LEAP Technical Conference')"
                    :src="asset('assets/images/achievements/leap-icon.jpg')"
                />
            </div>
            
            <div x-data="{ shown: false }"
                 x-init="new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; } }, { rootMargin: '0px 0px -60px 0px' }).observe($el)"
                 :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 -translate-y-12 scale-95'"
                 class="flex flex-col h-full transition-all duration-[900ms] ease-[cubic-bezier(0.34,1.56,0.64,1)]"
                 style="transition-delay: 150ms; will-change: transform, opacity;">
                <x-achievement-card
                    year="2022"
                    :title="__('Saudi International Falcons and Hunting Exhibition')"
                    :src="asset('assets/images/achievements/falcons-icon.avif')"
                />
            </div>
            
            <div x-data="{ shown: false }"
                 x-init="new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; } }, { rootMargin: '0px 0px -60px 0px' }).observe($el)"
                 :class="shown ? 'opacity-100 translate-y-0 scale-100' : 'opacity-0 -translate-y-12 scale-95'"
                 class="flex flex-col h-full transition-all duration-[900ms] ease-[cubic-bezier(0.34,1.56,0.64,1)]"
                 style="transition-delay: 300ms; will-change: transform, opacity;">
                <x-achievement-card
                    year="2023"
                    :title="__('Saudi International Digital Marketing & E-Commerce expo')"
                    :src="asset('assets/images/achievements/sidmc.png')"
                />
            </div>
        </div>
        
    </div>
</section>

