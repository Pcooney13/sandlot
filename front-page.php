<?php 
    include(locate_template('templates/header.php'));
    $args = array(
        'posts_per_page' => 1,
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
    );
    $query = new WP_Query( $args );
    
    if( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
            $date = new DateTime(get_the_date());
            $one_week_ago = new DateTime();
            $one_week_ago->modify('-1 week');
            $new_this_week = '';
            
            if($date > $one_week_ago) {
                $new_this_week = '<p class="flex text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd" />
                    </svg>
                    New Post
                </p>';
            } ?>
            <div class="pt-16 pb-20">
                <section class="max-w-6xl mx-auto flex flex-col items-center px-4 lg:px-0 md:flex-row">
                    <div class="flex-1 order-2 lg:pr-12 md:order-1 md:max-w-sm">            
                        <?php if (!empty($new_this_week)) {
                            echo $new_this_week;
                        } ?>
                        <h2 class="heading mb-1"><?php echo get_the_title(); ?></h2>
                        <?php include(locate_template('templates/partials/authors.php')); ?>
                        <div class="lp-text">
                            <p> the Adirondacks has what you're looking for in accommodations. Go all out with a luxurious stay at a resort, rough it in a tent at a campground, or find a sweet middle ground. Whatever you choose, we got you covered.</p>
                        </div>
                        <a class="btn" target="_self" aria-label="Read article <?php echo get_the_title(); ?>" href="<?php echo get_the_permalink(); ?>">Read More</a>
                    </div>
                    <div class="lp-innerblocks flex-1 w-full md:w-auto order-1 mb-8 md:mb-0">
                        <section class="flex-1 md:mb-12 relative lg:mb-0 z-10 md:ml-12">
                            <div class="bg-white md:p-4 rounded-lg shadow-lg w-full relative">
	                            <img class="z-[-1] absolute w-48 sm:w-64 -mt-10 -ml-3 xl:-mt-12 xl:-ml-12 top-0 left-0" src="https://sandlot.launchpaddev.com/app/themes/sandlot/assets/svgs/halftones/circle-bg-indigo-200.svg" alt="halftone background graphic">	
	                            <img class="w-full relative rounded" src="<?php echo get_the_post_thumbnail_url('', 'medium_large'); ?>" alt="<?php echo get_the_title(); ?>">
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php wp_reset_query(); ?>

    <div class="pb-24">
        <?php include(locate_template('templates/partials/slider.php')); ?>
    </div>


<?php

$args = array(
    'numberposts' => 6,
    'post_type' => 'resources',
);

$query = new WP_Query( $args );

?>

<?php if( $query->have_posts() ) : ?>
    <div class="py-24 bg-white">
        <div class="max-w-6xl mx-auto px-6">
    	    <div class="lg:text-center">
			    <div class="w-24 h-1 bg-indigo-600 md:mx-auto mb-6">                    
                </div>
        	    <p class="heading-lg">
          	        Clinical Rating Scales
        	    </p>
        	    <p class="sub-heading mt-4 max-w-3xl lg:mx-auto">
          	        Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
        	    </p>
      	    </div>
      	    <div class="mt-10">
        	    <div class="space-y-10 md:-mx-2 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-6 md:gap-y-8">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="relative group hover:bg-indigo-500 hover:bg-opacity-10 transition-all duration-300 rounded-lg p-2">
              		        <div>
                		        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg">
                  			        <svg class="h-6 w-6 transform transition-all duration-300" x-description="Heroicon name: outline/globe-alt" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  								        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
							        </svg>
                		        </div>
                		        <p class="ml-16 text-lg leading-6 group-hover:text-indigo-600 font-semibold text-indigo-600 group-hover:text-black transition-all duration-300"><?php the_title(); ?></p>
              		        </div>
              		        <div class="mt-2 ml-16 sub-text">
                		        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
              		        </div>
            	        </a>
                    <?php endwhile; ?>
                </div>
			    <div class="text-center mt-16">
				    <a class="btn" href="/resources">All Resources</a>
      		    </div>
      	    </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_reset_query(); ?>
        	

<?php include(locate_template('templates/footer.php')); ?>