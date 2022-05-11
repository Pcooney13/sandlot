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