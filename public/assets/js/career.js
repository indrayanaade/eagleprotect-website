$(document).ready(function () {
    AOS.init({
        duration: 1000, // opsional, atur durasi animasi
        once: false,     // animasi hanya muncul sekali
    });
    const blackLogo = base_url + 'assets/img/eagle-logo-img-black.svg';
    const whiteLogo = base_url + 'assets/img/eagle-logo-img-white.svg';
    
    const $navbar = $('#navbar');
    const $navbarLogo = $('#navbar-logo');
    const $spacer = $('#navbar-spacer-detail');
    const $navbarMobile = $('#navbar-mobile');
  
    const $container = $('#careerResults');
    const $prevBtn = $('#prevPage');
    const $nextBtn = $('#nextPage');
    const $pageIndicator = $('#pageIndicator');
  
    let allPositions = [];
    let filteredPositions = [];
    let currentPage = 1;
    const itemsPerPage = 6;
  
    // Navbar scroll
    $(window).scroll(function () {
      const isScrolled = $(this).scrollTop() > 50;
      if ($navbar.length && $navbarLogo.length) {
        $navbar.toggleClass('sticky', isScrolled);
        $spacer.toggle(isScrolled);
        $navbarLogo.attr('src', blackLogo);
      }
      $navbarMobile.toggleClass('sticky', isScrolled);
    });
  
    // Ambil data awal
    $.getJSON('/careers/data', function (data) {
      allPositions = data;
      filteredPositions = data;
      renderPaginatedPositions(filteredPositions);
      setupAutocomplete(data);
    });
  
    // Event filter
    $('#searchKeyword, #typeFilter').on('input change', function () {
      const keyword = $('#searchKeyword').val().toLowerCase();
      const type = $('#typeFilter').val();
  
      filteredPositions = allPositions.filter(pos => {
        const matchKeyword = pos.title.toLowerCase().includes(keyword) || pos.excerpt.toLowerCase().includes(keyword);
        const matchType = type === '' || pos.type === type;
        return matchKeyword && matchType;
      });
  
      currentPage = 1;
      renderPaginatedPositions(filteredPositions);
    });
  
    // Pagination control
    $prevBtn.on('click', function () {
      if (currentPage > 1) {
        currentPage--;
        renderPaginatedPositions(filteredPositions);
      }
    });
  
    $nextBtn.on('click', function () {
      const totalPages = Math.ceil(filteredPositions.length / itemsPerPage);
      if (currentPage < totalPages) {
        currentPage++;
        renderPaginatedPositions(filteredPositions);
      }
    });
  
    // Render function with pagination
    function renderPaginatedPositions(data) {
        const totalPages = Math.ceil(data.length / itemsPerPage);
        const start = (currentPage - 1) * itemsPerPage;
        const pageData = data.slice(start, start + itemsPerPage);
      
        const $container = $('#careerResults');
        const $pagination = $('#paginationWrapper');
      
        $container.html('');
      
        if (pageData.length === 0) {
          $container.hide();         // sembunyikan kontainer
          $pagination.hide();        // sembunyikan pagination
          return;
        }
      
        $container.show();
        $pagination.show();          // tampilkan pagination kalau ada data
      
        pageData.forEach(job => {
          $container.append(`
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
      
        // Pagination update
        $('#pageIndicator').text(`Page ${currentPage}`);
        $('#prevPage').prop('disabled', currentPage <= 1);
        $('#nextPage').prop('disabled', currentPage >= totalPages);
    }
      
  
    // Format tanggal
    function formatDate(dateStr) {
      const date = new Date(dateStr);
      return date.toLocaleDateString('en-US', {
        month: 'short',
        day: 'numeric',
        year: 'numeric'
      });
    }
  
    // Autocomplete
    function setupAutocomplete(data) {
      const keywords = [...new Set(data.map(job => job.title.toLowerCase()))];
      $('#searchKeyword').autocomplete({
        minLength: 1,
        source: function (request, response) {
          const term = request.term.toLowerCase();
          const filtered = keywords.filter(title => title.includes(term));
          $('#autocompleteMessage').toggle(filtered.length === 0);
          response(filtered);
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
});
  