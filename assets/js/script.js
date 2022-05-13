window.addEventListener('load', function () {
	/*
		Nav Menu
	**/
	const hamburger = document.getElementById("hamburger");
    const modal = document.getElementById("modal");
    const modalClose = document.getElementById("modal-close");
    hamburger.addEventListener("click", function () {
        modal.classList.remove("opacity-0");
        modal.classList.remove("pointer-events-none");
    });
    modalClose.addEventListener("click", function () {
        modal.classList.add("opacity-0");
        modal.classList.add("pointer-events-none");
	});




	/*
		Accordions open/close
	**/
    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function (e) {
          	var panel = this.nextElementSibling;
			console.log(panel);
          
          	if (panel.style.maxHeight) {
            	panel.style.maxHeight = null;
            	this.children[1].classList.remove('rotate-180')
				console.log(panel.scrollHeight)
            	// this.children[1].innerHTML = "+";
          	} else {
            	panel.style.maxHeight = panel.scrollHeight + "px";
            	this.children[1].classList.add('rotate-180')
				console.log(panel.scrollHeight)
            	// this.children[1].innerHTML = "-"; 
          	}
        });
    }

})