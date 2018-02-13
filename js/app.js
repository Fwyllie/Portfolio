$(document).foundation()
	var nav = document.querySelector("#mainNav");
	var links = nav.querySelectorAll("li:not(.resumeNav)");

	function scrollit(evt){
		var idNum = evt.target.id;
		TweenLite.to(window, 1, {scrollTo:{y:"#section"+idNum, offsetY:20}});
	}

	for(var i=0; i<links.length; i++){
		links[i].addEventListener("click", scrollit, false);
	}

	///////SKILLS//////
	var images = document.querySelectorAll(".skills");

	function colourImg(){
		this.src = "images/" +  this.id + ".png";
		images.forEach(function(element){
			element.addEventListener('mouseout', pinkImg, false);
		});
	}
	function pinkImg(){
		this.src = "images/" +  this.id + "-pink.png";
	}

	images.forEach(function(element){
		element.addEventListener('mouseover', colourImg, false);
	});
