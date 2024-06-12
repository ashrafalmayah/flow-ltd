<section dir="ltr" x-data="{}" x-init="$nextTick(() => {
    let ul = $refs.logos;
    ul.insertAdjacentHTML('afterend', ul.outerHTML);
    ul.nextSibling.setAttribute('aria-hidden', 'true');
})"
    class="inline-flex my-8 h-32 w-full flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-200px),transparent_100%)]">
    <ul x-ref="logos"
        class="flex animate-infinite-scroll items-stretch justify-center md:justify-start [&_img]:h-full [&_img]:max-w-none [&_li]:mx-8">
        <li>
            <img src="{{ asset('assets/images/partners/كارفور.png') }}" alt="Noon" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/العثيم.png') }}" alt="Noon" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/وقت اللياقة.png') }}" alt="Noon" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/زاد.png') }}" alt="Noon" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/ثابت.png') }}" alt="Noon" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/الدخيل.png') }}" alt="Noon" />
        </li>
        <li>
            <img src="{{ asset('assets/images/partners/ثابت.png') }}" alt="Noon" />
        </li>
    </ul>
</section>
