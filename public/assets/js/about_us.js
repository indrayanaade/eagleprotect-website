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
});
