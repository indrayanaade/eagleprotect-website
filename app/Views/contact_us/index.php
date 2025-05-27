<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<?php $uri = service('uri'); ?>
<div class="only-desktop">
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
  
  <section class="contact-section" data-aos="fade-up">
    <span class="title">CONTACT US</span>
  </section>
  
  <section class="contact-offset-section" data-aos="fade-up">
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
                      <textarea id="message" name="message" placeholder="Message..." rows="5" maxlength="500" required></textarea>
                    </div>

                    <div class="justify-content-end">
                      <button type="submit" id="btn-send" class="btn-send">
                        <span class="spinner" style="display:none;"><i class="fa fa-spinner fa-spin"></i></span>
                        <span class="btn-text">SEND</span>
                      </button>
                    </div>
                  </form>

                  <div id="form-response"></div>

                  </div>
              </div>
          </div>
        </div>
    </div>
  </section>
  
  <section class="faq" data-aos="fade-up">
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
  
  <section class="map-section" data-aos="fade-up">
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

  <section class="contact-section-mobile" data-aos="fade-up">
    <span class="title-mobile">CONTACT US</span>
  </section>

  <section class="contact-offset-section" data-aos="fade-up">
    <div class="container-fluid mobile-view">
      <div class="contact-box-mobile offset-up-mobile">
          <h5 class="txt_title_content_mobile">CUSTOMER SERVICE</h5>
          <div class="content-box">
              <div class="row align-items-center">
                  <div class="col-md-8">
                  <span class="txt_content_box_mobile">
                      Available 24/4 contact line for questions and enquires
                  </span>
                  </div>
                  <div class="col-md-4 text-md-end mt-3 mt-md-0">
                  <button class="btn-contact-us-mobile">
                      <i class="fa fa-phone" aria-hidden="true"></i> <span class="txt_btn">Contact Us</span>
                  </button>
                  </div>
              </div>
          </div>
      </div>
  
      <div class="contact-box-mobile offset-up-mobile">
          <h5 class="txt_title_content_mobile">SALES TEAM</h5>
          <div class="content-box">
              <div class="row align-items-center">
                  <div class="col-md-8">
                  <span class="txt_content_box_mobile">
                      Intrested in our services? our sales team can set up a meeting to help u find the right package for you
                  </span>
                  </div>
                  <div class="col-md-4 text-md-end mt-3 mt-md-0">
                  <button class="btn-contact-us-mobile">
                      <i class="fa fa-phone" aria-hidden="true"></i> <span class="txt_btn">Contact Us</span>
                  </button>
                  </div>
              </div>
          </div>
      </div>
    </div>
    
    <div class="container-fluid mobile-view">
        <div class="box-form-mobile">
          <div class="contact-form-section-mobile">
              <div class="contact-header text-center">
                  <p class="txt_form_content_mobile">Contact us now and let’s start discussing our cooperation.</p>
              </div>
              <div class="contact-right">
                <form id="contactForm" action="contact_us/submit" method="post">
                  <h4 class="txt_send_message_mobile mb-5">Send Us Message</h4>
                  <div class="form-group-row-mobile">
                    <input type="text" name="fullname" placeholder="Full Name" maxlength="100" required>
                    <input type="text" name="company" placeholder="Company Name" maxlength="100" required>
                  </div>
                  <div class="form-group-row-mobile">
                    <input type="email" name="email" placeholder="Email Address" maxlength="150" required>
                    <input type="text" name="phone" id="phone" placeholder="Mobile Number (optional)" maxlength="15" inputmode="numeric" pattern="[0-9]*">
                  </div>
                  <div class="form-group">
                    <textarea id="message" name="message" placeholder="Message..." rows="5" maxlength="500" required></textarea>
                  </div>
                  <div class="justify-content-end">
                    <button type="submit" id="btn-send" class="btn-send-mobile"><span class="spinner" style="display:none;"><i class="fa fa-spinner fa-spin"></i></span class="btn-text">SEND</button>
                  </div>
                </form>
                <div id="form-response"></div>
              </div>
              <div class="contact-left-mobile">
                <div class="row">
                  <div class="col">
                    <h4>Sales Inquiries:</h4>
                    <p class="footer-border"><i class="fa fa-envelope"></i> sales@eagleprotect.id</p>
                  </div>
                  <div class="col">
                    <h4>General Inquiries:</h4>
                    <p class="footer-border"><i class="fa fa-envelope"></i> info@eagleprotect.id</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <h4>HRD Department:</h4>
                    <p class="footer-border"><i class="fa fa-envelope"></i> hrd@eagleprotect.id</p>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </section>

  <section class="faq-mobile" data-aos="fade-up">
    <div class="container-fluid">
      <h2 class="roboto-h2-black-mobile mt-2 mb-2">FAQs</h2>
        <?php foreach ($faqs as $index => $faq): ?>
          <div class="faq-item">
            <div>
              <p class="faq-question-mobile mt-3"><?= ($index + 1) ?>. <?= esc($faq['question']) ?></p>
              <div class="faq-answer-mobile"><?= esc($faq['answer']) ?></div>
            </div>
            <div class="arrow">↑</div>
          </div>
        <?php endforeach; ?>
    </div>
  </section>

  <div class="map-container" data-aos="fade-up"></div>

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
