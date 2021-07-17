<?php get_template_part('templates/partials/document-open'); ?>
<nav id="nav" x-data="{ isOpen: false, light: heroCheck() }" @keydown.escape="isOpen = false" :class="{'border-b border-indigo-100 border-opacity-50': !light}">
    <div class="container inner">
        <div class="flex flex-row items-center justify-between w-full lg:w-auto">
            <a href="/" class="flex-none brand-logo hover:opacity-100" :class="light ? 'text-white' : 'text-indigo-600'">
                <img x-show="light" class="" src="<?= get_stylesheet_directory_uri().'/assets/img/verbale_logo_white.png'; ?>" alt="Verbale">
                <img style="display:none;" x-show="!light" class="" src="<?= get_stylesheet_directory_uri().'/assets/img/verbale_logo_dark.png'; ?>" alt="Verbale">
            </a>
            <div class="cursor-pointer lg:hidden" @click="isOpen = !isOpen">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" :class="{'text-white': light}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path x-show="!isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path style="display:none;" x-show="isOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
        </div>
        <div class="items-center justify-center flex-none flex-grow hidden text-lg lg:flex lg:flex-row" :class="{'text-white': light}">
            <?php wp_nav_menu(array( 'theme_location' => 'header-menu' ));?>
        </div>
        <div class="hidden lg:block">
            <?php echo do_shortcode('[gtranslate]');?>
        </div>
        <a href="/contact" class="flex-none hidden px-6 py-3 uppercase lg:block btn btn-nav">Get Started</a>
    </div>
    <div style="display:none;" class="mobile" :class="{ 'block': isOpen, 'hidden': !isOpen }" @click.away="isOpen = false" x-show.transition="isOpen">
        <?php wp_nav_menu(array( 'theme_location' => 'header-menu' ));?>
    </div>
</nav>
<script>
function heroCheck() {
    let hero = document.getElementById('hero');
    if (hero) {
        return true;
    }
}
</script>