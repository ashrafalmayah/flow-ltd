<section class="my-8 scroll-mt-[40vh]" id="services">
    <h2 class="text-center text-5xl">{{ __("Our Services") }}</h2>
    <div class="mt-4 flex flex-col sm:flex-row sm:flex-wrap gap-2">
        <div class="flex flex-col sm:flex-row gap-2 flex-1">
            <x-service-card :src="asset('assets/images/services/cleaning.png')">{{ __("Cleaning Services") }}</x-service-card>
            <x-service-card :src="asset('assets/images/services/packaging.png')">{{ __("Loading and Unloading Services") }}</x-service-card>
        </div>
        <div class="flex flex-col sm:flex-row gap-2 flex-1">
            <x-service-card :src="asset('assets/images/services/maintainence.png')">{{ __("Maintenance and Operation Services") }}</x-service-card>
            <x-service-card :src="asset('assets/images/services/contracting.png')">{{ __("Contracting and Projects Services") }}</x-service-card>
        </div>
    </div>
</section>
