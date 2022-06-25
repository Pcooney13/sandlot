<?php 
add_filter('sanitize_html_class', 'add_classes_to_pagination', 3, 20);
function add_classes_to_pagination($sanitized, $class, $fallback) {
    if ( $class === 'bg-indigo-500'){
        return htmlspecialchars( $class );
    } 
    return $sanitized;
}