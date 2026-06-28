@props(['onDark' => false])

<div class="flex items-center gap-3" dir="rtl">
    <x-flw-mark size="44" :onDark="$onDark" />
    <div class="leading-none text-right">
        <div class="font-bold text-base {{ $onDark ? 'text-white' : 'text-navy' }}">
            {{ __('Flow Company Ltd') }}
        </div>
        <div class="text-[10px] tracking-[0.15em] uppercase mt-0.5 {{ $onDark ? 'text-white/50' : 'text-steel' }}">
            {{ __('FLOW COMPANY LTD') }}
        </div>
    </div>
</div>
