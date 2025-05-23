$(document).ready(function () {
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
      
});

let currentPage = 1;
let currentCategory = 'all';

function loadNews() {
  const excludedSlug = $('.news-related').data('exclude') || '';

  $.ajax({
    url: `${base_url}news_room/fetch`,
    method: 'GET',
    data: {
      page: currentPage,
      excluded_slug: excludedSlug,
      category: currentCategory,
    },
    success: function(response) {
      $('#cards-container').html('');
      $('#pageIndicator').text(response.current_page);

      // Tampilkan berita jika ada
      if (response.data.length > 0) {
        response.data.forEach(item => {
          $('#cards-container').append(`
            <div class="card" data-slug="${item.slug}">
              <img class="news-image" src="${base_url}assets/img/news/${item.thumbnail}" alt="News Image">
              <div class="card-body">
                <p class="meta"><span class="tag">${item.category_name}</span> • ${item.published_at}</p>
                <h3>${item.title}</h3>
                <p>${item.excerpt}</p>
              </div>
            </div>
          `);
        });
      } else {
        $('#cards-container').html('<p class="text-center text-muted">No news available.</p>');
      }

      // ✅ Atur status tombol pagination
      $('#prevPage').prop('disabled', response.current_page <= 1);
      $('#nextPage').prop('disabled', response.current_page >= response.total_pages || response.total_pages === 0);
    }
  });
}

  
  