<?php get_template_part('templates/partials/document-open'); ?>
<!-- Site header markup goes here -->
<nav id="nav" x-data="{ isOpen: false }" @keydown.escape="isOpen = false" class="animate__animated animate__fadeIn animate__slow">
    <div class="inner">
        <div class="flex flex-row gap-3 items-center">
            <div class="lg:hidden cursor-pointer" @click="isOpen = !isOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-cloak x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            <a href="/" class="font-serif text-2xl md:text-4xl text-white">Verbale</a>
        </div>
        <div class="flex-grow hidden text-white lg:flex lg:flex-row items-center">
            <?php wp_nav_menu('Main');?>
        </div>
        <div class="block">
            <?php echo do_shortcode('[gtranslate]');?>
        </div>
        <a href="#" class="hidden px-6 py-3 uppercase lg:block btn btn-nav">Get Started</a>
    </div>
    <div class="mobile" :class="{ 'block': isOpen, 'hidden': !isOpen }" @click.away="isOpen = false" x-show.transition="true">
        <?php wp_nav_menu('Main');?>
    </div>
</nav>