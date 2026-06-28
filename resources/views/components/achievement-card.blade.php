@props(['year', 'title', 'src'])

<div x-data="{ rotateX: 0, rotateY: 0 }"
     @mousemove="
         const rect = $el.getBoundingClientRect();
         const x = $event.clientX - rect.left;
         const y = $event.clientY - rect.top;
         rotateY = ((x - (rect.width / 2)) / (rect.width / 2)) * 8;
         rotateX = -((y - (rect.height / 2)) / (rect.height / 2)) * 8;
     "
     @mouseleave="rotateX = 0; rotateY = 0;"
     :style="'transform: perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateY(' + (rotateX !== 0 || rotateY !== 0 ? -6 : 0) + 'px) scale(' + (rotateX !== 0 || rotateY !== 0 ? 1.02 : 1) + ')'"
     class="relative flex flex-col h-full rounded-2xl p-8 overflow-hidden transition-all duration-300 ease-out border border-navy/10 hover:border-navy/20 bg-white text-center shadow-md hover:shadow-xl transform-gpu"
     style="will-change: transform;">
    <!-- BG ornament -->
    <div class="absolute -top-8 -left-8 w-32 h-32 rounded-full opacity-[0.04] bg-navy pointer-events-none"></div>
    
    <div class="mb-5 flex justify-between items-center">
        <span class="text-xs font-bold tracking-wider px-2.5 py-1 rounded-full bg-navy/5 text-navy">
            {{ $year }}
        </span>
        <x-flw-mark size="20" :onDark="false" />
    </div>

    <!-- Image container -->
    <div class="my-4 mx-auto w-24 h-24 rounded-full overflow-hidden border-2 border-navy/15 p-2 bg-slate-50 flex items-center justify-center shadow-inner">
        <img src="{{ $src }}" alt="{{ $title }}" class="object-contain max-h-full max-w-full rounded-full">
    </div>

    <h3 class="font-bold text-base leading-snug text-navy mt-4">
        {{ $title }}
    </h3>
</div>
