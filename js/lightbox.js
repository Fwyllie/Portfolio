(function(){
	var example = document.querySelectorAll('.example');
	var appliedClass;


	example.forEach(function(element, index){
		element.addEventListener("click", openLB, false);
	});



	function openLB(currentIndex, currentObject){
		console.log(this.id);
		appliedClass = this.id;
		let objectIndex = dynamicContent[this.id];

		var lightbox = document.querySelector('.lightbox'),
		lightBoxClose =  document.querySelector('.close-lightbox'),
		lightBoxImg = document.querySelector('.lightbox-img'),
		lightboxDesc = document.querySelector('.lightbox-desc'),
		subImages = document.querySelector('.subImagesContainer');

		lightBoxClose.addEventListener('click', closeLB ,false);

		lightbox.style.display = "block";
		window.scrollTo(0,0);
    document.body.style.overflow = "hidden";

		lightBoxImg.src = "images/" + currentObject.images[currentIndex];
		lightboxDesc.innerHTML = currentObject.ImageDescription[currentIndex];


	}

	function closeLB(){
		console.log("close lightbox");
		let lightbox = document.querySelector('.lightbox');
		lightbox.style.display = "none";
		document.body.style.overflow = "visible";
	}

})();
