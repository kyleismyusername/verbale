<!-- Site footer markup goes here -->
<?php
$year = date("Y");
$social = get_field('social', 7);
if ($social['phone']) {
    $phone = $social['phone'];
    $phone_display = '('.substr($phone, 0, 3).') '.substr($phone, 3, 3).'-'.substr($phone, 6);
}
?>
<?php if (!is_page('contact')) : ?>
<section class="bg-tan-200">
    <div class="container flex flex-col items-center justify-center gap-12 py-24 text-center lg:flex-row lg:text-left">
        <div class="font-serif text-3xl leading-snug lg:text-5xl lg:mb-0">Get started with Verbale, today.</div>
        <a href="/contact" class="flex-none px-10 py-6 btn w-fit">Contact Us</a>
    </div>
</section>
<?php endif; ?>
<footer class="py-16 bg-white border-t border-indigo-100 border-opacity-50 lg:py-24">
    <div class="container text-center lg:text-left">
        <div class="flex flex-col gap-8 lg:flex-row lg:items-center">
            <div class="w-full font-medium lg:flex lg:flex-row lg:gap-8 lg:text-right lg:items-center">
                <a href="/" class="font-serif text-3xl">
                    <img class="mx-auto mb-4 lg:mb-0 lg:w-auto" src="<?= get_stylesheet_directory_uri().'/assets/img/verbale_logo_dark.png'; ?>" alt="Verbale">
                </a>
                <?php wp_nav_menu(array( 'theme_location' => 'footer-menu' ));?>
            </div>
            <div class="text-xl font-medium">
                <div class="mb-4 font-semibold">Stay in touch</div>
                <div class="flex flex-col items-center max-w-xs mx-auto lg:items-start">
                    <?php if ($phone) : ?>
                    <a href="tel:<?= $phone; ?>" class="inline-flex flex-row items-center mb-2 text-base text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <?= $phone_display; ?>
                    </a>
                    <?php endif; ?>
                    <?php if ($social['email']) : ?>
                    <a href="mailto:<?= $social['email']; ?>" class="inline-flex flex-row items-center mb-4 text-base text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <?= $social['email']; ?>
                    </a>
                    <?php endif;?>
                    <div class="flex flex-row gap-x-2">
                        <?php if ($social['linkedin']) : ?>
                        <a href="<?= $social['linkedin'] ?>" class="flex flex-row items-center p-1 bg-indigo-600 gap-x-2">
                            <i class="w-4 text-center text-white fab fa-linkedin-in fa-xs"></i>
                        </a>
                        <?php endif; ?>
                        <?php if ($social['facebook']) : ?>
                        <a href="<?= $social['facebook'] ?>" class="flex flex-row items-center p-1 bg-indigo-600 gap-x-2">
                            <i class="w-4 text-center text-white fab fa-facebook-f fa-xs"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="py-2 bg-indigo-700">
    <div class="container text-sm text-center text-indigo-100">Copyright © <?= $year; ?> Verbale. All rights reserved.</div>
</section>
<!-- <section class="fixed bottom-0 z-50 flex flex-row items-center justify-center w-full px-4 py-2 bg-indigo-600 gap-x-2 lg:hidden md:w-auto" x-data="{open: true}" x-show="open"> -->
<section class="fixed bottom-0 z-50 flex flex-row items-center justify-center w-full px-4 py-2 bg-indigo-600 gap-x-4 lg:hidden md:w-auto" x-data="{open: true}" x-show="open">
    <div class="text-sm text-white">Switch languages:</div>
    <?= do_shortcode('[gtranslate]'); ?>
    <div @click="open = !open"><i class="text-indigo-200 fa fa-times"></i></div>
</section>
<?php get_template_part('templates/partials/document-close');