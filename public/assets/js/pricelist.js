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
    adjustTabSticky();
    $(window).on('resize', adjustTabSticky);
    
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });    
    const swiper_mobile = new Swiper(".mySwiper-mobile", {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });   

    function filterSlides(category) {
        $('.swiper-slide').each(function () {
            if ($(this).data('category') === category) {
                $(this).css({ visibility: 'visible', position: 'relative' });
            } else {
                $(this).css({ visibility: 'hidden', position: 'absolute' });
            }
        });
    
        swiper.update();
        swiper.slideTo(0);
        swiper_mobile.update();
        swiper_mobile.slideTo(0);
    }
    
    
    // Saat page load, default tampilkan kategori 'private'
    filterSlides('private');
    
    // Sembunyikan semua slide di awal
    $('.package-item').hide();
    
    // Tampilkan hanya yang kategori 'private'
    $('.package-item[data-category="private"]').show();
    
    // Update swiper setelah manipulasi DOM
    swiper.update();
    
    // Filter tombol
    $('.filter-btn').click(function () {
        var category = $(this).data('category');
    
        // Sembunyikan semua
        $('.package-item').hide();
    
        // Tampilkan yang sesuai kategori
        $('.package-item[data-category="' + category + '"]').show();
    
        // Ubah style tombol aktif
        $('.filter-btn').removeClass('btn-filter-hover text-white').addClass('btn-outline-secondary');
        $(this).removeClass('btn-outline-secondary').addClass('btn-filter-hover text-white');
        filterSlides(category);
    });
    
    $('.feature ul').each(function() {
        if ($(this).find('li').length > 10) {
            $(this).addClass('multi-column');
            $(this).closest('.stat-card').addClass('wide-card');
        }
    });
    
    
    
    // AUTO SELECT CATEGORY FROM URL
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    const initialCategory = getQueryParam('category') || 'private';
    $(`.filter-btn[data-category="${initialCategory}"]`).trigger('click');

    $('.filter-btn-mobile').on('click', function () {
        $('.filter-btn-mobile').removeClass('active');
        $(this).addClass('active');
    
        const selectedCategory = $(this).data('category');
    
        $('.package-item-mobile').hide(); 
        $(`.package-item-mobile[data-category-mobile="${selectedCategory}"]`).show(); 
    });
    $(`.filter-btn-mobile[data-category="${initialCategory}"]`).trigger('click');
});

function adjustTabSticky() {
    if ($('#navbar-mobile').is(':visible')) {
        const navbarHeight = $('#navbar-mobile').outerHeight(); 
        $('.tab-sticky').css('top', navbarHeight + 'px');
    } else {
        $('.tab-sticky').css('top', '0');
    }
}
