<?php include(locate_template('templates/header.php')); ?>

<?php if (get_the_content()) : ?>
	<div class="container px-6 relative md:px-0 max-w-6xl mx-auto -mt-16 md:-mt-32 mb-16">
		<div class="mx-0 sm:mx-6 p-8 rounded-md min-h-sm shadow-sm bg-white">
			<h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
			<div class="leading-relaxed text-lg"><?php the_content();?></div>
		</div>
	</div>
<?php endif;

// Query Testimonies
$args = array(
	'numberposts'	=> 1,
    'post_type' 	=> 'testimonies',
);
$query = new WP_Query( $args ); ?>
	<?php if ( $query->have_posts() ) : ?>
		<div class="max-w-6xl mx-auto px-6 mb-24">
			<ul class="columns-1 md:columns-2 gap-8">
    			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<li class="inline-block overflow-visible break-inside-avoid w-full">
						<?php if (get_field('featured')) : 
							if (get_field('featured_image')) :
								$image = get_field('image');
								$featured = '<div class="bg-cover bg-center w-full h-80" style="background-image:url(' . $image['url'] . ')"></div>';
							elseif(get_field('featured_video')):
								$featured = '<iframe class="w-full aspect-video" src="' . get_field('video') . '"></iframe>';
							endif;?>
							<div class="bg-white rounded-md overflow-hidden shadow-lg">	
								<?php echo $featured; ?>
								<div class="relative text-lg p-8 flex">
									<svg class="w-6 top-0 left-0 mt-6 ml-2 absolute text-orange-500 fill-current" viewBox="0 0 24 17.3">
										<path d="M18.9,6.1c0.5-2.5,1.2-4.3,1.8-5.4c0.2-0.4-0.2-0.9-0.7-0.7c-5,2.9-7.2,7.2-7.5,10.6c-0.2,3,1.8,6,4.8,6.5c3.1,0.6,6-1.5,6.5-4.5C24.5,9.5,22.2,6.4,18.9,6.1z"/>
										<path d="M6.4,6.1c0.5-2.5,1.2-4.3,1.8-5.4c0.2-0.4-0.2-0.9-0.7-0.7C2.5,3,0.3,7.3,0,10.7c-0.2,3,1.8,6,4.8,6.5c3.1,0.6,6-1.5,6.5-4.5C12,9.5,9.7,6.4,6.4,6.1z"/>
									</svg>
									<p class="font-normal leading-loose md:leading-relaxed"><?php the_content(); ?></p>
								</div>
							</div>
							<div class="arrow-left -mt-px ml-0.5 w-0 h-0 mr-4 float-left"></div>
							<div class="flex items-center mb-8 pt-4">
								<div class="flex items-center">
									<img class="w-10 h-10 rounded-full mr-2" src="<?php the_post_thumbnail_url(); ?>">
									<div>
										<p class="leading-none font-normal mb-1 text-orange"><?php the_title(); ?></p>
										<?php if (get_field('job_description')) : ?>
											<div class="leading-none text-cool-gray text-sm"><?php echo get_field('job_description'); ?></div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php elseif (has_post_thumbnail()) : ?>
							<!-- ORANGE -->
							<div class="bg-orange-200 px-8 py-6 rounded-md relative">
								<svg class="w-4 top-0 left-0 mt-4 ml-3 absolute text-orange-500 fill-current" viewBox="0 0 24 17.3">
									<path d="M18.9,6.1c0.5-2.5,1.2-4.3,1.8-5.4c0.2-0.4-0.2-0.9-0.7-0.7c-5,2.9-7.2,7.2-7.5,10.6c-0.2,3,1.8,6,4.8,6.5c3.1,0.6,6-1.5,6.5-4.5C24.5,9.5,22.2,6.4,18.9,6.1z"/>
									<path d="M6.4,6.1c0.5-2.5,1.2-4.3,1.8-5.4c0.2-0.4-0.2-0.9-0.7-0.7C2.5,3,0.3,7.3,0,10.7c-0.2,3,1.8,6,4.8,6.5c3.1,0.6,6-1.5,6.5-4.5C12,9.5,9.7,6.4,6.4,6.1z"/>
								</svg>
								<?php the_content(); ?>
							</div>				
							<div class="arrow-left-orange -mt-px ml-0.5 w-0 h-0 mr-4 float-left"></div>
							<div class="flex items-center mb-8 pt-4">
								<div class="flex items-center">
									<img class="w-10 h-10 rounded-full mr-2" src="<?php the_post_thumbnail_url(); ?>">
									<div>
										<p class="leading-none font-normal mb-1 text-orange"><?php the_title(); ?></p>
										<?php if (get_field('job_description')) : ?>
											<div class="leading-none text-cool-gray text-sm"><?php echo get_field('job_description'); ?></div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php else: ?>
        					<!-- GRAY -->
							<div class="bg-light-gray relative px-8 py-6 rounded-md opacity-75">	
								<svg class="w-4 top-0 left-0 mt-5 ml-3 absolute text-cool-gray fill-current" viewBox="0 0 24 17.3">
									<path d="M18.9,6.1c0.5-2.5,1.2-4.3,1.8-5.4c0.2-0.4-0.2-0.9-0.7-0.7c-5,2.9-7.2,7.2-7.5,10.6c-0.2,3,1.8,6,4.8,6.5c3.1,0.6,6-1.5,6.5-4.5C24.5,9.5,22.2,6.4,18.9,6.1z"/>
									<path d="M6.4,6.1c0.5-2.5,1.2-4.3,1.8-5.4c0.2-0.4-0.2-0.9-0.7-0.7C2.5,3,0.3,7.3,0,10.7c-0.2,3,1.8,6,4.8,6.5c3.1,0.6,6-1.5,6.5-4.5C12,9.5,9.7,6.4,6.4,6.1z"/>
								</svg>
								<?php the_content(); ?>
							</div>				
							<div class="arrow-left-gray -mt-px ml-0.5 w-0 h-0 mr-4 float-left"></div>
							<div class="flex items-center mb-8 pt-4">
								<div class="flex items-center">
									<div>
										<p class="leading-none font-normal mb-1 text-orange"><?php the_title(); ?></p>
										<?php if (get_field('job_description')) : ?>
											<div class="leading-none text-cool-gray text-sm"><?php echo get_field('job_description'); ?></div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</li>
				<?php endwhile;
			echo '</ul>
		</div>';
	endif;
 
// Restore original post data.
wp_reset_postdata(); ?>

<div class="max-w-6xl mx-auto px-6 text-center mb-16">
	<div class="w-24 h-1 bg-orange-500 mx-auto mb-6"></div>
	<p class="heading-lg">
		  Do you have a success story?
	</p>
	<p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto mb-8">
	  Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
	</p>
	<a class="btn" href="/service">Contact us</a>
</div>

<?php include(locate_template('templates/footer.php')); ?>