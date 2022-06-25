<style>
	.lp-innerblocks:empty {
		display:none;
	}
</style>

<?php 
	$bg_color = get_field('background_color');
	$orange_line_top = get_field('orange_line_top');
	$align_content = get_field('align_content');
	$full_width = get_field('full_width');
	$max_content_width = get_field('max_content_width');
	$title = get_field('title');
	$sub_heading = get_field('sub_heading');
	$bold_sub_heading = get_field('bold_sub_heading');
	$text = get_field('text');
	$button = get_field('button');
	$padding_top = get_field('padding_top');
	$padding_bottom = get_field('padding_bottom');
	$show_static_which_side = get_field('show_which_side');

	// Background Classes
	$background_classes = 'pt-' . $padding_top . ' pb-' . $padding_bottom;
	if ($bg_color === 'gray') {
		$background_classes .= '';
	} else {
		$background_classes .= ' bg-' . $bg_color;
	}

	// Section Classes
	$section_classes = 'max-w-6xl mx-auto flex flex-col items-center px-4 lg:px-0';
	if (!$full_width) {
		$section_classes .= ' md:flex-row';
	} 

	// Static & dynamic Container Classes
	$static_container_classes = 'flex-1 order-2';
	$dynamic_container_classes = 'lp-innerblocks flex-1 w-full md:w-auto order-1 mb-8 md:mb-0';
	if ($align_content === 'center') {
		$static_container_classes .= ' text-center';
	} elseif ($align_content === 'right') {
		$static_container_classes .= ' text-right';
	}
	if ($show_static_which_side === 'right') {
		if (!$full_width) {
			$static_container_classes .= ' lg:pl-12';
		}
		$static_container_classes .= ' md:order-2';
		$dynamic_container_classes .= ' md:order-1';
	} elseif ((!$full_width)) {
		$static_container_classes .= ' lg:pr-12';
		$static_container_classes .= ' md:order-1';
	}
	if ($max_content_width) {
		$static_container_classes .= ' md:max-w-' . $max_content_width;
	}

	// Section Content
	$content = '';
	// Orange Line Graphic
	if ($orange_line_top) {
		$content .= '<div class="w-24 h-1 bg-indigo-600 md:mx-auto mb-6"></div>';
	}
	// Title
	if ($title) {
		$content .= '<h2 class="heading-lg mb-2">' . $title . '</h2>';
	}
	// Subheading
	if ($sub_heading) {
		if ($bold_sub_heading) {
			$sub_heading_css_class = 'sub-heading-bold';
		} else {
			$sub_heading_css_class = 'sub-heading';
		}
		$content .= '<h3 class="mb-2 ' . $sub_heading_css_class . '">' . $sub_heading . '</h3>';
	}
	// Text
	if ($text) {
		$content .= '<div class="lp-text">' . $text . '</div>';
	}
	// Button
	if( $button ) {
		$button_url = $button['url'];
		$button_title = $button['title'];
		$button_target = $button['target'] ? $button['target'] : '_self';
		$content .= '<a class="btn" target="' . $button_target . '" href="' . $button_url . '">' . $button_title . '</a>';
	}

	echo '<div class="' . $background_classes . '">' . 
		'<section class="' . $section_classes . '">' .
			'<div class="' . $static_container_classes . '">' . 
				$content .
			'</div>' . 
			'<div class="' . $dynamic_container_classes . '">' . 
				'<InnerBlocks/>' .
			'</div>' . 
		'</section>' .
	'</div>';