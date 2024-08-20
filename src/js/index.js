import Swiper from 'swiper';
import {Autoplay, Navigation, Pagination} from 'swiper/modules';
import '../../node_modules/swiper/swiper.min.css';

Swiper.use([Autoplay,Pagination,Navigation]);

new Swiper('#swiper_brands', {
	loop: true,
	slidesPerView: 6,
	spaceBetween: 30,
	autoplay: {
		delay: 2500,
		pauseOnMouseEnter:true
	},
});


new Swiper('#swiper_solutions', {
	loop: true,
	slidesPerView: 3.4,
	spaceBetween:40,
	autoplay: {
		delay: 2500,
		pauseOnMouseEnter:true
	},
});

new Swiper('#swiper_testimonial', {
	loop: true,
	slidesPerView: 1.8,
	spaceBetween:40,
	autoplay: {
		delay: 4000,
		pauseOnMouseEnter:true
	},
	pagination: {
		el: "#swiper_testimonial_pagination",
		clickable: true,
		renderBullet: function (index, className) {
				return '<span class="' + className + '">' + (String(index + 1).padStart(2,0)) + "</span>";
		},
	},
	navigation: {
		nextEl: "#swiper_testimonial_swiper_button_next",
		prevEl: "#swiper_testimonial_swiper_button_prev",
	},
});
