<?php
function get_post_list(){
    $args = [
        'posts_per_page'   => 4,
        'post_type'        => 'post'
    ];
    return get_cpt($args);
}


add_action('rest_api_init', function () {

    register_rest_route('posts', 'all', array(
        'methods'             => 'GET',
        'callback'            => 'get_post_list',
        'permission_callback' => '__return_true'
    ));
});
