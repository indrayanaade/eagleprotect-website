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
    <section class="our-service">
        <h2 class="roboto-h2-title mt-5 text-center">SECURITY SERVICES</h2>
        <div class="swiper mySwiper mt-4">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide position-relative text-white" style="background-image: url('/assets/img/security-01.png');">
                    <div class="overlay p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                    <h1 class="fw-bold">01</h1>
                    <h5>24/7 Emergency Number</h5>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide position-relative text-white" style="background-image: url('/assets/img/security-02.png');">
                    <div class="overlay p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                    <h1 class="fw-bold">02</h1>
                    <h5>Surveillance Equipment Maintenance and 24/7 Service</h5>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide position-relative text-white" style="background-image: url('/assets/img/security-03.png');">
                    <div class="overlay p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                    <h1 class="fw-bold">03</h1>
                    <h5>Advanced Alarm System</h5>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide position-relative text-white" style="background-image: url('/assets/img/security-04.png');">
                    <div class="overlay p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                    <h1 class="fw-bold">04</h1>
                    <h5>EAGLE PROTECT Escort</h5>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide position-relative text-white" style="background-image: url('/assets/img/security-05.png');">
                    <div class="overlay p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                    <h1 class="fw-bold">05</h1>
                    <h5>Private Security</h5>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="swiper-slide position-relative text-white" style="background-image: url('/assets/img/security-06.png');">
                    <div class="overlay p-3" style="background: rgba(0,0,0,0.5); height: 100%;">
                    <h1 class="fw-bold">06</h1>
                    <h5>Private Security</h5>
                    </div>
                </div>
            </div>
            <!-- Kontrol navigasi dan pagination -->
            <div class="swiper-controls d-flex justify-content-end align-items-center gap-2 mt-3">
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>