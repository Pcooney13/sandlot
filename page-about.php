<?php include(locate_template('templates/header.php')); ?>

<!-- Single Call Out -->
<?php
	$args = array(
		'posts_per_page' => 1,
		'post_type' => 'authors',
		'orderby' => 'date',
		'order' => 'ASC'
	);
	$query = new WP_Query( $args );
?>
<?php if( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="pt-16 md:pb-20">
			<section class="max-w-6xl mx-auto flex flex-col items-center px-4 lg:px-0 md:flex-row">
				<div class="flex-1 order-2 lg:pl-12 md:order-2">
					<div class="flex pt-6 items-center md:pr-4">
						<h2 class="heading-lg mb-2"><?php the_title(); ?></h2>
						<ul class="ml-auto mx-2 flex px-4">
							<!-- TWITTER -->
							<li class="text-cool-gray transition-all duration-300 hover:text-indigo-600">
								<svg class="w-4 h-4 mx-2 fill-current" viewBox="0 0 24 24">
									<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
								</svg>
							</li>
							<!-- LI -->
							<li class="text-cool-gray transition-all duration-300 hover:text-indigo-600">
								<svg class="w-4 h-4 mx-2 fill-current" viewBox="0 0 24 24">
									<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
								</svg>
							</li>
							<!-- FB	 -->
							<li class="text-cool-gray transition-all duration-300 hover:text-indigo-600">
								<svg class="w-4 h-4 mx-2 fill-current" viewBox="0 0 24 24">
									<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
								</svg>
							</li>
						</ul>
					</div>
					<h4 class="sub-heading -mt-2 mb-4"><?php the_field('job_description'); ?></h4>
					<h3 class="font-bold text-base md:text-lg text-gray-900 leading-tight mb-2">Blandit volutpat maecenas volutpat blandit aliquam etiam</h3>
					<p class="text mb-6">Ac auctor augue mauris augue neque gravida in fermentum et. Nunc id cursus metus aliquam eleifend mi in nulla posuere. Erat velit scelerisque in dictum non. Ut enim blandit volutpat maecenas volutpat. Blandit massa enim nec dui nunc mattis enim. Cursus risus at ultrices mi tempus imperdiet.</p>
				</div>
				<div class="lp-innerblocks flex-1 w-full md:w-auto order-1 mb-8 md:mb-0 md:order-1">
					<section class="flex-1 md:mb-12 relative lg:mb-0 z-10 md:mr-12">
						<div class="bg-white md:p-4 rounded-lg shadow-lg w-full relative">
							<img class="z-[-1] absolute w-48 sm:w-64 -mt-10 -mr-3 xl:-mt-12 xl:-mr-12 top-0 right-0" src="https://sandlot.launchpaddev.com/app/themes/sandlot/assets/svgs/halftones/circle-bg-indigo-200.svg">
							<img class="z-[-1] absolute w-48 sm:w-64 -mb-4 -ml-3 xl:-mb-12 xl:-ml-12 bottom-0 left-0" src="https://sandlot.launchpaddev.com/app/themes/sandlot/assets/svgs/halftones/circle-bg-indigo-200.svg">
							<img class="w-full relative rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
						</div>
					</section>
				</div>
			</section>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>	

<!-- Team -->
<section id="about-3" class="py-16 max-w-6xl px-4 md:px-0 mx-auto mb-4">
	<p class="font-light tracking-wide text-indigo-600">OUR TEAM</p>
	<h2 class="font-bold leading-tight text-xl md:text-3xl mb-8 md:mb-4">The Talented People Behind the Scenes of Our Organization</h2>
	<div class="md:grid grid-cols-3 grid-rows-2 gap-12">
		<?php
		
		$args = array(
			'posts_per_page' => 6,
			'post_type' => 'authors',
			// 'meta_key' => 'field_name',
			// 'meta_value' => 'field_value'
		);
		
		$query = new WP_Query( $args );
		
		?>
		
		<?php if( $query->have_posts() ) : ?>
			
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="flex md:block mb-12 pb-4 md:pb-0 md:mb-0 border-b">
					<a href="<?php echo get_the_permalink(); ?>">
						<div class="object-fit aspect-square bg-cover py-12 rounded-md" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);"></div>
					</a>
					<div class="ml-4 md:ml-0">
						<div class="flex flex-row md:pt-6 items-center">
							<a href="<?php echo get_the_permalink(); ?>"><p class="text-lg leading-4 font-normal hover:text-indigo-600 transition-all duration-300"><?php the_title(); ?></p></a>
							<ul class="ml-auto mx-2 flex -mr-2">
								<!-- TWITTER -->
								<li class="text-cool-gray  transition-all duration-300 hover:text-indigo-600">
									<svg class="w-4 h-4 mx-2 fill-current" viewBox="0 0 24 24">
										<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
									</svg>
								</li>
								<!-- LI -->
								<li class="text-cool-gray  transition-all duration-300 hover:text-indigo-600">
									<svg class="w-4 h-4 mx-2 fill-current" viewBox="0 0 24 24">
										<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
									</svg>
								</li>
								<!-- FB	 -->
								<li class="text-cool-gray  transition-all duration-300 hover:text-indigo-600">
									<svg class="w-4 h-4 mx-2 fill-current" viewBox="0 0 24 24">
										<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
									</svg>
								</li>
							</ul>
						</div>
						<p class="opacity-50 mb-2 md:mb-4"><?php the_field('job_description'); ?></p>
						<p class="opacity-50 mb-4 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, repellendus maiores. Ut velit et illum quas itaque a minima quo enim ullam eaque laborum.</p>
					</div>
				</div>
				
			<?php endwhile; ?>
			
		<?php endif; ?>
		
		<?php wp_reset_query(); ?>		
	</div>
