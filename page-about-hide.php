<?php include(locate_template('templates/header.php')); ?>

<div class="container px-4 relative md:px-0 max-w-6xl mx-auto -mt-16 md:-mt-32">
	<div class="mx-0 sm:mx-6 p-8 rounded-md shadow-sm bg-white">
		<div class="lg:text-center">
        	<h2 class="text-base text-orange font-semibold tracking-wide uppercase">By the numbers</h2>
        	<p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900 sm:text-4xl">
          		About Pact Finance and Accounting
        	</p>
      	</div>
		<h3 class="text-center font-bold leading-tight text-xl md:text-3xl mb-8"></h3>
		<div class="grid grid-cols-2 grid-rows-1 px-12 mb-8">
			<div class="text-center border-r border-orange">
				<p style="font-size:6rem; -webkit-background-clip: text; -webkit-text-fill-color: transparent;" class="text-6xl bg-gradient-to-r font-bold from-orange to-bright-orange">2500</p>
				<p class="text-2xl font-bold text-orange tracking-wide">vestibulums</p>
			</div>
			<div class="text-center">
				<p style="font-size:6rem; -webkit-background-clip: text; -webkit-text-fill-color: transparent;" class="text-6xl bg-gradient-to-r font-bold from-orange to-bright-orange">300+</p>
				<p class="text-2xl font-bold text-orange">suspendisse sed risus</p>
			</div>
		</div>
		<p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto mb-4">
        	Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eveniet tempora doloribus minima vel quia reiciendis voluptates totam provident recusandae? Earum laboriosam sint exercitationem accusamus rem illo eligendi beatae laborum?
    	</p>
	</div>
</div>

<!-- 2 Column layout -->
<div class="p-12 pt-24">
	<div class="max-w-2xl mx-auto text-center">
		<h3 class="mb-2 md:text-2xl text-gray-700 text-center"><strong class="text-orange">" </strong>Etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum. Massa eget egestas purus viverra accumsan in.<strong class="text-orange">" </strong></h3>
		<h2 class="font-bold leading-tight text-xl md:text-3xl mb-8">Jason Cheng</h2>
	</div>
</div>

<!-- 2 Column layout -->
<div class="p-12 py-24">
	<div class="container mx-auto">
		<div class="flex flex-wrap justify-center items-center">
			<div class="mb-12 lg:mb-0 w-full lg:w-3/12 text-right">
				<div class="bg-white p-4 rounded-lg shadow-lg w-full">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/joe-st-germain.png" class="w-full h-auto object-cover rounded">
				</div>
			</div>
			<div class="w-full lg:flex-1 max-w-2xl lg:pl-12 text-gray-800">
				<h2 class="font-bold leading-tight text-xl md:text-3xl mb-4">Meet Joe St. Germain</h2>
				<h3 class="font-bold text-lg md:text-lg text-gray-900 leading-tight mb-2">Blandit volutpat maecenas volutpat blandit aliquam etiam</h3>
				<p class="mb-6 text-lg">Ac auctor augue mauris augue neque gravida in fermentum et. Nunc id cursus metus aliquam eleifend mi in nulla posuere. Erat velit scelerisque in dictum non. Ut enim blandit volutpat maecenas volutpat. Blandit massa enim nec dui nunc mattis enim. Cursus risus at ultrices mi tempus imperdiet.</p>				
			</div>
		</div>
	</div>
</div>

<!-- Team -->
<section class="max-w-6xl mx-auto mb-20">
	<p class="font-thin opacity-50">OUR TEAM</p>
	<h2 class="font-bold leading-tight text-xl md:text-3xl mb-4">The Talented People Behind the Scenes of the Organization</h2>
	<div class="grid grid-cols-3 grid-rows-2 gap-12">
		<?php for ($i = 1; $i < 6+1; $i++) : ?>
		<div class="border-b">
			<div class="object-fit aspect-[5/3] bg-cover py-12 rounded-md" style="background-image:url(https://pact.launchpaddev.com/app/themes/pact/assets/images/team-<?php echo $i;?>.jpg);"></div>
			<div class="flex pt-6 items-center">
				<p class="text-lg font-normal">Kendall Nicholson</p>
				<div class="ml-auto flex">
					<!-- TWITTER -->
					<svg class="w-4 h-4 mx-2 fill-current text-cool-gray transition-all duration-300 hover:text-bright-orange" viewBox="0 0 24 24">
						<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
					</svg>
					<!-- LI -->
					<svg class="w-4 h-4 mx-2 fill-current text-cool-gray transition-all duration-300 hover:text-bright-orange" viewBox="0 0 24 24">
						<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
					</svg>
					<!-- FB	 -->
					<svg class="w-4 h-4 mx-2 fill-current text-cool-gray transition-all duration-300 hover:text-bright-orange" viewBox="0 0 24 24">
						<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
					</svg>
				</div>
			</div>
			<p class="opacity-50 mb-4">VP Operations</p>
			<p class="opacity-50 mb-4 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero, repellendus maiores. Ut velit et illum quas itaque a minima quo enim ullam eaque laborum.</p>
		</div>
		<?php endfor; ?>
	</div>
