@php
    $partners = [
        ['image' => 'assets/images/partners/كارفور.png', 'name' => "Carrefour"],
        ['image' => 'assets/images/partners/العثيم.png', 'name' => "Othaim"],
        ['image' => 'assets/images/partners/وقت اللياقة.png', 'name' => "Fitness Time"],
        ['image' => 'assets/images/partners/زاد.png', 'name' => "Zad"],
        ['image' => 'assets/images/partners/باوزير.png', 'name' => "Bawazir"],
        ['image' => 'assets/images/partners/الدخيل.png', 'name' => "Aldakheel"],
        ['image' => 'assets/images/partners/mas.png', 'name' => "Mas"],
        ['image' => 'assets/images/partners/imile.png', 'name' => "Imile"],
        ['image' => 'assets/images/partners/J&T.png', 'name' => "J&T"],
        ['image' => 'assets/images/partners/kabals.png', 'name' => "Kabals"],
        ['image' => 'assets/images/partners/nawal.png', 'name' => "Nawal"],
        ['image' => 'assets/images/partners/niceOne.png', 'name' => "Nicone"],
        ['image' => 'assets/images/partners/deal.png', 'name' => "Deal"],
        ['image' => 'assets/images/partners/plastaicRyadth.png', 'name' => "PlastaicRyadth"]
    ];
@endphp

