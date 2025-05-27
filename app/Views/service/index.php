<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<?php $uri = service('uri'); ?>
<div class="only-desktop">
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
    <section class="service" data-aos="fade-up">
        <div class="container-fluid p-50 text-md-start order-md-last align-items-center justify-content-end">
            <div class="p-50 mt-3">
                <h2 class="roboto-h2-red">OUR SERVICE</h2>
                <p class="lato-regular-desc text-white">Exclusive services for our Eagle Protect users at the most competitive prices. We offer a comprehensive range of services, from consulting and strategy development to implementation and support, covering all aspects of security, legality, and healthcare. Our commitment is to provide unparalleled value and expertise to our valued clients.bringing innovative solutions to the island's unique challenges.</p>
            </div>
        </div>
    </section>
    <?php
        $chunked_slides_security = array_chunk($security_slides, 5);
        $globalIndex = 0; // <<< Tambah counter global 
    ?>
    <section class="security-service" data-aos="fade-up">
        <div class="container-fluid">
            <h2 class="roboto-h2-title mt-5 text-center">SECURITY SERVICES</h2>
            <div class="swiper mySwiper mt-4" id="swiper-security">
                <div class="swiper-wrapper">
                    <?php foreach ($chunked_slides_security as $group): ?>
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">
                                <?php foreach ($group as $slide): ?>
                                    <?php $globalIndex++; ?> 
                                    <div class="position-relative text-white img-security" 
                                        style="background-image: url('<?= base_url('assets/img/' . $slide['img']) ?>');">
                                        <a href="<?= base_url('security/detail/' . $slide['id']) ?>" class="d-block w-100 h-100 text-white text-decoration-none slide-link" data-id="<?= $slide['id'] ?>" data-type="security">
                                            <div class="overlay d-flex flex-column justify-content-between p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                                                <h1 class="fw-bold m-0" style="font-size: 2rem; line-height: 1;">
                                                    <?= str_pad($globalIndex, 2, '0', STR_PAD_LEFT) ?>
                                                </h1>
                                                <div>
                                                    <h5 class="mb-0"><?= esc($slide['title']) ?></h5>
                                                    <p class="mt-2"><?= esc($slide['desc']) ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
    
                <?php $show_controls = count($security_slides) > 3; ?>
                <div class="swiper-controls d-flex justify-content-end align-items-center gap-2 mt-3 <?= $show_controls ? '' : 'd-none' ?>">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <?php
        $chunked_slides_legal = array_chunk($legal_slides, 4);
        $globalIndex = 0; // <<< Tambah counter global  
    ?>
    <section class="legal-service" data-aos="fade-up">
        <div class="container-fluid">
            <h2 class="roboto-h2-title text-center">LEGAL SERVICES</h2>
            <div class="swiper mySwiper mt-4" id="swiper-legal">
            <div class="swiper-wrapper">
            <?php foreach ($chunked_slides_legal as $group): ?>
                <div class="swiper-slide">
                    <div class="d-flex justify-content-center">
                        <?php foreach ($group as $slide): ?>
                            <?php $globalIndex++; ?> 
                            <div class="position-relative text-white img-legal" 
                                style="background-image: url('<?= base_url('assets/img/' . $slide['img']) ?>');">
                                <a href="<?= base_url('legal/detail/' . $slide['id']) ?>" class="d-block w-100 h-100 text-white text-decoration-none slide-link" data-id="<?= $slide['id'] ?>" data-type="legal">
                                    <div class="overlay d-flex flex-column justify-content-between p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                                        <h1 class="fw-bold m-0" style="font-size: 2rem; line-height: 1;">
                                            <?= str_pad($globalIndex, 2, '0', STR_PAD_LEFT) ?>
                                        </h1>
                                        <div>
                                            <h5 class="mb-0"><?= esc($slide['title']) ?></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>

            <?php $show_controls = count($legal_slides) > 3; ?>
            <div class="swiper-controls d-flex justify-content-end align-items-center gap-2 <?= $show_controls ? '' : 'd-none' ?>">
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        </div>
    </section>
    <?php
        $chunked_slides_healthcare = array_chunk($healthcare_slides, 4); 
        $globalIndex = 0; // <<< Tambah counter global
    ?>
    <section class="healthcare-service" data-aos="fade-up">
        <div class="container-fluid">
            <h2 class="roboto-h2-title mt-5 text-center">HEALTHCARE SERVICES</h2>
            <div class="swiper mySwiper mt-4" id="swiper-healthcare">
                <div class="swiper-wrapper">
                <?php foreach ($chunked_slides_healthcare as $group): ?>
                    <div class="swiper-slide">
                        <div class="d-flex justify-content-center">
                            <?php foreach ($group as $slide): ?>
                                <?php $globalIndex++; ?> 
                                <div class="position-relative text-white img-healthcare" 
                                    style="background-image: url('<?= base_url('assets/img/' . $slide['img']) ?>');">
                                    <a href="<?= base_url('healthcare/detail/' . $slide['id']) ?>" class="d-block w-100 h-100 text-white text-decoration-none slide-link" data-id="<?= $slide['id'] ?>" data-type="healthcare">
                                        <div class="overlay d-flex flex-column justify-content-between p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                                            <h1 class="fw-bold m-0" style="font-size: 2rem; line-height: 1;">
                                                <?= str_pad($globalIndex, 2, '0', STR_PAD_LEFT) ?>
                                            </h1>
                                            <div>
                                                <h5 class="mb-0"><?= esc($slide['title']) ?></h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <?php $show_controls = count($healthcare_slides) > 4; ?>
                <div class="swiper-controls d-flex justify-content-end align-items-center gap-2 <?= $show_controls ? '' : 'd-none' ?>">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
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
    <section class="service-mobile" data-aos="fade-up">
        <div class="container-fluid text-md-start order-md-last align-items-center justify-content-end">
            <div class="our-service mt-5">
                <h2 class="roboto-h2-red-mobile mt-2">OUR SERVICE</h2>
                <p class="lato-regular-desc-mobile text-white">Exclusive services for our Eagle Protect users at the most competitive prices. We offer a comprehensive range of services, from consulting and strategy development to implementation and support, covering all aspects of security, legality, and healthcare. Our commitment is to provide unparalleled value and expertise to our valued clients.bringing innovative solutions to the island's unique challenges.</p>
            </div>
        </div>
    </section>
    <?php
        $chunked_slides_security = array_chunk($security_slides, 3); 
        $globalIndex = 0; // <<< Tambah counter global
    ?>
    <section class="security-service-mobile" data-aos="fade-up">
        <div class="container-fluid">
            <h2 class="roboto-h2-title-mobile mt-5 text-center">SECURITY SERVICES</h2>
            <div class="swiper mySwiper mt-3" id="swiper-security-mobile">
                <div class="swiper-wrapper">
                    <?php foreach ($chunked_slides_security as $group): ?>
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">
                                <?php foreach ($group as $slide): ?>
                                    <?php $globalIndex++; ?> 
                                    <div class="position-relative text-white img-security-mobile" 
                                        style="background-image: url('<?= base_url('assets/img/' . $slide['img']) ?>');">
                                        <a href="<?= base_url('security/detail/' . $slide['id']) ?>" class="d-block w-100 h-100 text-white text-decoration-none slide-link" data-id="<?= $slide['id'] ?>" data-type="security">
                                            <div class="overlay d-flex flex-column justify-content-between p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                                                <h1 class="h1-mobile" style="font-size: 2rem; line-height: 1;">
                                                    <?= str_pad($globalIndex, 2, '0', STR_PAD_LEFT) ?>
                                                </h1>
                                                <div>
                                                    <h5 class="h5-mobile"><?= esc($slide['title']) ?></h5>
                                                    <!-- <p class="mt-2"><?= esc($slide['desc']) ?></p> -->
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php $show_controls = count($security_slides) > 3; ?>
                <div class="swiper-controls-mobile mt-2 <?= $show_controls ? '' : 'd-none' ?>">
                    <div class="navigation-wrapper">
                        <div class="swiper-button-prev-mobile">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="swiper-pagination-mobile"></div>
                        <div class="swiper-button-next-mobile">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php
        $chunked_slides_legal = array_chunk($legal_slides, 3); 
        $globalIndex = 0; // <<< Tambah counter global
    ?>
    <section class="legal-service-mobile" data-aos="fade-up">
        <div class="container-fluid">
            <h2 class="roboto-h2-title-mobile mt-5 text-center">LEGAL SERVICES</h2>
            <div class="swiper mySwiper mt-3" id="swiper-legal-mobile">
                <div class="swiper-wrapper">
                    <?php foreach ($chunked_slides_legal as $group): ?>
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center align-items-center">
                                <?php foreach ($group as $slide): ?>
                                    <?php $globalIndex++; ?> 
                                    <div class="position-relative text-white img-legal-mobile" 
                                        style="background-image: url('<?= base_url('assets/img/' . $slide['img']) ?>');">
                                        <a href="<?= base_url('legal/detail/' . $slide['id']) ?>" class="d-block w-100 h-100 text-white text-decoration-none slide-link" data-id="<?= $slide['id'] ?>" data-type="legal">
                                            <div class="overlay d-flex flex-column justify-content-between p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                                                <h1 class="h1-mobile" style="font-size: 2rem; line-height: 1;">
                                                    <?= str_pad($globalIndex, 2, '0', STR_PAD_LEFT) ?>
                                                </h1>
                                                <div>
                                                    <h5 class="h5-mobile"><?= esc($slide['title']) ?></h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php $show_controls = count($legal_slides) > 3; ?>
                <div class="swiper-controls-mobile mt-2 <?= $show_controls ? '' : 'd-none' ?>">
                    <div class="navigation-wrapper">
                        <div class="swiper-button-prev-mobile">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="swiper-pagination-mobile"></div>
                        <div class="swiper-button-next-mobile">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php
        $chunked_slides_legal = array_chunk($healthcare_slides, 4); 
        $globalIndex = 0; // <<< Tambah counter global
    ?>
    <section class="healthcare-service-mobile" data-aos="fade-up">
        <div class="container-fluid">
            <h2 class="roboto-h2-title-mobile mt-5 text-center">HEALTHCARE SERVICES</h2>
            <div class="swiper mySwiper mt-3" id="swiper-healthcare-mobile">
                <div class="swiper-wrapper">
                    <?php foreach ($chunked_slides_legal as $group): ?>
                        <div class="swiper-slide">
                            <div class="d-flex flex-wrap justify-content-center align-items-start">
                                <?php foreach ($group as $slide): ?>
                                    <?php $globalIndex++; ?>
                                    <div class="position-relative text-white img-healthcare-mobile" 
                                        style="width: 50%; height: 180px; background-image: url('<?= base_url('assets/img/' . $slide['img']) ?>');">
                                        <a href="<?= base_url('healthcare/detail/' . $slide['id']) ?>" class="d-block w-100 h-100 text-white text-decoration-none slide-link" data-id="<?= $slide['id'] ?>" data-type="healthcare">
                                            <div class="overlay d-flex flex-column justify-content-between p-2" style="background: rgba(0,0,0,0.5); height: 100%;">
                                                <h1 class="h1-mobile" style="font-size: 1.5rem; line-height: 1;">
                                                    <?= str_pad($globalIndex, 2, '0', STR_PAD_LEFT) ?>
                                                </h1>
                                                <div>
                                                    <h5 class="h5-mobile"><?= esc($slide['title']) ?></h5>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php $show_controls = count($healthcare_slides) > 3; ?>
                <div class="swiper-controls-mobile mt-2 <?= $show_controls ? '' : 'd-none' ?>">
                    <div class="navigation-wrapper d-flex justify-content-center align-items-center gap-2">
                        <div class="swiper-button-prev-mobile">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="swiper-pagination-mobile"></div>
                        <div class="swiper-button-next-mobile">
                            <i class="fas fa-chevron-right"></i>
                        </div>
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