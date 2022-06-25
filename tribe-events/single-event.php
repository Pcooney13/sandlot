<?php

	if ( ! defined( 'ABSPATH' ) ) {
		die( '-1' );
	}

	$events_label_singular = tribe_get_event_label_singular();
	$events_label_plural   = tribe_get_event_label_plural();

	$parallax_image = false;

	$event_id = get_the_ID();
	$title = get_the_title();
	$register_button = get_field('register_button');
	if ($register_button) {
		$register_url = $register_button['url'];
    	$register_title = $register_button['title'];
    	$register_target = $register_button['target'] ? $register_button['target'] : '_self';
	}

?>

<section>
	<?php while ( have_posts() ) :  the_post(); ?>
		<div class="px-4 md:px-0" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="flex flex-col">
				<!-- Above Image -->
				<div class="order-2 md:order-1 mt-6 mb-12">
					<a class="text-indigo-600 font-normal transition-all duration-300 hover:text-black flex items-center" href="<?php echo esc_url( tribe_get_events_link() ); ?>"> 
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mb-1 mr-0.5" viewBox="0 0 20 20" fill="currentColor">
	  						<path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
						</svg>
						<?php printf( esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?>
					</a>

					<!-- Notices -->
					<?php tribe_the_notices() ?>

				</div>
				<!-- Image -->
				<?php if ($parallax_image) : ?>		
					<div class="md:order-2 bg-fixed bg-center bg-clip-padding bg-no-repeat rounded-lg aspect-video md:aspect-blog " style="background-image: url(<?php echo get_the_post_thumbnail_url($event_id); ?>);">
						<div class="w-full h-full flex flex-col justify-center items-center bg-primary bg-opacity-50 text-white sm:px-12 px-6 md:rounded-lg">
    						<h2 class="font-bold lg:text-4xl text-center dropshadow-md text-3xl mb-4"><?php echo $title; ?></h2>
							<?php if ($register_button) : ?>
								<a href="<?php echo $register_url; ?>" target="<?php echo $register_target; ?>" class="bg-indigo-600 transition-all font-normal duration-300 shadow-md hover:bg-black px-6 py-2 rounded-full">
									<?php echo $register_title; ?>
								</a>
							<?php endif; ?>
						</div>
					</div>		
				<?php else : ?>		
					<div class="md:order-2 relative -mx-4 md:mx-0">
    		    		<div class="absolute top-0 left-0 w-full h-full">
    		        		<div class="w-full h-full flex flex-col justify-center items-center bg-primary bg-opacity-50 text-white sm:px-12 px-6 lg:rounded-lg">
    		            		<h2 class="font-bold lg:text-4xl text-center dropshadow-md text-3xl mb-4"><?php echo $title; ?></h2>
								<?php if ($register_button) : ?>
									<a href="<?php echo $register_url; ?>" target="<?php echo $register_target; ?>" class="bg-indigo-600 transition-all font-normal duration-300 shadow-md hover:bg-black px-6 py-2 rounded-full">
										<?php echo $register_title; ?>
									</a>
								<?php endif; ?>
    		        		</div>
    		    		</div>
    		    		<div>
    		        		<img class="lg:rounded-lg aspect-video md:aspect-blog object-cover lg:block w-full" src="<?php echo get_the_post_thumbnail_url($event_id); ?>" alt="Boston Skyline">
    		    		</div>
    				</div>
				<?php endif; ?>
    		</div>
			<!-- Title -->
			<div class="mt-0 md:mt-8 mb-8">
				<h1 class="heading-lg mb-1"><?php echo $title; ?></h1>
			</div>			
		<!-- Content / Map -->
		<div class="flex flex-col items-start md:flex-row mb-12">
			<!-- Event content -->
			<div class="flex-1 max-w-3xl">
				<div class="mb-8">
					<?php echo tribe_events_event_schedule_details( $event_id, '<h2 class="sub-heading">', '</h2>' ); ?>
					<?php if (tribe_get_venue() === 'Virtual Event') : ?>
						<p class="flex items-center">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mb-1 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<title>Virtual Event</title>
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.072 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z" />
							</svg>							
							<span class="font-normal"><?php echo tribe_get_venue() ?></span>
						</p>
					<?php endif; ?>
					<?php if ( tribe_get_cost() ) : ?>
						<span class="rounded-full mt-2 inline-block py-0.5 px-3 text-white bg-indigo-600 text-sm"><?php echo tribe_get_cost( null, true ) ?></span>
					<?php endif; ?>
				</div>
				<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
				<!-- tribe-events-single-event-description tribe-events-content -->
				<div id="post-content">
					<?php the_content(); ?>
				</div>
				<div class="flex items-center mt-6">
					<?php if ($register_button) : ?>
						<a href="<?php echo $register_url; ?>" target="<?php echo $register_target; ?>" class="text-white mr-4 font-normal border border-solid border-indigo-600 bg-indigo-600 transition-all duration-300 hover:bg-black py-2 px-6 rounded-full">
							<?php echo $register_title; ?>
						</a>
					<?php endif; ?>					
					<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>
				</div>
				<!-- Event Map -->
				<?php $map = tribe_get_embedded_map();
				if ( !empty( $map ) ) : ?>
					<div class="w-full mt-8">
						<div class="bg-white p-4 rounded-lg shadow-sm w-full relative">				
							<?php tribe_get_template_part( 'modules/meta/map' ); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<?php include(locate_template('templates/sidebar/sidebar.php')); ?>
		</div>
		<?php if ( !empty( $map ) ) : ?>
			<div id="event-meta">
				<div class="-mx-4 md:mx-0 flex flex-col md:flex-row py-4 md:py-0 flex-wrap md:mb-6 bg-indigo-500 bg-opacity-10 md:rounded-lg pl-4">
					<!-- Event meta -->
					<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
					<?php tribe_get_template_part( 'modules/meta' ); ?>
					<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
				</div>
			</div>
		<?php endif; ?>
		
	<?php endwhile; ?>	
	<?php if (false) : ?>
		<!-- RELATED POSTS -->
		<div class="border-t border-light-gray py-4">
			<h2 class="heading mb-4">Upcoming Events</h2>
			<?php 
				global $post; // Ensure the global $post variable is in scope
				$events = tribe_get_events( [
					'posts_per_page' => 3,
					'post__not_in' => array($event_id),
	   				'start_date'     => 'now',
				] );
			?>
			<div class="flex-col md:flex-row flex gap-6 mb-4">
				<?php foreach ( $events as $post ) : setup_postdata( $post ); ?>

			   		<div class="flex flex-1 flex-col">
						<a href="<?php echo $post->guid; ?>">
							<div class="transition-all duration-300 hover:opacity-75 aspect-video mb-2 rounded-md bg-center bg-cover" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
							<h4 class="transition-all duration-300 hover:text-indigo-600 font-bold leading-4 mb-1"><?php echo $post->post_title; ?></h4>
						</a>
			   			<p class="text-sm flex items-center mt-auto">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mb-1 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
  								<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							<?php echo tribe_get_start_date( $post ); ?>
						</p>
					</div>

				<?php endforeach;?>
			</div>
		</div>
		<!-- RELATED POSTS -->
		<div>
			<h2 class="heading mb-4">Related Events</h2>
			<?php 
				global $post; // Ensure the global $post variable is in scope
				$events = tribe_get_events( [
					'posts_per_page' => 3,
					'post__not_in' => array($event_id),
	   				'start_date'     => 'now',
				] );
			?>
			<div class="flex-col md:flex-row flex gap-6 mb-4">
				<?php foreach ( $events as $post ) : setup_postdata( $post ); ?>

			   		<div class="flex flex-1 flex-col">
						<a href="<?php echo $post->guid; ?>">
							<div class="transition-all duration-300 hover:opacity-75 aspect-video mb-2 rounded-md bg-center bg-cover" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
							<h4 class="transition-all duration-300 hover:text-indigo-600 font-bold leading-4 mb-1"><?php echo $post->post_title; ?></h4>
						</a>
			   			<p class="text-sm flex items-center mt-auto">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mb-1 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
  								<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
							</svg>
							<?php echo tribe_get_start_date( $post ); ?>
						</p>
					</div>

				<?php endforeach;?>
			</div>
		</div>
	<?php endif; ?>
	<!-- Event footer -->
	<div id="event-footer" class="py-6 md:border-t border-light-gray border-solid">
		<!-- Navigation -->
		<nav aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="flex justify-between text-sm md:text-base">
				<li class="event-footer-prev text-indigo-600 w-5/12 truncate md:w-auto transition-all duration-300 hover:text-black">
					<?php tribe_the_prev_event_link( '<svg class="inline h-4 w-4 mb-0.5 mr-0.5" viewBox="0 0 20 20" fill="currentColor">
	  					<path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
					</svg><span>%title%</span>' ) ?>
				</li>
				<li class="md:hidden px-2">|</li>
				<li class="event-footer-next text-indigo-600 w-5/12 text-right md:w-auto transition-all duration-300 hover:text-black">
					<?php tribe_the_next_event_link( '<span>%title%</span><svg class="inline h-4 w-4 mb-0.5 ml-0.5" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
					</svg>' ) ?>				
				</li>
			</ul>
		</nav>
	</div>

</section>