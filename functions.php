<?php
if (! file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'mangcodingtheme'));
}
require $composer;
require get_stylesheet_directory() . '/app/helpers.php';
require get_stylesheet_directory() . '/app/wp-hooks/enqueue-scripts-styles.php';
require get_stylesheet_directory() . '/app/wp-hooks/init.php';
require get_stylesheet_directory() . '/app/wp-hooks/navigation.php';
require get_stylesheet_directory() . '/app/rest-endpoints.php';
require get_stylesheet_directory() . '/app/theme-settings/theme-settings.php';

//Dequeue wp hook
require get_stylesheet_directory() . '/app/wp-hooks/dequeue-scripts-styles.php';
require get_stylesheet_directory() . '/app/wp-hooks/after-setup-theme.php';

// Custom TinyMCE - WP editor 
require get_stylesheet_directory() . '/app/tiny-mce.php';

//Custom Post Type
// require get_stylesheet_directory() . '/app/custom-post-types/movie.php';

require get_stylesheet_directory() . '/app/custom-post-types/taxo-type-post.php';




//Set Default POST TYPE on Create POST
add_action( 'save_post', 'default_post_type' );
function default_post_type( $id){
    
    global $post;
    $default_term = get_term_by('slug', 'post-blog', 'type-post');
    wp_set_post_terms( $id,  $default_term->term_id, 'type-post', true );
}

