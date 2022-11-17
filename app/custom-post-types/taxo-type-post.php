<?php 

add_action('init', function () {
    $labels = [
        'name'                       => __('Type', 'textdomain'),
        'singular_name'              => __('Type', 'textdomain'),
        'menu_name'                  => __('Type', 'textdomain'),
        'all_items'                  => __('All Type', 'textdomain'),
        'edit_item'                  => __('Edit Type', 'textdomain'),
        'view_item'                  => __('View Type', 'textdomain'),
        'update_item'                => __('Update Type name', 'textdomain'),
        'add_new_item'               => __('Add new Type', 'textdomain'),
        'new_item_name'              => __('New Type name', 'textdomain'),
        'parent_item'                => __('Parent Type', 'textdomain'),
        'parent_item_colon'          => __('Parent Type:', 'textdomain'),
        'search_items'               => __('Search Type', 'textdomain'),
        'popular_items'              => __('Popular Type', 'textdomain'),
        'separate_items_with_commas' => __('Separate Type with commas', 'textdomain'),
        'add_or_remove_items'        => __('Add or remove Type', 'textdomain'),
        'choose_from_most_used'      => __('Choose from the most used Type', 'textdomain'),
        'not_found'                  => __('No Type found', 'textdomain'),
        'no_terms'                   => __('No Type', 'textdomain'),
        'items_list_navigation'      => __('Type list navigation', 'textdomain'),
        'items_list'                 => __('Type list', 'textdomain'),
    ];

    $args = [
        'label'                 => __('Type Post', 'textdomain'),
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'hierarchical'          => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'query_var'             => true,
        'rewrite'               => ['slug' => 'type-post', 'with_front' => true],
        'show_admin_column'     => true,
        'show_in_rest'          => true,
        'rest_base'             => 'type-post',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'show_in_quick_edit'    => false,
        'show_in_graphql'       => true,
        'graphql_single_name'   => __('type_post', 'textdomain'),
        'graphql_plural_name'   => __('all_type_post', 'textdomain'),
    ];

    register_taxonomy('type-post', ['post'], $args);

    //create default value for taxonomy
    if (empty(term_exists('post-blog', 'type-post'))) {
        wp_insert_term('Post/Blog', 'type-post', [
            'slug' => 'post-blog',
        ]);
    }
});

add_action( 'type-post_row_actions', function($actions, $tag){
    if( in_array($tag->slug, array('post-blog')) ) {
        unset($actions['edit']); // Edit link
        unset($actions['inline hide-if-no-js']); //Inline Edit link
        unset($actions['delete']); // Delete link
    }
    // echo '<style type="text/css">.tablenav {visibility: hidden!important;}
    // .form-field term-parent-wrap{display: none!important;}</style>';
    return $actions;
}, 10, 2 );
