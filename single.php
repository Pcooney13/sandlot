<?php
	include(locate_template('templates/header.php'));
	$post_type = get_post_type();

	$args = array('public' => true);
	$output = 'objects'; // 'names' or 'objects'
	$operator = 'and'; // 'and' or 'or'
	$post_types = get_post_types($args, $output, $operator);

	echo '<div class="max-w-6xl mx-auto px-4 md:px-0">';
		if ($post_types) {
			foreach ($post_types as $type) {
				if($post_type == $type->name) {
					if ($type->name === 'authors' || $type->name === 'client_services') {
						get_template_part('templates/singles/' . $type->name);
					} else {
						get_template_part('templates/singles/default');
					} 
				}
			}
		} 
		// Newsletter Sign up
		include(locate_template('templates/partials/newsletter.php'));
	echo '</div>';
	// Recent Post Slider
	include(locate_template('templates/partials/slider.php'));
	// Footer
	include(locate_template('templates/footer.php'));
?>