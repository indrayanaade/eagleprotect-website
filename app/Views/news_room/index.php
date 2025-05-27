<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<?php $uri = service('uri'); ?>

<div class="only-desktop">
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark custom-navbar-detail">
      <div class="container-fluid">
          <a class="navbar-brand ps-5 fw-bold" href="<?= base_url('/') ?>"><img id="navbar-logo" src="<?= base_url('assets/img/eagle-logo-img-black.svg') ?>"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="mainNavbar">
              <ul class="navbar-nav ms-auto text-end">
                  <li class="nav-item px-2">
                      <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'about_us' ? 'active' : '' ?>" href="<?= base_url('about_us') ?>"><span class="txt_nav">ABOUT US</span></a>
                  </li>
                  <li class="nav-item px-2 ">
                      <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'pricelist' ? 'active' : '' ?>" href="<?= base_url('pricelist') ?>"><span class="txt_nav">PRICELIST</span></a>
                  </li>
                  <li class="nav-item px-2">
                      <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'services' ? 'active' : '' ?>" href="<?= base_url('services') ?>"><span class="txt_nav">SERVICES</span></a>
                  </li>
                  <li class="nav-item px-2">
                      <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'projects' ? 'active' : '' ?>" href="<?= base_url('projects') ?>"><span class="txt_nav">PROJECTS</span></a>
                  </li>
                  <li class="nav-item px-2">
                      <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'news_room' ? 'active' : '' ?>" href="<?= base_url('news_room') ?>"><span class="txt_nav">NEWS ROOM</span></a>
                  </li>
                  <li class="nav-item px-2">
                      <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'careers' ? 'active' : '' ?>" href="<?= base_url('careers') ?>"><span class="txt_nav">CAREERS</span></a>
                  </li>
                  <li class="nav-item px-2">
                      <button class="btn contact-btn" onclick="location.href='<?= base_url('contact_us') ?>'"><p class="txt_nav m-0">CONTACT US</p></button>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  
  <section class="py-5 bg-white headline-section" data-aos="fade-up">
    <div class="container-fluid">
      <h2 class="display-5 mb-2 text-header">Our Newsroom</h2>
      <p class="text-quotes mb-5">Stay informed with the latest updates, insights, and stories from Eagle Protect. We bring you timely news on safety, innovation, and the people behind our mission to protect what matters most.</p>
  
      <?php if ($headline): ?>
      <a href="<?= base_url('news_room/detail/view/' . $headline->slug) ?>" class="text-decoration-none text-dark">
        <div class="card headline-card border-0 shadow-sm rounded-4 overflow-hidden">
          <div class="row g-0 align-items-stretch">
            <!-- Left Content -->
            <div class="col-lg-6 p-5 d-flex flex-column justify-content-between headline-desc">
              <div>
                <span class="text-category text-uppercase"><?= esc($headline->category_name) ?></span>
                <h3 class="mt-2 mb-3 text-title"><?= esc($headline->title) ?></h3>
                <p class="text-excerpt mb-0">
                  <?= esc($headline->excerpt) ?>
                </p>
              </div>
              <div class="mt-4">
                <small class="text-publish"><?= date('F jS Y', strtotime($headline->published_at)) ?></small>
              </div>
            </div>
  
            <!-- Right Image -->
            <div class="col-lg-6">
              <div class="headline-image h-100">
                <img 
                  src="<?= base_url('assets/img/news/' . $headline->thumbnail) ?>" 
                  alt="<?= esc($headline->title) ?>" 
                  class="img-fluid h-100 w-100 object-fit-cover rounded-end-4">
              </div>
            </div>
          </div>
        </div>
      </a>
      <?php else: ?>
        <div class="alert alert-warning">No headline news available.</div>
      <?php endif; ?>
    </div>
  </section>
  
  <section class="news-related" data-exclude="<?= esc($headline->slug ?? '') ?>" data-aos="fade-up">
    <div class="container-fluid">
      <h1 class="text-related">News Related to Eagle Protect</h1>
      
      <div class="categories">
        <button class="category active" data-category="all">All</button>
        <?php foreach ($categories as $cat): ?>
          <button class="category" data-category="<?= esc($cat['category_name']) ?>">
            <?= esc($cat['category_name']) ?>
          </button>
        <?php endforeach; ?>
      </div>
  
      <div class="cards" id="cards-container">
        <!-- Cards loaded by jQuery AJAX -->
      </div>
  
      <div class="pagination justify-content-end">
        <button id="prevPage">Previous</button>
        <span id="pageIndicator">1</span>
        <button id="nextPage">Next</button>
      </div>
    </div>
  
  </section>
  
  <section data-aos="fade-up">
      <div><?= $this->include('layout/footer') ?></div>
  </section>
