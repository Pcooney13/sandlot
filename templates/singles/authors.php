<div class="w-full m-0 relative p-0 bg-cover flex flex-col justify-center py-20 md:py-0 md:aspect-blog bg-center" style="background-image:url(https://pact.launchpaddev.com/app/uploads/2022/05/patrick-fore-0gkw_9fy0eQ-unsplash.jpg">
	<div class="container max-w-6xl mx-auto mb-16 md:mb-32">
        <h1 class="mx-6 text-white z-10 relative font-normal text-center drop-shadow-md text-lg lg:text-2xl tracking-wider mb-2">Author</h1>
        <h1 class="mx-6 relative z-10 font-gotham text-white text-center font-bold drop-shadow-md text-2xl lg:text-6xl mb-2"><?php the_title(); ?></h1>
    </div>
    <div class="absolute top-0 bg-primary opacity-50 h-full w-full"></div>
</div>
<!-- Content -->
<div class="container max-w-5xl mx-auto -mt-32">
	<div class="mx-0 sm:mx-6 relative">
		<div class="relative flex flex-col md:flex-row md:shadow-md bg-white w-full p-6 flex">
            <!-- Post Content -->
			<div class="w-full md:w-1/3">
				<div class="mb-12 md:mb-0 border-b">
					<div class="aspect-square bg-cover py-12 rounded-md bg-center" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>
					<div class="flex pt-6 items-center">
						<p class="text-lg font-normal"><?php the_title(); ?></p>
						<div class="ml-auto flex">
							<!-- TWITTER -->
							<svg class="w-4 h-4 mx-2 fill-current text-cool-gray transition-all duration-300 hover:text-amber-500" viewBox="0 0 24 24">
								<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
							</svg>
							<!-- LI -->
							<svg class="w-4 h-4 mx-2 fill-current text-cool-gray transition-all duration-300 hover:text-amber-500" viewBox="0 0 24 24">
								<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
							</svg>
							<!-- FB	 -->
							<svg class="w-4 h-4 mx-2 fill-current text-cool-gray transition-all duration-300 hover:text-amber-500" viewBox="0 0 24 24">
								<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
							</svg>
						</div>
					</div>
					<p class="opacity-50 mb-4">VP Operations</p>
					<p class="opacity-50 mb-4 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, repellendus maiores. Ut velit et illum quas itaque a minima quo enim ullam eaque laborum.</p>
				</div>
			</div>  
			<div class="flex-1 md:pl-8">
				<?php
					// Post Query
					$post_args = array(
						'posts_per_page'	=> -1,
						'post_type'		=> 'post',
						'meta_query'	=> array(
							array(
								// 'key'		=> 'authors_$_author',
								'compare'	=> '=',
								'value'		=> get_the_ID(),
							),
						),
					);
					$post_query = new WP_Query( $post_args ); 
						if( $post_query->have_posts() ):
							echo '<h4 class="heading mb-4">Posts By <span class="text-blue">' . get_the_title() . '</span></h4>';
							while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
								<div class="flex mb-4 bg-off-white shadow-sm rounded-md overflow-hidden">
									<a href=" <?php echo get_the_permalink(); ?>" class="w-1/4 rounded-l overflow-hidden group no-underline hover:no-underline">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="h-full transform group-hover:scale-105 transition-all duration-300 w-full rounded-t">
									</a>
									<div class="flex-1 my-4">
										<?php $categories = get_the_category(); ?>
										<?php if ( ! empty( $categories ) ) : ?>
											<div class="flex px-4 mb-1 items-center text-blue">
            									<?php foreach( $categories as $category ) :
													if ($category->name !== 'Uncategorized') :                    
                    									$cat_id = $category->cat_ID; ?>
														<a class="uppercase text-teal text-xs mr-4" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
															<?php echo esc_html( $category->name ); ?>
														</a>
													<?php endif; ?>
                								<?php endforeach; ?>
											</div>
        								<?php endif; ?>
										<a href="<?php echo get_the_permalink(); ?>" class="w-full block leading-tight font-normal text-sm leading-tight md:font-bold text-gray-900 px-4">
											<span><?php echo get_the_title(); ?></span>
										</a>										
									</div>
								</div>
							<?php endwhile; 
							wp_reset_postdata();
						endif; 
					?>		
			</div>          
		</div>
	</div>
</div>