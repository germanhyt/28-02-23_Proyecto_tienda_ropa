if (document.querySelector(".section-banners-especiales__swiper")) {
  const swiper = new Swiper(".section-banners-especiales__swiper", {
    loop: true,
    speed: 400,
    spaceBetween: 30,
    grabCursor: true,
    autoplay: {
      delay: 2000,
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
    },
  });
  swiper.init();
}

if (document.querySelector(".slider-ofertas__swiper")) {
  const swiper = new Swiper(".slider-ofertas__swiper", {
    loop: true,
    speed: 400,
    spaceBetween: 50,
    grabCursor: true,
    autoplay: {
      delay: 2000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 65,
      },
    },
  });
  swiper.init();
}

if (document.querySelector(".section-morrales-descuento__swiper")) {
  const swiper = new Swiper(".section-morrales-descuento__swiper", {
    loop: true,
    speed: 400,
    spaceBetween: 50,
    grabCursor: true,
    autoplay: {
      delay: 2000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 65,
      },
    },
  });
  swiper.init();
}

if (document.querySelector(".swiper__cardsomos")) {
  const swiper = new Swiper(".swiper__cardsomos", {
    loop: true,
    speed: 400,
    spaceBetween: 50,
    slidesPerView: 1,
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 2000,
    },

    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 65,
      },
    },
  });
  swiper.init();
}

if (document.querySelector(".section-pasos__swiper")) {
  const swiper = new Swiper(".section-pasos__swiper", {
    loop: true,
    speed: 400,
    spaceBetween: 50,
    grabCursor: true,
    autoplay: {
      delay: 2000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 65,
      },
    },
  });
  swiper.init();
}
