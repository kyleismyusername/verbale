<?php
/*
 * General page template.
 */
get_header();
?>
<style>
#hero::before {
    background-image: url("<?= get_stylesheet_directory_uri(); ?>/assets/img/group-3.jpg");
}
</style>
<section id="hero" class="bg-gray-500">
    <div class="bg-img mayfair">
        <img src="<?= get_stylesheet_directory_uri(); ?>/assets/img/group-3.jpg" alt="">
    </div>
    <div class="relative w-full h-full bg-black bg-opacity-40">
        <div class="animate__animated animate__fadeIn animate__slow container h-full py-20 flex flex-col justify-center">
            <h1 class="lg:w-1/2 mx-auto pt-16 pb-8 text-white text-center">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>
</section>
<section class="prose py-8 lg:py-20">
    <div class="animate__animated animate__fadeIn animate__slow container">
        <?php the_content(); ?>
    </div>
</section>
<?php
get_footer();