</section>


<div class="mt-20">
    <div class="skew-y-[9deg] transform bg-indigo-500 bg-opacity-20">
    	<div class="skew-y-[-9deg] transform ">
            <div class="pb-12">
				<div class="max-w-6xl mx-auto px-4 md:px-0">
    				<div class="relative">
        				<div id="video-overlay" class="absolute z-10 top-0 left-0 w-full h-full transition-all duration-300">
            				<div class="w-full h-full flex flex-col justify-center items-center bg-primary bg-opacity-50 text-white sm:px-12 px-6 rounded-md">
                				<h2 class="font-bold lg:text-4xl text-3xl lg:leading-9 leading-7">Watch a video</h2>
                				<button id="watch-video">
									<svg class="mt-8 cursor-pointer hover:bg-gray-200 hover:bg-opacity-20 rounded-md" width="72" height="48" viewBox="0 0 72 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    					<rect x="0.5" y="0.5" width="71" height="47" rx="5.5" stroke="white"></rect>
                    					<path d="M31 16V32L44 24L31 16Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</button>
            				</div>
        				</div>
        				<div>			
            				<img id="image-container" class="rounded-md opacity-100 aspect-video md:aspect-[3/1] transition-all duration-300 object-cover lg:block w-full" src="https://i3.ytimg.com/vi/JyNIJ8U03I0/maxresdefault.jpg" alt="A person Coding">
							<div id="video-container" class="absolute opacity-0 w-full h-full left-0 top-0 aspect-video">
								<iframe class="absolute w-full h-full top-0 left-0 rounded-md" allow="autoplay" allowfullscreen src="https://www.youtube.com/embed/JyNIJ8U03I0"></iframe>
							</div>
        				</div>
    				</div>
            		<div class="mt-8 md:mt-12">
                		<div class="flex lg:flex-row flex-col">
                    		<div class="w-full lg:w-7/12 mb-8 md:mb-0">
                        		<h2 class="heading-lg mb-4">Our Vision</h2>
                        		<p class="text max-w-lg mb-6">Cullam nobis, saepe iste ducimus! Sapiente quia nam non asperiores vero cumque corporis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde omnis magnam nisi molestias, blanditiis expedita dolores, tenetur ullam nobis, saepe iste ducimus! Sapiente quia nam non asperiores vero cumque corporis.</p>
                        		<p class="text max-w-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, dolorem! Hic obcaecati eius inventore quaerat sunt soluta deserunt autem similique consectetur? Veniam officia architecto quia quod tempora et ut est.</p>
                    		</div>
                    		<div class="lg:pt-16 xl:pt-0 cursor-pointer w-full lg:w-5/12 lg:mt-0 sm:mt-10 mt-8">
                        		<div class="w-full grid sm:grid-cols-2 grid-cols-1">
                            		<!-- Company Founded -->
                            		<div class="pb-5 border-r-2 border-indigo-600">
                                		<div class="flex justify-between">
                                    		<div class="w-auto text-right">
                                        		<h2 class="-mt-2 font-semibold text-xl leading-5 text-gray-800">Company founded</h2>
                                        		<p class="font-normal text-base leading-6 text-gray-600 mt-2">It is a long established in 2018</p>
                                    		</div>
                                    		<div class="-mt-1 -mr-2">
                                        		<svg width="60" height="12" viewBox="0 0 60 12" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                            		<circle cx="54" cy="6" r="5.5" fill="white" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="42" cy="6" r="1.5" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="18" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.3"></circle>
                                            		<circle cx="34" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.7"></circle>
                                            		<circle cx="10" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.2"></circle>
                                            		<circle cx="26" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.5"></circle>
                                            		<circle cx="2" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.1"></circle>
                                        		</svg>
                                    		</div>
                                		</div>
                            		</div>
                            		<div></div>
                            		<!-- 500k For Responsiveness STARTS-->
                            		<div class="sm:hidden block pb-5 border-r-2 border-indigo-600">
                                		<div class="flex justify-between">
                                    		<div class="w-auto">
                                        		<h2 class="font-semibold text-xl leading-5 text-gray-800">500k Monthly Users</h2>
                                        		<p class="font-normal text-base leading-6 text-gray-600 mt-2">It is a long established in 2018</p>
                                    		</div>
                                    		<div class="mt-1 -mr-2">
                                        		<svg width="60" height="12" viewBox="0 0 60 12" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                            		<circle cx="54" cy="6" r="5.5" fill="white" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="42" cy="6" r="1.5" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="18" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.3"></circle>
                                            		<circle cx="34" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.7"></circle>
                                            		<circle cx="10" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.2"></circle>
                                            		<circle cx="26" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.5"></circle>
                                            		<circle cx="2" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.1"></circle>
                                        		</svg>
                                    		</div>
                                		</div>
                            		</div>
                            		<!-- 500k For Responsiveness ENDS-->
                            		<div class="border-r-2 border-indigo-600"></div>
                            		<!-- 500k monthly Views -->
                            		<div class="sm:block hidden pb-7">
                                		<div class="flex justify-between">
                                    		<div class="-mt-1 -ml-2">
                                        		<svg class="" width="60" height="12" viewBox="0 0 60 12" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                            		<circle cx="6" cy="6" r="5.5" fill="white" transform="rotate(-180 6 6)" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="18" cy="6" r="1.5" transform="rotate(-180 18 6)" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="42" cy="6" r="1.5" transform="rotate(-180 42 6)" class="text-indigo-600 stroke-current" stroke-opacity="0.3"></circle>
                                            		<circle cx="26" cy="6" r="1.5" transform="rotate(-180 26 6)" class="text-indigo-600 stroke-current" stroke-opacity="0.7"></circle>
                                            		<circle cx="50" cy="6" r="1.5" transform="rotate(-180 50 6)" class="text-indigo-600 stroke-current" stroke-opacity="0.2"></circle>
                                            		<circle cx="34" cy="6" r="1.5" transform="rotate(-180 34 6)" class="text-indigo-600 stroke-current" stroke-opacity="0.5"></circle>
                                            		<circle cx="58" cy="6" r="1.5" transform="rotate(-180 58 6)" class="text-indigo-600 stroke-current" stroke-opacity="0.1"></circle>
                                        		</svg>
                                    		</div>
                                    		<div class="ml-auto w-auto">
                                        		<h2 class="-mt-2 font-semibold text-xl leading-5 text-gray-800">500k monthly views</h2>
                                        		<p class="font-normal text-base leading-6 text-gray-600 mt-2">It is a long established in 2018</p>
                                    		</div>
                                		</div>
                            		</div>
                            		<div></div>
                            		<!-- 200k Users For Responsiveness STARTS-->
                            		<div class="sm:hidden block pb-5 border-r-2 border-indigo-600">
                                		<div class="flex justify-between">
                                    		<div class="w-auto">
                                        		<h2 class="-mt-2 font-semibold text-xl leading-5 text-gray-800">200k Users</h2>
                                        		<p class="font-normal text-base leading-6 text-gray-600 mt-2">It is a long established in 2018</p>
                                    		</div>
                                    		<div class="-mt-1 -mr-2">
                                        		<svg width="60" height="12" viewBox="0 0 60 12" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                            		<circle cx="54" cy="6" r="5.5" fill="white" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="42" cy="6" r="1.5" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="18" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.3"></circle>
                                            		<circle cx="34" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.7"></circle>
                                            		<circle cx="10" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.2"></circle>
                                            		<circle cx="26" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.5"></circle>
                                            		<circle cx="2" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.1"></circle>
                                        		</svg>
                                    		</div>
                                		</div>
                            		</div>
                            		<!-- 200k Users For Responsiveness ENDS-->
                            		<div></div>
                            		<!-- 200k Users -->
                            		<div class="sm:block hidden pb-5 border-r-2 border-indigo-600">
                                		<div class="flex justify-between">
                                    		<div class="w-auto text-right">
                                        		<h2 class="font-semibold text-xl leading-5 text-gray-800">200k Users</h2>
                                        		<p class="font-normal text-base leading-6 text-gray-600 mt-2">It is a long established in 2018</p>
                                    		</div>
                                    		<div class="mt-1 -mr-2">
                                        		<svg width="60" height="12" viewBox="0 0 60 12" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                            		<circle cx="54" cy="6" r="5.5" fill="white" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="42" cy="6" r="1.5" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="18" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.3"></circle>
                                            		<circle cx="34" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.7"></circle>
                                            		<circle cx="10" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.2"></circle>
                                            		<circle cx="26" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.5"></circle>
                                            		<circle cx="2" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.1"></circle>
                                        		</svg>
                                    		</div>
                                		</div>
                            		</div>
                            		<div></div>
                            		<!-- 200+ Team For Responsiveness STARTS-->
                            		<div class="sm:hidden block pb-5 border-r-2 border-indigo-600">
                                		<div class="flex justify-between">
                                    		<div class="w-auto">
                                        		<h2 class="font-semibold text-xl leading-5 text-gray-800">500k Monthly Users</h2>
                                        		<p class="font-normal text-base leading-6 text-gray-600 mt-2">It is a long established in 2018</p>
                                    		</div>
                                    		<div class="mt-1 -mr-2">
                                        		<svg width="60" height="12" viewBox="0 0 60 12" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                            		<circle cx="54" cy="6" r="5.5" fill="white" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="42" cy="6" r="1.5" class="text-indigo-600 stroke-current"></circle>
                                            		<circle cx="18" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.3"></circle>
                                            		<circle cx="34" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.7"></circle>
                                            		<circle cx="10" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.2"></circle>
                                            		<circle cx="26" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.5"></circle>
                                            		<circle cx="2" cy="6" r="1.5" class="text-indigo-600 stroke-current" stroke-opacity="0.1"></circle>
                                        		</svg>
                                    		</div>
                                		</div>
                            		</div>
                            		<!-- 200+ Team For Responsiveness ENDS-->
                            		<div></div>
                    				<!-- 200+ Team -->
                    				<div class="sm:block hidden pb-5">
                        				<div class="flex justify-between">
                            				<div class="-mt-1 -ml-2">
                                				<svg class="" width="60" height="12" viewBox="0 0 60 12" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                    				<circle cx="6" cy="6" r="5.5" fill="white" transform="rotate(-180 6 6)" class="text-indigo-600 stroke-current"></circle>
                                    				<circle cx="18" cy="6" r="1.5" transform="rotate(-180 18 6)" class="text-indigo-600 stroke-current"></circle>
                                    				<circle cx="42" cy="6" r="1.5" transform="rotate(-180 42 6)" class="text-indigo-600 stroke-current" stroke-opacity="0.3"></circle>
                                    				<circle cx="26" cy="6" r="1.5" transform="rotate(-180 26 6)" class="text-indigo-600 stroke-current" stroke-opacity="0.7"></circle>
                                    				<circle cx="50" cy="6" r="1.5" transform="rotate(-180 50 6)" class="text-indigo-600 stroke-current" stroke-opacity="0.2"></circle>
                                    				<circle cx="34" cy="6" r="1.5" transform="rotate(-180 34 6)" class="text-indigo-600 stroke-current" stroke-opacity="0.5"></circle>
                                    				<circle cx="58" cy="6" r="1.5" transform="rotate(-180 58 6)" class="text-indigo-600 stroke-current" stroke-opacity="0.1"></circle>
                                				</svg>
                            				</div>
                            				<div class="ml-auto w-auto">
                                				<h2 class="-mt-2 w-auto font-semibold text-xl leading-5 text-gray-800">200+ Team</h2>
                                				<p class="w-auto font-normal text-base leading-6 text-gray-600 mt-2">It is a long established in 2018</p>
                            				</div>
                        				</div>
                    				</div>
                				</div>
            				</div>
        				</div>
    				</div>
				</div>
			</div>
        </div>
    </div>
