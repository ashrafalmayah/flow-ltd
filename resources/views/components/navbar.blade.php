<header x-data="{ active: false }" class="sticky top-0 z-50 w-full bg-background">
    <nav class="relative mx-auto flex max-w-5xl items-center sm:justify-center py-4">
        <ul
            :class="active ? 'right-0' : '-right-full'" {{-- ToDo: prevent scroll on active --}}
            class="absolute sm:static bottom-0 h-screen sm:h-auto top-0 w-full sm:w-auto gap-4 bg-white sm:bg-transparent sm:pt-0 pt-16 text-center text-primary transition duration-500 sm:flex text-2xl sm:text-lg">
            <li @click="active = false" class="hover:underline"><a href="#">الرئيسية</a></li>
            <li @click="active = false" class="hover:underline"><a href="#services">خدماتنا</a></li>
            <li @click="active = false" class="hover:underline"><a href="#ksa-vision">رسالة المملكة</a></li>
            <li @click="active = false" class="hover:underline"><a href="#message">رسالتنا</a></li>
            <li @click="active = false" class="hover:underline"><a href="#achievements">انجازاتنا</a></li>
        </ul>
        <x-contact-us-button class="absolute left-4 z-20" />
        <span @click="active = !active" class="mx-6 block cursor-pointer sm:hidden z-[60]">=</span>
    </nav>
</header>
