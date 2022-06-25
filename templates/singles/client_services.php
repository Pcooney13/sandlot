<?php
	$color = get_field('color');
	if (!empty($color) && $color === 'navy') {
		$gradient = 'from-blue-600 to-blue-400';
		$backgroundBrightColor = 'bg-blue-300';
		$textColor = 'text-blue-600';
		$textBrightColor = 'text-blue-400';
		$hoverTextColor = 'hover:text-blue-400';
		$hoverBackgroundColor = 'hover:bg-blue-400';
	} elseif (!empty($color) && $color === 'purple') {
		$gradient = 'from-purple-600 to-purple-400';
		$backgroundBrightColor = 'bg-purple-300';
		$textColor = 'text-purple-600';
		$textBrightColor = 'text-purple-400';
		$hoverTextColor = 'hover:text-purple-400';
		$hoverBackgroundColor = 'hover:bg-purple-400';
	} elseif (!empty($color) && $color === 'teal') {
		$gradient = 'from-teal-600 to-teal-400';
		$backgroundBrightColor = 'bg-teal-300';
		$textColor = 'text-teal-600';
		$textBrightColor = 'text-teal-400';
		$hoverTextColor = 'hover:text-teal-400';
		$hoverBackgroundColor = 'hover:bg-teal-400';
	} else {
		$gradient = 'from-orange-600 to-orange-400';
		$backgroundBrightColor = 'bg-orange-300';
		$textColor = 'text-orange-600';
		$textBrightColor = 'text-orange-400';
		$hoverTextColor = 'hover:text-orange-400';
		$hoverBackgroundColor = 'hover:bg-orange-400';
	} 
?>

<div class="w-full m-0 relative p-0 bg-cover flex flex-col justify-center py-20 md:py-0 h-64 bg-center">
	<div class="z-10 relative flex items-end h-full w-full max-w-6xl mx-auto px-6">	
        <div class="max-w-sm w-full mr-6"></div>
		<div>
			<p class="text-white text-lg uppercase tracking-wider opacity-75">Client Services</p>
			<h1 class="font-gotham text-white font-bold drop-shadow-md text-2xl lg:text-6xl mb-4"><?php the_title(); ?></h1>		
		</div>
    </div>
    <div class="absolute top-0 bg-gradient-to-tl <?php echo $gradient; ?> h-full w-full"></div>
</div>

<div class="px-6 z-50 relative flex max-w-5xl mx-auto -mt-16 md:-mt-32">
	<div class="max-w-xs mr-6">
		<div class="mx-0 p-8 rounded-md shadow-sm bg-white">
			<img src="https://pact.launchpaddev.com/app/themes/pact/assets/images/illustration-11.jpg">
		</div>
	</div>
	<div class="flex-1 mt-16 md:mt-32">
		<p class="mt-4 leading-relaxed text-xl text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ut magnam provident animi dolores aperiam quaerat aut, dolor, eaque velit culpa nihil.</p>
	</div>
</div>

