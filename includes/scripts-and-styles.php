<?php


use Verbale\AssetResolver;

add_action('wp_enqueue_scripts', function () {

    // registers scripts and stylesheets
    wp_register_style('app', AssetResolver::resolve('css/app.css'), [], false);
    wp_register_script('app', AssetResolver::resolve('js/app.js'), [], false, true);

    // enqueue global assets
    wp_enqueue_script('jquery');
    wp_enqueue_style('app');
    wp_enqueue_script('app');
    wp_enqueue_script('alpine', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('cssgram', 'https://cdnjs.cloudflare.com/ajax/libs/cssgram/0.1.12/cssgram.min.css');
});