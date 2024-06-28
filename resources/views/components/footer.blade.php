<footer class="relative grid min-h-[92vh] place-content-center overflow-hidden bg-primary text-center text-white"
    id="footer">
    <div class="absolute inset-6 mx-auto max-w-5xl">
        <span class="absolute block h-3 w-full bg-white"></span>
        <span class="absolute right-0 block h-full w-3 bg-white"></span>
        <span class="absolute left-0 block h-full w-3 bg-white"></span>
        <span class="absolute bottom-0 block h-3 w-full bg-white"></span>
        <img class="absolute -bottom-16 -right-16 rtl:-left-16 w-52 bg-primary sm:w-96 select-none" src="{{ asset('assets/images/icon.svg') }}"
            alt="">
    </div>
    <div class="z-10 space-y-4 p-12">
        <h2 class="text-5xl font-bold sm:text-7xl">{{ __("Contact Us") }}</h2>
        <div dir="ltr" class="flex flex-wrap justify-center gap-4">
            <span>+966 59 072 7730 <br>
                  +966 57 888 8811 <br>
                  +966 55 508 6902</span>
        </div>
        <a href="mailto:customer_care@flow-ltd.sa"
            class="group flex items-center justify-center gap-2 sm:gap-4 fill-white transition duration-300 hover:fill-primary">
            <svg class="stroke-white group-hover:stroke-[1rem]" width="40" height="35" viewBox="0 0 512 512"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M256 352c-16.53 0-33.06-5.422-47.16-16.41L0 173.2V400C0 426.5 21.49 448 48 448h416c26.51 0 48-21.49 48-48V173.2l-208.8 162.5C289.1 346.6 272.5 352 256 352zM16.29 145.3l212.2 165.1c16.19 12.6 38.87 12.6 55.06 0l212.2-165.1C505.1 137.3 512 125 512 112C512 85.49 490.5 64 464 64h-416C21.49 64 0 85.49 0 112C0 125 6.01 137.3 16.29 145.3z" />
            </svg>
            <span>info@flow-ltd.sa</span>
        </a>

    </div>
</footer>
