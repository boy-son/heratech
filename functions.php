<?php 

function heratech_files() {
    wp_enqueue_style('heratech_main_styles', get_stylesheet_uri('/build/style-index.css'));
    wp_enqueue_style('heratech_extra_styles', get_theme_file_uri('build/index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'heratech_files');

?>