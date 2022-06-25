window.addEventListener("load", function () {
  	/*
	** Nav Menu
	*/
  	const hamburger = document.getElementById("hamburger");
  	const modal = document.getElementById("modal");
  	const modalOverlay = document.getElementById("modal-overlay");
	const menu = document.getElementById("menu");
    const inputSearch = document.getElementById("search").children[0];
	const header = document.getElementById("header");
    const openSearch = document.getElementById("open-search");
    const closeSearch = document.getElementById("close-search");

	function toggleMenuSearch(menu, clickedIcon) {
		let otherIcon;
		if (clickedIcon === openSearch) {
			otherIcon = closeSearch
			setTimeout(() => {
				inputSearch.focus()
			}, 300);
		} else {
			otherIcon = openSearch
		}
		menu.classList.toggle("-translate-y-full");
        otherIcon.classList.toggle("opacity-0");
        otherIcon.classList.toggle("pointer-events-none");
        clickedIcon.classList.toggle("opacity-0");
        clickedIcon.classList.toggle("pointer-events-none");
	}

    openSearch.addEventListener("click", function (e) {
        e.preventDefault();
		toggleMenuSearch(menu, this)
    });
    closeSearch.addEventListener("click", function (e) {
        e.preventDefault();
		toggleMenuSearch(menu, this);
    });

  	hamburger.addEventListener("click", function () {
		console.log("running")
    	modal.classList.toggle("opacity-0");
    	modalOverlay.classList.toggle("opacity-0");
    	modalOverlay.classList.toggle("transition-all");
    	modal.classList.toggle("scale-100");
    	modal.classList.toggle("scale-50");
    	modal.classList.toggle("pointer-events-none");
    	// nav.children[0].classList.toggle("pl-10");
    	header.classList.toggle("fixed");
    	header.classList.toggle("relative");
	    this.children[0].classList.toggle("open");
  	});

  	/*
	** Accordions open/close
	*/
  	var acc = document.getElementsByClassName("accordion");
  	var i;

  	for (i = 0; i < acc.length; i++) {
    	acc[i].addEventListener("click", function (e) {
      		var panel = this.nextElementSibling;
      		if (panel.style.maxHeight) {
        		panel.style.maxHeight = null;
        		this.children[1].classList.remove("rotate-180");
      		} else {
        		panel.style.maxHeight = panel.scrollHeight + "px";
        		this.children[1].classList.add("rotate-180");
      		}
    	});
  	}

  	/*
	** Blog Progress Bar
	*/
	const BlogScroll = document.getElementById("blog-scroll");
  	const progressBar = document.getElementById("progress-bar");

  	if (BlogScroll && progressBar) {
    	window.addEventListener("scroll", handleScroll);
  	}
	
	function handleScroll() {
		const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
		// Allows for progress to hit 100% when end of blog is at 1/2 screen height from bottom
		let difference = window.innerHeight / 2	
    	const scrolled = ((winScroll / (BlogScroll.offsetHeight + difference)) * 100);
		var distanceToBottom = BlogScroll.getBoundingClientRect().bottom;	
		progressBar.style.opacity = 100;
    	progressBar.children[0].style.width = scrolled + "%";
		progressBar.children[0].style.borderTopRightRadius = "99px";
		progressBar.children[0].style.borderBottomRightRadius = "99px";
		if (distanceToBottom < 0) {
			progressBar.style.opacity = 0;
		}
    	if (scrolled > 100) {
    		progressBar.children[0].style.width = "100%";
    		progressBar.children[0].style.borderRadius = "0";
    		return;
    	}
  	}

  	/*
	** Slider
	*/
  	var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	let setRootMargin
	if (screenWidth > 600) {
		setRootMargin = '0px -40% 200px 0px';
	} else {
		setRootMargin = '0px -20% 200px 0px';
	}
  	let observer = new IntersectionObserver(
    	(entries, observer) => {
      		entries.forEach((entry) => {
		  		let image = entry.target.children[0].children[0].children[0]
        		if (entry.isIntersecting) {
          			entry.target.classList.remove("opacity-50");
          			// image.classList.remove("grayscale");
          			image.classList.add("active");
        		} else {
          			entry.target.classList.add("opacity-50");
          			// image.classList.add("grayscale");
          			image.classList.remove("active");
        		}
      		});
    	},
    	{
      		root: document.querySelector("#slider"),
      		rootMargin: setRootMargin,
      		threshold: 0.9,
    	}
  	);

  	document.querySelectorAll(".slide").forEach((img) => {
    	observer.observe(img);
  	});


// No code below this closing tag
});