$(document).ready(function () {
    const navbar = $('#navbar');
    const spacer = $('#navbar-spacer');
    const logo = $('#navbar-logo');

    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('#navbar').addClass('sticky');
        navbar.addClass('sticky');
        spacer.show();
      } else {
        $('#navbar').removeClass('sticky');
        navbar.removeClass('sticky');
        spacer.hide();
      }
    });
    // const swiper = new Swiper(".mySwiper", {
    //     slidesPerView: 3,
    //     spaceBetween: 20,
    //     navigation: {
    //       nextEl: ".swiper-button-next",
    //       prevEl: ".swiper-button-prev",
    //     },
    //     pagination: {
    //       el: ".swiper-pagination",
    //       type: "fraction", 
    //     },
    // });
    const swiper_security = new Swiper('#swiper-security', {
      slidesPerView: 3,
      spaceBetween: 20,
      pagination: {
        el: '#swiper-security .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '#swiper-security .swiper-button-next',
        prevEl: '#swiper-security .swiper-button-prev',
      }
    });   
    const swiper_legal = new Swiper('#swiper-legal', {
      slidesPerView: 3,
      spaceBetween: 20,
      pagination: {
        el: '#swiper-legal .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '#swiper-legal .swiper-button-next',
        prevEl: '#swiper-legal .swiper-button-prev',
      }
    });    
    const swiper_healthcare = new Swiper('#swiper-healthcare', {
      slidesPerView: 3,
      spaceBetween: 20,
      pagination: {
        el: '#swiper-healthcare .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '#swiper-healthcare .swiper-button-next',
        prevEl: '#swiper-healthcare .swiper-button-prev',
      }
    });
});