<div class="md:absolute rtl:right-4 rtl:left-auto left-4 flex justify-center md:justify-start md:pt-0s">
    @foreach (config('app.available_locales') as $locale_name => $available_locale)
        @if ($available_locale !== app()->getLocale())
        <a href="/{{ $available_locale }}">
            <span>{{ $locale_name }}</span>
            </a>
        @endif
    @endforeach
</div>
