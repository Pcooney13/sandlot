<?php 

$post_type = get_post_type( $post->ID );
if ($post_type === 'tribe_events') {
	$author_title = 'Organizers';
} else {
	$author_title = 'Authors';
}
// tribe_events
// posts
if ( have_rows('authors') ) : ?>
	<div class="">
	<?php $author_count = count(get_field('authors')); 
	$count = 1; ?>
	<h2 class="font-normal mt-8 md:mt-0 text-sm uppercase tracking-wider mb-2"><?php echo $author_title; ?></h2>
	<?php while( have_rows('authors') ) : the_row(); 
		// MORE THAN 3 AUTHORS - OPEN ACCORDION 
		if ($count === 3) : ?>
			<div class="flex flex-col mb-4">
				<button class="accordion order-2 block group flex justify-center text-indigo-600 w-full group flex-auto mb-4 bg-indigo-500 hover:text-white bg-opacity-20 hover:bg-opacity-100 font-normal p-2 rounded-lg">
					<div class="font-normal">
						View <span>More</span> <?php echo $author_title; ?>
					</div>
					<div>
						<!-- Minus -->
						<svg xmlns="http://www.w3.org/2000/svg" class="hidden h-4 w-4 mt-1 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
						</svg>
						<!-- Plus -->
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
						</svg>
					</div>
				</button>
				<div class="panel order-1">
		<?php endif; ?>
		<!-- AUTHOR CONTENT -->
		<?php $author = get_sub_field('author'); ?>
		<a href="<?php echo get_the_permalink($author); ?>" class="block group flex-auto mb-4 bg-indigo-500 bg-opacity-10 font-normal p-2 rounded-lg">	
			<div  class="flex mx-auto items-center">
				<img class="w-16 h-16 rounded-lg mr-2" src="<?php echo get_the_post_thumbnail_url($author, 'thumbnail'); ?>">
				<div class="text-left">
					<p class="leading-none font-normal text-indigo-600 transition-all duration-300 group-hover:text-black mb-0.5"><?php echo get_the_title($author); ?></p>
					<?php if (get_field('job_description', $author)) : ?>
						<p class="leading-none text-gray-500 font-light text-xs"><?php echo get_field('job_description', $author);?></p>
					<?php endif; ?>
				</div>
			</div>
		</a>
		<!-- MORE THAN 3 AUTHORS - CLOSE ACCORDION  -->
		<?php if ($count === $author_count && $count > 2) : ?>
				</div>
			</div>
		<?php endif; ?>
		<?php $count++; ?>
	<?php endwhile; ?>
	</div>
	<div class="w-full border-b border-indigo-200 mb-8 md:hidden"></div>
<?php endif; ?>