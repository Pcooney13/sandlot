<?php 
	$post_slug = get_post_type( $post->ID );
	$post_type_object = get_post_type_object(get_post_type($post));
	if ($post_type_object) {
	    $post_type = $post_type_object->labels->singular_name;
	}
?>

<!-- Image -->		
<div class="relative z-20 -mx-4 md:mx-0 mt-4 md:mt-8">
    <img class="lg:rounded-lg aspect-video md:aspect-blog object-cover lg:block w-full" src="<?php echo get_the_post_thumbnail_url();?>" alt="image">
</div>
<!-- Scroll Progress Bar -->
<div id="progress-bar" class="top-[8px] -mx-4 md:mx-0 w-screen md:w-auto transform -translate-y-[8px] h-2 relative sticky top-0 transition-all duration-300">
	<div class="h-full w-0 rounded-r before:content-[''] before:bg-gradient-to-r before:from-indigo-600 before:to-fuchsia-500 before:absolute before:left-0 before:right-0 before:top-0 before:bottom-0"></div>
</div>
<div class="flex items-center mt-6 mb-12 md:mb-4">
	<!-- Back to posts -->
	<a class="text-indigo-600 font-normal transition-all duration-300 hover:text-black flex items-center" href="/<?php echo $post_slug; ?>/"> 
		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mb-1 mr-0.5" viewBox="0 0 20 20" fill="currentColor">
	  		<path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
		</svg>
		All <?php echo $post_type; ?>s
	</a>
	<!-- Share -->
	<div class="flex ml-auto items-center">
		<p class="text-slate-400 mr-2 mt-1 uppercase text-sm">SHARE: </p>
		<!-- TWITTER -->
		<span class="text-slate-300 hover:text-indigo-600 transition-all duration-300">
			<svg class="w-6 h-6 fill-current mx-2" viewBox="0 0 24 24">
				<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
			</svg>
		</span>
		<!-- LI -->
		<span class="text-slate-300 hover:text-indigo-600 transition-all duration-300">
			<svg class="w-6 h-6 fill-current mx-2" viewBox="0 0 24 24">
				<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
			</svg>
		</span>
		<!-- FB	 -->
		<span class="text-slate-300 hover:text-indigo-600 transition-all duration-300">
			<svg class="w-6 h-6 fill-current mx-2" viewBox="0 0 24 24">
				<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
			</svg>
		</span>
	</div>
</div>
<!-- Title -->
<div class="mt-0 md:mt-8 mb-8">
	<h1 class="heading-lg mb-1"><?php the_title(); ?></h1>
</div>
<div class="flex flex-col md:flex-row mb-6 border-b border-light-gray">
	<!-- Post content -->
	<div class="flex flex-col">
		<div class="flex-1 max-w-3xl">
			<div class="mb-8">
				<div class="flex">
					<?php if ( have_rows('authors') ) : 
					$author_names = '';
					$author_count = count(get_field('authors'));
					$count = 1;
					while( have_rows('authors') ) : the_row(); 
						if ($author_count !== $count) {
							$delimiter = ', ';
						} else {
							$delimiter = '';
						}
						$author = get_sub_field('author');
						$author_names .= '<a href="' . get_the_permalink($author) . '" class="font-normal border-b hover:text-indigo-500 hover:border-b-0 transition-all duration-300">' . get_the_title($author) . '</a>' . $delimiter;
						$count++;
						?>
					<?php endwhile; 
					endif; ?>
					<div>
						<p class="text-slate-400">
							Posted on <span class="font-normal"><?php echo get_the_date(); ?></span>
							<?php if (!empty($author_names)) : ?>
								by <?php echo $author_names; ?>
							<?php endif; ?>
						</p>
						<p class="text-slate-400">Categories: <span class="font-normal border-b border-sky-500 hover:text-sky-500 hover:border-b-0 transition-all duration-300">Adventure</span>, <span class="font-normal border-b border-emerald-500 hover:text-emerald-500 hover:border-b-0 transition-all duration-300">Outdoors</span></p>
					</div>						
				</div>
			</div>
			<!-- Post Content -->
			<div id="blog-scroll">
				<div id="post-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Sidebar -->
	<?php include(locate_template('templates/sidebar/sidebar.php')); ?>
</div>
	