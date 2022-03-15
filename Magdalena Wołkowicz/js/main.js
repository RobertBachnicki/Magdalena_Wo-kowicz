var swiper = new Swiper(".firm-slider", {
  infinite: true,
  grabCursor: true,
  spaceBetween: 20,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    414: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    950: {
      slidesPerView: 4,
    },
  },
});