</div>

<div class="pt-24 pb-12">
    <div class="max-w-6xl mx-auto px-4 md:px-0">
    	<div class="lg:text-center">
			<div class="w-24 h-1 bg-indigo-600 md:mx-auto mb-6">                    
            </div>
        	<p class="heading-lg">
          	    What We Provide
        	</p>
        	<p class="sub-heading mt-4 max-w-3xl lg:mx-auto">
          	    Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
        	</p>
      	</div>
      	<div class="mt-10">
        	<dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
				<?php $array = ['Telephone consultations', 'face-to-face consultations', 'CME-certified training', 'Referrals to mental health professionals', 'Linkage to key resources']; ?>
                <?php for ($i=0; $i < count($array); $i++) : ?>
                    <div class="relative">
              		    <dt>
                		    <div class="absolute flex items-center justify-center h-12 w-12 rounded-lg bg-indigo-600 text-white">
                  			    <svg class="h-6 w-6" x-description="Heroicon name: outline/globe-alt" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  								    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
							    </svg>
                		    </div>
                		    <p class="ml-16 text-lg leading-6 font-semibold text-gray-900 transition-all duration-300"><?php echo $array[$i]; ?></p>
              		    </dt>
              		    <dd class="mt-2 ml-16 sub-text">
                		    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
              		    </dd>
					</div>
                <?php endfor; ?>
				<div class="bg-indigo-500/5 relative rounded-lg p-2 flex flex-col items-center justify-center">
					<p class="text-lg leading-6 font-semibold mb-4">Get in Touch with us Today</p>
					<a href="/contact" class="btn">Contact Us</a>
				</div>
            </dl>
      	</div>
    </div>
