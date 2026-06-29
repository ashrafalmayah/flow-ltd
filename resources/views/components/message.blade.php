<section id="message" class="py-28 bg-white overflow-hidden scroll-mt-20">
    <div class="max-w-7xl mx-auto px-6 lg:px-10">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            
            <!-- Text Content -->
            <div class="flex flex-col">
                <x-fade-up delay="0">
                    <div class="inline-flex items-center gap-2 text-xs font-semibold tracking-[0.18em] uppercase mb-4 text-steel">
                        <span class="w-6 h-px bg-steel"></span>
                        {{ __('Who We Are') }}
                    </div>
                </x-fade-up>
                
                <x-fade-up delay="150">
                    <h2 class="text-4xl lg:text-5xl font-black mb-6 leading-tight text-navy">
                        {{ __('Our Message') }}
                    </h2>
                </x-fade-up>
                
                <x-fade-up delay="300">
                    <p class="text-base sm:text-lg leading-relaxed mb-8 text-slate-600">
                        {{ __('Provide an integrated package characterized by professionalism and sustainability to meet all the needs of local and regional organizations for business and support services, maintenance, cleaning, and operation') }}
                    </p>
                </x-fade-up>
            </div>

            <!-- Visual Content -->
            <x-fade-up delay="200" class="relative">
                <!-- Main Image -->
                <img src="{{ asset('assets/images/message.avif') }}" alt="Flow Message" class="w-full aspect-[4/3] rounded-2xl bg-cover bg-center shadow-xl bg-slate-100">
                
                <!-- Accent Border -->
                <div class="absolute -top-3 ltr:-right-3 rtl:-left-3 w-full h-full rounded-2xl border-2 pointer-events-none border-steel/25"></div>

                <!-- Logo Badge (Crystalline Glassmorphism & Orbiting Particles) -->
                <div class="absolute -bottom-6 ltr:-left-6 rtl:-right-6 w-28 h-28 rounded-2xl flex flex-col items-center justify-center gap-1 shadow-2xl backdrop-blur-md bg-navy/85 border border-white/20 overflow-visible group">
                    <!-- Rotating Shimmer reflection overlay -->
                    <div class="absolute inset-0 rounded-2xl overflow-hidden pointer-events-none">
                        <div class="absolute inset-0 w-[200%] h-[200%] bg-gradient-to-tr from-transparent via-white/20 to-transparent -translate-x-full -translate-y-full animate-[shimmer-sweep_6s_infinite_linear]"></div>
                    </div>
                    
                    <!-- Inner glow ring -->
                    <div class="absolute inset-0.5 rounded-2xl border border-white/10 pointer-events-none"></div>

                    <!-- Orbiting Particle Trail 1 -->
                    <div class="absolute inset-[-15px] pointer-events-none rounded-full border border-white/5 animate-[spin_8s_linear_infinite]">
                        <div class="absolute top-0 left-1/2 w-1.5 h-1.5 bg-steel rounded-full shadow-[0_0_8px_#8A9BAD] -translate-x-1/2"></div>
                    </div>
                    <!-- Orbiting Particle Trail 2 -->
                    <div class="absolute inset-[-25px] pointer-events-none rounded-full border border-white/5 animate-[spin_12s_linear_infinite_reverse]">
                        <div class="absolute bottom-0 left-1/2 w-1 h-1 bg-white rounded-full shadow-[0_0_8px_#fff] -translate-x-1/2"></div>
                    </div>
                    
                    <!-- The logo itself (glowing turning gem) -->
                    <div class="transition-transform duration-500 group-hover:scale-110 animate-crystalline filter drop-shadow-[0_0_8px_rgba(255,255,255,0.8)]">
                        <x-flw-mark size="52" :onDark="true" />
                    </div>
                </div>
            </x-fade-up>
            
        </div>
    </div>
</section>

