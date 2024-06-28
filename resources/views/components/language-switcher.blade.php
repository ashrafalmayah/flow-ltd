<div class="sm:absolute rtl:right-4 rtl:left-auto left-4 flex justify-center sm:justify-start sm:pt-0 text-primary">
    @foreach (config('app.available_locales') as $locale_name => $available_locale)
        @if ($available_locale !== app()->getLocale())
        <a href="/{{ $available_locale }}">
            <span>{{ $locale_name }}</span>
            </a>
        @endif
    @endforeach
</div>