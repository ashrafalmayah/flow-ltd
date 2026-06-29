<section id="home" x-data="{ shown: false }" x-init="setTimeout(() => shown = true, 50)" class="relative min-h-screen flex items-center overflow-hidden bg-navy-dark">
    <!-- Background cityscape layer (Static) -->
    <div class="absolute inset-0 bg-cover bg-bottom bg-no-repeat"
         style="background-image: url('{{ asset('assets/images/background.webp') }}'); background-color: #0E2248;">
    </div>

    <!-- Interactive Mouse Sparkles Canvas -->
    <canvas id="sparkle-canvas" class="absolute inset-0 pointer-events-none z-[11]"></canvas>

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
        <img src="{{ asset('assets/images/Van.webp') }}" class="w-full h-full object-contain filter drop-shadow-[0_15px_30px_rgba(0,0,0,0.4)]" alt="Flow Van">
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const canvas = document.getElementById('sparkle-canvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        const section = document.getElementById('home');
        if (!section) return;

        let particles = [];
        let animationFrameId = null;
        let lastX = null;
        let lastY = null;

        // Identity Colors: Steel (#8A9BAD), Cream (#F4F0ED), White (#FFFFFF)
        const colors = [
            'rgba(138, 155, 173, ', // Steel
            'rgba(244, 240, 237, ', // Cream/Background
            'rgba(255, 255, 255, ', // White
        ];

        // Set up ResizeObserver to handle DPI scaling and layout adjustments
        const resizeObserver = new ResizeObserver(() => {
            const rect = section.getBoundingClientRect();
            canvas.style.width = rect.width + 'px';
            canvas.style.height = rect.height + 'px';
            
            const dpr = window.devicePixelRatio || 1;
            canvas.width = rect.width * dpr;
            canvas.height = rect.height * dpr;
            ctx.scale(dpr, dpr);
        });
        resizeObserver.observe(section);

        function createParticle(x, y) {
            const size = Math.random() * 4.5 + 3.5; // size in px (3.5px to 8px)
            const type = Math.random() > 0.4 ? 'star' : 'circle';
            const colorIdx = Math.floor(Math.random() * colors.length);
            const colorBase = colors[colorIdx];
            
            // Random direction
            const angle = Math.random() * Math.PI * 2;
            const speed = Math.random() * 0.45 + 0.2; // gentle speed
            
            return {
                x: x,
                y: y,
                vx: Math.cos(angle) * speed,
                vy: Math.sin(angle) * speed - 0.08, // gentle upward drift
                size: size,
                baseSize: size,
                colorBase: colorBase,
                opacity: Math.random() * 0.3 + 0.7, // initial opacity (0.7 to 1.0)
                fadeRate: Math.random() * 0.015 + 0.015, // lifetime ~30-60 frames
                rotation: Math.random() * Math.PI * 2,
                rotSpeed: (Math.random() - 0.5) * 0.03,
                type: type
            };
        }

        // Draw a premium 4-pointed curved star
        function drawFourPointStar(ctx, cx, cy, size, rotation) {
            ctx.save();
            ctx.translate(cx, cy);
            ctx.rotate(rotation);
            ctx.beginPath();
            ctx.moveTo(0, -size);
            ctx.quadraticCurveTo(0, 0, size, 0);
            ctx.quadraticCurveTo(0, 0, 0, size);
            ctx.quadraticCurveTo(0, 0, -size, 0);
            ctx.quadraticCurveTo(0, 0, 0, -size);
            ctx.closePath();
            ctx.fill();
            ctx.restore();
        }

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            for (let i = particles.length - 1; i >= 0; i--) {
                const p = particles[i];
                p.x += p.vx;
                p.y += p.vy;
                p.opacity -= p.fadeRate;
                p.rotation += p.rotSpeed;
                
                // shrink particle over time
                p.size = p.baseSize * p.opacity;

                if (p.opacity <= 0 || p.size <= 0) {
                    particles.splice(i, 1);
                    continue;
                }

                ctx.fillStyle = p.colorBase + p.opacity + ')';

                if (p.type === 'star') {
                    drawFourPointStar(ctx, p.x, p.y, p.size, p.rotation);
                } else {
                    ctx.beginPath();
                    ctx.arc(p.x, p.y, p.size / 2, 0, Math.PI * 2);
                    ctx.fill();
                }
            }

            if (particles.length > 0) {
                animationFrameId = requestAnimationFrame(animate);
            } else {
                animationFrameId = null;
            }
        }

        function startAnimation() {
            if (!animationFrameId) {
                animationFrameId = requestAnimationFrame(animate);
            }
        }

        function handleMove(clientX, clientY) {
            const rect = section.getBoundingClientRect();
            const mouseX = clientX - rect.left;
            const mouseY = clientY - rect.top;

            if (lastX === null || lastY === null) {
                lastX = mouseX;
                lastY = mouseY;
                return;
            }

            const dx = mouseX - lastX;
            const dy = mouseY - lastY;
            const dist = Math.hypot(dx, dy);
            
            // Only generate particles if mouse moved at least 10px
            if (dist > 10) {
                const steps = Math.min(Math.floor(dist / 14), 3);
                for (let i = 0; i <= steps; i++) {
                    const t = steps === 0 ? 1 : i / steps;
                    const x = lastX + dx * t;
                    const y = lastY + dy * t;
                    
                    // Spawn with 50% probability to ensure sparsity
                    if (Math.random() > 0.5) {
                        const rx = x + (Math.random() - 0.5) * 5;
                        const ry = y + (Math.random() - 0.5) * 5;
                        particles.push(createParticle(rx, ry));
                    }
                }

                lastX = mouseX;
                lastY = mouseY;
                startAnimation();
            }
        }

        section.addEventListener('mousemove', (e) => {
            handleMove(e.clientX, e.clientY);
        });

        section.addEventListener('mouseenter', (e) => {
            const rect = section.getBoundingClientRect();
            lastX = e.clientX - rect.left;
            lastY = e.clientY - rect.top;
        });

        section.addEventListener('mouseleave', () => {
            lastX = null;
            lastY = null;
        });

        // Touch support for mobile devices
        section.addEventListener('touchmove', (e) => {
            if (e.touches.length > 0) {
                handleMove(e.touches[0].clientX, e.touches[0].clientY);
            }
        }, { passive: true });

        section.addEventListener('touchstart', (e) => {
            if (e.touches.length > 0) {
                const rect = section.getBoundingClientRect();
                lastX = e.touches[0].clientX - rect.left;
                lastY = e.touches[0].clientY - rect.top;
            }
        }, { passive: true });

        section.addEventListener('touchend', () => {
            lastX = null;
            lastY = null;
        });
    });
</script>
