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

var arrow = document.querySelector("#resumeArrow");
var text =  arrow.querySelector("p");

function textAdd(){
	text.innerHTML = "Resume.";
	arrow.classList.add("resumeOn");
	arrow.addEventListener("mouseout", textRemove, false);
}

function textRemove(){
	text.innerHTML = "R.";
	arrow.classList.remove("resumeOn");
}

arrow.addEventListener("mouseover", textAdd, false);
