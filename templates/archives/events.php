<div class="flex flex-col md:flex-row max-w-screen-xl mx-auto py-12 px-4 lg:px-0">
    <div class="main w-full md:flex-1 mr-6">
		<?php 
			$date_now = new DateTime('now');
			$current_month = $date_now->format('F');
		?>
        <!-- UPCOMING EVENTS START-->
        <div>
            <?php $the_args = array(
                "posts_per_page" => -1,
                "post_type" => 'events',
				'meta_key'			=> 'start_date',
	    		'orderby'			=> 'meta_value',
	    		'order'				=> 'ASC'
            );
            $the_query = new WP_Query($the_args);
            if ($the_query->have_posts()) : ?>
                <p id="past-title" style="text-align: center; margin-bottom: 20px; color: #4806a6; font-weight: bold; font-size: 24px;">
                    Upcoming Events
                </p>
                <!-- Upcoming Events -->
				<?php $matched_month = true;
				$count = 1;
				$in_month;
                while ($the_query->have_posts()) : $the_query->the_post();
					$event_month = get_field('start_date');
					$event_month = DateTime::createFromFormat('Ymd', $event_month);
					if ($current_month === $event_month->format('F')) {
						// echo $event_month->format('F');
						$in_month = true;
					} else {
						$date_now->modify('+1 month');   
						$current_month = $date_now->format('F'); 
						$in_month = false;
						// echo $event_month->format('F');
					}
					if (!$in_month || $count === 1) {
						echo '<p class="border-b mb-4 w-full block">' . $event_month->format('F Y') . '</p>';
					}
					$image = '';
					$image = get_the_post_thumbnail_url('', 'medium');
				?>
					
                	    <div class="flex mb-6 rounded-lg overflow-hidden">
							<div class="mr-4">
								<?php echo $event_month->format('j'); ?>
							</div>
							
							<div class="flex-1">
                            <?php include(locate_template('templates/partials/categories.php')); ?>														
        					<a href="<?php echo get_the_permalink(); ?>" class="w-full mb-2 block text-lg leading-tight font-semibold leading-tight text-gray-900 px-4">
								<span><?php the_title(); ?></span>
							</a>			
							<div class="px-4">
								<?php include(locate_template('templates/partials/authors-test.php')); ?>							
							</div>
						</div>
						<a href=" <?php echo get_the_permalink(); ?>" class="w-56 rounded-l overflow-hidden group no-underline hover:no-underline">
							<img src="<?php echo $image;?>" class="h-full transform group-hover:scale-105 aspect-video object-cover transition-all duration-300 w-full rounded-t">
						</a>
					</div>
                <?php 
				$count++;
				endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
        <!-- UPCOMING EVENTS END -->

    </div>
</div>