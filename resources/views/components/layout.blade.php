<!DOCTYPE html>
<html x-data="{mobileMenuActive: false}" :class="mobileMenuActive ? 'overflow-hidden' : ''" class="scroll-smooth overflow-x-clip" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar'  ? 'rtl' : '' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <link href="https://flow-ltd.net/" rel="canonical" />
    <title>{{ __("Flow LTD for Business and Support Services") }}</title>
    <meta name="description" content="{{ __("Flow Ltd is a Saudi company providing professional support services, including maintenance, cleaning, and operations. Offering integrated and sustainable solutions for local and regional companies. Contact us to learn more about our services and achievements.") }}">

    {{-- fonts --}}
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet"> --}}
</head>

<body class="min-h-screen bg-background font-rubik overflow-x-clip">
    <x-navbar />
    <main class="mx-auto max-w-5xl px-4">
            {{ $slot }}
    </main>
    <x-whatsapp-icon />
    <x-footer />
</body>

</html>
