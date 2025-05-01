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
            $(this).closest('.stat-card').addClass('wide-card mt-3');
        }
    });
    $('.package-item[data-category="corporate"] .special-offer-banner').css({
        'background-color': 'var(--Warning-Color, #FC0)',
        'color': '#030303',
        'padding': '10px',
        'height': '25px',
        'display': 'flex',
        'align-items': 'center',
        'justify-content': 'center',
        'overflow': 'visible',
        'white-space': 'normal',
        'text-align': 'center'
    });
    $('.package-item[data-category="corporate"] .price h5').each(function() {
        if ($(this).text().trim() === 'CUSTOM CORPORATE START FROM') {
            $(this).closest('.stat-card').addClass('wide-card mt-3');
        }
    });  
    $('.package-item[data-category="tourist_property"] .price h5').each(function() {
        $(this).closest('.stat-card').addClass('wide-card mt-3');
    });    
    $('.package-item[data-category="by_request"]').each(function() {
        var $statCard = $(this).find('.stat-card');

        var $specialOffer = $statCard.find('.card-offer');
        var $imgFeature = $statCard.find('.img-feature');
        var $btnWaiting = $statCard.find('.btn-wrapper');
        var $cardPrice = $statCard.find('.card-price');

        if ($specialOffer.length && $cardPrice.length) {
            // Pindahkan .card-offer setelah .card-price
            $specialOffer.insertAfter($cardPrice);
        }
        var titleText = $(this).find('input.utilities').val()?.trim();
        console.log('Title text:', titleText);

        if (titleText === 'CYBERSECURITY') {
            if ($imgFeature.length && $btnWaiting.length) {
                // Pindahkan .btn-wrapper setelah .img-feature
                $btnWaiting.insertAfter($imgFeature);
            }
        }
    });
    $('.package-item[data-category="by_request"] .special-offer-banner').css({
        'height': '30px',
        'display': 'flex',
        'align-items': 'center',
        'justify-content': 'center',
        'overflow': 'visible',
        'white-space': 'normal',
        'text-align': 'center'
    });
    $('.package-item[data-category="by_request"] .card-price').css({
        'height': '150px'
    });
    $('.package-item[data-category="by_request"] .txt_utilities').each(function() {
        if ($(this).text().trim() === 'PERSON OF INTEREST PACKET') {
            $('.txt_utilities').css({
                'font-size': '25px',
            });
        }
    });  
    $('.package-item[data-category="by_request"] .idr').each(function() {
        if ($(this).text().trim() !== '') {
            $(this).css({
                'font-size': '20px'
            });
        }
    });
    $('.package-item[data-category="by_request"] .txt_feature').each(function() {
        $(this).css({
            'text-align':'center'
        })
    });
    $('.package-item-mobile[data-category-mobile="by_request"] .txt_feature_mobile').each(function() {
        $(this).css({
            'text-align':'center'
        })
    });
    $('.package-item[data-category="by_request"] i.fas.fa-check-circle').remove();
    $('.package-item-mobile[data-category-mobile="by_request"] i.fas.fa-check-circle').remove();

    // $('.package-item[data-category="corporate"] .card-price').each(function() {
    //     const utilities = $(this).find('.txt_utilities').text().trim();
    //     if (utilities === 'BY REQUEST ADD-ONS') {
    //         $(this).find('small.text-muted').remove();
    //     }
    // });
     
    
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
