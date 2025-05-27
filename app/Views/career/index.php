<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<?php $uri = service('uri'); ?>

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

<section class="section-careers">
  <div class="container-fluid">
    <div class="careers-content">
      <div class="left-content">
        <h1 class="career-title">Careers</h1>
        <p class="career-subtitle">Join a team where innovation meets impact — explore opportunities to grow, lead, and shape the future with us.</p>
      </div>
      <div class="right-deco">
        <img src="<?= base_url('assets/img/careers-arrow.png') ?>" alt="Career Arrows">
      </div>
    </div>
  </div>
</section>

<section class="section-positions bg-light">
  <div class="container-fluid">
    <!-- <h2 class="section-title mb-4">Open Positions</h2> -->

    <!-- Filter -->
    <form id="careerFilter" class="row p-2 mb-5 g-2 align-items-center">
        <div class="col-md-4">
            <input type="text" id="searchKeyword" class="form-control" placeholder="Search position...">
        </div>
        <div class="col-md-4">
            <select id="typeFilter" class="form-select">
                <option value="">All Types</option>
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
                <option value="Internship">Internship</option>
            </select>
        </div>
    </form>
    <div class="col-12">
        <div id="autocompleteMessage" class="text-danger small mt-1" style="display: none;">
            <i class="bi bi-exclamation-circle me-1"></i> No matching results found
        </div>
    </div>

    <!-- Hasil -->
    <div class="row g-4" id="careerResults"></div>

    <div class="d-flex justify-content-end align-items-center gap-3 mt-4" id="paginationWrapper">
        <button id="prevPage" class="btn btn-outline-danger btn-sm px-3">Previous</button>
        <span id="pageIndicator" class="fw-semibold text-muted">1</span>
        <button id="nextPage" class="btn btn-outline-danger btn-sm px-3">Next</button>
    </div>

    
  </div>
</section>

<section class="faq">
    <div class="container-fluid faq-content">
        <h2 class="roboto-h2-black mt-2 mb-5">FAQs</h2>
        <?php foreach ($faqs as $index => $faq): ?>
            <div class="faq-item">
            <div>
                <p class="faq-question mt-3"><?= ($index + 1) ?>. <?= esc($faq['question']) ?></p>
                <div class="faq-answer"><?= esc($faq['answer']) ?></div>
            </div>
            <div class="arrow">↑</div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section>
    <div><?= $this->include('layout/footer') ?></div>
</section>


<?= $this->endSection() ?>