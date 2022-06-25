<?php $menu = nav_walker('main-menu'); ?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

	<head>
  		<meta charset="UTF-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Wordpress playground for testing new ideas">
  		<meta name="author" content="Pat Cooney">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>A WordPress Playground</title>
		<link rel="preconnect" href="https://fonts.googleapis.com"> 
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet">
    	<?php wp_head(); ?>
	</head>
	<body class="text-black font-gotham font-light bg-gray-100">
		<!-- DEVELOPMENT ONLY - GUTTERS -->
		<?php if(false) : ?>
			<div class="fixed left-0 right-0 h-screen justify-center w-screen flex">
				<div class="h-screen flex-1 bg-indigo-600 bg-opacity-50"></div>
				<div class="h-screen w-[72rem]"></div>
				<div class="h-screen flex-1 bg-indigo-600 bg-opacity-50"></div>
			</div>			
		<?php endif; ?>


		<div class="h-14 mt-4">
			<header id="header" class="max-w-6xl mx-auto w-full z-[999] px-4 md:px-0 text-indigo-600 overflow-y-hidden h-14 flex items-center relative">
    			<a href="/">
    		    	<h1 class="heading-lg  hover:text-black transition-all duration-300">Sandlot</h1>
    			</a>
    			<div id="menu" class="hidden lg:block absolute transform right-0 top-0 bottom-0 mr-6 transition-all duration-300">
        			<!-- Menu -->
        			<nav class="ml-auto h-14 font-normal uppercase text-sm">
						<?php $active_classes = 'bg-indigo-500 bg-opacity-10 rounded-md py-2';
						foreach ($menu as $key => $link) : 
							// Find Active Page & Set Classes
							if ($link->object_id == get_the_ID() || is_home() && $link->object_id == get_option('page_for_posts')) {
								$active = $active_classes; // Post Archive Page
							} elseif (is_single() && get_post_type() == 'post' && $link->title == 'Blog') {
								$active = $active_classes; // Post Singles Page
							} elseif (is_single() && get_post_type() == 'resources' && $link->title == 'Resources' || is_archive() && get_post_type() == 'resources' && $link->title == 'Resources') {
								$active = $active_classes; // Post Singles Page
							} elseif (is_archive() && get_post_type() == 'tribe_events' && $link->title == 'Events') {
								$active = $active_classes; // Events Archive Page
							} else {
								$active = ''; // Not active Menu Items
							}
							?>
        					<a href="<?php echo $link->url; ?>" class="tracking-wider px-2 transition-all py-4 duration-300 hover:text-black inline lg:inline-block <?php echo $active; ?>">
								<?php echo $link->title; ?>
							</a>
    					<?php endforeach; ?>			
        			</nav>
        			<!-- Search Form -->
					<form id="search" class="absolute h-14 right-0 top-0 w-80 ml-auto relative leading-none flex-1" role="search" method="get" action="/">
    					<input class="bg-white rounded-full transform h-10 mt-2 transition-all duration-300 px-6 py-2 w-full focus:outline-none focus:ring-indigo-600 focus:ring-1 focus:ring-offset-1 focus:ring-offset-indigo-600" placeholder="Type to search" value="" name="s" type="search">
    				</form>
    			</div>
    			<!-- Open Search -->
    			<button id="open-search" class="hidden lg:block absolute right-0 pl-2 h-14 mb-1 py-4 hover:text-black transition-all duration-300" title="Search">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
		  			<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
					</svg>
				</button>
    			<!-- Close Search -->
	 			<button id="close-search" class="hidden pointer-events-none opacity-0 lg:block absolute right-0 pl-2 h-14 mb-1 py-4 hover:text-black transition-all duration-300" type="submit" title="Search">
        			<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        			</svg>
				</button>
				<!-- Hamburger -->
				<button id="hamburger" aria-label="Open Menu" class="ml-auto py-2 block lg:hidden">
			    	<div class="transition-all w-5 h-4 duration-300 ease-in-out transform rotate-0 relative cursor-pointer" id="nav-icon">
			        	<span class="w-full h-0.5 bg-indigo-600 rounded-full opacity-100 transition-all duration-300 ease-in-out rotate-0 block absolute left-0 top-0"></span>
			        	<span class="w-full h-0.5 bg-indigo-600 rounded-full opacity-100 transition-all duration-300 ease-in-out rotate-0 block absolute left-0 top-[7px]"></span>
			        	<span class="w-full h-0.5 bg-indigo-600 rounded-full opacity-100 transition-all duration-300 ease-in-out rotate-0 block absolute left-0 top-[7px]"></span>
			        	<span class="w-full h-0.5 bg-indigo-600 rounded-full opacity-100 transition-all duration-300 ease-in-out rotate-0 block absolute left-0 top-[14px]"></span>
			    	</div>				
				</button>
			</header>
		</div>
		<!-- Mobile Nav -->
		<div id="modal-overlay" class="absolute lg:hidden transition-all duration-300 delay-100 w-full h-full top-0 left-0 opacity-0" style="background:rgba(0,0,0,0.5); z-index:990">
		</div>
		<div id="modal" style="z-index:995" class="h-full lg:hidden w-full flex transform scale-50 origin-top-right justify-center fixed top-0 transition-all duration-300 opacity-0 pointer-events-none">
			<div style="height:calc(100vh-1rem)" class="bg-white mt-3 w-full m-2 rounded-md">					
				<!-- <div class="mt-12 text-2xl flex flex-col"> -->
				<div class="pt-24 flex h-full flex-col px-6 mx-auto">
					<form class="flex items-center py-4 relative">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 m-2 text-indigo-600 z-20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
						</svg>
						<input class="absolute w-full border-light-gray py-1 px-2 pl-8 font-light border rounded-lg" placeholder="Search..." type="search" />
					</form>
					<div class="px-2 py-4">
						<?php foreach ($menu as $key => $link) : 		
							$raw_icon_code = get_field('icon', $link);
							$remove_these_classes = 'h-6 w-6';
							$add_these_classes   = 'h-4 w-4 mr-2 -mt-0.5 text-indigo-600 transform transition-all duration-300 group-hover:scale-150';

							$icon = str_replace($remove_these_classes, $add_these_classes, $raw_icon_code);

							if ($link->object_id == get_the_ID() || is_home() && $link->object_id == get_option('page_for_posts')) {
								$active = 'text-indigo-600';
							} else {
								$active = '';
							}
							?>
							<a href="<?php echo $link->url; ?>" class="<?php echo $active; ?> flex items-center py-1 hover:text-indigo-600 group">
								<?php if (!empty($icon)) {
									echo $icon;
								} ?>
								<span class="group-hover:font-normal"><?php echo $link->title; ?></span>
							</a>
						<?php endforeach; ?>
					</div>
					<div class="px-2 py-4">
						Follow us	
						<!-- TWITTER -->
						<a href="#" class="flex items-center py-1 hover:text-indigo-600 transition-all duration-300 group">
							<svg class="h-4 w-4 mr-2 -mt-0.5 text-indigo-600 transform transition-all duration-300 group-hover:scale-150" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path>
							</svg>
							Twitter
						</a>
						<!-- FB	 -->
						<a href="#" class="flex items-center py-1 hover:text-indigo-600 transition-all duration-300 group">								
							<!-- <svg class="h-4 w-4 mr-2 -mt-0.5 text-indigo-600 transform transition-all duration-300 group-hover:scale-150" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
							</svg> -->
							<svg class="h-4 w-4 mr-2 -mt-0.5 text-indigo-600 transform transition-all duration-300 group-hover:scale-150" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50"  fill="none" stroke="currentColor" stroke-width="2">
								<path d="M 25 3 C 12.861562 3 3 12.861562 3 25 C 3 36.019135 11.127533 45.138355 21.712891 46.728516 L 22.861328 46.902344 L 22.861328 29.566406 L 17.664062 29.566406 L 17.664062 26.046875 L 22.861328 26.046875 L 22.861328 21.373047 C 22.861328 18.494965 23.551973 16.599417 24.695312 15.410156 C 25.838652 14.220896 27.528004 13.621094 29.878906 13.621094 C 31.758714 13.621094 32.490022 13.734993 33.185547 13.820312 L 33.185547 16.701172 L 30.738281 16.701172 C 29.349697 16.701172 28.210449 17.475903 27.619141 18.507812 C 27.027832 19.539724 26.84375 20.771816 26.84375 22.027344 L 26.84375 26.044922 L 32.966797 26.044922 L 32.421875 29.564453 L 26.84375 29.564453 L 26.84375 46.929688 L 27.978516 46.775391 C 38.71434 45.319366 47 36.126845 47 25 C 47 12.861562 37.138438 3 25 3 z M 25 5 C 36.057562 5 45 13.942438 45 25 C 45 34.729791 38.035799 42.731796 28.84375 44.533203 L 28.84375 31.564453 L 34.136719 31.564453 L 35.298828 24.044922 L 28.84375 24.044922 L 28.84375 22.027344 C 28.84375 20.989871 29.033574 20.060293 29.353516 19.501953 C 29.673457 18.943614 29.981865 18.701172 30.738281 18.701172 L 35.185547 18.701172 L 35.185547 12.009766 L 34.318359 11.892578 C 33.718567 11.811418 32.349197 11.621094 29.878906 11.621094 C 27.175808 11.621094 24.855567 12.357448 23.253906 14.023438 C 21.652246 15.689426 20.861328 18.170128 20.861328 21.373047 L 20.861328 24.046875 L 15.664062 24.046875 L 15.664062 31.566406 L 20.861328 31.566406 L 20.861328 44.470703 C 11.816995 42.554813 5 34.624447 5 25 C 5 13.942438 13.942438 5 25 5 z"/>
							</svg>
							Facebook
						</a>
						<!-- LI -->
						<a href="#" class="flex items-center py-1 hover:text-indigo-600 transition-all duration-300 group">
							<svg class="h-4 w-4 mr-2 -mt-0.5 text-indigo-600 transform transition-all duration-300 group-hover:scale-150" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
								<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
							</svg>
							LinkedIn
						</a>
					</div>
					<a href="/contact" class="btn text-center mb-2 py-4 mr-0 mt-auto">Newsletter sign button bottom</a>
					<button href="" class="btn-white text-center py-4 mr-0 mb-4">Close Menu</button>
				</div>
			</div>
		</div>