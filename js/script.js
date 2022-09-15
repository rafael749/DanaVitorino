const header = document.querySelector("header");

window.addEventListener ("scroll", function() {
	header.classList.toggle ("sticky", window.scrollY > 0);
});

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navlist.classList.toggle('active');
};

window.onscroll = () => {
	menu.classList.remove('bx-x');
	navlist.classList.remove('active');
};

const sr = ScrollReveal ({
	distance: '45px',
	duration: 1000,
	reset: true
})

sr.reveal('.home-text',{delay:350, origin:'bottom'})
sr.reveal('.home-img',{delay:350, origin:'top'})

/* sr.reveal('.about,.editorial,.contact',{delay:200, origin:'bottom'})*/


/* 
			S W I P P E R     J S

*/

var swiper = new Swiper('.swiper-container', {
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev'
	},
	slidesPerView: 1,
	spaceBetween: 10,
	loop: true,
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},

  
	breakpoints: {
	  620: {
		slidesPerView: 1,
		spaceBetween: 20,
	  },
	  680: {
		slidesPerView: 2,
		spaceBetween: 40,
	  },
	  920: {
		slidesPerView: 3,
		spaceBetween: 40,
	  },
	  1240: {
		slidesPerView: 3,
		spaceBetween: 50,
	  },
	  1500: {
		slidesPerView: 4,
		spaceBetween: 50,
	  },
	} 
    });


	var swiper = new Swiper('.swiper-containerAbout', {
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev'
		},
		slidesPerView: 1,
		spaceBetween: 10,
		loop: true,
		pagination: {
		  el: '.swiper-pagination',
		  clickable: true,
		},
	
	  
		breakpoints: {
		  620: {
			slidesPerView: 1,
			spaceBetween: 20,
		  },
		  680: {
			slidesPerView: 1,
			spaceBetween: 20,
		  },
		  920: {
			slidesPerView: 1,
			spaceBetween: 20,
		  },
		  1240: {
			slidesPerView: 1,
			spaceBetween: 20,
		  },
		} 
		});	


/*

Project - Album

*/		

const images = document.querySelectorAll('.img');
const containerImage = document.querySelector('.container-img');
const imageContainer = document.querySelector('.img-show');

images.forEach(image => {
	image.addEventListener('click', ()=> {

		addImage(image.getAttribute('src'));
	})
})

const addImage = (srcImage)=>{
	containerImage.classList.toggle('move');
	imageContainer.src = srcImage;
	console.log(image.getAttribute('src'));
}

containerImage.addEventListener('click',()=>{
	containerImage.classList.toggle('move');
})

