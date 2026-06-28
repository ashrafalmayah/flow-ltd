@props(['title' => ''])

<a href="https://wa.me/+966590727730" target="_blank"
   x-data="{ rotateX: 0, rotateY: 0 }"
   @mousemove="
       const rect = $el.getBoundingClientRect();
       const x = $event.clientX - rect.left;
       const y = $event.clientY - rect.top;
       rotateY = ((x - (rect.width / 2)) / (rect.width / 2)) * 12;
       rotateX = -((y - (rect.height / 2)) / (rect.height / 2)) * 12;
   "
   @mouseleave="rotateX = 0; rotateY = 0;"
   :style="'transform: perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateY(' + (rotateX !== 0 || rotateY !== 0 ? -8 : 0) + 'px) scale(' + (rotateX !== 0 || rotateY !== 0 ? 1.03 : 1) + ')'"
   class="flex flex-col h-full bg-white rounded-2xl p-8 group transition-all duration-300 ease-out hover:shadow-2xl hover:border-navy/15 relative overflow-hidden shadow-[0_4px_12px_rgba(27,58,107,0.04)] border border-navy/5 transform-gpu"
   style="will-change: transform;">
    
    <!-- Hover accent -->
    <div class="absolute top-0 right-0 left-0 h-0.5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-navy"></div>

    <!-- Icon container -->
    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 bg-navy/5 text-navy transition-all duration-300 group-hover:bg-navy/10 transform-gpu group-hover:scale-110">
        {{ $icon }}
    </div>

    <h3 class="font-bold text-lg mb-3 leading-snug text-navy transition-colors duration-300 group-hover:text-navy-dark">
        {{ $title }}
    </h3>
    
    @if(trim($slot) !== '')
    <p class="text-sm leading-relaxed text-slate-500">
        {{ $slot }}
    </p>
    @endif
</a>

