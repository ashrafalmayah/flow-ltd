<!DOCTYPE html>
<html x-data="{ mobileMenuActive: false }" :class="mobileMenuActive ? 'overflow-hidden' : ''" class="overflow-x-clip scroll-smooth"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : '' }}">

<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2LFN6LTYP4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2LFN6LTYP4');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" href="favicon/favicon.ico">
    <link href="https://flow-ltd.net/" rel="canonical" />
    <title>{{ __('Flow LTD for Business and Support Services') }}</title>
    <meta name="description"
        content="{{ __('Flow Ltd is a Saudi company providing professional support services, including maintenance, cleaning, and operations. Offering integrated and sustainable solutions for local and regional companies. Contact us to learn more about our services and achievements.') }}">

    {{-- fonts --}}
</head>

<body class="min-h-screen overflow-x-clip bg-background font-abd-elrady-pro">
    <x-navbar />
    <main class="w-full">
        {{ $slot }}
    </main>
    <x-footer />
    <x-whatsapp-icon />

</body>

</html>
