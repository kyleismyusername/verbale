<?php
/*
 * Services page template.
 */
get_header();
$services = get_posts(array('post_type' => 'service'));
$content = get_the_content();
?>
<?php \verbale\View::render('Hero'); ?>
<section class="py-8 lg:py-20 animate__animated animate__fadeIn animate__slow">
    <?php if (!empty($content)) : ?>
    <div class="container prose">
        <?php the_content(); ?>
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-8">
            <?php foreach ($services as $service) : ?>
            <div class="">
                <div class="w-12 h-12 mb-4">
                    <img src="<?= get_field('icon', $service); ?>" fill="#546a7b" class="injectable text-indigo-600 opacity-70 w-full h-full" alt="">
                </div>
                <div>
                    <div class="font-serif text-lg lg:text-xl mb-4">
                        <?= get_the_title($service); ?>
                    </div>
                    <div class="prose">
                        <?= get_field('description', $service); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
get_footer();