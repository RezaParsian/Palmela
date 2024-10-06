import './bootstrap';

import Swiper from 'swiper';
import {Autoplay, Navigation, Pagination} from 'swiper/modules';
import '../../node_modules/swiper/swiper.min.css';

Swiper.use([Autoplay, Pagination, Navigation]);

document.getElementById('offCanvasMenuBtn').addEventListener('click', function () {
    document.getElementById('offCanvas').style.width = '100vw';
});

document.getElementById('offCanvasCloseMenuBtn').addEventListener('click', function () {
    document.getElementById('offCanvas').style.width = '0vw'
});


window.addEventListener('load', function () {
    new Swiper('#swiper_brands', {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 2500,
            pauseOnMouseEnter: true
        },
        breakpoints: {
            300: {
                slidesPerView: 2,
            },
            800:{
                slidesPerView: 6,

            }
        }
    });


    new Swiper('#swiper_solutions', {
        loop: true,
        spaceBetween: 40,
        autoplay: {
            delay: 2500,
            pauseOnMouseEnter: true
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
            },
            800:{
                slidesPerView: 3.4,

            }
        }
    });

    new Swiper('#swiper_testimonial', {
        loop: true,
        slidesPerView: 1.8,
        spaceBetween: 40,
        autoplay: {
            delay: 4000,
            pauseOnMouseEnter: true
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
            },
            800:{
                slidesPerView: 1.8,

            }
        },
        pagination: {
            el: "#swiper_testimonial_pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (String(index + 1).padStart(2, 0)) + "</span>";
            },
        },
        navigation: {
            nextEl: "#swiper_testimonial_swiper_button_next",
            prevEl: "#swiper_testimonial_swiper_button_prev",
        },
    });

    window.addEventListener('scroll', event => {
        const height = 150;
        const { scrollTop } = event.target.scrollingElement;
        document.querySelector('#navbar').classList.toggle('is-sticky', scrollTop >= height);
    });
});
