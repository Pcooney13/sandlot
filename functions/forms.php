<?php 

function add_custom_css_classes( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $classes = $input->getAttribute( 'btn' );
    $classes .= " btn";
    $input->setAttribute( 'class', $classes );
    return $dom->saveHtml( $input );
}
add_filter( 'gform_submit_button', 'add_custom_css_classes', 10, 2 );