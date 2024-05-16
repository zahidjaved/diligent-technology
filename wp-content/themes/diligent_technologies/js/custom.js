jQuery(function ($) {
  "use strict";

  mobileMenu("#mobile__menu", "#mobile__menu--button");

  const videoGallerySwiper = new Swiper(".swiper.video__gallery--slider", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      767: {
        spaceBetween: 50,
        slidesPerView: 2,
      },
      991: {
        spaceBetween: 80,
        slidesPerView: 2,
      },
      1200: {
        spaceBetween: 155,
        slidesPerView: 2,
      },
    },
  });

  // Get the number of slides
  let videoGallerySlides = videoGallerySwiper.slides.length;

  // Update the Swiper options if the number of slides is less than or equal to 3
  if (videoGallerySlides <= 3) {
    videoGallerySwiper.params.loop = false;

    // Update Swiper with the new settings
    videoGallerySwiper.update();
  }

  const testimonialsSwiper = new Swiper(".swiper.testimonials__slider", {
    // Optional parameters
    loop: true,
    spaceBetween: 50,
    centeredSlides: true,

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      767: {
        spaceBetween: 10,
        slidesPerView: 2,
        centerMode: true,
      },
      991: {
        spaceBetween: 30,
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });
});

function mobileMenu(menu, button) {
  jQuery(button).on("click", function () {
    jQuery(button).stop().toggleClass("open");
    jQuery(menu).stop().slideToggle(500);
    jQuery("body, html").stop().toggleClass("overflow-hidden");
  });

  jQuery(menu + " .menu-item-has-children > a").on("click", function (e) {
    e.preventDefault();
    jQuery(this)
      .parent()
      .toggleClass("active")
      .find(".sub-menu")
      .stop()
      .slideToggle(300);
  });
}


// gsap timeline animation js

const slider = document.querySelector(".slider");
const progressLine = document.querySelector(".progress-line");
const progressCircle = document.querySelector(".progress-circle");
const panels = document.querySelectorAll(".panel");

const tl = gsap.timeline({
  defaults: {
    ease: "none",
  },
  scrollTrigger: {
    trigger: ".section-staff-augmentation",
    pin: true,
    start: "top top",
    end: () => `+=${slider.clientWidth - window.innerWidth}`,
    scrub: 1,
    onUpdate: updateProgress,
  },
});

tl.to(".slider", {
  x: () => `-${slider.clientWidth - window.innerWidth}`,
});

function updateProgress() {
  const progress =
    gsap.getProperty(".slider", "x") /
    -(slider.clientWidth - window.innerWidth);
  const progressWidth = Math.max(0, Math.min(1, progress)); // Ensure progress is between 0 and 1
  const circlePosition = progressWidth * progressLine.offsetWidth;

  gsap.set(progressLine, { scaleX: progressWidth }); // Scale the progress line width
  gsap.set(progressCircle, { left: circlePosition });
}

gsap.set(progressLine, { transformOrigin: "left center" }); // Ensure transform origin is set
