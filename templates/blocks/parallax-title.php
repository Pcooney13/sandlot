<?php
    $title = get_sub_field('title');
    $image = get_sub_field('image');
?>
<!-- PARRALAX -->
<section
	class="flex items-center justify-center mb-12 bg-fixed bg-center bg-cover py-32 relative" 
	style="background-image: url('<?php echo $image; ?>');"
>
	<div class="absolute bg-navy h-full w-full opacity-75"></div>
	<div class="relative z-50 text-6xl text-white font-bold">
		<?php echo $title; ?>
	</div>
</section>