<?php

if ( ! tribe_get_venue_id() ) {
	return;
}

$phone   = tribe_get_phone();
$website = tribe_get_venue_website_link();
$website_title = tribe_events_get_venue_website_title();

?>
<!-- Venue -->
<h2 class="font-normal text-sm uppercase tracking-wider mb-2">Venue</h2>
<div class="block group flex-auto mb-4 bg-indigo-500 bg-opacity-10 font-normal py-4 px-2 rounded-lg">
	<?php do_action( 'tribe_events_single_meta_venue_section_start' ) ?>
	<div class="text-gray-500 mb-3">					
		<p class="font-normal text-black text-light">
			<?php echo tribe_get_venue() ?>
		</p>
		<?php if ( tribe_address_exists() ) : ?>
			<address class="text-sm font-light leading-4 mb-2 text-black">
				<?php echo tribe_get_full_address(); ?>

				<?php if ( tribe_show_google_map_link() ) : ?>
					<span class="text-indigo-600 transition-all duration-300 hover:text-black"><?php echo tribe_get_map_link_html(); ?></span>
				<?php endif; ?>		
			</address>	
		<?php endif; ?>		
	</div>
	<?php if ( ! empty( $phone ) ): ?>
		<div class="flex text-gray-500 mb-3">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
			</svg>
			<div class="leading-4">
          		<p class="mb-1 font-light">Phone:</p>
				<a href="tel:7812251110" class="font-normal text-indigo-600 transition-all duration-300 hover:text-black"><?php echo $phone ?></a>
			</div>
		</div>
	<?php endif; ?>	
	<?php if ( ! empty( $website ) ): ?>
		
		<div class="flex text-gray-500 mb-3">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
			</svg>
			<div class="leading-4">
				<span class="text-indigo-600 transition-all duration-300 hover:text-black"><?php echo $website ?></span>
			</div>
		</div>
	<?php endif; ?>	
	<?php do_action( 'tribe_events_single_meta_venue_section_end' ) ?>
</div>