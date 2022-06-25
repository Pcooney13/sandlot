<div class="max-w-6xl mx-auto px-4 md:px-0 pt-16">
    <div class="flex flex-col md:flex-row mb-6 border-b border-light-gray">
        <?php if (have_posts()) : ?>
            <div class="flex flex-col mr-8 max-w-3xl">
				<?php 
					the_posts_pagination( array(
						'mid_size' => 2,
						'prev_text' => __( 'Previous Page', 'textdomain' ),
						'next_text' => __( 'Next Page', 'textdomain' ),
					) );
				?>
                <?php while(have_posts()) : the_post(); ?>                
                    <div class="flex mb-6 rounded-lg overflow-hidden">
						<a href=" <?php echo get_the_permalink(); ?>" class="w-56 rounded-l overflow-hidden group no-underline hover:no-underline">
							<img src="<?php echo get_the_post_thumbnail_url('', 'medium');?>" class="h-full transform group-hover:scale-105 aspect-video object-cover transition-all duration-300 w-full rounded-t">
						</a>
						<div class="flex-1">
                            <?php include(locate_template('templates/partials/categories.php')); ?>														
        					<a href="<?php echo get_the_permalink(); ?>" class="w-full mb-2 block text-lg leading-tight font-semibold leading-tight text-gray-900 px-4">
								<span><?php the_title(); ?></span>
							</a>			
							<div class="px-4">
								<?php include(locate_template('templates/partials/authors.php')); ?>							
							</div>
						</div>
					</div>
                <?php endwhile; ?>				
            </div>
        <?php endif; ?>
        <?php include(locate_template('templates/sidebar/sidebar.php')); ?>
    </div>
</div>