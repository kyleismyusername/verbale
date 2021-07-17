<?php
/*
 * Template Name: Home - Original
 * Homepage template.
 */
get_header();
$hero = get_field('hero');
$bg = $hero['bg_img'] ?: 'https://source.unsplash.com/PypjzKTUqLo/1920x1280';
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$services = get_posts(array('post_type' => 'service'));
$team = get_posts(array('post_type' => 'team'));
$order = array('lg:order-first', 'lg:order-last');
?>
<div id="hero" class="h-screen bg-indigo-600">
    <!-- <div class="bg-img mayfair opacity-40"> -->
    <div class="bg-img mayfair opacity-40">
        <!-- <img src="<?//= $bg; ?>" alt="<?//= $hero['headline']; ?>"> -->
        <img src="<?= $bg; ?>">
    </div>
    <div class="relative w-full h-full">
        <!-- Hero -->
        <div class="container flex flex-col justify-center h-full animate__animated animate__fadeIn animate__slow">
            <div class="md:w-2/3 backdrop-filter backdrop-blur-sm backdrop-opacity-100">
                <h1 class="mb-4 text-3xl text-white lg:text-5xl leading-tighter lg:leading-tight filter drop-shadow">
                    <?= $hero['headline']; ?>
                </h1>
                <p class="font-sans text-2xl text-white leading-tighter lg:leading-relaxed">
                    <?= $hero['paragraph']; ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="approach" class="bg-white" x-data="{visible: false}" @scroll.window="{ inViewport($el) ? visible++ : visible = visible }">
    <div class="container flex flex-col items-center justify-center h-full py-16 lg:py-36" :class="visible ? 'animate__animated animate__fadeIn animate__slow' : 'invisible'">
        <h2 class="mb-8 text-4xl text-center lg:text-5xl lg:leading-snug lg:w-3/4">
            <?= $section_1['headline']; ?>
        </h2>
        <p class="mb-8 font-sans text-lg leading-relaxed text-center lg:leading-loose lg:text-2xl lg:mb-16 lg:w-3/4">
            <?= $section_1['paragraph']; ?>
        </p>
        <?php if ($section_1['btn_link']) : ?>
        <a href="<?= $section_1['btn_link']; ?>" class="px-10 py-6 mx-auto btn lg:mx-0 justify-self-end">
            <?= $section_1['btn_text']; ?>
        </a>
        <?php endif; ?>
    </div>
</div>
<div id="services" class="bg-indigo-500" x-data="{visible: false}" @scroll.window="{ inViewport($el) ? visible++ : visible = visible }">
    <div class="container flex flex-col items-center justify-center h-full py-24 lg:py-36" :class="visible ? 'animate__animated animate__fadeIn animate__slow' : 'invisible'">
        <h2 class="mb-8 text-4xl text-center text-white lg:text-5xl lg:leading-snug lg:mb-16 lg:w-3/4">
            <?= $section_2['headline']; ?>
        </h2>
        <div class="flex flex-col justify-center mb-16 gap-x-16 gap-y-8 lg:flex-row lg:gap-y-16 lg:max-w-4xl lg:mb-24">
            <?php foreach ($services as $service) : ?>
            <div>
                <!-- <div class="flex flex-row items-center justify-center w-24 h-24 p-5 mx-auto mb-4 bg-indigo-600 rounded-full"> -->
                <div class="flex flex-row items-center justify-center p-5 mx-auto text-white rounded-full w-28 h-28">
                    <img src="<?= get_field('icon', $service); ?>" class="injectable opacity-60" alt="">
                </div>
                <p class="font-serif text-lg text-center text-white lg:text-xl">
                    <?= get_the_title($service); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
        <a href="<?= $section_2['btn_link']; ?>" class="px-10 py-6 mx-auto btn lg:mx-0 justify-self-end">
            <?= $section_2['btn_text']; ?>
        </a>
    </div>
</div>
<div id="team" class="bg-white">
    <div class="container flex flex-col items-center justify-center h-full py-24 text-center lg:py-36 lg:text-left">
        <h2 class="mb-16 text-4xl text-center lg:text-5xl lg:leading-snug lg:w-2/3">
            <?= $section_3['headline']; ?>
        </h2>
        <?php foreach ($team as $member) : ?>
        <?php $social = get_field('social_info', $member); ?>
        <div class="flex flex-col mb-24 gap-x-16 gap-y-8 lg:flex-row">
            <img class="<?= $order[0]; ?> w-full max-w-sm mx-auto object-cover" src="<?= get_field('photo', $member); ?>" alt="<?= get_the_title($member); ?>">
            <div class="flex flex-col justify-center flex-grow">
                <div class="mb-6 font-serif text-2xl leading-relaxed lg:text-3xl">
                    <?= get_the_title($member); ?>,<br /><?= get_field('qualifications', $member); ?>
                </div>
                <p class="mb-8 text-lg leading-relaxed">
                    <?= get_field('bio', $member) ?>
                </p>
                <div class="flex flex-row justify-center gap-x-2 lg:justify-start">
                    <?php if ($social['email_address']) : ?>
                    <a href="mailto:<?= $social['email_address']?>" class="flex flex-row items-center justify-center w-8 h-8 text-white bg-indigo-700 hover:bg-salmon-500">
                        <i class="fa fa-envelope fa-sm"></i>
                    </a>
                    <?php endif;?>
                    <?php if ($social['linkedin_profile']) : ?>
                    <a href="<?= $social['linkedin_profile']?>" class="flex flex-row items-center justify-center w-8 h-8 text-white bg-indigo-700 hover:bg-salmon-500">
                        <i class="fab fa-linkedin-in fa-sm"></i>
                    </a>
                    <?php endif;?>
                    <?php if ($social['google_scholar']) :?>
                    <a href="<?= $social['google_scholar']?>" class="flex flex-row items-center justify-center w-8 h-8 text-white bg-indigo-700 hover:bg-salmon-500">
                        <img src="<?= get_template_directory_uri() . '/assets/img/googlescholar.svg' ?>" class="w-4"></img>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php array_push($order, array_shift($order)); ?>
        <?php endforeach; ?>
    </div>
    <script>
    function inViewport(element, options = {
        offset: {
            top: 0,
            right: 0,
            bottom: 200,
            left: 0
        },
        threshold: 0
    }) {
        const {
            top,
            right,
            bottom,
            left,
            width,
            height
        } = element.getBoundingClientRect();
        const intersection = {
            t: bottom,
            r: window.innerWidth - left,
            b: window.innerHeight - top,
            l: right
        };

        const threshold = {
            x: options.threshold * width,
            y: options.threshold * height
        };

        return intersection.t > (options.offset.top + threshold.y) &&
            intersection.r > (options.offset.right + threshold.x) &&
            intersection.b > (options.offset.bottom + threshold.y) &&
            intersection.l > (options.offset.left + threshold.x);
    }
    </script>
    <?php
    get_footer();