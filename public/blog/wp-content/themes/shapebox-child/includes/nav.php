<style>
	.col-2cl .main-inner {
		padding-left: 300px;
		padding-right: inherit;
	}
	.col-2cl .s1 {
		margin-left: -300px;
		margin-right: inherit;
	}
	.sharrre-footer {
		text-align:left;
	}
	.blog-single-date i, .blog-card-date i {
		margin-left:6px;
		margin-right:0px;
	}
	.blog-single-inner-inner, .featured-content  {
		right:0;
		left:auto;
	}
	.sharrre-header .sharrre,
	.sharrre-header .sharrre .share,
	.sharrre-header {
		float:right;
	}
	.slick-featured-nav .slick-prev {
    	right: 0px;
		border-radius: 20px 0px 0px 20px;
	}
	.slick-featured-nav .slick-next {
    	left: 0px;
		border-radius: 0px 20px 20px 0px;
	}
</style>
<header class="sticky top-0 z-50 w-full bg-primary text-white font-rubik">
    <nav class="relative mx-auto flex max-w-5xl items-center md:justify-center py-4">
        <ul :class="mobileMenuActive ? 'rtl:!right-0 !left-0' : ''"
            class="absolute -left-full rtl:left-auto rtl:-right-full md:static bottom-0 h-screen md:h-auto top-0 w-full md:w-auto gap-1 md:gap-4 bg-primary md:bg-transparent md:pt-0 pt-16 text-center text-white transition-all duration-500 flex md:flex-row flex-col text-2xl md:text-lg">
            <li @click="mobileMenuActive = false" class="md:rounded-md bg-white text-primary hover:bg-background"><a
                    class="block px-4 py-3 md:py-1" href="/#">الرئيسية</a></li>
            <li @click="mobileMenuActive = false" class="md:rounded-md bg-white text-primary hover:bg-background"><a
                    class="block px-4 py-3 md:py-1" href="/#message">رسالتنا</a></li>
            <li @click="mobileMenuActive = false" class="md:rounded-md bg-white text-primary hover:bg-background"><a
                    class="block px-4 py-3 md:py-1" href="/#services">خدماتنا</a></li>
            <li @click="mobileMenuActive = false" class="md:rounded-md bg-white text-primary hover:bg-background"><a
                    class="block px-4 py-3 md:py-1" href="/#achievements">انجازاتنا</a></li>
            <li @click="mobileMenuActive = false" class="md:rounded-md bg-white text-primary hover:bg-background"><a
                    class="block px-4 py-3 md:py-1" href="/blog/">المدونة</a></li>
        </ul>
		<a href="#contact-us" class="rounded-lg px-8 py-2 bg-white hover:bg-background text-primary absolute rtl:left-4 rtl:right-auto right-4 z-20">تواصل معنا</a>


        <span @click="mobileMenuActive = !mobileMenuActive;" class="mx-6 block cursor-pointer md:hidden z-[60]">
            <svg x-show="!mobileMenuActive" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25"
                height="25" viewBox="0 0 50 50" style="fill:#fff;">
                <path
                    d="M 0 7.5 L 0 12.5 L 50 12.5 L 50 7.5 Z M 0 22.5 L 0 27.5 L 50 27.5 L 50 22.5 Z M 0 37.5 L 0 42.5 L 50 42.5 L 50 37.5 Z">
                </path>
            </svg>
            <svg x-show="mobileMenuActive" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25"
                height="25" viewBox="0 0 50 50" style="fill:#fff;">
                <path
                    d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z">
                </path>
            </svg>
        </span>

        <div class="md:absolute rtl:right-4 rtl:left-auto left-4 flex justify-center md:justify-start md:pt-0s">
			<?php foreach(pll_the_languages(['raw' => 1]) as $lang): ?>
			<?php if($lang['slug'] == 'en'): ?>
				 <a
                href=" <?= $lang['url'] ?>"
                class="hover:text-white"
                role="menuitem"
              >
					English
              </a>
			<?php endif; ?>
			<?php endforeach; ?>
		</div>


    </nav>
</header>