</div>

<div class="only-mobile">
  <nav id="navbar-mobile" class="navbar navbar-expand-lg navbar-dark custom-navbar-mobile">
    <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="<?= base_url('/') ?>"><img id="navbar-logo-mobile" src="<?= base_url('assets/img/eagle-logo-img-black.svg') ?>" alt="eagle-logo-nav" class="eagle-logo-nav"></a>
    <button class="navbar-toggler-mobile" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon-mobile"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar" style="stroke-width: 2px; stroke: #000;">
        <ul class="navbar-nav ms-auto text-end">
        <li class="nav-item">
            <a class="nav-link hover-overlay" href="<?= base_url('about_us') ?>"><span class="txt_nav">ABOUT US</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link hover-overlay" href="<?= base_url('pricelist') ?>"><span class="txt_nav">PRICELIST</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link hover-overlay" href="<?= base_url('services') ?>"><span class="txt_nav">SERVICES</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link hover-overlay" href="<?= base_url('projects') ?>"><span class="txt_nav">PROJECTS</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link hover-overlay" href="<?= base_url('news_room') ?>"><span class="txt_nav">NEWS ROOM</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link hover-overlay" href="<?= base_url('careers') ?>"><span class="txt_nav">CAREERS</span></a>
        </li>
        <li class="nav-item">
            <button class="btn contact-btn" onclick="location.href='<?= base_url('contact_us') ?>'"><span class="txt_nav text-white">CONTACT US</span></button>
        </li>
        </ul>
    </div>
    </div>
  </nav>

  <section class="py-5 bg-white headline-section-mobile" data-aos="fade-up">
    <div class="container-fluid">
      <h2 class="display-5 mb-2 text-header-mobile">Our Newsroom</h2>
      <p class="text-quotes-mobile mb-5">Stay informed with the latest updates, insights, and stories from Eagle Protect. We bring you timely news on safety, innovation, and the people behind our mission to protect what matters most.</p>
  
      <?php if ($headline): ?>
      <a href="<?= base_url('news_room/detail/view/' . $headline->slug) ?>" class="text-decoration-none text-dark">
        <div class="card headline-card border-0 shadow-sm rounded-4 overflow-hidden">
          <div class="row g-0 align-items-stretch">
            <!-- Right Image -->
            <div class="col-lg-6">
              <div class="headline-image-mobile h-100">
                <img 
                  src="<?= base_url('assets/img/news/' . $headline->thumbnail) ?>" 
                  alt="<?= esc($headline->title) ?>" 
                  class="img-fluid rounded-end-4">
              </div>
            </div>
            <!-- Left Content -->
            <div class="col-lg-6 headline-desc-mobile">
              <div>
                <span class="text-category text-uppercase"><?= esc($headline->category_name) ?></span>
                <h3 class="mt-2 mb-3 text-title"><?= esc($headline->title) ?></h3>
                <p class="text-excerpt mb-0">
                  <?= esc($headline->excerpt) ?>
                </p>
              </div>
              <div class="mt-4">
                <small class="text-publish"><?= date('F jS Y', strtotime($headline->published_at)) ?></small>
              </div>
            </div>
          </div>
        </div>
      </a>
      <?php else: ?>
        <div class="alert alert-warning">No headline news available.</div>
      <?php endif; ?>
    </div>
  </section>

  <section class="news-related-mobile" data-exclude="<?= esc($headline->slug ?? '') ?>" data-aos="fade-up">
    <div class="container-fluid">
      <h1 class="text-related-mobile">News Related to Eagle Protect</h1>
      
      <div class="categories-mobile">
        <button class="category-mobile active" data-category="all">All</button>
        <?php foreach ($categories as $cat): ?>
          <button class="category-mobile" data-category="<?= esc($cat['category_name']) ?>">
            <?= esc($cat['category_name']) ?>
          </button>
        <?php endforeach; ?>
      </div>
  
      <div class="cards" id="cards-container-mobile">
        <!-- Cards loaded by jQuery AJAX -->
      </div>
  
      <div class="pagination">
        <button id="prevPageMobile">Previous</button>
        <span id="pageIndicator">1</span>
        <button id="nextPageMobile">Next</button>
      </div>
    </div>

  </section>

  <section class="footer-mod" data-aos="fade-up">
    <div class="container-fluid">
        <div class="border-bottom-custom">
        <section class="footer-bg-image-mobile d-flex flex-column align-items-center justify-content-center text-white">
            <div class="container text-center footer-txt-mobile p-4">
            <p>CONTACT US FOR COMPREHENSIVE SECURITY SOLUTIONS!</p>
            <a href="#contact-form" class="btn btn-light-custom">Contact Us</a>
            </div>
            <div class="container text-center mt-2">
            <img src="<?= base_url('assets/img/footer-img-right-mobile.png') ?>" alt="img-footer-mobile" class="footer-img-right-mobile">
            </div>
        </section>

        <section class="justify-content-center justify-content-lg-between p-custom-mobile-section">
            <div class="container-fluid text-left text-md-start">
                <div class="row mt-5">
                
                <div class="col-12 text-left mb-5">
                    <img src="<?= base_url('assets/img/eagle-logo-img.png') ?>" alt="Logo">
                </div>

                <div class="col-4 mb-4">
                    <h6 class="fw-bold mb-4">Page</h6>
                    <div class="footer-info-mobile">
                        <p><a href="#!" class="text-reset text-decoration-none">Home</a></p>
                        <p><a href="#!" class="text-reset text-decoration-none">Packages</a></p>
                        <p><a href="#!" class="text-reset text-decoration-none">Services</a></p>
                        <p><a href="#!" class="text-reset text-decoration-none">Projects</a></p>
                        <p><a href="#!" class="text-reset text-decoration-none">Teams</a></p>
                        <p><a href="#!" class="text-reset text-decoration-none">Contacts</a></p>
                    </div>
                </div>

                <div class="col-6 mb-4">
                    <h6 class="fw-bold mb-4">Address</h6>
                    <div class="d-flex align-items-start mb-3 Denpasar Office:">
                        <i class="fas fa-map-marker-alt me-2 mt-1"></i>
                        <span>
                            <span class="manrope-bold-mobile">Seminyak Office:</span> <span class="manrope-regular-mobile">Jalan Kunti Seminyak-Badung</span>
                        </span>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-map-marker-alt me-2 mt-1"></i>
                        <span>
                            <span class="manrope-bold-mobile">Denpasar Office:</span> <span class="manrope-regular-mobile">Indonesia Cargo Indah Residence, Jalan Pondok Indah I No. 15, Ds. Batur, Denpasar Utara-Bali</span>
                        </span>
                    </div>
                </div>

                <div class="col-6 mb-4 mt-3">
                    <!-- <h6 class="fw-bold mb-5">Contact</h6> -->
                    <div class="footer-info-mobile">
                        <span class="mb-2">Sales Inquiries:</span><p class="mt-3 me-3 footer-border"><i class="fas fa-envelope me-2"></i>sales@eagleprotect.id</p>
                        <span class="mb-2">HRD Department:</span><p class="mt-3 me-3 footer-border"><i class="fas fa-envelope me-2"></i>hrd@eagleprotect.id</p>
                    </div>
                </div>

                <div class="col-6 mb-4 mt-3">
                    <!-- <h6 class="fw-bold mb-5 invisible">Contact</h6> -->
                    <div class="footer-info-mobile">
                        <span class="mb-2">General Inquiries:</span><p class="mt-3 me-3 footer-border"><i class="fas fa-envelope me-2"></i>info@eagleprotect.id</p>
                        <span class="mb-2">Instagram:</span><p class="mt-3 me-3 footer-border"><i class="fab fa-instagram me-2"></i>@eagleprotect.bali</p>
                    </div>
                </div>
                </div>
            </div>
        </section>
        </div>

        <div class="container-fluid px-4 py-3">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center flex-wrap footer-bar">
            <small class="text-reset">Copyright @ <?= date('Y') ?></small>
            <div class="d-flex flex-wrap gap-2">
                <a href="#" class="text-reset manrope-regular-mobile text-decoration-none">Privacy Policy</a>
                <a href="#" class="text-reset manrope-regular-mobile text-decoration-none">Terms & Conditions</a>
            </div>
            </div>
        </div>
        </div>
    </div>
  </section>
</div>

<?= $this->endSection() ?>