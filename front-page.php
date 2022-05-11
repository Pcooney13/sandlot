<?php include(locate_template('templates/header.php')); ?>

<style>
	.grounded-radiants {
    position: relative;
    background-clip: padding-box;
}

.grounded-radiants::after {
    position: absolute;
    top: -2px; bottom: -2px;
    left: -2px; right: -2px;
    background: linear-gradient(90deg, #f37223, #ffb600);
    content: '';
    z-index: -1;
    border-radius: 999999px;
}
</style>

<!-- Hero -->
<div class="w-full aspect-square md:aspect-hero bg-cover py-8 md:py-0 bg-top relative" style="background-position-y:30%; background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/pact-hero.jpg)">
	<div class="hero max-w-screen-xl mx-auto relative z-50 px-4 lg:px-0 font-gotham h-full flex flex-col justify-center items-center md:items-start">
		<!-- <h1 class="text-white font-bold md:font-normal drop-shadow-md text-2xl md:text-6xl">Quality <strong class="bg-gradient-to-r font-bold from-orange to-bright-orange tracking-wide text-bright-orange">financial advice</strong></h1> -->
		<h1 class="text-navy font-bold drop-shadow-md text-2xl lg:text-6xl mb-2">Finance & Accounting</h1>
		<!-- <h1 class="text-navy font-bold drop-shadow-md text-2xl lg:text-6xl mb-2">Accounting</h1> -->
		<h1 class="text-navy font-bold drop-shadow-md text-2xl lg:text-6xl mb-2">Specialists</h1>
		<h1 class="text-navy font-normal drop-shadow-md text-xl lg:text-2xl tracking-wider mb-6">for Startups & Emerging Growth Companies</h1>
		<ul class="text-navy font-normal drop-shadow-md text-xl lg:text-2xl column-2 tracking-wider">
			<li class="flex items-center">
				<svg xmlns="http://www.w3.org/2000/svg" class="text-orange h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  					<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
				</svg>
				<span>Proactive<span>
			</li>
			<li class="flex items-center">
				<svg xmlns="http://www.w3.org/2000/svg" class="text-orange h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  					<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
				</svg>
				<span>Accountable<span>
			</li>
			<li class="flex items-center">
				<svg xmlns="http://www.w3.org/2000/svg" class="text-orange h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  					<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
				</svg>
				<span>Collaborative<span>
			</li>
			<li class="flex items-center">
				<svg xmlns="http://www.w3.org/2000/svg" class="text-orange h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  					<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
				</svg>
				<span>Trustworthy<span>
			</li>
		</ul>
		<div class="flex flex-col md:flex-row mt-8">
			<a class="uppercase bg-gradient-to-r my-0.5 shadow-md transition-all duration-300 hover:bg-orange from-orange to-bright-orange px-4 md:px-8 py-2 md:py-3 rounded-full text-white mb-2 md:mb-0 md:mr-4" href="#">Get in Touch</a>
			<a class="grounded-radiants uppercase bg-white border-2 border-transparent shadow-md transition-all duration-300 hover:bg-orange px-4 md:px-8 py-2 md:py-3 rounded-full hover:text-white text-bright-orange" href="#">Our services</a>
		</div>
	</div>
	<div class="absolute top-0 bg-navy md:bg-transparent opacity-75 h-full w-full"></div>
</div>
<!-- 3 Blocks -->
<div class="py-24 max-w-screen-xl mx-auto">
			
	<div class="max-w-xl mx-auto text-center">
		<h2 class="mb-2 font-black text-xl lg:text-3xl text-gray-900">Client Services</h2>
		<h3 class="mb-6 text-base lg:text-lg text-gray-700 max-w-xl">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</h3>
	</div>

	<div class="conatiner mx-auto">		
		<div class="flex flex-wrap">	
			<?php for ($i = 0; $i < 3; $i++) : ?>
				<div class="w-full lg:w-1/3 p-4">
					<div class="block w-full h-full relative rounded-lg overflow-hidden shadow-lg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pexels-kampus-production-8353810.jpg">
						<div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
							<div class="p-6 py-8 text-center max-w-xs relative">
								<div class="absolute left-0 top-0 w-full h-full bg-black opacity-50"></div>
								<div class="relative z-10">
									<h4 class="font-black text-base md:text-lg leading-tight mb-2 text-white">Ut enim ad minim veniam.</h4>
									<h5 class="mb-8 font-condensed leading-tight text-white px-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</h5>
									<a class="uppercase bg-gradient-to-r shadow-md transition-all ml-auto duration-300 hover:to-orange from-orange to-bright-orange px-8 py-3 rounded-full text-white inline-block" href="#">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>

</div>

<!-- Muli-Buckets -->
<div class="bg-navy-200">
	<div class="max-w-screen-xl mx-auto py-24 px-4 md:px-0">
		<h1 class="text-navy fontbold text-center text-4xl mb-8"><strong>Industries</strong></h1>
		<div class="md:grid grid-cols-3 gap-8 grid-rows-2 bg-white p-8">
			<?php for ($i = 0; $i < 6; $i++) : ?>
			<div class="flex p-4">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-bright-orange mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  					<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
				</svg>
				<div class="flex-1">
					<h6 class="text-2xl">Strategy & Planning</h6>
					<p>A business strategy is the means by which it sets out to achieve its desired ends.</p>
				</div>
			</div>
			<?php endfor; ?>
		</div>
		<div class="bg-navy w-full text-white py-4 px-4 md:px-12 flex flex-col md:flex-row items-center">
			<p class="text-xl mb-4 md:mb-0">Are you looking for professional advice for your business or your industry?</p>
			<a class="uppercase bg-gradient-to-r shadow-md transition-all ml-auto duration-300 hover:to-orange from-orange to-bright-orange px-8 py-3 rounded-full text-white" href="#">Get in Touch</a>
		</div>
	</div>
</div>
<!-- 2 Column layout -->
<div class="bg-gray-100 px-4 md:px-0 py-24 max-w-screen-xl mx-auto">
	<div class="container mx-auto">
		<div class="flex flex-wrap justify-center">
			<div class="mb-12 lg:mb-0 w-full lg:flex-1">
				<h2 class="mb-4 font-black leading-tight text-xl md:text-3xl text-gray-900">Testimonials</h2>
				<h3 class="mb-6 md:text-lg text-gray-700 max-w-xl">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</h3>
				<ul class="py-6 mb-6">
					<li class="flex items-center mb-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/headshot-1.jpg" class="w-24 h-24 object-cover">
						<div class="pl-5">
							<h4 class="font-black text-base md:text-lg text-gray-900 leading-tight mb-2">Joe Smith, CPA</h4>
							<p class="text-gray-700 leading-snug max-w-sm"><em><strong class="text-orange">" </strong>Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Gravida rutrum quisque non tellus orci ac auctor augue.<strong class="text-orange">" </strong></em></p>
						</div>
					</li>
					<li class="flex items-center mb-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/headshot-2.jpg" class="w-24 h-24 object-cover">
						<div class="pl-5">
							<h4 class="font-black text-base md:text-lg text-gray-900 leading-tight mb-2">Mary Sue</h4>
							<p class="text-gray-700 leading-snug max-w-sm"><em><strong class="text-orange">" </strong>Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Gravida rutrum quisque non tellus orci ac auctor augue.<strong class="text-orange">" </strong></em></p>
						</div>
					</li>
					<li class="flex items-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/headshot-3.jpg" class="w-24 h-24 object-cover">
						<div class="pl-5">
							<h4 class="font-black text-base md:text-lg text-gray-900 leading-tight mb-2">Todd Domke</h4>
							<p class="text-gray-700 leading-snug max-w-sm"><em><strong class="text-orange">" </strong>Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Gravida rutrum quisque non tellus orci ac auctor augue.<strong class="text-orange">" </strong></em></p>
						</div>
					</li>
				</ul>
				<a class="uppercase bg-gradient-to-r shadow-md transition-all ml-auto duration-300 hover:to-orange from-orange to-bright-orange px-8 py-3 rounded-full text-white mr-4" href="#">See all Testimonials</a>
			</div>
			<div class="hidden md:block w-full lg:w-5/12 pl-12">
				<div class="bg-white p-4 rounded-lg shadow-lg">
					<img src="https://images.unsplash.com/photo-1439337153520-7082a56a81f4?w=800" class="w-full h-auto rounded">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 2 Column layout -->
<div class="bg-white p-12 py-24">
	<div class="container mx-auto">
		<div class="flex flex-wrap justify-center items-center">
			<div class="mb-12 lg:mb-0 w-full lg:w-3/12 text-right">
				<div class="bg-white p-4 rounded-lg shadow-lg w-full">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/joe-st-germain.png" class="w-full h-auto object-cover rounded">
				</div>
			</div>
			<div class="w-full lg:flex-1 max-w-2xl lg:pl-12 text-gray-800">
				<h2 class="font-black leading-tight text-xl md:text-3xl mb-4">Meet Joe St. Germain</h2>
				<h3 class="font-black text-base md:text-lg text-gray-900 leading-tight mb-2">Blandit volutpat maecenas volutpat blandit aliquam etiam</h3>
				<p class="mb-6">Ac auctor augue mauris augue neque gravida in fermentum et. Nunc id cursus metus aliquam eleifend mi in nulla posuere. Erat velit scelerisque in dictum non. Ut enim blandit volutpat maecenas volutpat. Blandit massa enim nec dui nunc mattis enim. Cursus risus at ultrices mi tempus imperdiet.</p>
				<a class="uppercase bg-gradient-to-r shadow-md transition-all ml-auto duration-300 hover:to-orange from-orange to-bright-orange px-8 py-3 rounded-full text-white inline-block" href="#">Learn More</a>
			</div>
		</div>
	</div>
</div>


<?php include(locate_template('templates/footer.php')); ?>