<?php 
    function theme_scripts_styles() {    
        // === CSS =========
	    // Register Fonts
        wp_enqueue_style( 'Fonts', get_template_directory_uri() . '/assets/css/fonts.css');
	    // Register Tailwind CSS
        wp_enqueue_style( 'TailwindCSS', get_template_directory_uri() . '/assets/css/tailwind.css');
	    // Register main styles
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
        // === JS ==========
        // vanilla js
        wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
    }
    add_action('wp_enqueue_scripts', 'theme_scripts_styles', 999);

    // Add Tailwind to the Editor
    function theme_editor_styles() {
        // - requires 'editor-styles' support in /functions/theme-support.php
        add_editor_style( 'assets/css/tailwind.css' );
    }
    add_action( 'after_setup_theme', 'theme_editor_styles' );