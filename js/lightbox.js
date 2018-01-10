(function(){
	var example = document.querySelectorAll('.example');

	function getThumbs(){
		const url = './admin/includes/functions.php?getImages=true';

		fetch(url)//Make AJAX call
		.then((resp) => resp.json()) //converts result to json
		.then((data) => {processThumbnails(data); })
		.catch(function(error) {
			console.log(error);
		});}

		function processThumbnails(data){
			let thumbHolder =  document.querySelector("#section2");
			data.forEach(thumb => {
				let docFrag =
				`<div class="small-12 medium-6 large-3 cell imgHolder"><img class="cell example"  id="${thumb.img_projects}" src="./images/${thumb.img_link}" alt="Portfolio Piece"></div>`;
				thumbHolder.innerHTML += docFrag;
				let example = document.querySelectorAll('.example');

				example.forEach(function(element, index){
					element.addEventListener("click", openLB, false);
				});
			});
		}

	function openLB(){
		const url = './admin/includes/functions.php?portPiece=' + this.id;
		fetch(url)
		.then((resp) => resp.json())
		.then((data) => {processElements(data); })
		.catch(function(error) {
			console.log(error);
		});}

	function processElements(data){
		const {img_link, img_title, img_desc, img_gitHub} = data;
		var lightbox = document.querySelector('.lightbox');
		var lightBoxClose =  document.querySelector('.close-lightbox');
		var lightBoxImg = document.querySelector('.lightbox-img');
		var lightboxDesc = document.querySelector('.lightbox-desc');

		lightBoxClose.addEventListener('click', closeLB, false);

		lightbox.style.display = "block";
		window.scrollTo(0,0);
		document.body.style.overflow = "hidden";

		let img = document.querySelector('.lightbox-img').src = "images/" + img_link;
		let name = document.querySelector('.lightbox-name').textContent = img_title;
		let desc = document.querySelector('.lightbox-desc').textContent = img_desc;
		let github = document.querySelector('.githubLink').href = img_gitHub;
	}

	function closeLB(){
		let lightbox = document.querySelector('.lightbox');
		lightbox.style.display = "none";
		document.body.style.overflow = "visible";
	}

	getThumbs();
})();
