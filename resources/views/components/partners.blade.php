<section class="my-8">
    <h2 class="text-center text-5xl">{{ __('Our Partners') }}</h2>
    <div dir="ltr" x-data="{}" x-init="$nextTick(() => {
        let ul = $refs.logos;
        ul.insertAdjacentHTML('afterend', ul.outerHTML);
        ul.nextSibling.setAttribute('aria-hidden', 'true');
        ul.nextSibling.classList.remove('animate-infinite-scroll');
        ul.nextSibling.classList.add('animate-infinite-scroll-delayed');
    })"
    class="inline-flex select-none my-8 w-full flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]">

    <ul x-ref="logos"
        class="flex animate-infinite-scroll items-stretch justify-center md:justify-start [&_img]:h-32 [&_img]:max-w-none [&_li]:mx-8">
        <li>
            <img src="{{ asset('assets/images/partners/كارفور.png') }}" alt="Carrefour" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/العثيم.png') }}" alt="Othaim" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/وقت اللياقة.png') }}" alt="Fitness Time" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/زاد.png') }}" alt="Noon" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/باوزير.png') }}" alt="Bawazir" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/الدخيل.png') }}" alt="Aldakheel" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/ثابت.png') }}" alt="Thabit" />
        </li>
    </ul>
    </div>

</section>
