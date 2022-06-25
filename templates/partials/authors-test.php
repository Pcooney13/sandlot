<?php
$featured_posts = get_field('authors');
if( $featured_posts ): ?>
    <?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php endforeach; ?>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>