<section id="partners" class="py-24 relative overflow-hidden bg-navy-dark scroll-mt-20">
    <!-- Spotlight/Grid background (faint mesh grid) -->
    <div class="absolute inset-0 grid-mesh pointer-events-none opacity-40"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-10 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Right Side: Content Column (Col span 5 on lg) -->
            <div class="lg:col-span-5 flex flex-col justify-center text-start">
                <x-fade-up delay="0">
                    <div class="inline-flex items-center gap-2 text-xs font-semibold tracking-[0.18em] uppercase mb-4 text-steel">
                        <span class="w-6 h-px bg-steel"></span>
                        {{ __('Who We Cooperate With') }}
                    </div>
                </x-fade-up>
                
                <x-fade-up delay="150">
                    <h2 class="text-4xl lg:text-5xl font-black text-white mb-6 leading-tight">
                        {{ __('Our Partners') }}
                    </h2>
                </x-fade-up>

                <x-fade-up delay="250">
                    <p class="text-slate-300 text-base sm:text-lg leading-relaxed mb-8">
                        {{ __('We are proud to cooperate with major companies in various sectors, to provide outstanding support and operation services that contribute to achieving mutual success.') }}
                    </p>
                </x-fade-up>

                <!-- Tagline with mini icons -->
                <x-fade-up delay="350">
                    <div class="flex flex-wrap items-center gap-4 text-sm text-slate-400 font-medium border-t border-white/10 pt-6">
                        <span>{{ __('Trusted by more than 14 leading brands') }}</span>
                        <div class="flex items-center gap-2">
                            @foreach (array_slice($partners, 0, 4) as $miniPartner)
                                <div class="w-8 h-8 rounded-full bg-white border border-white/10 flex items-center justify-center p-1.5 shadow-sm shrink-0">
                                    <img class="max-w-full max-h-full object-contain opacity-90" 
                                         src="{{ asset($miniPartner['image']) }}" 
                                         alt="{{ $miniPartner['name'] }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </x-fade-up>
            </div>

            @php
                $row1 = array_slice($partners, 0, 5);
                $row2 = array_slice($partners, 5, 4);
                $row3 = array_slice($partners, 9, 5);
            @endphp

            <!-- Left Side: Vertical Scrolling Marquee Wall (Col span 7 on lg) -->
            <div class="lg:col-span-7 relative h-[340px] sm:h-[400px] md:h-[450px] overflow-hidden rounded-3xl p-2 sm:p-4">
                <!-- Top & Bottom Gradient Fade Masks -->
                <div class="absolute inset-x-0 top-0 h-28 sm:h-36 bg-gradient-to-b from-navy-dark from-20% to-transparent z-20 pointer-events-none"></div>
                <div class="absolute inset-x-0 bottom-0 h-28 sm:h-36 bg-gradient-to-t from-navy-dark from-20% to-transparent z-20 pointer-events-none"></div>
                
                <!-- 3 Columns of Vertical Scrolling logos -->
                <div class="grid grid-cols-3 gap-3 sm:gap-4 h-full relative z-10">
                    
                    <!-- Column 1: Moves UP -->
                    <div class="marquee-vertical-wrapper overflow-hidden h-full">
                        <div class="marquee-vertical-track flex flex-col gap-3 sm:gap-4 animate-vertical-up">
                            <div class="flex flex-col gap-3 sm:gap-4 shrink-0">
                                @foreach ($row1 as $partner)
                                    <div class="partner-card relative flex items-center justify-center p-2 sm:p-3 rounded-2xl sm:rounded-3xl bg-white border border-white/10 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.015)] w-full h-[90px] sm:h-[110px] md:h-[125px] cursor-pointer select-none transition-all duration-300 hover:scale-105 hover:shadow-[0_12px_24px_rgba(15,57,96,0.15)] hover:border-primary/20 group">
                                        <img class="max-w-[88%] max-h-[88%] object-contain opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300" 
                                             src="{{ asset($partner['image']) }}" 
                                             alt="{{ $partner['name'] }}" 
                                             title="{{ $partner['name'] }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="flex flex-col gap-3 sm:gap-4 shrink-0" aria-hidden="true">
                                @foreach ($row1 as $partner)
                                    <div class="partner-card relative flex items-center justify-center p-2 sm:p-3 rounded-2xl sm:rounded-3xl bg-white border border-white/10 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.015)] w-full h-[90px] sm:h-[110px] md:h-[125px] cursor-pointer select-none transition-all duration-300 hover:scale-105 hover:shadow-[0_12px_24px_rgba(15,57,96,0.15)] hover:border-primary/20 group">
                                        <img class="max-w-[88%] max-h-[88%] object-contain opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300" 
                                             src="{{ asset($partner['image']) }}" 
                                             alt="{{ $partner['name'] }}" 
                                             title="{{ $partner['name'] }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Column 2: Moves DOWN -->
                    <div class="marquee-vertical-wrapper overflow-hidden h-full">
                        <div class="marquee-vertical-track flex flex-col gap-3 sm:gap-4 animate-vertical-down">
                            <div class="flex flex-col gap-3 sm:gap-4 shrink-0">
                                @foreach ($row2 as $partner)
                                    <div class="partner-card relative flex items-center justify-center p-2 sm:p-3 rounded-2xl sm:rounded-3xl bg-white border border-white/10 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.015)] w-full h-[90px] sm:h-[110px] md:h-[125px] cursor-pointer select-none transition-all duration-300 hover:scale-105 hover:shadow-[0_12px_24px_rgba(15,57,96,0.15)] hover:border-primary/20 group">
                                        <img class="max-w-[88%] max-h-[88%] object-contain opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300" 
                                             src="{{ asset($partner['image']) }}" 
                                             alt="{{ $partner['name'] }}" 
                                             title="{{ $partner['name'] }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="flex flex-col gap-3 sm:gap-4 shrink-0" aria-hidden="true">
                                @foreach ($row2 as $partner)
                                    <div class="partner-card relative flex items-center justify-center p-2 sm:p-3 rounded-2xl sm:rounded-3xl bg-white border border-white/10 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.015)] w-full h-[90px] sm:h-[110px] md:h-[125px] cursor-pointer select-none transition-all duration-300 hover:scale-105 hover:shadow-[0_12px_24px_rgba(15,57,96,0.15)] hover:border-primary/20 group">
                                        <img class="max-w-[88%] max-h-[88%] object-contain opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300" 
                                             src="{{ asset($partner['image']) }}" 
                                             alt="{{ $partner['name'] }}" 
                                             title="{{ $partner['name'] }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Column 3: Moves UP (Slower) -->
                    <div class="marquee-vertical-wrapper overflow-hidden h-full">
                        <div class="marquee-vertical-track flex flex-col gap-3 sm:gap-4 animate-vertical-up-slow">
                            <div class="flex flex-col gap-3 sm:gap-4 shrink-0">
                                @foreach ($row3 as $partner)
                                    <div class="partner-card relative flex items-center justify-center p-2 sm:p-3 rounded-2xl sm:rounded-3xl bg-white border border-white/10 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.015)] w-full h-[90px] sm:h-[110px] md:h-[125px] cursor-pointer select-none transition-all duration-300 hover:scale-105 hover:shadow-[0_12px_24px_rgba(15,57,96,0.15)] hover:border-primary/20 group">
                                        <img class="max-w-[88%] max-h-[88%] object-contain opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300" 
                                             src="{{ asset($partner['image']) }}" 
                                             alt="{{ $partner['name'] }}" 
                                             title="{{ $partner['name'] }}">
                                    </div>
                                @endforeach
                            </div>
                            <div class="flex flex-col gap-3 sm:gap-4 shrink-0" aria-hidden="true">
                                @foreach ($row3 as $partner)
                                    <div class="partner-card relative flex items-center justify-center p-2 sm:p-3 rounded-2xl sm:rounded-3xl bg-white border border-white/10 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.015)] w-full h-[90px] sm:h-[110px] md:h-[125px] cursor-pointer select-none transition-all duration-300 hover:scale-105 hover:shadow-[0_12px_24px_rgba(15,57,96,0.15)] hover:border-primary/20 group">
                                        <img class="max-w-[88%] max-h-[88%] object-contain opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300" 
                                             src="{{ asset($partner['image']) }}" 
                                             alt="{{ $partner['name'] }}" 
                                             title="{{ $partner['name'] }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <style>
            .grid-mesh {
                background-size: 60px 60px;
                background-image: 
                    linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            }

            .marquee-vertical-track {
                will-change: transform;
            }

            .animate-vertical-up {
                animation: marquee-scroll-up 22s linear infinite;
            }
            .animate-vertical-down {
                animation: marquee-scroll-down 18s linear infinite;
            }
            .animate-vertical-up-slow {
                animation: marquee-scroll-up 26s linear infinite;
            }

            .marquee-vertical-track:hover {
                animation-play-state: paused;
            }

            @keyframes marquee-scroll-up {
                0% {
                    transform: translateY(0);
                }
                100% {
                    transform: translateY(-50%);
                }
            }

            @keyframes marquee-scroll-down {
                0% {
                    transform: translateY(-50%);
                }
                100% {
                    transform: translateY(0);
                }
            }

            .partner-card img {
                will-change: filter, opacity;
            }
        </style>
    </div>
</section>
