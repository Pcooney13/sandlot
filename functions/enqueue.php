<?php 
function theme_scripts_styles() {    

	// Register Fonts
    wp_enqueue_style( 'Fonts', get_template_directory_uri() . '/assets/css/fonts.css');
	// Register Tailwind CSS
    wp_enqueue_style( 'TailwindCSS', get_template_directory_uri() . '/assets/css/tailwind.css');
	// Register main styles
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');

    // SCRIPTS
    // vanilla js
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
}
add_action('wp_enqueue_scripts', 'theme_scripts_styles', 999);