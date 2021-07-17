<?php
$bg_img = get_field('bg_img') ?: 'https://source.unsplash.com/Gg7uKdHFb_c/1920x1280';
$title = get_field('headline') ?: get_the_title();
?>
<!-- <section id="hero" class="h-screen/2 bg-indigo-700"> -->
<section id="hero" class="bg-indigo-700">
    <div class="bg-img mayfair opacity-30">
        <img src="<?= $bg_img; ?>" alt="<?= $title; ?>">
    </div>
    <div class="relative w-full h-full">
        <div class="animate__animated animate__fadeIn animate__slow container h-full py-20 flex flex-col justify-center">
            <h1 class="pt-16 pb-8 text-white filter drop-shadow">
                <?= $title; ?>
            </h1>
        </div>
    </div>
</section>