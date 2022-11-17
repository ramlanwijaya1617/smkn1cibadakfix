<?php
add_action('wp_enqueue_scripts', function () {
    $version = md5_file(get_stylesheet_directory() . '/mix-manifest.json');
    wp_enqueue_style(
        'app',
        get_stylesheet_directory_uri() . '/dist/css/app.css',
        [],
        $version
    );
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
    wp_enqueue_script(
        'manifest',
        get_stylesheet_directory_uri() . '/dist/js/manifest.js',
        [],
        $version,
        true
    );
    wp_enqueue_script(
        'vendor',
        get_stylesheet_directory_uri() . '/dist/js/vendor.js',
        [],
        $version,
        true
    );
    wp_enqueue_script(
        'app',
        get_stylesheet_directory_uri() . '/dist/js/app.js',
        ['manifest', 'vendor'],
        $version,
        true
    );
    wp_localize_script('app', 'settings', [
        'ajax_url'      => admin_url('admin-ajax.php'),
        'nonce'         => wp_create_nonce('wp_rest'),
        "api_endpoint"  => site_url("wp-json"),
        'bb_ajax_nonce' => wp_create_nonce('bb_ajax_nonce'),
    ]);

});
