<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<?php $uri = service('uri'); ?>
<div class="only-desktop">
    <div id="navbar-spacer-detail"></div>
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
    
    <section class="project-detail" data-aos="fade-up">
        <div class="detail-title">
          <h4 class="site-title">Projects</h4>
          <h1 class="title-project"><?= esc($projectData['title']) ?></h1>
        </div>
    
        <div class="cover-image">
            <img src="<?= base_url('assets/img/' . esc($projectData['cover_image'])) ?>" alt="<?= esc($projectData['title']) ?>" />
        </div>
    
        <div class="content">
            <div class="content-left">
              <span class="txt_title_left mb-5"><?= nl2br($projectData['content']['main']) ?></span>
              <p class="txt_desc"><?= nl2br($projectData['content']['main_desc']) ?></p>
              <span class="txt_title_left mb-5"><?= nl2br($projectData['content']['extra']) ?></span>
              <p class="txt_desc"><?= nl2br($projectData['content']['extra_desc']) ?></p>
            </div>
    
            <div class="content-right">
                <div class="info-box">
                    <h4>Information</h4>
                    <div class="row">
                        <div class="col">
                            <p><span class="info_bold">Date</span></p>
                            <p><span class="info_bold">Location</span></p>
                            <p><span class="info_bold">Time</span></p>
                        </div>
                        <div class="col">
                            <p><?= esc($projectData['info']['date']) ?></p>
                            <p><?= esc($projectData['info']['location']) ?></p>
                            <p><?= esc($projectData['info']['time']) ?></p>
                        </div>
                    </div>
                </div>
    
                <div class="organizer-box">
                    <h4>Contact Organizer</h4>
                    <div class="organizer-content">
                        <img src="<?= base_url('assets/img/'.esc($projectData['organizer']['photo'])) ?>" alt="Profile Photo" class="profile-img" />
                        <div class="organizer-info">
                            <p class="txt_organizer"><strong><?= esc($projectData['organizer']['name']) ?></strong>
                            <span class="title_organizer"><?= esc($projectData['organizer']['title']) ?></span></p>
                        </div>
                    </div> <br>
                    <div class="organizer-phone">
                        📞 &nbsp; <strong>Call More Info</strong> &nbsp; <span class="phone-org"><?= esc($projectData['organizer']['phone']) ?></span>
                    </div>
                </div>
    
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
    <section class="project-detail-mobile" data-aos="fade-up">
        <div class="detail-title-mobile">
          <h4 class="site-title-mobile">Projects</h4>
          <h1 class="title-project-mobile"><?= esc($projectData['title']) ?></h1>
        </div>
    
        <div class="cover-image-mobile">
            <img src="<?= base_url('assets/img/' . esc($projectData['cover_image'])) ?>" alt="<?= esc($projectData['title']) ?>" />
        </div>
    
        <div class="content-mobile">
            <div class="content-left-mobile">
              <span class="txt_title_left_mobile mb-5"><?= nl2br($projectData['content']['main']) ?></span>
              <p class="txt_desc_mobile"><?= nl2br($projectData['content']['main_desc']) ?></p>
              <span class="txt_title_left_mobile mb-5"><?= nl2br($projectData['content']['extra']) ?></span>
              <p class="txt_desc_mobile"><?= nl2br($projectData['content']['extra_desc']) ?></p>
            </div>
    
            <div class="content-right-mobile">
                <div class="info-box-mobile">
                    <h4>Information</h4>
                    <div class="row">
                        <div class="col">
                            <p><span class="info_bold">Date</span></p>
                            <p><span class="info_bold">Location</span></p>
                            <p><span class="info_bold">Time</span></p>
                        </div>
                        <div class="col">
                            <p><?= esc($projectData['info']['date']) ?></p>
                            <p><?= esc($projectData['info']['location']) ?></p>
                            <p><?= esc($projectData['info']['time']) ?></p>
                        </div>
                    </div>
                </div>
    
                <div class="organizer-box-mobile">
                    <h4>Contact Organizer</h4>
                    <div class="organizer-content-mobile">
                        <img src="<?= base_url('assets/img/'.esc($projectData['organizer']['photo'])) ?>" alt="Profile Photo" class="profile-img" />
                        <div class="organizer-info-mobile">
                            <p class="txt_organizer_mobile"><strong><?= esc($projectData['organizer']['name']) ?></strong>
                            <span class="title_organizer"><?= esc($projectData['organizer']['title']) ?></span></p>
                        </div>
                    </div> <br>
                    <div class="organizer-phone">
                        <span class="img-phone-mobile">📞</span> &nbsp <strong>Call More Info</strong> &nbsp; <span class="phone-org-mobile"><?= esc($projectData['organizer']['phone']) ?></span>
                    </div>
                </div>
    
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