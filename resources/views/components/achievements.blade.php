<section id="achievements" class="scroll-mt-24 py-16">
    <h2 class="text-center text-5xl">{{ __('Some of Our Achievements') }}</h2>
    <div class="mt-8 grid gap-4 text-center sm:grid-cols-3">
        <x-achievement-card src="{{ asset('assets/images/achievements/leap-icon.jpg') }}"
            title="{{ __('LEAP Technical Conference') }}" year="2022"></x-achievement-card>
        <x-achievement-card src="{{ asset('assets/images/achievements/falcons-icon.avif') }}"
            title="{{ __('Saudi International Falcons and Hunting Exhibition') }}" year="2022"></x-achievement-card>
        <x-achievement-card src="{{ asset('assets/images/achievements/sidmc.png') }}"
            title="{!! __('Saudi International Digital Marketing & E-Commerce expo') !!}" year="2023"></x-achievement-card>
    </div>
</section>
