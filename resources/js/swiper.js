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

const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
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