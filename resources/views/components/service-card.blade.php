@props(['src' => ''])
<a href="https://wa.me/+966590727730" class="flex-1 rounded-lg bg-background shadow-md hover:shadow-primary transition duration-500 py-10 px-12 min-w-52 grid place-content-center text-center space-y-6">
    <img class="mx-auto" src="{{ $src }}" alt="{{ $slot }}" width="100" height="100">
    <h2 class="text-lg">{{ $slot }}</h2>
</a>
