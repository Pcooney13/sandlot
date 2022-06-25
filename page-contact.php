<?php include(locate_template('templates/header.php')); ?>

<?php gravity_form( 1, true, false, );?>

<div class="max-w-6xl mx-auto py-24">
	<!-- VERTICAL -->
	<div id="event-meta">
    	<div class="-mx-4 md:mx-0 flex flex-col max-w-xs justify-center py-4 md:py-0 flex-wrap md:mb-6 bg-indigo-500 bg-opacity-10 md:rounded-lg pl-4">
			<!-- Details -->
      		<div class="py-6 px-4 flex-1 max-w-xs -mb-3">
        		<h2 class="font-bold uppercase tracking-wider mb-2">Details</h2>
				<!-- Date -->
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
					</svg>
					<div class="leading-4">
						<p class="mb-1">Date:</p>
            			<abbr class="font-normal text-black" title="2022-06-11"> Sat, June 11 </abbr>
					</div>
				</div>
				<!-- Time -->
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					<div class="leading-4">
						<p class="mb-1">Time:</p>          
						<p class="font-normal text-black">5:30 am - 8:00 am
							<span class="font-light text-xs">EDT</span>
						</p>
					</div>
				</div>
				<!-- Cost -->
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
					</svg>
					<div class="leading-4">
          				<p class="mb-1">Cost:</p>
						<p class="font-normal text-black">$1250</p>
					</div>
				</div>
				<!-- Categories -->
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
					</svg>
					<div class="leading-4">					
						<p class="mb-1">Event Category:</p>
						<a class="font-normal text-black" href="https://sandlot.launchpaddev.com/events/category/generated/" rel="tag">
							Generated
						</a>
					</div>
				</div>
				<!-- Tags -->
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
					</svg>
					<div class="leading-4">
						<p class="mb-1">Event Tags:</p>
						<a class="font-normal text-black" href="https://sandlot.launchpaddev.com/events/tag/automated-tdgext/" rel="tag">
							Automated
						</a>
					</div>
				</div>
      		</div>
			<!-- Organizer -->
      		<div class="py-6 px-4 flex-1 max-w-xs -mb-3">
				<h2 class="font-bold uppercase tracking-wider mb-2">Organizer</h2>
				<div class="mb-3">					
					<p class="font-normal text-black">Colonel Katrina C. Stephens</p>
					<p class="text-sm">Commander, 66th Air Base Group, Hanscom Air Force Base</p>
				</div>
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
					</svg>
					<div class="leading-4">
          				<p class="mb-1">Phone:</p>
						<a href="tel:7714800355" class="font-normal text-black">1-771-480-0355</a>
					</div>
				</div>
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
					</svg>
					<div class="leading-4">
          				<p class="mb-1">Email:</p>
						<a href="mailto:angeline@dooley-qa.tri.be" class="font-normal text-black">angeline@dooley-qa.tri.be</a>
					</div>
				</div>
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					<div class="leading-4">
          				<!-- <p class="mb-1">Website:</p> -->
						<a href="https://dooley-qa.tri.be" target="_self" rel="external" class="font-normal text-black">View Organizer Website</a>
					</div>
				</div>
      		</div>
			<!-- Venue -->
      		<div class="py-6 px-4 flex-1 max-w-xs -mb-3">
        		<h2 class="font-bold uppercase tracking-wider mb-2">Venue</h2>
				<div class="text-gray-500 mb-3">					
					<p class="font-normal text-black text-light">
						Zoom Video Conference
					</p>
					<p>Meeting ID: 559 498 3614</p>
				</div>
				<div class="flex text-gray-500 mb-3">					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
					</svg>
					<div class="leading-4">
          				<p class="mb-1">Join Meeting:</p>
						<a href="https://launchpad-co.zoom.us/j/5594983614" class="font-normal text-black">Join Zoom Meeting</a>
					</div>
				</div>
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
					</svg>
					<div class="leading-4">
          				<p class="mb-1">Mobile Meeting Link</p>
						<a href="tel:7812251110" class="font-normal text-black">Mobile Sign in</a>
					</div>
				</div>				
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					<div class="leading-4">
          				<!-- <p class="mb-1">Website:</p> -->
						<a href="https://dooley-qa.tri.be" target="_self" rel="external" class="font-normal text-black">View Organizer Website</a>
					</div>
				</div>
      		</div>
    	</div>
  	</div>
	<!-- HORIZONTAL -->
  	<div id="event-meta">
    	<div class="-mx-4 md:mx-0 flex flex-col md:flex-row justify-center py-4 md:py-0 flex-wrap md:mb-6 bg-indigo-500 bg-opacity-10 md:rounded-lg pl-4">
			<!-- Details -->
      		<div class="py-6 px-4 flex-1 max-w-xs -mb-3">
        		<h2 class="font-bold uppercase tracking-wider mb-2">Details</h2>
				<!-- Date -->
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
					</svg>
					<div class="leading-4">
						<p class="mb-1">Date:</p>
            			<abbr class="font-normal text-black" title="2022-06-11"> Sat, June 11 </abbr>
					</div>
				</div>
				<!-- Time -->
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					<div class="leading-4">
						<p class="mb-1">Time:</p>          
						<p class="font-normal text-black">5:30 am - 8:00 am
							<span class="font-light text-xs">EDT</span>
						</p>
					</div>
				</div>
				<!-- Cost -->
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
					</svg>
					<div class="leading-4">
          				<p class="mb-1">Cost:</p>
						<p class="font-normal text-black">$1250</p>
					</div>
				</div>
				<!-- Categories -->
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
					</svg>
					<div class="leading-4">					
						<p class="mb-1">Event Category:</p>
						<a class="font-normal text-black" href="https://sandlot.launchpaddev.com/events/category/generated/" rel="tag">
							Generated
						</a>
					</div>
				</div>
				<!-- Tags -->
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
					</svg>
					<div class="leading-4">
						<p class="mb-1">Event Tags:</p>
						<a class="font-normal text-black" href="https://sandlot.launchpaddev.com/events/tag/automated-tdgext/" rel="tag">
							Automated
						</a>
					</div>
				</div>
      		</div>
			<!-- Organizer -->
      		<div class="py-6 px-4 flex-1 max-w-xs -mb-3">
				<h2 class="font-bold uppercase tracking-wider mb-2">Organizer</h2>
				<div class="mb-3">					
					<p class="font-normal text-black">Colonel Katrina C. Stephens</p>
					<p class="text-sm">Commander, 66th Air Base Group, Hanscom Air Force Base</p>
				</div>
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
					</svg>
					<div class="leading-4">
          				<p class="mb-1">Phone:</p>
						<a href="tel:7714800355" class="font-normal text-black">1-771-480-0355</a>
					</div>
				</div>
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
					</svg>
					<div class="leading-4">
          				<p class="mb-1">Email:</p>
						<a href="mailto:angeline@dooley-qa.tri.be" class="font-normal text-black">angeline@dooley-qa.tri.be</a>
					</div>
				</div>
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					<div class="leading-4">
          				<!-- <p class="mb-1">Website:</p> -->
						<a href="https://dooley-qa.tri.be" target="_self" rel="external" class="font-normal text-black">View Organizer Website</a>
					</div>
				</div>
      		</div>
			<!-- Venue -->
      		<div class="py-6 px-4 flex-1 max-w-xs -mb-3">
        		<h2 class="font-bold uppercase tracking-wider mb-2">Venue</h2>
				<div class="text-gray-500 mb-3">					
					<p class="font-normal text-black text-light">
						Hanscom Air Force Base
					</p>
					<address class="text-sm leading-4 text-black">
						<span class="tribe-street-address">55 Grenier St</span>
						<br>
						<span class="tribe-locality">Hanscom AFB</span>
						<span class="tribe-delimiter">,</span>
						<abbr class="tribe-region tribe-events-abbr" title="Massachusetts">
							MA
						</abbr>
						<span class="tribe-postal-code">01731</span>						
					</address>
					<a class="text-sm" style="font-weight:300!important;" href="#"> + Google Map</a>
				</div>
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
					</svg>
					<div class="leading-4">
          				<p class="mb-1">Phone:</p>
						<a href="tel:7812251110" class="font-normal text-black">781-225-1110</a>
					</div>
				</div>
				<div class="flex text-gray-500 mb-3">					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
					</svg>
					<div class="leading-4">
          				<p class="mb-1">Email:</p>
						<a href="mailto:angeline@dooley-qa.tri.be" class="font-normal text-black">angeline@dooley-qa.tri.be</a>
					</div>
				</div>
				<div class="flex text-gray-500 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					<div class="leading-4">
          				<!-- <p class="mb-1">Website:</p> -->
						<a href="https://dooley-qa.tri.be" target="_self" rel="external" class="font-normal text-black">View Organizer Website</a>
					</div>
				</div>
      		</div>
    	</div>
  	</div>
</div>

<?php include(locate_template('templates/footer.php')); ?>