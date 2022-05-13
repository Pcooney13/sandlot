<?php 

function theme_setup() {
    // Featured Image Thumbnails
    add_theme_support( 'post-thumbnails' );
    // Menus
    add_theme_support( 'menus' );
    register_nav_menus([
        'main-menu'         => __( 'Main Menu', 'site' ),
        'footer-menu'       => __( 'Footer Menu', 'site' ),
    ]);
}
add_action('after_setup_theme', 'theme_setup');

// Get Menu Items
function nav_walker($location_id) {
    // Finding Menus in Wordpress
    $menus = wp_get_nav_menus();
    $menu_locations = get_nav_menu_locations();
    // Loop through menu for each menu item
    if (isset($menu_locations[ $location_id ]) && $menu_locations[ $location_id ]!=0) {
        foreach ($menus as $menu) {
            if ($menu->term_id == $menu_locations[ $location_id ]) {
                $menu_items = wp_get_nav_menu_items($menu);
                break;
            }
        }
        return $menu_items;
    }
}

// REMOVE COMMENTS
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

add_filter('comments_open', '__return_false', 20, 2); // Close comments on the front-end
add_filter('pings_open', '__return_false', 20, 2); // Close comments pinging
add_filter('comments_array', '__return_empty_array', 10, 2); // Hide existing comments

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar (left)
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

// Remove comments links from admin bar (top)
add_action( 'wp_before_admin_bar_render', function () {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
} );