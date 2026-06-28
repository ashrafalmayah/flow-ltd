<footer id="contact" class="relative overflow-hidden bg-navy-dark text-white md:h-[calc(100vh-80px)] flex flex-col justify-between">
    <x-kufic-pattern opacity="0.05" />

    <!-- CTA band -->
    <div class="relative py-12 md:py-6 border-b border-white/5 flex-grow flex items-center">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 text-center w-full">
            
            <x-fade-up>
                <div class="inline-flex items-center gap-2 text-xs font-semibold tracking-[0.18em] uppercase mb-4 text-steel">
                    <span class="w-6 h-px bg-steel"></span>
                    {{ __('Start Now') }}
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-black mb-3">
                    {{ __('Contact Us') }}
                </h2>
                
                <p class="mb-8 max-w-md mx-auto text-sm sm:text-base text-white/55">
                    {{ __('We are pleased to serve you and answer your inquiries at any time') }}
                </p>
                
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="tel:0590727730"
                       class="flex items-center gap-2.5 px-7 py-3 rounded-full text-sm font-bold bg-white text-navy transition-all duration-200 hover:scale-105 shadow-xl shadow-black/25">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25z" />
                        </svg>
                        {{ __('Call Us') }} (0590727730)
                    </a>
                </div>
            </x-fade-up>
            
        </div>
    </div>

    <!-- Footer grid -->
    <div class="relative max-w-7xl mx-auto px-6 lg:px-10 py-10 md:py-6">
        <div class="grid md:grid-cols-3 gap-12 text-right rtl:text-right ltr:text-left">
            
            <!-- Brand -->
            <div>
                <x-logo :onDark="true" />
                <p class="mt-5 text-sm leading-relaxed max-w-xs text-white/45">
                    {{ __('A company specialized in providing integrated services with the highest standards of quality and professionalism in the Kingdom of Saudi Arabia') }}
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <div class="text-xs font-semibold tracking-wider uppercase mb-5 text-steel">
                    {{ __('Quick Links') }}
                </div>
                <div class="space-y-3">
                    <a href="#home" class="block text-sm text-white/50 hover:text-white transition-colors duration-200">{{ __('Home') }}</a>
                    <a href="#services" class="block text-sm text-white/50 hover:text-white transition-colors duration-200">{{ __('Our Services') }}</a>
                    <a href="#achievements" class="block text-sm text-white/50 hover:text-white transition-colors duration-200">{{ __('Our Achievements') }}</a>
                    <a href="#partners" class="block text-sm text-white/50 hover:text-white transition-colors duration-200">{{ __('Our Partners') }}</a>
                </div>
            </div>

            <!-- Contact info -->
            <div>
                <div class="text-xs font-semibold tracking-wider uppercase mb-5 text-steel">
                    {{ __('Contact Information') }}
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
                            {{ __('Saudi Arabia') }}
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom bar -->
        <div class="mt-8 md:mt-4 pt-6 md:pt-4 border-t border-white/5 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-white/25">
                {{ __('All rights reserved © 2024 Flow Company Ltd') }}
            </p>
            <a href="#home" class="text-xs text-white/25 hover:text-white transition-colors">
                {{ __('Back to top ↑') }}
            </a>
        </div>
    </div>
</footer>
