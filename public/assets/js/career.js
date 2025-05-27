$(document).ready(function () {
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

    let allPositions = [];

    // 1. Ambil data awal dari server
    $.getJSON('/careers/data', function (data) {
      allPositions = data;
      renderPositions(allPositions);
      setupAutocomplete(allPositions);
    });
  
    // 2. Event filter live
    $('#searchKeyword, #typeFilter').on('input change', function () {
      const keyword = $('#searchKeyword').val().toLowerCase();
      const type = $('#typeFilter').val();
  
      const filtered = allPositions.filter(pos => {
        const matchKeyword = pos.title.toLowerCase().includes(keyword) || pos.excerpt.toLowerCase().includes(keyword);
        const matchType = type === '' || pos.type === type;
        return matchKeyword && matchType;
      });
  
      renderPositions(filtered);
    });
});

// 3. Render hasil ke DOM
function renderPositions(data) {
    const container = $('#careerResults');
  
    if (data.length === 0) {
      container.hide().html(''); // ✅ sembunyikan jika kosong
      return;
    }
  
    container.show().html(''); // ✅ tampilkan saat ada data
  
    data.forEach(job => {
      container.append(`
        <div class="col-md-4 mb-4">
            <div class="card-position p-4 bg-white shadow-sm rounded-4 h-100">
                <h5 class="job-title mb-1">${job.title}</h5>
                <div class="job-meta small text-muted mb-3">
                    <div class="mb-3"><span class="text-job-type">${job.type}</span> • <span class="txt_upload">Uploaded: ${formatDate(job.published_at)}</span></div>
                </div>
                <p class="job-description small text-muted">${job.excerpt}</p>
                <ul class="job-list small text-muted mb-3 ps-3">
                    <li>Curriculum Vitae</li>
                    <li>Personal data</li>
                </ul>
                <div class="justify-content-between align-items-center mt-auto">
                    <div class="deadline d-flex align-items-center gap-1">
                    <i class="bi bi-clock"></i>
                    Deadline: ${formatDate(job.deadline)}
                    </div>
                    <a href="/careers/detail/${job.slug}" class="btn-read mt-3 px-4"><span class="txt_read">Read More</span></a>
                </div>
            </div>
        </div>
      `);
    });
}  

// 4. Format tanggal
function formatDate(dateStr) {
    const date = new Date(dateStr);
    return date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
}

// 5. Autocomplete untuk input search
function setupAutocomplete(data) {
    const keywords = [...new Set(data.map(job => job.title.toLowerCase()))];
  
    $('#searchKeyword').autocomplete({
      minLength: 1,
      source: function (request, response) {
        const term = request.term.toLowerCase();
        const filtered = keywords.filter(title => title.includes(term));
  
        if (filtered.length) {
          $('#autocompleteMessage').hide(); 
          response(filtered);
        } else {
          $('#autocompleteMessage').show(); 
        }
      },
      select: function (event) {
        $('#autocompleteMessage').hide();
        event.preventDefault(); 
      },
      close: function () {
        $('#autocompleteMessage').hide();
      }
    });
}
  
  
  
  
    
    