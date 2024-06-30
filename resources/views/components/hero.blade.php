<section class="relative grid items-center justify-items-center gap-4 p-8 py-36 text-center text-white">
    <div class="absolute top-0 bottom-0 overflow-hidden break-out -z-10">
        <div class="absolute inset-0 bg-[url('/assets/images/background.jpg')] bg-bottom"></div>
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <img class="absolute left-0 bottom-0 md:-bottom-24 md:w-96 select-none"
            src="{{ asset('assets/images/icon.svg') }}" alt="">
    </div>

    <img class="w-[32rem] select-none" src="{{ asset('assets/images/logo3.png') }}" alt="Logo">
    <h1 class="spacing-2 text-xl sm:text-3xl font-semibold tracking-tight">
        {{ __('Your Trusted Partner for Support Services') }}</h1>
    <p>{{ __('A Saudi company specialized in business and support services (maintenance, cleaning, and operation)') }}
    </p>

    <x-contact-us-button class="text-2xl " />

</section>
