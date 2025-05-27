$(document).ready(function () {
  AOS.init({
    duration: 1000, // opsional, atur durasi animasi
    once: false,     // animasi hanya muncul sekali
  });
  loadNews();
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

    if ($navbarMobile.is(':visible')) {
      $navbarMobile.toggleClass('sticky', isScrolled);
    }
  });

  $('.category').on('click', function() {
    $('.category').removeClass('active');
    $(this).addClass('active');
    currentCategory = $(this).data('category');
    currentPage = 1;
    loadNews();
  });

  $('.category-mobile').on('click', function() {
    $('.category-mobile').removeClass('active');
    $(this).addClass('active');
    currentCategory = $(this).data('category');
    currentPage = 1;
    loadNews();
  });  

  $('#prevPage').on('click', function() {
    if (currentPage > 1) {
      currentPage--;
      loadNews();
    }
  });

  $('#nextPage').on('click', function() {
    currentPage++;
    loadNews();
  });

  $('#cards-container').off('click', '.card[data-slug]').on('click', '.card[data-slug]', function () {
    const slug = $(this).data('slug');
  
    $.ajax({
      url: `${base_url}news_room/detail/view/${slug}`,
      method: 'GET',
      success: function (html) {
        window.location.href = `${base_url}news_room/detail/view/${slug}`;
      },
      error: function () {
        alert('Failed to load news detail.');
      }
    });
  });  

  $('#cards-container-mobile').off('click', '.card[data-slug]').on('click', '.card[data-slug]', function () {
    const slug = $(this).data('slug');
  
    $.ajax({
      url: `${base_url}news_room/detail/view/${slug}`,
      method: 'GET',
      success: function (html) {
        window.location.href = `${base_url}news_room/detail/view/${slug}`;
      },
      error: function () {
        alert('Failed to load news detail.');
      }
    });
  }); 
      
});

let currentPage = 1;
let currentCategory = 'all';

function loadNews() {
  const isMobile = window.innerWidth <= 430;
  const targetContainer = isMobile ? '#cards-container-mobile' : '#cards-container';
  const excludedSlug = isMobile
    ? $('.news-related-mobile').data('exclude')
    : $('.news-related').data('exclude');

  $.ajax({
    url: `${base_url}news_room/fetch`,
    method: 'GET',
    data: {
      page: currentPage,
      excluded_slug: excludedSlug,
      category: currentCategory,
    },
    success: function(response) {
      $(targetContainer).html('');
      $('#pageIndicator').text(response.current_page);

      if (response.data.length > 0) {
        response.data.forEach(item => {
          $(targetContainer).append(`
            <div class="card" data-slug="${item.slug}">
              <img class="news-image" src="${base_url}assets/img/news/${item.thumbnail}" alt="News Image">
              <div class="card-body">
                <p class="meta"><span class="tag">${item.category_name}</span> • <span class="text-publish">${item.published_at}</span></p>
                <h3>${item.title}</h3>
                <p class="text-excerpt">${item.excerpt}</p>
              </div>
            </div>
          `);
        });
      } else {
        $(targetContainer).html('<p class="text-center text-muted">No news available.</p>');
      }

      // ✅ Layout 1 kolom jika hanya 1 data
      if (response.data.length === 1) {
        $(targetContainer).addClass('single-card');
      } else {
        $(targetContainer).removeClass('single-card');
      }

      // ✅ Tampilkan atau sembunyikan pagination
      if (response.total_pages > 1) {
        $('.pagination').show();
      } else {
        $('.pagination').hide();
      }

      $('#prevPage').prop('disabled', response.current_page <= 1);
      $('#nextPage').prop('disabled', response.current_page >= response.total_pages || response.total_pages === 0);
      $('#prevPageMobile').prop('disabled', response.current_page <= 1);
      $('#nextPageMobile').prop('disabled', response.current_page >= response.total_pages || response.total_pages === 0);
    }
  });
}


  
  