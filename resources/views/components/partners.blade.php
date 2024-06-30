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
        class="flex animate-infinite-scroll items-stretch justify-center md:justify-start [&_img]:h-40 [&_img]:max-w-none [&_li]:mx-8">
        <li>
            <img src="{{ asset('assets/images/partners/كارفور.png') }}" width="160" height="160" alt="Carrefour" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/العثيم.png') }}" width="160" height="160" alt="Othaim" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/وقت اللياقة.png') }}" width="160" height="160" alt="Fitness Time" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/زاد.png') }}" width="160" height="160" alt="Noon" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/باوزير.png') }}" width="160" height="160" alt="Bawazir" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/الدخيل.png') }}" width="160" height="160" alt="Aldakheel" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/ثابت.png') }}" width="160" height="160" alt="Thabit" />
        </li>
    </ul>
    </div>

</section>
