<?php include(locate_template('templates/header.php')); 
	$post_type = get_post_type();
	echo '<div class="max-w-6xl mx-auto px-4 md:px-0">';
		$args = array('public' => true);
		$output = 'objects'; // 'names' or 'objects'
		$operator = 'and'; // 'and' or 'or'
		$post_types = get_post_types($args, $output, $operator);

		if ($post_types) {
			foreach ($post_types as $type) {
				if($post_type == $type->name) {
					get_template_part('templates/archives/' . $type->name);					
				}
			}
		} 
	echo '</div>';
include(locate_template('templates/footer.php')); ?>