<!-- Site footer markup goes here -->
<section class="bg-tan-500">
    <div class="container py-24 text-center">
        <div class="font-serif text-3xl lg:text-5xl mb-16 leading-tight">Get started with Verbale, today.</div>
        <a href="/contact" class="btn px-10 py-6 mx-auto">Contact Us</a>
    </div>
</section>
<footer class="py-16 lg:py-24 bg-white border-t border-gray-100">
    <div class="container">
        <div class="flex flex-col lg:flex-row gap-8 items-center">
            <div class="lg:flex lg:flex-row lg:gap-8 w-full lg:w-2/3 font-medium lg:text-right lg:items-center">
                <a href="/" class="text-3xl font-serif">Verbale</a>
                <?php wp_nav_menu(); ?>
            </div>
            <div class="w-full lg:w-1/3 text-xl font-medium">
                <div class="mb-2 lg:mb-4">Stay in touch</div>
                <div class="flex flex-col max-w-xs">
                    <a href="tel:8888888888" class="inline-flex flex-row items-center text-base mb-2"><i class="bg-gray-500 p-1 text-white fa fa-xs fa-phone-alt mr-2"></i>888-888-8888</a>
                    <a href="mailto:support@verbale.com" class="inline-flex flex-row items-center text-base mb-2"><i class="bg-gray-500 p-1 text-white fa fa-xs fa-envelope mr-2"></i>support@verbale.com</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="bg-gray-500 py-2">
    <div class="container text-sm text-gray-100 text-center">Copyright © 2021 Verbale. All rights reserved.</div>
</section>
<?php get_template_part('templates/partials/document-close');