<section class="relative grid items-center justify-items-center gap-4 p-8 py-36 text-center text-white">
    <div class="break-out absolute bottom-0 top-0 -z-10 overflow-hidden">
        <img class="h-full w-full object-cover object-bottom" src="{{ asset('assets/images/background.jpg') }}" />
        <div class="absolute inset-0 bg-black opacity-70"></div>
        <img class="absolute bottom-0 left-0 select-none md:-bottom-24 md:w-96"
            src="{{ asset('assets/images/icon.svg') }}" alt="">
    </div>

    <img class="w-[32rem] select-none" src="{{ asset('assets/images/logo3.png') }}" alt="Logo">
    <h1 class="spacing-2 text-xl font-semibold tracking-tight sm:text-3xl">
        {{ __('Your Trusted Partner for Support Services') }}</h1>
    <p>{{ __('A Saudi company specialized in business and support services (maintenance, cleaning, and operation)') }}
    </p>

    <x-contact-us-button class="text-2xl" />

</section>
