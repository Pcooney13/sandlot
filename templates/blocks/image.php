
<?php 
$display_map = get_field('display_map');
$google_map = get_field('google_map');
$image = get_field('image');
$video = get_field('video');
$graphic_color = get_field('graphic_color');
$top_left_bg_graphic = get_field('top_left_bg_graphic');
$top_right_bg_graphic = get_field('top_right_bg_graphic');
$bottom_left_bg_graphic = get_field('bottom_left_bg_graphic');
$bottom_right_bg_graphic = get_field('bottom_right_bg_graphic');
$image_align_left = get_field('image_align_left');
if ($graphic_color === 'light purple') {
	$svg_color = '-indigo-200';
} elseif ($graphic_color === 'purple') {
	$svg_color = '-indigo-400';
} else {
	$svg_color = '';	
}
if ($image_align_left) {
	$set_image_margins = '';
} else {
	$set_image_margins = '';
}
?>
<?php
// Section Classes
$image_section = 'flex-1 md:mb-12 relative lg:mb-0 z-10';
if ($top_left_bg_graphic && $image_align_left !== true || $bottom_left_bg_graphic && $image_align_left !== true) {
	$image_section .= ' md:ml-12';
}
if ($top_right_bg_graphic && $image_align_left === true || $bottom_right_bg_graphic && $image_align_left === true ) {
	$image_section .= ' md:mr-12';
}

// Container Classes
$image_container_classes = 'bg-white md:p-4 rounded-lg shadow-lg w-full relative';

// Image Content
$image_content = '';
if ($top_left_bg_graphic) {
	$image_content .= '<img class="z-[-1] absolute w-48 sm:w-64 -mt-10 -ml-3 xl:-mt-12 xl:-ml-12 top-0 left-0" src="' . get_template_directory_uri() . '/assets/svgs/halftones/circle-bg' . $svg_color . '.svg">';
}
if ($top_right_bg_graphic) {
	$image_content .= '<img class="z-[-1] absolute w-48 sm:w-64 -mt-10 -mr-3 xl:-mt-12 xl:-mr-12 top-0 right-0" src="' . get_template_directory_uri() . '/assets/svgs/halftones/circle-bg' . $svg_color . '.svg">';
}
if ($bottom_left_bg_graphic) {
	$image_content .= '<img class="z-[-1] absolute w-48 sm:w-64 -mb-4 -ml-3 xl:-mb-12 xl:-ml-12 bottom-0 left-0" src="' . get_template_directory_uri() . '/assets/svgs/halftones/circle-bg' . $svg_color . '.svg">';
}
if ($bottom_right_bg_graphic) {
	$image_content .= '<img class="z-[-1] absolute w-48 sm:w-64 -mb-4 -mr-3 xl:-mb-12 xl:-mr-12 bottom-0 right-0" src="' . get_template_directory_uri() . '/assets/svgs/halftones/circle-bg' . $svg_color . '.svg">';
}
if (!empty(!$display_map && $image)) {
	// Image
	$image_content .= '<img class="w-full relative rounded" src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
} elseif ($google_map) {
	// Google Map
	$map_zoom = $google_map['zoom'];
	$map_lat = $google_map['lat'];
	$map_lng = $google_map['lng'];

	$image_content .= '<iframe id="iframe" class="aspect-video w-full h-full relative z-10" src="https://www.google.com/maps/embed/v1/view?zoom=' . $map_zoom . '&center=' . $map_lat . '%2C' . $map_lng . '&key=AIzaSyDuXxSaiMJiAPGIFtB80KqHUPjPf_gAR4g" style="border: 0" allowfullscreen loading="lazy" title="maps"></iframe>';
} elseif($video) {
	$image_content .= '<div class="aspect-video relative">
		<iframe class="absolute top-0 left-0 h-full w-full" src="https://www.youtube.com/embed/' . $video . '"></iframe>
	</div>';
}

echo '<section class="' . $image_section . '">' .
	'<div class="' . $image_container_classes . '">' .
		$image_content .
	'</div>' .
'</section>';