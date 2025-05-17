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

    $('#contactForm').on('submit', function (e) {
      e.preventDefault();
  
      const form = $(this);
      const data = form.serializeArray();
  
      const csrfTokenName = $('meta[name="csrf-token"]').attr('content');
      const csrfHash = $('meta[name="csrf-hash"]').attr('content');
  
      if (csrfTokenName && csrfHash) {
          data.push({ name: csrfTokenName, value: csrfHash });
      }
  
      $.ajax({
          type: "POST",
          url: base_url + "contact_us/submit",
          data: $.param(data),
          dataType: "json",
          success: function (response) {
              $('#form-response').html('<p style="color:green;">' + response.message + '</p>');
              form[0].reset();
          },
          error: function (xhr) {
              let message = 'Failed to send message. Please try again.';
              if (xhr.responseJSON && xhr.responseJSON.errors) {
                  message = Object.values(xhr.responseJSON.errors).join('<br>');
              } else if (xhr.responseJSON && xhr.responseJSON.message) {
                  message = xhr.responseJSON.message;
              }
              $('#form-response').html('<p style="color:red;">' + message + '</p>');
          }
      });
    });
});