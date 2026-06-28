<style>
/* Digital pattern flow line keyframes */
.kufic-flow-line {
    stroke-dasharray: 40 80;
    animation: kufic-dash-flow 15s linear infinite;
}
.kufic-flow-line-rev {
    stroke-dasharray: 30 90;
    animation: kufic-dash-flow-rev 20s linear infinite;
}
.kufic-flow-rect {
    stroke-dasharray: 40 80;
    animation: kufic-dash-flow 25s linear infinite;
}

@keyframes kufic-dash-flow {
    to { stroke-dashoffset: -120; }
}
@keyframes kufic-dash-flow-rev {
    to { stroke-dashoffset: 120; }
}
</style>

<footer id="contact" class="relative overflow-hidden bg-navy-dark text-white flex flex-col justify-between py-12 md:py-6">
    <!-- Kufic pattern background overlay -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-[0.05] animate-[pulse_10s_ease-in-out_infinite]"
         style="mask-image: linear-gradient(to bottom, transparent, black 15%, black 85%, transparent); -webkit-mask-image: linear-gradient(to bottom, transparent, black 15%, black 85%, transparent);">
        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="kufic-tile" x="0" y="0" width="120" height="120" patternUnits="userSpaceOnUse">
                    <!-- Glowing diamond grids -->
                    <rect x="10" y="10" width="100" height="100" fill="none" stroke="#38bdf8" stroke-opacity="0.3" stroke-width="1.25" class="kufic-flow-rect" transform="rotate(45 60 60)" />
                    <rect x="25" y="25" width="70" height="70" fill="none" stroke="#0ea5e9" stroke-opacity="0.25" stroke-width="1" class="kufic-flow-rect" style="animation-delay: -5s;" transform="rotate(45 60 60)" />
                    <rect x="40" y="40" width="40" height="40" fill="none" stroke="#00f0ff" stroke-opacity="0.4" stroke-width="0.75" class="kufic-flow-rect" style="animation-delay: -10s;" transform="rotate(45 60 60)" />
                    
                    <!-- Main intersecting data channels -->
                    <line x1="60" y1="0" x2="60" y2="120" stroke="#00f0ff" stroke-opacity="0.4" stroke-width="0.75" class="kufic-flow-line" />
                    <line x1="0" y1="60" x2="120" y2="60" stroke="#38bdf8" stroke-opacity="0.3" stroke-width="0.75" class="kufic-flow-line-rev" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#kufic-tile)" />
        </svg>
    </div>

    <!-- CTA band -->
    <div class="relative py-12 md:py-6 border-b border-white/5 flex-grow flex items-center z-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center w-full">
            <div x-data="{ shown: false }" 
                 x-init="new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; } }, { rootMargin: '0px 0px -60px 0px' }).observe($el)"
                 :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-9'"
                 class="transition-all duration-[750ms] ease-[cubic-bezier(0.22,1,0.36,1)]">
                
                <div class="inline-flex items-center gap-2 text-xs font-semibold tracking-[0.18em] uppercase mb-4 text-steel">
                    <span class="w-6 h-px bg-steel"></span>
                    ابدأ الآن
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-black mb-3 text-white">
                    تواصل معنا
                </h2>
                
                <p class="mb-8 max-w-md mx-auto text-sm sm:text-base text-white/55">
                    يسعدنا خدمتك والإجابة على استفساراتك في أي وقت
                </p>
                
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="tel:0590727730"
                       class="flex items-center gap-2.5 px-7 py-3 rounded-full text-sm font-bold bg-white text-navy transition-all duration-200 hover:scale-105 shadow-xl shadow-black/25">
                        <svg class="w-4 h-4 text-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25z" />
                        </svg>
                        اتصل بنا (0590727730)
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer grid -->
    <div class="relative max-w-7xl mx-auto px-6 lg:px-10 py-10 md:py-6 z-10 w-full">
        <div class="grid md:grid-cols-3 gap-12 text-right rtl:text-right ltr:text-left">
            
            <!-- Brand -->
            <div>
                <div class="flex items-center gap-3 justify-start" dir="rtl">
                    <svg width="44" height="44" viewBox="0 0 162.18495 162.18426" fill="none" class="text-white" aria-hidden="true">
                        <g transform="translate(951.5575,-22.66666)">
                            <g transform="translate(111.92622,19.104672)">
                                <path d="m 0,0 -9.603,-9.603 -16.005,16.005 3.202,3.201 12.803,-12.803 3.201,3.201 -6.401,6.402 3.2,3.2 z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-926.90812,76.117848)" />
                                <path d="M 0,0 -3.201,3.201 0,6.403 3.201,3.201 Z m -19.205,32.011 -9.603,-9.603 3.2,-3.201 6.402,6.402 L -3.2,9.603 -9.602,3.201 0.001,-6.402 9.604,3.201 Z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-914.10398,88.921848)" />
                                <path d="M 0,0 -3.201,-3.201 -6.403,0 -3.201,3.201 Z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-943.97918,93.188919)" />
                                <path d="m 0,0 -3.201,3.201 3.2,3.201 L 3.2,3.2 Z M 0,12.803 -9.603,3.2 l 6.402,-6.401 -3.202,-3.202 -22.407,22.408 3.201,3.201 6.403,-6.403 3.201,3.202 -9.603,9.603 -9.603,-9.603 L -6.402,-12.804 9.603,3.2 Z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-931.17518,105.99305)" />
                                <path d="M 0,0 9.603,-9.603 25.608,6.402 22.406,9.603 9.603,-3.2 6.402,0.001 l 6.401,6.402 -3.2,3.2 z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-995.19265,33.438518)" />
                                <path d="M 0,0 3.201,3.201 6.403,0 3.201,-3.201 Z M -6.403,0 3.2,-9.603 12.803,0 6.402,6.402 l 16.006,16.006 6.401,-6.402 3.2,3.2 -9.603,9.603 z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-1012.2652,41.973988)" />
                                <path d="M 0,0 3.201,-3.201 6.403,0 3.201,3.201 Z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-978.12145,50.509588)" />
                                <path d="M 0,0 3.201,3.201 6.402,0.001 3.2,-3.2 Z m -6.403,0 16.005,-16.005 28.809,28.809 -9.603,9.604 -9.603,-9.604 3.201,-3.201 6.403,6.403 3.202,-3.202 L 9.603,-9.603 6.402,-6.402 12.803,0 3.2,9.603 Z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-995.19265,59.046648)" />
                                <path d="M 0,0 9.603,9.603 -6.402,25.608 -9.603,22.406 3.2,9.603 -0.001,6.402 l -6.402,6.401 -3.2,-3.2 z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-1033.6072,97.458249)" />
                                <path d="M 0,0 -3.201,3.201 0,6.403 3.201,3.201 Z M 0,-6.403 9.603,3.2 0,12.803 -6.402,6.402 l -16.006,16.006 6.402,6.401 -3.2,3.2 -9.603,-9.603 z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-1025.0716,114.53079)" />
                                <path d="M 0,0 3.201,3.201 0,6.403 -3.201,3.201 Z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-1016.536,80.387048)" />
                                <path d="m 0,0 -3.201,3.201 3.2,3.201 L 3.2,3.2 Z m 0,-6.403 16.005,16.005 -28.809,28.809 -9.604,-9.603 9.604,-9.603 3.201,3.201 -6.403,6.403 3.202,3.202 L 9.603,9.603 6.402,6.402 0,12.803 -9.603,3.2 Z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-1007.9989,97.458249)" />
                                <path d="m 0,0 -9.603,9.603 -16.005,-16.005 3.202,-3.201 12.803,12.803 3.201,-3.201 -6.401,-6.402 3.2,-3.2 z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-969.58892,135.86972)" />
                                <path d="M 0,0 -3.201,-3.201 -6.403,0 -3.201,3.201 Z M 6.403,0 -3.2,9.603 -12.803,0 l 6.401,-6.402 -16.006,-16.006 -6.401,6.402 -3.2,-3.2 9.603,-9.603 z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-952.51625,127.33425)" />
                                <path d="M 0,0 -3.201,3.201 -6.403,0 -3.201,-3.201 Z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-986.65998,118.79865)" />
                                <path d="m 0,0 -3.201,-3.201 -3.201,3.2 L -3.2,3.2 Z m 6.403,0 -16.005,16.005 -28.809,-28.809 9.603,-9.604 9.603,9.604 -3.201,3.201 -6.403,-6.403 -3.202,3.202 L -9.603,9.603 -6.402,6.402 -12.803,0 -3.2,-9.603 Z" fill="currentColor" transform="matrix(1.3333333,0,0,-1.3333333,-969.58892,110.26159)" />
                            </g>
                        </g>
                    </svg>
                    <div class="leading-none text-right">
                        <div class="font-bold text-base text-white">
                            شركة فلو المحدودة
                        </div>
                        <div class="text-[10px] tracking-[0.15em] uppercase mt-0.5 text-white/50">
                            FLOW COMPANY LTD
                        </div>
                    </div>
                </div>
                <p class="mt-5 text-sm leading-relaxed max-w-xs text-white/45">
                    شركة متخصصة في تقديم الخدمات المتكاملة بأعلى معايير الجودة والاحترافية في المملكة العربية السعودية
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <div class="text-xs font-semibold tracking-wider uppercase mb-5 text-steel">
                    روابط سريعة
                </div>
                <div class="space-y-3">
                    <a href="/#" class="block text-sm text-white/50 hover:text-white transition-colors duration-200">الرئيسية</a>
                    <a href="/#services" class="block text-sm text-white/50 hover:text-white transition-colors duration-200">خدماتنا</a>
                    <a href="/#achievements" class="block text-sm text-white/50 hover:text-white transition-colors duration-200">انجازاتنا</a>
                    <a href="/#partners" class="block text-sm text-white/50 hover:text-white transition-colors duration-200">شركائنا</a>
                </div>
            </div>

            <!-- Contact info -->
            <div>
                <div class="text-xs font-semibold tracking-wider uppercase mb-5 text-steel">
                    معلومات التواصل
                </div>
                <div class="space-y-4">
                    <div class="flex items-start gap-3 justify-start">
                        <svg class="w-4 h-4 text-steel mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25z" />
                        </svg>
                        <span class="text-sm text-white/50 dir-ltr select-all">
                            0590727730
                        </span>
                    </div>
                    <div class="flex items-start gap-3 justify-start">
                        <svg class="w-4 h-4 text-steel mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <a href="mailto:info@flow-ltd.sa" class="text-sm text-white/50 hover:text-white select-all">
                            info@flow-ltd.sa
                        </a>
                    </div>
                    <div class="flex items-start gap-3 justify-start">
                        <div class="relative w-5 h-5 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <!-- Ripple Ring 1 -->
                            <span class="absolute inline-flex h-full w-full rounded-full bg-steel/30 opacity-75 animate-ping" style="animation-duration: 2s;"></span>
                            <!-- Ripple Ring 2 (delayed) -->
                            <span class="absolute inline-flex h-full w-full rounded-full bg-steel/20 opacity-50 animate-ping" style="animation-duration: 2s; animation-delay: 1s;"></span>
                            
                            <!-- Map Pin Icon -->
                            <svg class="relative w-4 h-4 text-steel filter drop-shadow-[0_0_8px_rgba(138,155,173,0.85)] animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <span class="text-sm text-white/50">
                            المملكة العربية السعودية
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom bar -->
        <div class="mt-8 md:mt-4 pt-6 md:pt-4 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-white/25">
                جميع الحقوق محفوظة © 2024 شركة فلو المحدودة · FLOW Company Ltd
            </p>
            <a href="#" class="text-xs text-white/25 hover:text-white transition-colors">
                العودة للأعلى ↑
            </a>
        </div>
    </div>
</footer>
