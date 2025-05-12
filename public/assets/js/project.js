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
      
      // Sticky untuk mobile
      if ($('#navbar-mobile').is(':visible')) {
        if ($(this).scrollTop() > 50) {
          $('#navbar-mobile').addClass('sticky');
        } else {
          $('#navbar-mobile').removeClass('sticky');
        }
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