<div class="container max-w-5xl mx-auto mt-16">
	<div class="mx-0 sm:mx-6 relative">		
		<div id="blog-scroll" class="relative md:shadow-md bg-white rounded-t-md w-full px-6 leading-normal text-gray-800 leading-normal font-gotham">
            <!-- Post Content -->
			<div class="flex items-start gap-8">
				<div class="sticky top-0 py-8">
					<?php

						$args = array(
							'numberposts' => 10,
							'post_type' => 'client_services',
							'orderby' => 'title',
							'order' => 'ASC',
							// 'meta_key' => 'field_name',
							// 'meta_value' => 'field_value'
						);
						
						$query = new WP_Query( $args );
						
						?>
						
						<?php if( $query->have_posts() ) : 
							$current_post = get_permalink(); ?>
							<ul class="text-sm -mt-2">
								<?php while ( $query->have_posts() ) : $query->the_post(); ?>
									<?php if ($current_post === get_permalink()) : ?>
										<li class="pr-6 py-1">
											<a href="javascript:void(0)" class="flex items-center rounded-md p-2 <?php echo $backgroundBrightColor; ?> bg-opacity-20">
                        						<div class="<?php echo $textBrightColor; ?>">
                        				    		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
														<path stroke-linecap="round" stroke-linejoin="round" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
													</svg>
                        						</div>
                        						<div class="ml-2 font-normal <?php echo $textBrightColor; ?>"><?php the_title();?></div>
											</a>
										</li>	
									<?php else: ?>
										<li class="pr-6 py-1">
											<a href="<?php the_permalink(); ?>" class="flex items-center rounded-md p-2 text-gray-400 bg-opacity-20 hover:bg-opacity-20 transition-all duration-300 <?php echo $hoverBackgroundColor; ?>">
                        						<div>
                        		    				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        		        				<path stroke="none" d="M0 0h24v24H0z"></path>
                        		        				<rect x="4" y="4" width="6" height="6" rx="1"></rect>
                        		        				<rect x="14" y="4" width="6" height="6" rx="1"></rect>
                        		        				<rect x="4" y="14" width="6" height="6" rx="1"></rect>
                        		        				<rect x="14" y="14" width="6" height="6" rx="1"></rect>
                        		    				</svg>
                        						</div>
                        						<div class="ml-2"><?php the_title(); ?></div>
											</a>
										</li>
									<?php endif; ?>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
						
						<?php wp_reset_query(); ?>
				</div>
				<div class="bg-opacity-20 flex-1 py-8 px-4">
					<p class="heading mb-2 <?php echo $textColor; ?>"><strong><?php the_title(); ?></strong></p>
					<p class="text mb-4">In tellus integer feugiat scelerisque. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi. Suspendisse faucibus interdum posuere lorem ipsum dolor. Ut sem nulla pharetra diam sit amet nisl suscipit adipiscing. Enim lobortis scelerisque fermentum dui faucibus in ornare. Eget aliquet nibh praesent tristique. Gravida dictum fusce ut placerat orci. Sapien nec sagittis aliquam malesuada. Cras sed felis eget velit aliquet sagittis. In tellus integer feugiat scelerisque varius morbi enim nunc. Malesuada fames ac turpis egestas maecenas pharetra. Et malesuada fames ac turpis egestas sed. Tortor posuere ac ut consequat semper viverra nam. Ante metus dictum at tempor commodo ullamcorper a. Aliquam eleifend mi in nulla. Odio tempor orci dapibus ultrices in. Libero id faucibus nisl tincidunt.</p>
					<p class="text mb-4">Maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Risus pretium quam vulputate dignissim. A condimentum vitae sapien pellentesque habitant morbi tristique senectus. Nulla malesuada pellentesque elit eget gravida. Semper eget duis at tellus at. Fringilla est ullamcorper eget nulla. Imperdiet proin fermentum leo vel orci porta non. Sed vulputate mi sit amet mauris commodo quis imperdiet. Nullam non nisi est sit amet facilisis. Ut lectus arcu bibendum at varius. Eleifend mi in nulla posuere sollicitudin aliquam ultrices. Libero id faucibus nisl tincidunt eget. Vestibulum lectus mauris ultrices eros in cursus turpis massa. Convallis convallis tellus id interdum velit laoreet id donec. Feugiat nisl pretium fusce id. Non odio euismod lacinia at quis. Quis lectus nulla at volutpat diam. Scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt. Facilisis leo vel fringilla est ullamcorper eget nulla. Purus in massa tempor nec feugiat nisl.</p>
					<p class="text mb-4">Duis tristique sollicitudin nibh sit. Suspendisse potenti nullam ac tortor vitae purus faucibus ornare. Lectus quam id leo in vitae turpis massa sed elementum. Integer quis auctor elit sed vulputate. Pharetra convallis posuere morbi leo urna. Tincidunt praesent semper feugiat nibh sed pulvinar. Eu turpis egestas pretium aenean pharetra magna ac. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Egestas erat imperdiet sed euismod nisi. Sollicitudin tempor id eu nisl. Laoreet sit amet cursus sit. At volutpat diam ut venenatis tellus in metus vulputate eu. Pellentesque adipiscing commodo elit at. Nisl condimentum id venenatis a condimentum vitae sapien pellentesque habitant. Vel eros donec ac odio. Nullam eget felis eget nunc lobortis mattis aliquam faucibus. Sed vulputate odio ut enim blandit volutpat. Massa ultricies mi quis hendrerit dolor magna eget. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra.</p>
					<p class="heading mb-4"><strong>Additional Resources</strong></p>
					<ul>
					<li class="mb-6">
						<a href="#" class="font-normal underline block <?php echo $textColor; ?> transition-all duration-300 hover:text-black leading-tight mb-1">Strategies That Fit Emerging Markets</a>
						<p class="pl-4 flex items-center">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
  								<path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							<span class="text-sm">Tarun Khanna, Krishna G. Palepu, and Jayant Sinha</span>
						</p>
						<a href="" class="pl-4 flex items-center text-gray-500 transition-all duration-300 <?php echo $hoverTextColor; ?>">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
								<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
							</svg>
							<p class="text-sm">Harvard Business Review | June 2020</p>
						</a>
					</li>
					<li class="mb-6">
						<a href="https://onlinelibrary.wiley.com/doi/10.1111/acfi.12955" target="_blank" class="font-normal underline block <?php echo $textColor; ?> transition-all duration-300 hover:text-black leading-tight mb-1">Collaborative inter-organisational relationships and management control change</a>
						<p class="pl-4 flex items-center">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
  								<path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>
							<span class="text-sm">Sharlene Biswas, Chris Akroyd</span>
						</p>
						<a href="#" class="pl-4 flex items-center text-gray-500 transition-all duration-300 <?php echo $hoverTextColor; ?>">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
								<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
							</svg>
							<p class="text-sm">The University of Auckland Business School | May 2022</p>
						</a>
					</li>
					</ul>
				</div>
			</div>            
		</div>
	</div>
</div>