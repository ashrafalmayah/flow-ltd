@props(['delay' => 0, 'class' => ''])

<div x-data="{ shown: false }" 
     x-init="new IntersectionObserver(([entry]) => { if (entry.isIntersecting) { shown = true; } }, { rootMargin: '0px 0px -60px 0px' }).observe($el)"
     :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-9'"
     class="transition-all duration-[750ms] ease-[cubic-bezier(0.22,1,0.36,1)] {{ $class }}"
     style="transition-delay: {{ $delay }}ms;"
     {{ $attributes->except(['delay', 'class']) }}>
    {{ $slot }}
</div>
