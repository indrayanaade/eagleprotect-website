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

    $('#message').on('input', function () {
        const remaining = maxChars - $(this).val().length;
        $('#charCount').text(remaining + ' characters remaining');
    });

    $('#phone').on('input', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    const maxChars = 500;
    
    $('#contactForm').on('submit', function (e) {
      e.preventDefault();
    
      const form = $(this);
      const data = form.serializeArray();
      const csrfTokenName = $('meta[name^="csrf_"]').attr('name');
      const csrfHash = $('meta[name^="csrf_"]').attr('content');
    
      if (csrfTokenName && csrfHash) {
        data.push({ name: csrfTokenName, value: csrfHash });
      }
    
      const btn = $('#btn-send');
      btn.prop('disabled', true);
      btn.find('.spinner').show();
      btn.find('.btn-text').text('Sending...');
    
      $.ajax({
        type: "POST",
        url: base_url + "contact_us/submit",
        data: $.param(data),
        dataType: "json",
        success: function (response) {
          if (response.status === 'success') {
            $('#form-response').html('<p style="color:green;">' + response.message + '</p>');
            setTimeout(() => {
              window.location.href = base_url;
            }, 2000); // Delay 2 detik
          } else {
            $('#form-response').html('<p style="color:red;">' + message + '</p>');
          }
          // $('#form-response').html('<p style="color:green;">' + response.message + '</p>');
          form[0].reset();
        },
        error: function (xhr) {
          let message = 'Failed to send message. Please try again.';
          if (xhr.responseJSON && xhr.responseJSON.errors) {
            message = Object.values(xhr.responseJSON.errors).join('<br>');
          } else if (xhr.responseJSON && xhr.responseJSON.message) {
            message = xhr.responseJSON.message;
          }
          $('#form-response').html('<p style="color:red;">' + response.message + '</p>');
        },
        complete: function () {
          btn.prop('disabled', false);
          btn.find('.spinner').hide();
          btn.find('.btn-text').text('SEND');
        }
      });
    });

    // Simpan referensi elemen dan parent aslinya
    var $mapWrapper = $('#map-wrapper');
    var $originalParent = $mapWrapper.parent();
    var $targetParent = $('.map-container');  // elemen tujuan pindah

    function pindahMapWrapper() {
      var lebarLayar = $(window).width();

      if (lebarLayar <= 430) {
        // Pindah #map-wrapper ke target jika belum ada di sana
        if (!$mapWrapper.parent().is($targetParent)) {
          $mapWrapper.appendTo($targetParent);
        }
      } else {
        // Balikkan ke parent asal jika belum di sana
        if (!$mapWrapper.parent().is($originalParent)) {
          $mapWrapper.appendTo($originalParent);
        }
      }
    }

    // Panggil saat halaman siap dan saat resize
    pindahMapWrapper();
    $(window).resize(pindahMapWrapper);
  
});

