<?php

declare(strict_types=1);
add_filter('show_admin_bar', '__return_false');

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', '', '', true);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', '', '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style('customstyles', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
});


require get_template_directory() . "/post-types/student.php";
require get_template_directory() . "/taxonomies/skill.php";
