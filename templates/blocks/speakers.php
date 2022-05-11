<?php 
    $category = get_sub_field('speakers');
?>

 <!-- UPCOMING EVENTS START-->
<section class="max-w-screen-xl mx-auto flex flex-wrap">
    <?php $args = array(
        'posts_per_page'    => -1,
        'post_type'         => 'speakers',
        'meta_key'          => 'last_name',
        'orderby'           => 'meta_value',
        'order'             => 'ASC',
        'cat'               =>  $category
    );
    $the_query = new WP_Query($args);
    if (!is_paged() && $the_query->have_posts()) : ?>
        <!-- Upcoming Events -->
        <?php while ($the_query->have_posts()) : $the_query->the_post(); 
            $title_1 = get_field('title_1');
            $title_2 = get_field('title_2');
            $title_3 = get_field('title_3');
            $title_4 = get_field('title_4');
            ?>
            <div class="w-1/3 mx-auto text-center mb-16 px-2">
	            <a href="<?php echo get_the_permalink(); ?>">
                    <img class="block mx-auto rounded-full mb-4" src="https://compassioninactionconference.org/media/Thomas-Fisher-scaled-e1650902580232-250x250.jpg">
                </a>
                <a href="<?php echo get_the_permalink(); ?>">
	            	<h6 class="font-bold text-red mb-2"><?php echo get_the_title(); ?></h6>
                </a>
	            <?php if ( !empty($title_1) ) : ?><p class="text-cool-gray leading-tight mb-2"><?php echo $title_1; ?></p><?php endif;?>
	            <?php if ( !empty($title_2) ) : ?><p class="text-cool-gray leading-tight mb-2"><?php echo $title_2; ?></p><?php endif;?>
	            <?php if ( !empty($title_3) ) : ?><p class="text-cool-gray leading-tight mb-2"><?php echo $title_3; ?></p><?php endif;?>
	            <?php if ( !empty($title_4) ) : ?><p class="text-cool-gray leading-tight mb-2"><?php echo $title_4; ?></p><?php endif;?>
	        </div>
        <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</section>