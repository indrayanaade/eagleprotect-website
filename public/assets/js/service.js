$(document).ready(function () {
  AOS.init({
    duration: 1000, // opsional, atur durasi animasi
    once: false,     // animasi hanya muncul sekali
  });
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
      
      // Sticky untuk mobile
      if ($('#navbar-mobile').is(':visible')) {
        if ($(this).scrollTop() > 50) {
          $('#navbar-mobile').addClass('sticky');
        } else {
          $('#navbar-mobile').removeClass('sticky');
        }
      }
    });
  
    const swiper_security = new Swiper('#swiper-security', {
      slidesPerView: 1,
      // spaceBetween: 200,
      pagination: {
        el: '#swiper-security .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '#swiper-security .swiper-button-next',
        prevEl: '#swiper-security .swiper-button-prev',
      },
    });   
    const swiper_security_mobile = new Swiper('#swiper-security-mobile', {
      slidesPerView: 1,
      // spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next-mobile",
        prevEl: ".swiper-button-prev-mobile",
      },
      pagination: {
        el: ".swiper-pagination-mobile",
        type: "fraction",
      }
    });
    
    swiper_security_mobile.on('slideChange', function () {
      const prevButton = document.querySelector('.swiper-button-prev-mobile');
      const nextButton = document.querySelector('.swiper-button-next-mobile');
    
      if (swiper_security_mobile.isBeginning) {
        prevButton.classList.add('disabled');
      } else {
        prevButton.classList.remove('disabled');
      }
    
      if (swiper_security_mobile.isEnd) {
        nextButton.classList.add('disabled');
      } else {
        nextButton.classList.remove('disabled');
      }
    });    
    
    const swiper_legal = new Swiper('#swiper-legal', {
      slidesPerView: 1,
      // spaceBetween: 20,
      pagination: {
        el: '#swiper-legal .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '#swiper-legal .swiper-button-next',
        prevEl: '#swiper-legal .swiper-button-prev',
      }
    });    

    const swiper_legal_mobile = new Swiper('#swiper-legal-mobile', {
      slidesPerView: 1,
      // spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next-mobile",
        prevEl: ".swiper-button-prev-mobile",
      },
      pagination: {
        el: ".swiper-pagination-mobile",
        type: "fraction",
      }
    });

    swiper_legal_mobile.on('slideChange', function () {
      const prevButton = document.querySelector('.swiper-button-prev-mobile');
      const nextButton = document.querySelector('.swiper-button-next-mobile');
    
      if (swiper_legal_mobile.isBeginning) {
        prevButton.classList.add('disabled');
      } else {
        prevButton.classList.remove('disabled');
      }
    
      if (swiper_legal_mobile.isEnd) {
        nextButton.classList.add('disabled');
      } else {
        nextButton.classList.remove('disabled');
      }
    });

    const swiper_healthcare = new Swiper('#swiper-healthcare', {
      slidesPerView: 1,
      // spaceBetween: 20,
      pagination: {
        el: '#swiper-healthcare .swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '#swiper-healthcare .swiper-button-next',
        prevEl: '#swiper-healthcare .swiper-button-prev',
      }
    });

    const swiper_healthcare_mobile = new Swiper('#swiper-healthcare-mobile', {
      slidesPerView: 1,
      // spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next-mobile",
        prevEl: ".swiper-button-prev-mobile",
      },
      pagination: {
        el: ".swiper-pagination-mobile",
        type: "fraction",
      }
    });

    swiper_healthcare_mobile.on('slideChange', function () {
      const prevButton = document.querySelector('.swiper-button-prev-mobile');
      const nextButton = document.querySelector('.swiper-button-next-mobile');
    
      if (swiper_healthcare_mobile.isBeginning) {
        prevButton.classList.add('disabled');
      } else {
        prevButton.classList.remove('disabled');
      }
    
      if (swiper_healthcare_mobile.isEnd) {
        nextButton.classList.add('disabled');
      } else {
        nextButton.classList.remove('disabled');
      }
    });
    
    $(".slide-link").on('click', function(e){
      e.preventDefault();
  
      const id = $(this).data('id');
      const type = $(this).data('type');
  
      $.ajax({
          type: "POST",
          url: base_url + "services/detail",
          data: {
              'id': id,
              'type': type,
              '<?= csrf_token() ?>': '<?= csrf_hash() ?>'
          },
          success: function(response) {
              if (response.redirect) {
                  window.location.href = response.redirect;
              }
          },
          error: function(xhr) {
              console.error("Error:", xhr.status, xhr.responseText);
          }
      });
    });

    $(function() {
      $('.faq-item').on('click', function(e) {
        console.log('FAQ clicked');
        e.preventDefault();
  
        // Tutup semua
        $('.faq-item').not(this).removeClass('active');
  
        // Toggle yang ini
        $(this).toggleClass('active');
      });
    });
});
