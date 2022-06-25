<!-- Recent Posts -->
<?php 
$post = get_post();
$args = array(
    'numberposts' => 10,
    'post_type' => 'post',
    'post__not_in' => array($post->ID),
	'offset' => 1, //Temporarily for HOMEPAGE
    // 'meta_key' => 'field_name',
    // 'meta_value' => 'field_value'
);

$query = new WP_Query( $args );


?>

	
<style>
	.slider {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  
    }
    .slider::-webkit-scrollbar {
        display: none;
    }
</style>
		<?php if( $query->have_posts() ) : ?>
	<div class="relative ml-auto overflow-y-hidden overflow-x-visible max-w-[calc(((100vw-72rem)/2)+72rem)]">	
		<div class="max-w-6xl mb-4">
			<div class="flex items-center px-4 md:px-0">
				<h2 class="heading">Recent Posts</h2>
				<a href="/blog" class="ml-auto flex items-center bg-indigo-500 bg-opacity-10 text-indigo-600 text-sm font-normal py-1 px-3 rounded-full transition-all duration-300 hover:bg-indigo-600 hover:text-white">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
					</svg>
					<span>View All Posts</span>
                </a>
			</div>
		</div>
		<div class="relative rounded-xl overflow-auto">  		
  			<!-- Contents -->
  			<div class="slider relative w-full flex gap-4 snap-x snap-mandatory overflow-x-auto">
				<!-- < Start Alignment Slide > 
				provides spacing on mobile by adding a front slide with no width allowing [gap-4] 
				to put a space off the screend edge, hidden at [md:]-->
				<div class="md:hidden snap-start scroll-mx-4 md:scroll-mx-0 shrink-0">
      				<div class="shrink-0 h-64 w-0"></div>
    			</div>
				<!-- </ Start Alignment Slide> -->
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<?php if ( have_rows('authors') ) : 
					$author_names = '';
					$author_count = count(get_field('authors'));
					if ($author_count === 0) {
						$author_svg = '';
					} elseif ($author_count === 1) {
						$author_svg = '<svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  							<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
						</svg>';
					} elseif ($author_count === 2) {
						$author_svg = '<svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  							<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
						</svg>';
					} else {
						$author_svg = '<svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  							<path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
						</svg>';
					}
					$count = 1;
					if ($author_count > 2) {
						$author_names = '<span>Multiple Authors</span>';
					} else {
						while( have_rows('authors') ) : the_row(); 
							if ($author_count !== $count) {
								$delimiter = '<span class="mr-1">, </span>';
							} else {
								$delimiter = '';
							}
							$author = get_sub_field('author');
							$author_names .= '<a href="' . get_the_permalink($author) . '" class="font-light hover:text-indigo-500 underline transition-all duration-300">' . get_the_title($author) . '</a>' . $delimiter;
							$count++;
						endwhile; 
					}
				endif; ?>
				<div class="slide block snap-start scroll-mx-4 md:scroll-mx-0 shrink-0 hover:opacity-100 transition-all duration-300">
					<div class="shrink-0 w-[320px] md:w-[400px]">
						<a class="group" href="<?php the_permalink(); ?>">
							<img class="aspect-video object-cover w-full hover:grayscale-0 hover:opacity-100 transition-all duration-300 rounded-lg mb-2" src="<?php echo get_the_post_thumbnail_url('', 'medium_large'); ?>" alt="<?php the_title(); ?>">
							<h3 class="font-normal text-sm md:text-base truncate md:font-bold group-hover:text-indigo-600 transition-all duration-300"><?php the_title(); ?></h3>
						</a>
						<?php include(locate_template('templates/partials/authors.php')); ?>
					</div>
				</div>
				<?php endwhile; ?>
				<!-- End Alignment Slide -
				provides spacing to allow for last card to align on left in start postion. 
				- calculates [ screen size ] - [ max-w-6xl or 72 rem ] / 2 to get gutter width
				- removes single card width + 1rem for padding -->
				<div class="snap-start scroll-mx-4 md:scroll-mx-0 shrink-0">
      				<div class="shrink-0 h-64 w-[calc(100vw-320px-2rem)] md:w-[calc((((100vw-72rem)/2)+72rem)-400px-1rem)]"></div>
    			</div>
				<!-- </ End Alignment Slide> -->
  			</div>
		</div>
		<div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5"></div>
	</div>
<?php endif; ?>

<?php wp_reset_query(); ?>