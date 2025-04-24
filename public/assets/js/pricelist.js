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
    
    const swiper = new Swiper(".mySwiper", {
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
});
