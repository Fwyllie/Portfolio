(function(){
	var example = document.querySelectorAll('.example');

	/*const httpRequest = new XMLHttpRequest();

	function processElements(data){
		const {lightboxImage, lightboxName, lightboxDesc} = data;
		//console.log("ITS WORKING");
		let objectIndex = dynamicContent[this.id];
		let img = document.querySelector('.lightbox-img').textContent = lightboxImage;
		let name = document.querySelector('.lightbox-name').textContent = lightboxName;
		let desc = document.querySelector('.lightbox-desc').textContent = lightboxDesc;
	}*/

		example.forEach(function(element, index){
			element.addEventListener("click", openLB, false);
		});

	function openLB(currentIndex, currentObject){
		/*const url = './includes/functions.php?portPiece=' + this.id

		fetch(url)//Mae AJAX call
		.then((resp) => resp.json()) //converts result to json
		.then((data) => { processElements(data); })
		.catch(function(error) {
			console.log(error);
		});*/

		console.log(this.id);
		appliedClass = this.id;
		let objectIndex = dynamicContent[this.id];

		var lightbox = document.querySelector('.lightbox');
		var lightBoxClose =  document.querySelector('.close-lightbox');
		var lightBoxImg = document.querySelector('.lightbox-img');
		var lightboxDesc = document.querySelector('.lightbox-desc');

		lightBoxClose.addEventListener('click', closeLB, false);

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
