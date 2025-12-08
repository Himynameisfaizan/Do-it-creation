import './bootstrap';

// 1. Swiper aur Modules import karein
import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';

// 2. Swiper ki CSS import karein
import 'swiper/css';

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.myLinearSwiper')) {
        const swiper = new Swiper(".myLinearSwiper", {
            modules: [Autoplay],
            
            slidesPerView: "auto",
            spaceBetween: 30,
            loop: true,
            speed: 6000, // 3 seconds linear speed
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: { slidesPerView: 4, spaceBetween: 20 },
                768: { slidesPerView: 4, spaceBetween: 30 },
                1024: { slidesPerView: 6, spaceBetween: 40 },
                1400: { slidesPerView: 7, spaceBetween: 40 },
                1500: { slidesPerView: 7, spaceBetween: 40 },
            },
        });
    }
});