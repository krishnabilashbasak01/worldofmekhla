// swiper js
const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
var swiper = new Swiper(".mySwiper", {
  loop: true,
  //   spaceBetween: 10,
  //   slidesPerView: 4,
  //   freeMode: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  watchSlidesProgress: true,
  thumbs: {
    swiper: swiper,
  },
  keyboard: {
    enabled: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  on: {
    autoplayTimeLeft(s, time, progress) {
      progressCircle.style.setProperty("--progress", 1 - progress);
      progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    },
  },
});
// var swiper2 = new Swiper('.mySwiper', {
//     loop: true,
//     spaceBetween: 10,
//     navigation:{
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
//     thumbs:{
//         swiper: swiper,
//     }
// });

// var swiper = new Swiper(".mySwiper", {});
