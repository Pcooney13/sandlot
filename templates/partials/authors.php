<?php if ( have_rows('authors') ) : 
	$author_names = '';
	$author_count = count(get_field('authors'));
	if ($author_count === 0) {
		$author_svg = '';
	} elseif ($author_count === 1) {
		$author_svg = '<svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  			<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
		</svg>';
	} elseif ($author_count === 2) {
		$author_svg = '<svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  			<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
		</svg>';
	} else {
		$author_svg = '<svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  			<path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
		</svg>';
	}
	$count = 1;
	if ($author_count > 2) {
		$author_names = '<span>Multiple Authors</span>';
	} else {
		while( have_rows('authors') ) : the_row(); 
			if ($author_count !== $count) {
				$delimiter = '<span class="mr-1">, </span>';
			} else {
				$delimiter = '';
			}
			$author = get_sub_field('author');
			$author_names .= '<a href="' . get_the_permalink($author) . '" class="font-light hover:text-indigo-500 underline transition-all duration-300">' . get_the_title($author) . '</a>' . $delimiter;
			$count++;
		endwhile; 
	}
endif; ?>

<div class="flex flex-wrap text-sm mb-2 gap-2">
	<p class="text-slate-500 flex">
		<svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
		</svg>
		<span class="font-light"><?php echo get_the_date(); ?></span>
	</p>
	<p class="text-slate-500 flex">
		<?php echo $author_svg; ?>
		<?php echo $author_names;?>
	</p>
</div>