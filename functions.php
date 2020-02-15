<?php
function my_scripts_enqueue()
{
    wp_register_script('bootstrap-js', '://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), NULL, true);
    wp_register_style('bootstrap-css', '://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, NULL, 'all');

    wp_enqueue_script('bootstrap-js');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', [], 1.0, true);
}
add_action('wp_enqueue_scripts', 'my_scripts_enqueue');
