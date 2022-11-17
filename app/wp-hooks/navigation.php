<?php
use BoxyBird\Inertia\Inertia;

function wp_get_menu_array($current_menu)
{
    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = [];
    if (is_array($array_menu) || is_object($array_menu)) {
        foreach ($array_menu as $m) {
            if (empty($m->menu_item_parent)) {
                $menu['menu' . $m->ID] = [];
                $menu['menu' . $m->ID]['id'] = $m->ID;
                $menu['menu' . $m->ID]['title'] = $m->title;
                $menu['menu' . $m->ID]['url'] = str_replace(
                    get_site_url(),
                    '',
                    $m->url
                );
                $menu['menu' . $m->ID]['children'] = [];
                if ( in_array( 'elementor/elementor.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                    $menu['menu' . $m->ID][
                        'isElementor'
                    ] = Elementor\Plugin::instance()->db->is_built_with_elementor(
                        $m->object_id
                    );
                }
            }
        }
        $submenu = [];
        foreach ($array_menu as $m) {
            if ($m->menu_item_parent) {
                $submenu['menu' . $m->ID] = [];
                $submenu['menu' . $m->ID]['id'] = $m->ID;
                $submenu['menu' . $m->ID]['title'] = $m->title;
                $submenu['menu' . $m->ID]['url'] = str_replace(
                    get_site_url(),
                    '',
                    $m->url
                );
                if ( in_array( 'elementor/elementor.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                    $submenu['menu' . $m->ID][
                        'isElementor'
                    ] = Elementor\Plugin::instance()->db->is_built_with_elementor(
                        $m->object_id
                    );
                }
                $menu['menu' . $m->menu_item_parent]['children'][
                    'menu' . $m->ID
                ] = $submenu['menu' . $m->ID];
            }
        }
    }

    return $menu;
}

add_action('init', function () {
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary-menu' => 'Primary Menu',
        'secondary-menu' => 'Secondary Menu',
        // 'third-menu' => 'Third Menu',
    ]);

    Inertia::share([
        'primary_menu' => wp_get_menu_array('Primary Menu'),
        'secondary_menu' => wp_get_menu_array('Secondary Menu'),
        // 'third_menu' => wp_get_menu_array(28),
    ]);
});