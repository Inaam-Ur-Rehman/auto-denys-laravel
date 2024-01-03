import "./bootstrap";
import Swiper from "swiper/bundle";

// import Alpine from "alpinejs";

// // window.Alpine = Alpine;

// // Alpine.start();

// let swiper = new Swiper(".mySwiper", {
//     slidesPerView: 1,
//     spaceBetween: 30,
//     breakpoints: {
//         640: {
//             slidesPerView: 2,
//             spaceBetween: 20,
//         },
//         768: {
//             slidesPerView: 3,
//             spaceBetween: 40,
//         },
//         1180: {
//             slidesPerView: 4,
//             spaceBetween: 50,
//         },
//     },
//     navigation: {
//         el: ".swiper-buttons",
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
//     loop: true,
// });

$(document).ready(function () {
    $(".slick").slick({
        infinite: true,
        slidesToShow: 4,
        centerPadding: "60px",
        slidesToScroll: 1,
        arrows: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1240,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },

            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
        nextArrow: $(".next"),
        prevArrow: $(".prev"),
    });

    $(".slider-for").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false,
        fade: true,
        asNavFor: ".slider-nav",
    });
    $(".slider-nav").slick({
        asNavFor: ".slider-for",
        infinite: true,
        dots: true,
        focusOnSelect: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1240,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },

            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ],
    });
});
