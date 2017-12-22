(function(){

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


 //THIS IS LIGHTBOX

var thumb = document.querySelectorAll('.example'),
		appliedClass;


thumb.forEach(function(element, index){
	element.addEventListener("click", open, false);
});


function open(currentIndex, currentObject){
		let lightbox = document.querySelector('.lightbox');
		let lightboxImg = lightbox.querySelector('img');
		let lightboxDesc = lightbox.querySelector('p');
		let lightboxClose = lightbox.querySelector('.close-lightbox');

		lightbox.style.display = "block";
		window.scrollTo(0,0);
    document.body.style.overflow = "hidden";
		lightboxImg.src = "images/" + currentObject.images[currentIndex];
		lightboxDesc.innerHTML = currentObject.ImageDescription[currentIndex];

		lightboxClose.addEventListener('click', close ,false);

	}


function close(){
  console.log("close lightbox");
	let lightbox = document.querySelector('.lightbox');
  lightbox.style.display = "none";
  document.body.style.overflow = "visible";

}

})();
