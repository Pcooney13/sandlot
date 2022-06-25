<?php include(locate_template('templates/header.php')); ?>

<style>
	.slider {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  
    }
    .slider::-webkit-scrollbar {
        display: none;
    }
</style>

<?php

$args = array(
	'numberposts' => 10,
	'post_type' => 'tribe_events',
	// 'meta_key' => 'field_name',
	// 'meta_value' => 'field_value'
);

$query = new WP_Query( $args );

?>

<!-- <div class="max-w-6xl mx-4 relative md:mx-auto rounded-lg mb-4 bg-indigo-600 p-4 text-white text-xl font-bold">
	Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quia nam fuga quod reprehenderit, sit nisi vero, eos dolores inventore illum distinctio ab modi laudantium minus ipsa repellat officia velit!
</div> -->

<div class="pt-16 pb-20"><section class="max-w-6xl mx-auto flex flex-col items-center px-4 lg:px-0 md:flex-row"><div class="flex-1 order-2 lg:pr-12 md:order-1 md:max-w-sm"><h2 class="heading-lg mb-2">Block Title</h2><h3 class="mb-2 sub-heading">Some Serious Subheading Stuff</h3><div class="lp-text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod illo perspiciatis recusandae ad itaque, sequi atque beatae doloremque distinctio iusto obcaecati a tempora ea illum modi quo facilis, consequatur impedit.</p>
</div><a class="btn" target="_self" href="https://sandlot.launchpaddev.com/the-laid-back-adventurers-guide/">Check this out</a></div><div class="lp-innerblocks flex-1 w-full md:w-auto order-1 mb-8 md:mb-0">

<section class="flex-1 md:mb-12 relative lg:mb-0 z-10 md:ml-12"><div class="bg-white md:p-4 rounded-lg shadow-lg w-full relative">
	<img class="z-[-1] absolute w-48 sm:w-64 -mt-10 -ml-3 xl:-mt-12 xl:-ml-12 top-0 left-0" src="https://sandlot.launchpaddev.com/app/themes/sandlot/assets/svgs/halftones/circle-bg-indigo-200.svg">	
	<img class="w-full relative rounded" src="https://sandlot.launchpaddev.com/app/uploads/2022/06/360-llzsuq.tmp_.jpg" alt=""></div></section>
</div></section></div>

<?php if( $query->have_posts() ) : ?>
	<div class="relative my-8 ml-auto overflow-y-hidden overflow-x-visible max-w-[calc(((100vw-72rem)/2)+72rem)]">	
		<div class="max-w-6xl mb-4">
			<div class="flex items-center">
				<h5 class="heading">Upcoming Events</h5>
				<div class="ml-auto flex items-center bg-indigo-500 bg-opacity-20 text-indigo-600 text-sm font-normal py-1 px-3 rounded-full">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
					</svg>
					<span>View All Events</span>
				</div>
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
				<?php while ( $query->have_posts() ) : $query->the_post();
				$author_names = '';
				if ( have_rows('authors') ) : 
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

					$author_names .= $author_svg;
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
				<div class="block snap-start scroll-mx-4 md:scroll-mx-0 shrink-0">
					<div class="shrink-0 w-[320px] md:w-[400px]">
						<a class="group" href="<?php the_permalink(); ?>">
							<img class="aspect-video object-cover w-full rounded-lg mb-2" src="<?php echo get_the_post_thumbnail_url(); ?>">
							<h6 class="font-normal text-sm md:text-base truncate md:font-bold group-hover:text-indigo-600 transition-all duration-300"><?php the_title(); ?></h6>
						</a>
						<div class="text-xs md:text-sm">
							<p class="text-gray-400 flex">
								<svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
								</svg>
								<span class="font-light"><?php echo get_the_date(); ?></span>
							</p>									
							<p class="text-gray-400 flex">
								<?php echo $author_names; ?>
							</p>									
						</div>
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

<?php include(locate_template('templates/footer.php')); ?>