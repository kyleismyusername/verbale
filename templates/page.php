<?php
/*
 * General page template.
 */
get_header();
?>
<section>
    <div class="animate__animated animate__fadeIn animate__slow container py-20 prose">
        <?php the_content(); ?>
    </div>
</section>
<?php
get_footer();