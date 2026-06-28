<section id="home" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 50)" class="relative min-h-screen flex items-center overflow-hidden bg-navy-dark">
    <!-- Background cityscape layer (Static) -->
    <div class="absolute inset-0 bg-cover bg-bottom bg-no-repeat"
         style="background-image: url('{{ asset('assets/images/background.png') }}'); background-color: #0E2248;">
    </div>

    <!-- White Van layer (Drives down the road on scroll: positive Y (down) and left/right X (forward)) -->
    <div id="parallax-van" 
         x-data="{
             scrollY: 0,
             ticking: false,
             init() {
                 const update = () => {
                     this.scrollY = window.scrollY;
                     this.ticking = false;
                 };
                 window.addEventListener('scroll', () => {
                     if (!this.ticking) {
                         window.requestAnimationFrame(update);
                         this.ticking = true;
                     }
                 }, { passive: true });
                 update();
             },
             get vanStyle() {
                 const multX = 0.65;
                 const multY = 0.15;
                 const tx = -this.scrollY * multX;
                 const ty = this.scrollY * multY;
                 return `transform: translate3d(${tx}px, ${ty}px, 0);`;
             }
         }"
         :style="vanStyle"
         class="absolute bottom-[4%] ltr:right-[2%] rtl:left-[12%] w-[68%] sm:w-[55%] lg:w-[48%] max-w-[650px] aspect-square pointer-events-none z-[2] transform-gpu"
         style="will-change: transform;">
        <img src="{{ asset('assets/images/Van.png') }}" class="w-full h-full object-contain filter drop-shadow-[0_15px_30px_rgba(0,0,0,0.4)]" alt="Flow Van">
    </div>

    <!-- Layered overlay (z-[4] to merge background and van under the gradient atmosphere) -->
    <div class="absolute inset-0 bg-gradient-to-l rtl:bg-gradient-to-r from-transparent via-navy-dark/70 to-navy-dark/95 z-[4]"></div>
    
    <!-- Top gradient for nav (z-[4]) -->
    <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-navy-dark/60 to-transparent z-[4]"></div>

    <!-- Data-Flow Overlay (z-[3]) -->
    <div class="absolute inset-0 z-[3] pointer-events-none opacity-30">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Connection Paths -->
            <path d="M 20 60 L 40 40 L 60 70 L 80 30" fill="none" stroke="#38bdf8" stroke-width="0.15" class="kufic-flow-line" />
            <path d="M 15 35 L 35 55 L 65 45 L 85 65" fill="none" stroke="#00f0ff" stroke-width="0.1" class="kufic-flow-line-rev" />
            <path d="M 30 75 L 50 25 L 70 50" fill="none" stroke="#0ea5e9" stroke-width="0.1" class="kufic-flow-line" />
            
            <!-- Pulsing Data Nodes -->
            <circle cx="20" cy="60" r="0.8" fill="#00f0ff" class="animate-pulse" />
            <circle cx="20" cy="60" r="1.8" fill="none" stroke="#00f0ff" stroke-width="0.05" class="animate-ping" />
            
            <circle cx="40" cy="40" r="0.8" fill="#38bdf8" class="animate-pulse" />
            
            <circle cx="60" cy="70" r="1" fill="#0ea5e9" class="animate-pulse" />
            <circle cx="60" cy="70" r="2" fill="none" stroke="#0ea5e9" stroke-width="0.05" class="animate-ping" style="animation-duration: 2s;" />

            <circle cx="80" cy="30" r="0.8" fill="#00f0ff" class="animate-pulse" />
            
            <circle cx="35" cy="55" r="0.7" fill="#00f0ff" class="animate-pulse" />

            <circle cx="65" cy="45" r="0.9" fill="#38bdf8" class="animate-pulse" />
            
            <circle cx="50" cy="25" r="1" fill="#00f0ff" class="animate-pulse" />
            <circle cx="50" cy="25" r="2.2" fill="none" stroke="#00f0ff" stroke-width="0.05" class="animate-ping" style="animation-duration: 1.5s;" />
        </svg>
    </div>

    <!-- Geometric pattern overlay -->
    <x-kufic-pattern opacity="0.07" />

    <!-- Accent line element (z-[5]) -->
    <div class="absolute left-0 top-1/4 w-1 h-40 bg-steel opacity-50 z-[5]"></div>

    <!-- Content -->
    <div class="relative max-w-7xl mx-auto px-6 lg:px-10 py-32 w-full z-[10]">

        <div class="max-w-2xl text-white">
            
            <div :class="shown ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-5'"
                 class="flex items-center gap-3 mb-8 transition-all duration-[800ms] ease-out delay-200">
                <span class="text-xs font-semibold tracking-[0.2em] uppercase text-steel">
                    {{ __('FLOW COMPANY LTD') }} · {{ __('Flow Company Ltd') }}
                </span>
            </div>

            <h1 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
                class="text-4xl sm:text-5xl lg:text-6xl font-black leading-[1.1] mb-6 transition-all duration-[900ms] ease-[cubic-bezier(0.22,1,0.36,1)] delay-[350ms]">
                {{ __('Your Trusted Partner') }}
                <br />
                <span class="text-steel">{{ __('for Support Services') }}</span>
            </h1>

            <p :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
               class="text-base sm:text-lg leading-relaxed mb-10 max-w-lg text-white/65 transition-all duration-[800ms] ease-out delay-[550ms]">
                {{ __('A Saudi company specialized in business and support services (maintenance, cleaning, and operation)') }}
            </p>

            <div :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-5'"
                 class="flex gap-4 flex-wrap transition-all duration-[700ms] ease-out delay-[700ms]">
                <a href="#contact"
                   class="shimmer-btn shimmer-btn-dark px-8 py-3.5 rounded-full text-sm font-bold bg-white text-navy transition-all duration-200 hover:scale-105 hover:shadow-xl shadow-black/20">
                    {{ __('Contact Us') }}
                </a>
                <a href="#services"
                   class="px-8 py-3.5 rounded-full text-sm font-bold bg-transparent text-white/85 border border-white/25 transition-all duration-200 hover:bg-white/10">
                    {{ __('Discover Our Services') }}
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll cue -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1 animate-bounce duration-1000">
        <svg class="w-5 h-5 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </div>
</section>
