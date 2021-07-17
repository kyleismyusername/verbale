<?php
/*
 * General page template.
 */
get_header();
?>
<?php \verbale\View::render('Hero'); ?>
<section class="py-8 lg:py-20">
    <div class="container prose animate__animated animate__fadeIn animate__slow">
        <?php the_content(); ?>
    </div>
</section>
<?php
get_footer();