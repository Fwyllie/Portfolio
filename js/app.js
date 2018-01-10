$(document).foundation()
	var nav = document.querySelector("#mainNav");
	var links = nav.querySelectorAll("li");
	//console.log(links);

	function scrollit(evt){
		//console.log(evt.target.id);
		var idNum = evt.target.id;
		console.log("section"+idNum);
		TweenLite.to(window, 1, {scrollTo:{y:"#section"+idNum, offsetY:20}});
	}

	for(var i=0; i<links.length; i++){
		links[i].addEventListener("click", scrollit, false);
	}
