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
  
        // Atur logo tergantung halaman
        if (currentPath.startsWith('/projects/view/')) {
          $navbarLogo.attr('src', blackLogo); // Di halaman detail -> logo putih saat sticky
        } else if (currentPath.startsWith('/projects')) {
          $navbarLogo.attr('src', whiteLogo); // Di halaman utama projects -> logo hitam saat sticky
        }
  
      } else {
        $navbar.removeClass('sticky');
        $spacer.hide();
  
        // Saat tidak sticky, bisa kembalikan ke default
        if (currentPath.startsWith('/projects/view/')) {
          $navbarLogo.attr('src', blackLogo); // Tetap putih di halaman detail
        } else {
          $navbarLogo.attr('src', whiteLogo); // Tetap hitam di halaman list
        }
      }
    }
  
    // Sticky untuk mobile
    if ($navbarMobile.is(':visible')) {
      $navbarMobile.toggleClass('sticky', isScrolled);
    }
  });
  
    

    $(".program-card").on('click', function(e){
      e.preventDefault();
  
      const id = $(this).data('id');
      const csrfTokenName = $('meta[name="csrf-token"]').attr('content');
      const csrfHash = $('meta[name="csrf-hash"]').attr('content');
  
      $.ajax({
          type: "POST",
          url: base_url + "projects/detail",
          data: {
              id: id,
              [csrfTokenName]: csrfHash
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
    
});

