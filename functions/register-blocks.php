<?php if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types() {
	// test
	acf_register_block_type(array(
		'name' => 'image',
		'title' => __('Image'),
		'description' => __('Image or google map'),
		'render_template' => 'templates/blocks/image.php',
		'mode'			=> 'preview',
		'supports'		=> [
			'align'			=> false,
			'anchor'		=> true,
			'customClassName'	=> true,
			'jsx' 			=> true,
		],
		'icon' => 'video-alt3',
		'keywords' => array('image'),
	));	
	acf_register_block_type(array(
		'name' => 'pact-section',
		'title' => __('PACT Section'),
		'description' => __('section'),
		'render_template' => 'templates/blocks/section.php',
		'mode'			=> 'preview',
		'supports'		=> [
			'align'			=> false,
			'anchor'		=> true,
			'customClassName'	=> true,
			'jsx' 			=> true,
		],
		'icon' => 'video-alt3',
		'keywords' => array('section'),
	));	
}