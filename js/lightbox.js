(function(){
	var example = document.querySelectorAll('.example');

	function getThumbs(){
		console.log("get thumbs run");
		const url = './admin/includes/functions.php?getImages=true';

		fetch(url)//Make AJAX call
		.then((resp) => resp.json()) //converts result to json
		.then((data) => {processThumbnails(data); })
		.catch(function(error) {
			console.log(error);
		});
	}

		function processThumbnails(data){
			console.log("processThumbnails");
			let thumbHolder =  document.querySelector("#section2");

			data.forEach(thumb => {
				let docFrag =
				`<div class="small-12 medium-6 cell imgHolder"><img class="example"  data-dbindex="1" src="./images/${thumb.img_link}" alt="Portfolio Piece"></div>`;

				thumbHolder.innerHTML += docFrag;

				let example = document.querySelectorAll('.example');

			example.forEach(function(element, index){
				element.addEventListener("click", openLB, false);
			});
		});
	}

	function openLB(){
		console.log("Open Lightbox fired");
		const url = './admin/includes/functions.php?portPiece=' + this.dataset.dbindex;

		fetch(url)
		.then((resp) => resp.json())
		.then((data) => { processElements(data); })
		.catch(function(error) {
			console.log(error);
		});

		//lightBoxImg.src = "images/" + currentObject.images[currentIndex];
		//lightboxDesc.innerHTML = currentObject.ImageDescription[currentIndex];
	}

	function processElements(data){
		const {img_link, img_title, img_desc} = data;
		//console.log();
		var lightbox = document.querySelector('.lightbox');
		var lightBoxClose =  document.querySelector('.close-lightbox');
		var lightBoxImg = document.querySelector('.lightbox-img');
		var lightboxDesc = document.querySelector('.lightbox-desc');

		lightBoxClose.addEventListener('click', closeLB, false);

		lightbox.style.display = "block";
		window.scrollTo(0,0);
		document.body.style.overflow = "hidden";

		//console.log("ITS WORKING");
		let img = document.querySelector('.lightbox-img').src = "images/" + img_link;
		let name = document.querySelector('.lightbox-name').textContent = img_title;
		let desc = document.querySelector('.lightbox-desc').textContent = img_desc;



	}

	function closeLB(){
		console.log("close lightbox");
		let lightbox = document.querySelector('.lightbox');
		lightbox.style.display = "none";
		document.body.style.overflow = "visible";
	}

	getThumbs();
})();
