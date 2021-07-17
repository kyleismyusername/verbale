<?php
/*
 * Contact Page
 */
get_header();
$content = get_the_content();
$social = get_field('social', 7);
if ($social['phone']) {
    $phone = $social['phone'];
    $phone_display = '('.substr($phone, 0, 3).') '.substr($phone, 3, 3).'-'.substr($phone, 6);
}
$address = $social['address'];
$map_address = urlencode(implode(' ', $address));
?>
<section class="pt-28 pb-16 lg:py-40">
    <div class="container animate__animated animate__fadeIn animate__slow">
        <h1 class="mb-8 lg:text-5xl">
            <?= the_title(); ?>
        </h1>
        <div class="prose">
            <?php the_content(); ?>
        </div>
        <div class="flex flex-col md:flex-row gap-x-16 gap-y-8">
            <div class="md:w-1/2">
                <!-- <div class="h-full bg-indigo-300 overflow-hidden p-4 pt-16 md:pt-4 flex items-end relative border border-indigo-100 -mr-1"> -->
                <!-- <div class="bg-indigo-300 flex h-full items-end md:pt-4 overflow-hidden relative"> -->
                <div class="flex items-end h-full relative">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-globe.png" alt="" class="absolute top-0 inset left-0">
                    <!-- <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=<?= $map_address; ?>)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1)
                    contrast(1.2);"></iframe> -->
                    <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md border border-indigo-100 w-full">
                        <div class="lg:w-1/2 px-6">
                            <h2 class="text-indigo-600 tracking-widest">ADDRESS</h2>
                            <p class="mt-1">
                                <?= $address['street'].'<br/>'.$address['city'].', '.$address['state']; ?>
                            </p>
                        </div>
                        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                            <?php if ($social['email']) :?>
                            <h2 class="title-font text-indigo-600 tracking-widest">EMAIL</h2>
                            <a href="<?= $social['email']; ?>" class="text-salmon-500 leading-relaxed"><?= $social['email']; ?></a>
                            <?php endif; ?>
                            <?php if ($phone) : ?>
                            <h2 class="title-font text-indigo-600 tracking-widest mt-4">PHONE</h2>
                            <a href="tel:<?= $phone; ?>" class="text-salmon-500 leading-relaxed"><?= $phone_display; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2">
                <?= do_shortcode('[hf_form slug="contact"]'); ?>
            </div>
        </div>
        <?php if (!empty($content)) : ?>
        <div class="py-8">
            <?php the_content(); ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();