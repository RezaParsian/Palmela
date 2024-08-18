import Swiper from 'swiper';
import {Autoplay} from 'swiper/modules';
import '../../node_modules/swiper/swiper.min.css';

Swiper.use([Autoplay]);

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
