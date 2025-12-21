// Swiper initialization
document.addEventListener('DOMContentLoaded', () => {
  // Reviews Swiper
  const reviewsSwiper = new window.Swiper('.reviews__swiper', {
    modules: [window.SwiperModules.Navigation, window.SwiperModules.Pagination, window.SwiperModules.Autoplay],
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.reviews__pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.reviews__button-next',
      prevEl: '.reviews__button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
    },
  });

  // Examples Swiper
  const examplesSwiper = new window.Swiper('.examples__swiper', {
    modules: [window.SwiperModules.Navigation, window.SwiperModules.Pagination],
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
      el: '.examples__pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.examples__button-next',
      prevEl: '.examples__button-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1440: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
  });

  // Product Gallery Swiper with Thumbnails
  const productThumbsSwiper = document.querySelector('.product-gallery__thumbs');
  const productMainSwiper = document.querySelector('.product-gallery__main');
  
  if (productThumbsSwiper && productMainSwiper) {
    const thumbsSwiper = new window.Swiper('.product-gallery__thumbs', {
      modules: [window.SwiperModules.Navigation],
      spaceBetween: 5,
      slidesPerView: 6,
      navigation: {
        nextEl: '.product-gallery .swiper-button-next',
        prevEl: '.product-gallery .swiper-button-prev',
      },
    });

    const mainSwiper = new window.Swiper('.product-gallery__main', {
      modules: [window.SwiperModules.Thumbs],
      spaceBetween: 10,
      thumbs: {
        swiper: thumbsSwiper,
      },
    });
  }
});
