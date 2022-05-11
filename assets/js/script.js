window.addEventListener('load', function () {
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