<?php include(locate_template('templates/header.php')); ?>

<style>
	.rounded-gradients {
		position: relative;
		background-clip: padding-box;
	}
	.rounded-gradients::after {
		position: relative;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background: transparent;
		content: '';
		z-index: -1;
		border-radius: 999999px;
	}
	@media (min-width: 768px) {

		.rounded-gradients::after {
			position: absolute;
			top: -2px; bottom: -2px;
			left: -2px; right: -2px;
			background: linear-gradient(90deg, #f37223, #ffb600);
			content: '';
			z-index: -1;
			border-radius: 999999px;
		}
	}
</style>

<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pact-hero.jpg)"> -->

<!-- Hero -->
<div class="w-full md:aspect-hero bg-cover pt-12 pb-16 md:py-0 bg-top relative" style="background-position-y:30%; background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/pact-hero.jpg)">
	<div class="hero relative text-white md:text-navy max-w-6xl mx-auto relative z-10 px-4 lg:px-0 h-full flex flex-col justify-center items-center md:items-start">
		<h1 class="font-bold drop-shadow-md text-3xl lg:text-6xl md:mb-2">Finance & Accounting</h1>
		<h1 class="font-bold drop-shadow-md text-3xl lg:text-6xl mb-4 md:mb-2">Specialists</h1>
		<h1 class="font-normal drop-shadow-md text-center md:text-left max-w-sm md:max-w-none text-xl lg:text-2xl tracking-wider mb-6">for Startups & Emerging <br class="md:hidden">Growth Companies</h1>
		<ul class="grid grid-cols-2 grid-flow-row gap-x-8 gap-y-2 font-normal drop-shadow-md text-xl lg:text-2xl tracking-wider">
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
		<div class="absolute md:relative bottom-0 -mb-40 md:mb-0 flex flex-col md:flex-row mt-8">
			<a class="uppercase mb-3 md:mb-0 bg-gradient-to-r my-0.5 shadow-md transition-all duration-300 hover:bg-orange from-orange to-bright-orange px-8 py-4 rounded-full text-white md:mr-4" href="#">Get in Touch</a>
			<a class="rounded-gradients uppercase bg-transparent md:bg-white underline md:no-underline font-normal text-base border-none md:border-2 border-transparent md:shadow-md transition-all duration-300 hover:bg-orange px-8 py-4 rounded-full hover:text-white text-bright-orange" href="#">Our services</a>
		</div>
	</div>
	<div class="absolute top-0 bg-navy md:bg-transparent opacity-75 h-full w-full"></div>
</div>
<!-- 3 Blocks -->
<div class="py-48 md:py-24 max-w-6xl mx-auto">
			
	<div class="max-w-xl mx-auto text-center">
		<h2 class="heading-lg mb-2">Client Services</h2>
		<h3 class="mb-6 font-thin lg:text-lg max-w-xl">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</h3>
	</div>

	<div class="conatiner mx-auto">		
		<div class="-mx-4 flex flex-wrap">	
			<?php for ($i = 0; $i < 3; $i++) : ?>
				<div class="w-full lg:w-1/3 p-4">
					<div class="block w-full h-full relative rounded-lg overflow-hidden shadow-lg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pexels-kampus-production-8353810.jpg">
						<div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
							<div class="p-6 py-8 text-center max-w-xs relative">
								<div class="absolute left-0 top-0 w-full h-full bg-black opacity-50"></div>
								<div class="relative z-10">
									<h4 class="font-semibold md:text-lg leading-tight mb-2 text-white">Ut enim ad minim veniam.</h4>
									<h5 class="mb-8 font-condensed font-light leading-tight text-white px-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.</h5>
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
<div class="bg-light-blue">
	<div class="max-w-6xl mx-auto py-24 px-4 md:px-0">
		<h1 class="heading-lg text-navy text-center mb-8"><strong>Industries</strong></h1>
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

