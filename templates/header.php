<?php $menu = nav_walker('main-menu'); ?>

<!DOCTYPE html>
<html lang="en">

	<head>
  		<meta charset="UTF-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>PACT Finance & Accounting</title>
		<link rel="preconnect" href="https://fonts.googleapis.com"> 
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet">
    	<?php wp_head(); ?>
	</head>
	<body class="text-black font-gotham font-light bg-gray-100">
		<!-- ABOVE NAV -->
		<div class="hidden md:block bg-white">
			<div class="max-w-screen-xl mx-auto flex items-center">
				<p class="py-y text-navy flex items-center opacity-75">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
					  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
					</svg>
					Call us: <a class="transition-all duration-300 ml-1 hover:text-orange" href="#">555-867-5309</a>
				</p>
				<div class="w-px h-4 bg-light-gray mx-4"></div>
				<p class="py-y text-navy flex items-center opacity-75">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
					  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
					  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
					</svg>
					Email us: <a class="transition-all duration-300 ml-1 hover:text-orange" href="#">support@pactfinance.com</a>
				</p>
				<div class="ml-auto mx-2 flex px-4">
						<!-- TWITTER -->
						<svg class="w-4 h-4 mx-2 fill-current text-cool-gray transition-all duration-300 hover:text-bright-orange" viewBox="0 0 24 24">
							<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
						</svg>
						<!-- LI -->
						<svg class="w-4 h-4 mx-2 fill-current text-cool-gray transition-all duration-300 hover:text-bright-orange" viewBox="0 0 24 24">
							<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
						</svg>
						<!-- FB	 -->
						<svg class="w-4 h-4 mx-2 fill-current text-cool-gray transition-all duration-300 hover:text-bright-orange" viewBox="0 0 24 24">
							<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
						</svg>
				</div>
				<a class="bg-gradient-to-r from-orange to-bright-orange h-auto text-white font-bold p-3 " href="#request-form">
					Request Appointment
				</a>
			</div>
		</div>
  		<!-- NAV -->
  		<div id="nav" class="bg-navy">
			<?php if (false && is_user_logged_in()): ?>
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			<?php endif;?>

    		<div class="px-0 max-w-screen-xl mx-auto py-3 bg-navy text-white flex items-center">
      			<a class="w-60 md:w-72 px-4 block" href="/">
        			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pact-logo.png">
      			</a>
      			<div class="hidden md:block ml-auto font-[400] uppercase text-sm">					
					<?php foreach ($menu as $key => $link) : 
						if ($link->object_id == get_the_ID() || is_home() && $link->object_id == get_option('page_for_posts')) {
							$active = 'text-bright-orange opacity-75 hover:opacity-100';
						} else {
							$active = '';
						}
						?>
        				<a href="<?php echo $link->url; ?>" class="text-white tracking-wider transition-all duration-300 hover:text-bright-orange pl-4 inline md:hidden lg:inline <?php echo $active; ?>">
							<?php echo $link->title; ?>
						</a>
    				<?php endforeach; ?>
      			</div>
				<!-- Hamburger -->
				<button id="hamburger" class="ml-auto py-2 px-4 block md:hidden">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
			  			<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
					</svg>					
				</button>
        	</div>
			<!-- Mobile Nav -->
			<div id="modal" style="background:rgba(0,0,0,0.5); z-index:999" class="h-full w-full flex justify-center fixed top-0 transition-all duration-300 opacity-0 pointer-events-none">
				<div style="height:calc(100vh-1rem)" class="bg-white mt-3 w-full m-2 rounded-md">
					
					<div class="flex justify-end">
						<button id="modal-close" class="p-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
								<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>
						</button>
					</div>
					<div class="flex flex-col">
						<?php foreach ($menu as $key => $link) : 
							if ($link->object_id == get_the_ID() || is_home() && $link->object_id == get_option('page_for_posts')) {
								$active = 'text-bright-orange opacity-75 hover:opacity-100';
							} else {
								$active = '';
							}
							?>
        					<a href="<?php echo $link->url; ?>" class="tracking-wider transition-all duration-300 hover:text-bright-orange pl-4 inline md:hidden lg:inline <?php echo $active; ?>">
								<?php echo $link->title; ?>
							</a>
    					<?php endforeach; ?>
					</div>
				</div>
			</div>
  		</div>
		<?php if (!is_single() && has_post_thumbnail()) : 
			if (is_home()) {
				$page_id = 17;
			} else {
				$page_id = null;
			}
			$title = get_field('title', $page_id);
			$subtitle = get_field('subtitle', $page_id);
			?>
			
			<div class="hero w-full m-0 relative p-0 bg-cover flex flex-col justify-center py-20 md:py-0 md:aspect-blog bg-center bg-bottom" style="background-image:url(<?php echo get_the_post_thumbnail_url($page_id); ?>">
				<div class="container max-w-6xl mx-auto mb-16 md:mb-32">
			        <h1 class="mx-6 relative z-10 font-gotham text-white font-bold drop-shadow-md text-2xl lg:text-6xl mb-2"><?php echo $title; ?></h1>
			        <h1 class="mx-6 text-white z-10 relative font-normal drop-shadow-md text-lg lg:text-2xl tracking-wider lg:mb-6"><?php echo $subtitle; ?></h1>			        
			    </div>
			    <div class="absolute top-0 bg-navy opacity-50 h-full w-full"></div>
			</div>
		<?php endif; ?>