</div>
	
<!-- ACCORDION -->
<div class="bg-white pt-12 pb-4">
	<section class="w-full max-w-3xl text-xl px-4 md:px-0 mx-auto my-16">
		<div class="lg:text-center mb-12">
    		<!-- <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Financing</h2> -->
			<div class="w-24 h-1 bg-indigo-600 md:mx-auto mb-6"></div>
    		<p class="heading-lg">
      			Frequently Asked Questions
    		</p>
    		<p class="sub-heading">
      			Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
    		</p>
    	</div>
		<div class="border-t">
			<button class="accordion text-lg leading-tight md:text-xl md:px-4 py-6 relative w-full items-center text-left flex">
				<span class="mr-4 font-medium">What is wealth management?</span>
    				<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute text-cool-gray mr-4 right-0 h-6 w-6 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</button>
			<div class="panel">
				<div class="px-4 pb-4">
    				<div class="accordion-content text-base opacity-75">
        				Wealth management usually refers to a suite of services that provides the opportunity to work with a financial professional. It usually includes working together on a broad plan to help grow and protect assets and it often includes the ability to take advantage of professional money management.
    				</div>
				</div>
			</div>
		</div>
		<div class="border-t">
			<button class="accordion text-lg leading-tight md:text-xl md:px-4 py-6 relative w-full items-center text-left flex">
				<span class="mr-4 font-medium">Why would someone need wealth management?</span>
    				<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute text-cool-gray mr-4 right-0 h-6 w-6 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</button>
			<div class="panel">
				<div class="px-4 pb-4">
    				<div class="accordion-content text-base opacity-75">
        				Clients may engage in a wealth management relationship for a number of different reasons. Some choose to do so because they need help planning for certain goals, or need guidance around estate planning, protecting wealth, retirement planning, or ways to manage their tax obligations. Others choose wealth management because they don’t have the time or the desire to manage their own portfolios or simply value the input of a financial professional, who can act as a sounding board.
    				</div>
				</div>
			</div>
		</div>
		<div class="border-t">
			<button class="accordion text-lg leading-tight md:text-xl md:px-4 py-6 relative w-full items-center text-left flex">
				<span class="mr-4 font-medium">What is taxable income?</span>
    				<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute text-cool-gray mr-4 right-0 h-6 w-6 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</button>
			<div class="panel">
				<div class="px-4 pb-4">
    				<div class="accordion-content text-base opacity-75">
        				Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ipsam dolorem nihil, vero recusandae aliquam necessitatibus sed reiciendis, obcaecati tenetur sint atque. Nam quasi amet quam architecto quae consectetur eaque!
    				</div>
				</div>
			</div>
		</div>
		<div class="border-t">
			<button class="accordion text-lg leading-tight md:text-xl md:px-4 py-6 relative w-full items-center text-left flex">
				<span class="mr-4 font-medium">What are the advantages of a Roth IRA?</span>
    				<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute text-cool-gray mr-4 right-0 h-6 w-6 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
				</svg>
			</button>
			<div class="panel">
				<div class="px-4 pb-4">
    				<div class="accordion-content text-base opacity-75">
        				Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ipsam dolorem nihil, vero recusandae aliquam necessitatibus sed reiciendis, obcaecati tenetur sint atque. Nam quasi amet quam architecto quae consectetur eaque!
    				</div>
				</div>
			</div>
		</div>
	</section>
</div>

	<script>
		const videoButton = document.getElementById('watch-video')
		const imageContainer = document.getElementById('image-container')
		const videoContainer = document.getElementById('video-container')
		const videoOverlay = document.getElementById('video-overlay')
		
		console.log(videoButton)
		videoButton.addEventListener('click', function() {
			imageContainer.classList.toggle('md:aspect-[3/1]')
			videoOverlay.classList.toggle('opacity-0')			
			videoOverlay.classList.toggle('pointer-events-none')			
			videoContainer.children[0].src += '?autoplay=1';
			setTimeout(() => {
				imageContainer.classList.toggle('opacity-0')
				videoContainer.classList.toggle('opacity-0')
			}, 300);
		})
	</script>

<?php include(locate_template('templates/footer.php')); ?>