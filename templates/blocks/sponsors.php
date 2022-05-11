<?php
    $title = get_sub_field('title');
    $columns = get_sub_field('columns');

	$image_width = 'w-1/' . ($columns + 1);
?>
<!-- SPONSORS -->
<section class="max-w-screen-xl mx-auto mt-16 mb-8">
    <?php if (!empty($title)) : ?>
		<h5 class="font-bold text-3xl text-center mb-8"><?php echo $title; ?></h5>
	<?php endif; ?>
	<?php if ( have_rows('sponsors') ) : ?>
		<div class="flex flex-wrap items-center justify-center mb-12">
			<?php while( have_rows('sponsors') ) : the_row(); ?>				
				<img class="<?php echo $image_width; ?> mb-8 mx-4 px-4" src="<?php the_sub_field('logo'); ?>" alt="1440">
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>