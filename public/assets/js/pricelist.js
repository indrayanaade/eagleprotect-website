$(document).ready(function () {
    
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    
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
        $('.filter-btn').removeClass('btn-danger').addClass('btn-outline-secondary');
        $(this).removeClass('btn-outline-secondary').addClass('btn-danger');
    
        // Update Swiper
        swiper.update();
        swiper.slideTo(0); // balik ke slide pertama
    });
    
    
    // AUTO SELECT CATEGORY FROM URL
    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    const initialCategory = getQueryParam('category') || 'private';
    $(`.filter-btn[data-category="${initialCategory}"]`).trigger('click');
});
