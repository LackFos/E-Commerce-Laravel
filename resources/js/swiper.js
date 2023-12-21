import Swiper from 'swiper/bundle';
document.addEventListener('DOMContentLoaded', (event) => {
    const nextButton = document.querySelector('.swiper-button-next');
    const prevButton = document.querySelector('.swiper-button-prev');

    if (nextButton) {
        nextButton.addEventListener('click', () => {
            console.log('Next button clicked');
        });
    }

    if (prevButton) {
        prevButton.addEventListener('click', () => {
            console.log('Previous button clicked');
        });
    }

    const swiperFlashSale = new Swiper('.swiper-flash-sale', {
        // Optional parameters
        direction: 'horizontal',

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next-fs',
            prevEl: '.swiper-button-prev-fs',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
    const swiperBanner = new Swiper('.swiper-banner', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
});
