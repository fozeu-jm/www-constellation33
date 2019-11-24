<?php

function theme_resources() {

    wp_enqueue_style('main-css', get_stylesheet_uri());



    wp_enqueue_script('popper', get_theme_file_uri('js/bootstrap/popper.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('js/bootstrap/bootstrap.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('plugin', get_theme_file_uri('js/plugins/plugins.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('active', get_theme_file_uri('js/active.js'), array('jquery'), '1.0', true);
}

function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}

add_action('wp_enqueue_scripts', 'theme_resources');

add_filter('show_admin_bar', '__return_false');

add_action('after_setup_theme', 'theme_features');