
<?php $proj_events = tribe_get_events( array(
		'posts_per_page' => 5,
        'post__not_in' => array(get_the_ID()),
		'eventDisplay' => 'list' // only upcoming
	), true ); ?>
	<?php if( $proj_events->have_posts() ) : ?>
	    <h2 class="font-normal text-sm uppercase tracking-wider mb-2">Upcoming Events</h2>
        <div class="flex-auto mb-4 bg-indigo-500 bg-opacity-10 font-normal rounded-lg p-2">
			<?php while( $proj_events->have_posts() ) : $proj_events->the_post(); ?>            
            <a href="<?php the_permalink(); ?>" class="flex mx-auto items-center mt-4 group">
			    <img class="w-16 h-16 object-cover rounded-lg mr-2" src="<?php echo get_the_post_thumbnail_url('', 'thumbnail');?>">
			    <div class="text-left flex-1">
				    <p class="leading-none text-sm font-normal transition-all duration-300 group-hover:text-indigo-500 mb-0.5"><?php the_title(); ?></p>
					<p class="leading-none text-gray-500 font-light text-xs"><?php echo tribe_get_start_date( null, true, 'F j @ g:ia' ); ?></p>
				</div>
            </a>
			<?php endwhile; ?>
	    </div>
	<?php endif; wp_reset_postdata(); ?>



    <a href="/events" class="order-2 block mb-8 group flex justify-center text-indigo-600 w-full group flex-auto mb-8 bg-indigo-500 hover:text-white bg-opacity-20 hover:bg-opacity-100 transition-all duration-300  font-normal p-2 rounded-lg">
	<div class="font-normal">
		View All Events
	</div>
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-[3px] ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
    </svg>
</a>