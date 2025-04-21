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
    <section class="service">
        <div class="container-fluid p-50 text-md-start order-md-last align-items-center justify-content-end">
            <div class="p-50 mt-3">
                <h2 class="roboto-h2-red">OUR SERVICE</h2>
                <p class="lato-regular-desc text-white">Exclusive services for our Eagle Protect users at the most competitive prices. We offer a comprehensive range of services, from consulting and strategy development to implementation and support, covering all aspects of security, legality, and healthcare. Our commitment is to provide unparalleled value and expertise to our valued clients.bringing innovative solutions to the island's unique challenges.</p>
            </div>
        </div>
    </section>
    <section class="security-service">
        <div class="container-fluid">
            <h2 class="roboto-h2-title mt-5 text-center">SECURITY SERVICES</h2>
            <div class="swiper mySwiper mt-4" id="swiper-security">
                <div class="swiper-wrapper">
                    <?php foreach ($security_slides as $index => $slide): ?>
                        <div class="swiper-slide position-relative text-white img-security" 
                            style="background-image: url('<?= base_url('assets/img/' . $slide['img']) ?>'); background-size: cover; background-position: center;">
                            <a href="<?= base_url('security/detail/' . $slide['id']) ?>" class="d-block w-100 h-100 text-white text-decoration-none slide-link">
                                <div class="overlay p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                                    <h1 class="fw-bold mb-5"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></h1>
                                    <h5><?= esc($slide['title']) ?></h5>
                                    <p class="mt-5"><?= esc($slide['desc']) ?></p>
                                </div>
                            </a>
                        </div>

                    <?php endforeach; ?>
                </div>
    
                <div class="swiper-controls d-flex justify-content-end align-items-center gap-2 mt-3">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="legal-service">
        <div class="container-fluid">
            <h2 class="roboto-h2-title mt-5 text-center">LEGAL SERVICES</h2>
            <div class="swiper mySwiper mt-4" id="swiper-legal">
                <div class="swiper-wrapper">
                    <?php foreach ($legal_slides as $index => $slide): ?>
                        <div class="swiper-slide position-relative text-white img-legal" style="background-image: url('<?= base_url('assets/img/' . $slide['img']) ?>');">
                            <a href="<?= base_url('legal/detail/' . $slide['id']) ?>" class="d-block w-100 h-100 text-white text-decoration-none slide-link">
                            <div class="overlay p-3">
                                <h1 class="fw-bold mb-5"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></h1>
                                <h5><?= esc($slide['title']) ?></h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-controls d-flex justify-content-end align-items-center gap-2 mt-3">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="healthcare-service">
        <div class="container-fluid">
            <h2 class="roboto-h2-title mt-5 text-center">HEALTHCARE SERVICES</h2>
            <div class="swiper mySwiper mt-4" id="swiper-healthcare">
                <div class="swiper-wrapper">
                    <?php foreach ($healthcare_slides as $index => $slide): ?>
                        <div class="swiper-slide position-relative text-white img-healthcare" style="background-image: url('<?= base_url('assets/img/' . $slide['img']) ?>');">
                            <div class="overlay p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                                <h1 class="fw-bold mb-5"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></h1>
                                <h5><?= esc($slide['title']) ?></h5>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-controls d-flex justify-content-end align-items-center gap-2 mt-3">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>