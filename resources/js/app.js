import "./bootstrap";
import Swiper from "swiper/bundle";

// import Alpine from "alpinejs";

// window.Alpine = Alpine;

// Alpine.start();

let swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1180: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
    navigation: {
        el: ".swiper-buttons",
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
});
