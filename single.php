<?php include(locate_template('templates/header.php')); ?>
	
	<!--Title-->
	<div class="pt-16 md:pt-24">
		<p class="text-center text-sm md:text-base text-orange font-bold uppercase"><?php echo get_the_date(); ?> <span class="text-gray-900">/</span> RETIREMENT</p>
		<h1 class="text-center container max-w-6xl mx-auto font-bold break-normal text-3xl md:text-5xl"><?php echo get_the_title(); ?></h1>
        <div class="max-w-6xl mx-auto mt-8 mb-12 justify-center flex items-center">
		    <!--Author-->
		    <div class="md:mr-16 flex items-center font-gotham">
			    <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
			    <div>
				    <p class="text-base font-bold text-base md:text-xl leading-none">John Smith, CPA</p>
				    <p class="text-gray-600 text-xs md:text-base">Senior Financial Advisor</p>
			    </div>					
		    </div>
            <!--Author-->
		    <div class="flex items-center font-gotham">
			    <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
			    <div>
				    <p class="text-base font-bold text-base md:text-xl leading-none">Mary Sue</p>
				    <p class="text-gray-600 text-xs md:text-base">Investor Relations Manager</p>
			    </div>					
		    </div>
		</div>
	</div>

	<!--image-->
	<div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded" style="background-image:url('<?php echo get_the_post_thumbnail_url();?>'); height: 75vh;"></div>
	
	<!--Container-->
	<div class="container max-w-5xl mx-auto -mt-32">
		
		<div class="mx-0 sm:mx-6">
			
			<div class="relative shadow-md bg-white w-full p-8 md:p-24 leading-normal text-xl text-gray-800 leading-normal font-gotham">				
                
                <!--Post Content-->
                <!--Lead Para-->
                <p class="text-2xl md:text-3xl mb-5 font-[400]">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione ipsam cupiditate error excepturi vero qui ullam aliquid a cumque quam nisi modi alias id minima, inventore veniam ad nemo doloribus?
                </p>
                <!--/Lead Para-->
                <div class="font-thin text-2xl leading-normal">				    
    
				    <p class="py-3">Sed dignissim lectus ut tincidunt vulputate. Fusce tincidunt lacus purus, in mattis tortor sollicitudin pretium. Phasellus at diam posuere, scelerisque nisl sit amet, tincidunt urna. Cras nisi diam, pulvinar ut molestie eget, eleifend ac magna. Sed at lorem condimentum, dignissim lorem eu, blandit massa. Phasellus eleifend turpis vel erat bibendum scelerisque. Maecenas id risus dictum, rhoncus odio vitae, maximus purus. Etiam efficitur dolor in dolor molestie ornare. Aenean pulvinar diam nec neque tincidunt, vitae molestie quam fermentum. Donec ac pretium diam. Suspendisse sed odio risus. Nunc nec luctus nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec nulla eget sem dictum elementum.</p>
					<p class="py-3">Maecenas accumsan lacus sit amet elementum porta. Aliquam eu libero lectus. Fusce vehicula dictum mi. In non dolor at sem ullamcorper venenatis ut sed dui. Ut ut est quam. Suspendisse quam quam, commodo sit amet placerat in, interdum a ipsum. Morbi sit amet tellus scelerisque tortor semper posuere.</p>
                    <blockquote class="border-l-4 border-orange italic my-8 pl-6 md:pl-12">Example of blockquote - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.</blockquote>
					<p class="py-3">Morbi varius posuere blandit. Praesent gravida bibendum neque eget commodo. Duis auctor ornare mauris, eu accumsan odio viverra in. Proin sagittis maximus pharetra. Nullam lorem mauris, faucibus ut odio tempus, ultrices aliquet ex. Nam id quam eget ipsum luctus hendrerit. Ut eros magna, eleifend ac ornare vulputate, pretium nec felis.</p>
					<p class="py-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc vitae pretium elit. Cras leo mauris, tristique in risus ac, tristique rutrum velit. Mauris accumsan tempor felis vitae gravida. Cras egestas convallis malesuada. Etiam ac ante id tortor vulputate pretium. Maecenas vel sapien suscipit, elementum odio et, consequat tellus.</p>
				    

                    <ol class="pl-6 list-disc">
                        <li class="py-2 leading-tight">Asit amet consectetur adipisicing elit.</li>
                        <li class="py-2 leading-tight">Numquam perferendis totam saepe aliquid dolore error, eligendi, qui, veritatis doloremque itaque. Nihil </li>
                        <li class="py-2 leading-tight">doloremque sit eos, expedita a quod maiores. Illo dolor sit ami.</li>
                    </ol>				    
                </div>
												
				<!--/ Post Content-->
						
			</div>
			
		</div>
	

	</div>

				<!--Subscribe-->	
				<div class="container mx-auto max-w-6xl border-b-8 border-orange font-gotham rounded text-center -mt-32 pt-32 bg-light-orange z-0">
                    <div class="mx-2 bg-light-orange p-4 md:p-24">
					    <h2 class="font-bold break-normal text-2xl md:text-4xl">Subscribe to PACT Finance & Accounting</h2>
					    <h3 class="font-bold break-normal font-normal text-gray-600 text-base md:text-xl">Get the latest posts delivered right to your inbox</h3>
					    <div class="w-full text-center pt-4">
					    	<form action="#">
					    		<div class="max-w-xl mx-auto p-1 pr-0 flex items-center justify-center">
					    			<input class="text-xl px-6 py-3 rounded-full bg-white mb-4 w-full md:w-96 mr-4" placeholder="Email" type="text">
                                    <button class="uppercase font-bold w-full md:w-auto mb-4 bg-gradient-to-r shadow-md transition-all duration-300 hover:to-orange from-orange to-bright-orange px-8 py-4 rounded-full text-white inline-block" type="dropdown">Subscribe</button>
					    		</div>
					    	</form>
					    </div>
				    </div>
				</div>
				<!-- /Subscribe-->


	<div>
	
		<div class="container w-full max-w-6xl mx-auto px-2 py-8">
            <h2 class="font-bold break-normal text-center mb-8 text-2xl md:text-4xl">Latest Articles</h2>
			<div class="flex flex-wrap -mx-4">
				<div class="w-full md:w-1/3 px-2 pb-12">
					<div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
						<a href="#" class="no-underline hover:no-underline">
								<img src="https://source.unsplash.com/_AjqGGafofE/400x200" class="h-48 w-full rounded-t shadow-lg">
								<div class="p-6 h-auto md:h-48">	
									<p class="text-gray-600 text-xs md:text-sm">GETTING STARTED</p>
									<div class="font-bold text-xl text-gray-900">Lorem ipsum dolor sit amet.</div>
									<p class="text-gray-800 font-serif text-base mb-5">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
									</p>
								</div>
								<div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
									<img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
									<p class="text-gray-600 text-xs md:text-sm">2 MIN READ</p>
								</div>
						</a>
					</div>
				</div>
				<div class="w-full md:w-1/3 px-2 pb-12">
					<div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
						<a href="#" class="no-underline hover:no-underline">
								<img src="https://source.unsplash.com/_AjqGGafofE/400x200" class="h-48 w-full rounded-t shadow">
								<div class="p-6 h-auto md:h-48">	
									<p class="text-gray-600 text-xs md:text-sm">UNDERWATER</p>
									<div class="font-bold text-xl text-gray-900">Biolumini algae diatomeae ecology.</div>
									<p class="text-gray-800 font-serif text-base mb-5">
										Lorem ipsum dolor sit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula. 
									</p>
								</div>
								<div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
									<img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
									<p class="text-gray-600 text-xs md:text-sm">4 MIN READ</p>
								</div>
						</a>
					</div>
				</div>
				<div class="w-full md:w-1/3 px-2 pb-12">
					<div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
						<a href="#" class="no-underline hover:no-underline">
								<img src="https://source.unsplash.com/DEa8_vxKlEo/400x200" class="h-48 w-full rounded-t shadow">
								<div class="p-6 h-auto md:h-48">	
									<p class="text-gray-600 text-xs md:text-sm">FOREST</p>
									<div class="font-bold text-xl text-gray-900">What is life but a teardrop in the eye of infinity?</div>
									<p class="text-gray-800 font-serif text-base mb-5">
										Mollis pretium integer eros et dui orci, lectus nec elit sagittis neque. Dignissim ac nullam semper aliquet volutpat, ut scelerisque.
									</p>
								</div>
								<div class="flex items-center justify-between inset-x-0 bottom-0 p-6">
									<img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
									<p class="text-gray-600 text-xs md:text-sm">7 MIN READ</p>
								</div>
						</a>
					</div>
				</div>
			</div>
		</div>


		</div>

<?php include(locate_template('templates/footer.php')); ?>