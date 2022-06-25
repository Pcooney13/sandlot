<?php 
	if (is_page('Blog')) {
		include(locate_template('archive.php')); 
	} else {
		include(locate_template('templates/header.php'));
		if ( have_posts() ) {
			while ( have_posts() ) { the_post();
	            if (get_the_content()) {
					the_content(); 
				} else {
					echo '<div class="max-w-6xl mx-auto my-20">no content</div>';
				} 
	        }
		}
		include(locate_template('templates/footer.php')); 
	}
?>