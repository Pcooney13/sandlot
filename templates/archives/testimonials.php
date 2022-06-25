<?php if(have_posts()) : ?>    
    <div class="max-w-6xl mx-auto px-4 md:px-0 mb-24">
        <ul class="columns-1 md:columns-2 gap-8">
            <?php while(have_posts()) : the_post(); ?>
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
								<svg class="w-6 top-0 left-0 mt-6 ml-2 absolute text-indigo-600 fill-current" viewBox="0 0 24 17.3">
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
									<p class="leading-none font-normal mb-1 text-indigo-600"><?php the_title(); ?></p>
									<?php if (get_field('job_description')) : ?>
										<div class="leading-none text-cool-gray text-sm"><?php echo get_field('job_description'); ?></div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php elseif (has_post_thumbnail()) : ?>
						<!-- Purple -->
						<div class="bg-indigo-500 bg-opacity-10 px-8 py-6 rounded-md relative">
							<svg class="w-4 top-0 left-0 mt-4 ml-3 absolute text-indigo-600 fill-current" viewBox="0 0 24 17.3">
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
									<p class="leading-none font-normal mb-1 text-indigo-600"><?php the_title(); ?></p>
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
									<p class="leading-none font-normal mb-1 text-indigo-600"><?php the_title(); ?></p>
									<?php if (get_field('job_description')) : ?>
										<div class="leading-none text-cool-gray text-sm"><?php echo get_field('job_description'); ?></div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
				</li>
            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>