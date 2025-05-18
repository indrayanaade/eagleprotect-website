<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php $uri = service('uri'); ?>

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark custom-navbar3">
  <div class="container-fluid">
    <a class="navbar-brand ps-5 fw-bold" href="<?= base_url('/') ?>">
      <img id="navbar-logo" src="<?= base_url('assets/img/eagle-logo-img-white.svg') ?>" alt="Eagle Protect Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto text-end">
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'about_us' ? 'active' : '' ?>" href="<?= base_url('about_us') ?>">
            <span class="txt_nav">ABOUT US</span>
          </a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'pricelist' ? 'active' : '' ?>" href="<?= base_url('pricelist') ?>">
            <span class="txt_nav">PRICELIST</span>
          </a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'services' ? 'active' : '' ?>" href="<?= base_url('services') ?>">
            <span class="txt_nav">SERVICES</span>
          </a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'projects' ? 'active' : '' ?>" href="<?= base_url('projects') ?>">
            <span class="txt_nav">PROJECTS</span>
          </a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'news_room' ? 'active' : '' ?>" href="<?= base_url('news_room') ?>">
            <span class="txt_nav">NEWS ROOM</span>
          </a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay <?= $uri->getSegment(1) === 'careers' ? 'active' : '' ?>" href="<?= base_url('careers') ?>">
            <span class="txt_nav">CAREERS</span>
          </a>
        </li>
        <li class="nav-item px-2">
          <button class="btn contact-btn" onclick="location.href='<?= base_url('contact_us') ?>'">
            <p class="txt_nav m-0">CONTACT US</p>
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="contact-section">
  <span class="title">CONTACT US</span>
</section>

<section class="contact-offset-section">
  <div class="container-fluid d-flex gap-4 justify-content-center">
    <div class="contact-box offset-up">
        <h5 class="txt_title_content">CUSTOMER SERVICE</h5>
        <div class="content-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                <span class="txt_content_box">
                    Available 24/4 contact line for questions and enquires
                </span>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <button class="btn-contact-us">
                    <i class="fa fa-phone" aria-hidden="true"></i> <span class="txt_btn">Contact Us</span>
                </button>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-box offset-up">
        <h5 class="txt_title_content">SALES TEAM</h5>
        <div class="content-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                <span class="txt_content_box">
                    Intrested in our services? our sales team can set up a meeting to help u find the right package for you
                </span>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <button class="btn-contact-us">
                    <i class="fa fa-phone" aria-hidden="true"></i> <span class="txt_btn">Contact Us</span>
                </button>
                </div>
            </div>
        </div>
    </div>
  </div>
  
  <div class="container-fluid p-rl justify-content-center">
      <div class="box-form">
        <div class="contact-form-section">
            <div class="contact-header text-center">
                <p class="txt_form_content">Contact us now and let’s start discussing our cooperation.</p>
            </div>
            <div class="contact-form-container">
                <div class="contact-left">
                <h4>Sales Inquiries:</h4>
                <p><i class="fa fa-envelope"></i> sales@eagleprotect.id</p>
                <h4>General Inquiries:</h4>
                <p><i class="fa fa-envelope"></i> info@eagleprotect.id</p>
                <h4>HRD Department:</h4>
                <p><i class="fa fa-envelope"></i> hrd@eagleprotect.id</p>
                </div>
                <div class="border custom-border"></div>
                <div class="contact-right">
                <form id="contactForm" action="contact_us/submit" method="post">
                  <h4 class="txt_send_message mb-5">Send Us Message</h4>
                  <div class="form-group-row">
                    <input type="text" name="fullname" placeholder="Full Name" maxlength="100" required>
                    <input type="text" name="company" placeholder="Company Name" maxlength="100" required>
                  </div>
                  <div class="form-group-row">
                    <input type="email" name="email" placeholder="Email Address" maxlength="150" required>
                    <input type="text" name="phone" id="phone" placeholder="Mobile Number (optional)" maxlength="15" inputmode="numeric" pattern="[0-9]*">
                  </div>
                  <div class="form-group">
                    <textarea name="message" placeholder="Message..." rows="5" maxlength="500" required></textarea>
                  </div>
                  <div class="justify-content-end">
                    <button type="submit" class="btn-send">SEND</button>
                  </div>
                </form>
                <div id="form-response"></div>

                </div>
            </div>
        </div>
      </div>
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

<section class="map-section">
  <div id="map-wrapper" style="position: relative;">
    <div id="map"></div>
    <div class="custom-info-box">
      <i class="fas fa-map-marker-alt"></i>
      <div class="text">
        <strong>Denpasar Office:</strong> Indonesia Cargo Indah Residence, Jalan Pondok Indah I No. 15, Ds. Batur Denpasar Utara-Bali
      </div>
      <button class="arrow">&gt;</button>
    </div>
  </div>
</section>

<section>
    <div><?= $this->include('layout/footer') ?></div>
</section>

<?= $this->endSection() ?>
