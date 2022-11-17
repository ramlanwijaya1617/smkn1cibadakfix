<?php
use BoxyBird\Inertia\Inertia;

add_action('init', function () {
    Inertia::setRootView('layout.php');

    $facebook = 'get_field';
    $twitter = 'get_field';
    $linkedin = 'get_field';
    $instagram = 'get_field';
    Inertia::share([
        'site' => [
            'name' => get_bloginfo('name'),
            'description' => get_bloginfo('description'),
            'theme_url' => get_template_directory_uri(),
            'url'   => get_site_url(),
        ],
        'images' => get_template_directory_uri()."/dist/images/",
        "search_form" => get_search_form(["echo" => false]),
        'social_media' => [
            'facebook' => $facebook,
            'twitter' => $twitter,
            'linkedin' => $linkedin,
            'instagram' => $instagram,
        ],
    ]);

    $manifest = get_stylesheet_directory() . '/mix-manifest.json';
    Inertia::version(md5_file($manifest));

    // fix anchor on gravity form without ajax
    add_filter('gform_confirmation_anchor', '__return_true');

});
