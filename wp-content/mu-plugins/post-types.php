<?php
function theme_post_types() {

    register_post_type('service', array(
        'rewrite' => array('slug' => 'services'),
        'public' => true,
        'supports' => array(),
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Nos Services',
            'add_new_item' => 'Ajouter un service',
            'edit_item' => 'Modifier un service',
            'all_items' => 'Tous nos service',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));
    
}

add_action('init', 'theme_post_types');

?>