<!-- NEW - Multibucket -->
<div class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-0">
      <div class="lg:text-center">
        <!-- <h2 class="text-base text-orange font-semibold tracking-wide uppercase">Financing</h2> -->
		<div class="w-24 h-1 bg-orange md:mx-auto mb-6"></div>
        <p class="heading-lg">
          Early stage launch program
        </p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
          Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
        </p>
      </div>

      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
          
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-orange to-bright-orange text-white">
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/globe-alt" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
</svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-semibold text-gray-900">Program Benefits</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
              </dd>
            </div>
          
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-orange to-bright-orange text-white">
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/scale" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
</svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-semibold text-gray-900">Qualifications</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
              </dd>
            </div>
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-orange to-bright-orange text-white">
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/scale" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
</svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-semibold text-gray-900">How to apply</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
              </dd>
            </div>
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-orange to-bright-orange text-white">
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/scale" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
</svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-semibold text-gray-900">How to apply</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
              </dd>
            </div>
          
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-orange to-bright-orange text-white">
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/lightning-bolt" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
</svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-semibold text-gray-900">Program Benefits</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
              </dd>
            </div>
          
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-gradient-to-r from-orange to-bright-orange text-white">
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/annotation" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
</svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-semibold text-gray-900">Qualifications</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
              </dd>
            </div>
        </dl>
		<div class="text-center mt-16">
			<p class="max-w-4xl mb-8 text-xl text-gray-500 lg:mx-auto">
				Are you looking for professional advice for your business or your industry?
	  		</p>
			<a class="uppercase bg-gradient-to-r shadow-md transition-all ml-auto duration-300 hover:to-orange from-orange to-bright-orange px-8 py-3 rounded-full text-white inline-block" href="/service">Learn More</a>
      	</div>
      </div>
    </div>
  </div>
<!-- END - Multibucket -->

<!-- 2 Column layout -->
<div class="bg-gray-100 px-4 md:px-0 py-24 max-w-6xl mx-auto">
	<div class="container mx-auto">
		<div class="flex flex-wrap justify-center">
			<div class="mb-12 lg:mb-0 w-full lg:flex-1">
				<h2 class="heading-lg mb-2">Testimonials</h2>
				<h3 class="mb-6 md:text-lg text-gray-700 max-w-xl">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</h3>
				<ul class="py-6 mb-6">
					<li class="flex items-center mb-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/headshot-1.jpg" class="w-24 h-24 object-cover">
						<div class="pl-5">
							<h4 class="font-bold text-base md:text-lg text-gray-900 leading-tight mb-2">Joe Smith, CPA</h4>
							<p class="text-gray-700 leading-snug max-w-sm"><em><strong class="text-orange mr-0.5">"</strong>Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Gravida rutrum quisque non tellus orci ac auctor augue.<strong class="text-orange">" </strong></em></p>
						</div>
					</li>
					<li class="flex items-center mb-6">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/headshot-2.jpg" class="w-24 h-24 object-cover">
						<div class="pl-5">
							<h4 class="font-bold text-base md:text-lg text-gray-900 leading-tight mb-2">Mary Sue</h4>
							<p class="text-gray-700 leading-snug max-w-sm"><em><strong class="text-orange mr-0.5">"</strong>Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Gravida rutrum quisque non tellus orci ac auctor augue.<strong class="text-orange">" </strong></em></p>
						</div>
					</li>
					<li class="flex items-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/headshot-3.jpg" class="w-24 h-24 object-cover">
						<div class="pl-5">
							<h4 class="font-bold text-base md:text-lg text-gray-900 leading-tight mb-2">Todd Domke</h4>
							<p class="text-gray-700 leading-snug max-w-sm"><em><strong class="text-orange mr-0.5">"</strong>Etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Gravida rutrum quisque non tellus orci ac auctor augue.<strong class="text-orange">" </strong></em></p>
						</div>
					</li>
				</ul>
				<a class="uppercase bg-gradient-to-r shadow-md transition-all ml-auto duration-300 hover:to-orange from-orange to-bright-orange px-8 py-3 rounded-full text-white inline-block" href="#">See all Testimonials</a>
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
<div class="bg-white px-4 py-24">
	<div class="container mx-auto">
		<div class="flex flex-wrap justify-start md:justify-center items-center">
			<div class="mb-12 lg:mb-0 w-full lg:w-3/12 text-right max-w-xs md:max-w-none">
				<div class="bg-white p-4 rounded-lg shadow-lg w-full">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/joe-st-germain.png" class="w-full h-auto object-cover rounded">
				</div>
			</div>
			<div class="w-full lg:flex-1 max-w-2xl lg:pl-12 text-gray-800">
				<h2 class="heading-lg mb-2">Meet Joe St. Germain</h2>
				<h3 class="font-bold text-base md:text-lg text-gray-900 leading-tight mb-2">Blandit volutpat maecenas volutpat blandit aliquam etiam</h3>
				<p class="mb-6">Ac auctor augue mauris augue neque gravida in fermentum et. Nunc id cursus metus aliquam eleifend mi in nulla posuere. Erat velit scelerisque in dictum non. Ut enim blandit volutpat maecenas volutpat. Blandit massa enim nec dui nunc mattis enim. Cursus risus at ultrices mi tempus imperdiet.</p>
				<a class="uppercase bg-gradient-to-r shadow-md transition-all ml-auto duration-300 hover:to-orange from-orange to-bright-orange px-8 py-3 rounded-full text-white inline-block" href="#">Learn More</a>
			</div>
		</div>
	</div>
</div>

<?php include(locate_template('templates/footer.php')); ?>