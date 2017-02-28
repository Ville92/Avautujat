<?php

function custom_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'custom_theme_setup');

function rekisteroi_menu() {
    register_nav_menu('reuna', 'Paavalikko');
}

add_action('init', 'rekisteroi_menu');

function lisaa_kirjasto() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/js/app.js',
        array('jquery')
    );
}

add_action ('wp_enqueue_scripts', 'lisaa_kirjasto');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'vimpaimet',
        'id' => 'vimpaimet'
    ));
}

?>

<?php 

?>