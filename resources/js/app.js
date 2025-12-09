import "./bootstrap";

// 1. Swiper aur Modules import karein
import Swiper from "swiper";
import { Autoplay } from "swiper/modules";

// 2. Swiper ki CSS import karein
import "swiper/css";

document.addEventListener("DOMContentLoaded", () => {
    if (document.querySelector(".myLinearSwiper")) {
        const swiper = new Swiper(".myLinearSwiper", {
            modules: [Autoplay],

            slidesPerView: "auto",
            spaceBetween: 30,
            loop: true,
            speed: 5000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: { slidesPerView: 4, spaceBetween: 20 },
                768: { slidesPerView: 4, spaceBetween: 30 },
                1024: { slidesPerView: 7, spaceBetween: 20 },
                1400: { slidesPerView: 8, spaceBetween: 40 },
                1500: { slidesPerView: 8, spaceBetween: 40 },
            },
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    if (document.querySelector(".myLinearSwiper1")) {
        const swiper = new Swiper(".myLinearSwiper1", {
            modules: [Autoplay],

            slidesPerView: "auto",
            spaceBetween: 30,
            loop: true,
            speed: 12000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: { slidesPerView: 4, spaceBetween: 20 },
                768: { slidesPerView: 4, spaceBetween: 30 },
                1024: { slidesPerView: 4, spaceBetween: 20 },
                1400: { slidesPerView: 4, spaceBetween: 40 },
                1500: { slidesPerView: 4, spaceBetween: 40 },
            },
        });
    }
});

document.addEventListener("DOMContentLoaded", () => {
    if (document.querySelector(".myLinearSwiper2")) {
        const swiper = new Swiper(".myLinearSwiper2", {
            modules: [Autoplay],

            slidesPerView: "auto",
            spaceBetween: 30,
            loop: true,
            speed: 12000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                reverseDirection:true,
            },
            breakpoints: {
                640: { slidesPerView: 4, spaceBetween: 20 },
                768: { slidesPerView: 4, spaceBetween: 30 },
                1024: { slidesPerView: 4, spaceBetween: 20 },
                1400: { slidesPerView: 4, spaceBetween: 40 },
                1500: { slidesPerView: 4, spaceBetween: 40 },
            },
        });
    }
});
