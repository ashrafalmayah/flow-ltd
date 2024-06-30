@props(['src' => ''])
<div class="flex-1 rounded-lg shadow-md hover:shadow-primary transition duration-500 py-10 px-12 min-w-52 grid place-content-center text-center space-y-6">
    <img class="mx-auto" src="{{ $src }}" alt="{{ $slot }}" width="100" height="100">
    <h2 class="text-lg">{{ $slot }}</h2>
</div>
