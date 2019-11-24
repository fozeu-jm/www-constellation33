<?php
function theme_post_types() {

    register_post_type('slider', array(
        'rewrite' => array('slug' => 'Diaporama'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Diaporama',
            'add_new_item' => 'Ajouter une diapositive',
            'edit_item' => 'Modifier diapositive',
            'all_items' => 'Toutes les diapositives',
            'singular_name' => 'Diaporama'
        ),
        'menu_icon' => 'dashicons-slides',
    ));

}

add_action('init', 'theme_post_types');