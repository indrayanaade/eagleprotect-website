<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<?php $uri = service('uri'); ?>
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark custom-navbar2">
      <div class="container-fluid">
          <a class="navbar-brand ps-5 fw-bold" href="<?= base_url('/') ?>"><img id="navbar-logo" src="<?= base_url('assets/img/eagle-logo-img-white.svg') ?>"></a>
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
  <section class="img-content">
    <img src="<?= base_url('assets/img/' . $img) ?>" alt="<?= esc($packages_name) ?>" />
  </section>
  <section class="detail-content">
    <div class="container-fluid content">
      <h4 class="roboto-h4">LEGAL SERVICES</h4>
      <h2 class="roboto-h2-black"><?= esc($packages_name) ?></h2>
      <p class="description mt-5"><?= nl2br(esc($description)) ?></p>
    </div>
  </section>
  <section class="faq">
    <div class="container-fluid faq-content">
      <h4 class="roboto-h4">LEGAL SERVICES</h4>
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
