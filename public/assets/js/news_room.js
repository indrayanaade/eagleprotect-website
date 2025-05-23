$(document).ready(function () {
    const blackLogo = base_url + 'assets/img/eagle-logo-img-black.svg';
    const whiteLogo = base_url + 'assets/img/eagle-logo-img-white.svg';
    
    const $navbar = $('#navbar');
    const $navbarLogo = $('#navbar-logo');
    const $spacer = $('#navbar-spacer-detail');
    const $navbarMobile = $('#navbar-mobile');
    
    // Ambil path dari URL saat ini
    const currentPath = window.location.pathname;
    
    $(window).scroll(function () {
      const isScrolled = $(this).scrollTop() > 50;
    
      // Cek jika navbar dan logo ada
      if ($navbar.length && $navbarLogo.length) {
        if (isScrolled) {
          $navbar.addClass('sticky');
          $spacer.show();
          $navbarLogo.attr('src', blackLogo);
    
        } else {
          $navbar.removeClass('sticky');
          $spacer.hide();
          $navbarLogo.attr('src', blackLogo);
        }
      }
    
      // Sticky untuk mobile
      if ($navbarMobile.is(':visible')) {
        $navbarMobile.toggleClass('sticky', isScrolled);
      }
    });
      
  });
  
  