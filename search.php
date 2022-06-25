<?php include(locate_template('templates/header.php')); ?>

<div class="max-w-6xl mx-auto px-4 md:px-0">
	<?php if ( have_posts() ) : ?>
		<h2>Search Results for: <?php echo get_query_var('s'); ?></h2>
		<ul class="search_result_list">
			<?php 	while ( have_posts() ) : the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<span style="font-size:20px;" class="search-results">
							<?php the_title(); ?>
						</span>
					</a>
					<p class="search_results"><?php the_excerpt(); ?></p>
				</li>
			<?php endwhile; ?>
		</ul>
	<?php else : ?>
		<h2 style='font-weight:20px;font-weight:bold;color:#000'>Nothing Found</h2>
		<div class="alert alert-info">
			<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
		</div>
	<?php endif; ?>
</div>

<?php include(locate_template('templates/footer.php')); ?>