</section>

<div class="w-full h-96 lg:py-12 bg-cover py-8 md:py-0 bg-top relative bg-center" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/pexels-kampus-production-8353810.jpg)">
	<div class="hero max-w-screen-xl mx-auto relative z-10 px-4 lg:px-0 font-gotham h-full flex flex-col justify-center items-center md:items-start">
	</div>
	<div class="absolute top-0 bg-navy md:bg-transparent opacity-75 h-full w-full"></div>
</div>
	
<!-- ACCORDION -->
<section class="w-full max-w-3xl text-xl mx-auto my-16">
	<h3 class="font-bold text-center leading-tight text-xl md:text-3xl mb-8">Frequently Asked Questions</h3>
	<div class="border-t">
		<button class="accordion text-xl px-4 py-6 relative w-full items-center text-left flex">
			<span class="mr-4 font-medium">What is wealth management?</span>
    			<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute text-cool-gray mr-4 right-0 h-6 w-6 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
			</svg>
		</button>
		<div class="panel">
			<div class="px-4 pb-4">
    			<div class="accordion-content text-base opacity-75">
        			Wealth management usually refers to a suite of services that provides the opportunity to work with a financial professional. It usually includes working together on a broad plan to help grow and protect assets and it often includes the ability to take advantage of professional money management.
    			</div>
			</div>
		</div>
	</div>
	<div class="border-t">
		<button class="accordion text-xl px-4 py-6 relative w-full items-center text-left flex">
			<span class="mr-4 font-medium">Why would someone need wealth management?</span>
    			<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute text-cool-gray mr-4 right-0 h-6 w-6 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
			</svg>
		</button>
		<div class="panel">
			<div class="px-4 pb-4">
    			<div class="accordion-content text-base opacity-75">
        			Clients may engage in a wealth management relationship for a number of different reasons. Some choose to do so because they need help planning for certain goals, or need guidance around estate planning, protecting wealth, retirement planning, or ways to manage their tax obligations. Others choose wealth management because they don’t have the time or the desire to manage their own portfolios or simply value the input of a financial professional, who can act as a sounding board.
    			</div>
			</div>
		</div>
	</div>
	<div class="border-t">
		<button class="accordion text-xl px-4 py-6 relative w-full items-center text-left flex">
			<span class="mr-4 font-medium">What is taxable income?</span>
    			<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute text-cool-gray mr-4 right-0 h-6 w-6 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
			</svg>
		</button>
		<div class="panel">
			<div class="px-4 pb-4">
    			<div class="accordion-content text-base opacity-75">
        			Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ipsam dolorem nihil, vero recusandae aliquam necessitatibus sed reiciendis, obcaecati tenetur sint atque. Nam quasi amet quam architecto quae consectetur eaque!
    			</div>
			</div>
		</div>
	</div>
	<div class="border-t border-b">
		<button class="accordion text-xl p-4 relative w-full items-center text-left flex">
			<span class="mr-4 font-medium">What are the advantages of a Roth IRA?</span>
    			<svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute text-cool-gray mr-4 right-0 h-6 w-6 transform transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
			</svg>
		</button>
		<div class="panel">
			<div class="px-4 pb-4">
    			<div class="accordion-content text-base opacity-75">
        			Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ipsam dolorem nihil, vero recusandae aliquam necessitatibus sed reiciendis, obcaecati tenetur sint atque. Nam quasi amet quam architecto quae consectetur eaque!
    			</div>
			</div>
		</div>
	</div>
</section>

<?php include(locate_template('templates/footer.php')); ?>