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

    <section class="pricelist">
        <div class="container-fluid my-5">
            <h2 class="text-center fw-bold text-danger mb-2">PRICELIST</h2>
            <p class="text-center mb-4">We have several Pricelists that can meet your needs.</p>

            <div class="d-flex justify-content-center mb-5 flex-wrap gap-2">
                <button class="btn btn-outline-secondary rounded-pill fw-semibold filter-btn" data-category="private">PRIVATE PACKAGES</button>
                <button class="btn btn-outline-secondary rounded-pill fw-semibold filter-btn" data-category="cctv">CCTV PACKAGES</button>
                <button class="btn btn-outline-secondary rounded-pill fw-semibold filter-btn" data-category="corporate">CORPORATE PACKAGES</button>
                <button class="btn btn-outline-secondary rounded-pill fw-semibold filter-btn" data-category="it_acquisition">IT ACQUISITION PACKAGE</button>
                <button class="btn btn-outline-secondary rounded-pill fw-semibold filter-btn" data-category="tourist_property">TOURIST PROPERTY COVERAGE</button>
                <button class="btn btn-outline-secondary rounded-pill fw-semibold filter-btn" data-category="comp_asset">COMPREHENSIVE ASSET AND PERSONAL PROTECTION</button>
                <button class="btn btn-outline-secondary rounded-pill fw-semibold filter-btn" data-category="by_request">BY REQUEST</button>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($packages as $pkg) : ?>
                        <div class="swiper-slide package-item p-2" data-category="<?= esc($pkg['category']) ?>">
                            <div class="border rounded-4 p-4 d-flex flex-column justify-content-between text-center card-content">
                                <div>
                                    <h5 class="text-danger fw-bold"><?= esc($pkg['title']) ?></h5>
                                    <h4 class="fw-bold"><?= esc($pkg['price']) ?> <small class="text-muted">/ month</small></h4>
                                    <ul class="text-start list-unstyled mt-3">
                                        <?php foreach ($pkg['features'] as $feature) : ?>
                                            <li class="mb-2"><i class="fas fa-check-circle text-danger me-2"></i> <?= esc($feature) ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <button class="btn btn-outline-danger mt-4 rounded-pill fw-semibold">CONTACT US</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <!-- Navigasi -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>

    <section>
      <div><?= $this->include('layout/footer') ?></div>
    </section>
</div>

<?= $this->endSection() ?>