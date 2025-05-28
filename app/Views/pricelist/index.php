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

    <section class="pricelist" data-aos="fade-up">
        <div class="container-fluid my-5">
            <h2 class="h2-roboto">PRICELIST</h2>
            <p class="p-lato">We have several Pricelists that can meet your needs.</p>

            <div class="filter-button-group d-flex justify-content-center mb-5 flex-wrap gap-2">
                <button class="btn btn-outline-secondary fw-semibold filter-btn" data-category="private">PRIVATE PACKAGES</button>
                <button class="btn btn-outline-secondary fw-semibold filter-btn" data-category="cctv">CCTV PACKAGES</button>
                <button class="btn btn-outline-secondary fw-semibold filter-btn" data-category="corporate">CORPORATE PACKAGES</button>
                <button class="btn btn-outline-secondary fw-semibold filter-btn" data-category="it_acquisition">IT ACQUISITION PACKAGE</button>
                <button class="btn btn-outline-secondary fw-semibold filter-btn" data-category="tourist_property">TOURIST PROPERTY COVERAGE</button>
                <button class="btn btn-outline-secondary fw-semibold filter-btn" data-category="comp_asset">COMPREHENSIVE ASSET AND PERSONAL PROTECTION</button>
                <button class="btn btn-outline-secondary fw-semibold filter-btn" data-category="by_request">BY REQUEST</button>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    // Ambil semua kategori unik dari $packages
                    $all_categories = array_unique(array_column($packages, 'category'));

                    foreach ($all_categories as $category) :
                        // Filter berdasarkan kategori
                        $filtered = array_filter($packages, fn($pkg) => $pkg['category'] === $category);
                        // Bagi per 3 item
                        $chunked = array_chunk($filtered, 3);
                        foreach ($chunked as $group) :
                    ?>
                        <div class="swiper-slide package-item" data-category="<?= esc($category) ?>">
                            <div class="d-flex gap-3 flex-wrap justify-content-center px-2">
                                <?php foreach ($group as $pkg) : ?>
                                    <div class="stat-card-wrapper">
                                        <div class="stat-card mt-3">
                                            <?php if (!empty($pkg['special_offer'])) : ?>
                                                <div class="card-offer">
                                                    <div class="special-offer-banner">
                                                        <?= esc($pkg['special_offer']) ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="card-price">
                                                <div class="price">
                                                    <h5 class="text-danger fw-bold"><?= esc($pkg['title']) ?></h5>
                                                    <?php if (!empty($pkg['utilities'])) : ?>
                                                        <h4 class="txt_utilities"><?= esc($pkg['utilities']) ?></h4>
                                                        <input class="utilities" type="hidden" value="<?= esc($pkg['utilities']) ?>">
                                                    <?php endif; ?>
                                                    <?php if (!empty($pkg['price'])) : ?>
                                                        <h4 class="fw-bold idr"><?= esc($pkg['price']) ?> <small class="text-muted">/ month</small></h4>
                                                    <?php endif; ?>
                                                    <?php if (!empty($pkg['sub_title'])) : ?>
                                                        <span class="sub-title"><?= esc($pkg['sub_title']) ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <?php if (!empty($pkg['feature_desc'])) : ?>
                                                <span class="feature-desc"><b><?= esc($pkg['feature_desc']) ?></b></span>
                                            <?php endif; ?>
                                            <div class="feature">
                                                <?php if (!empty($pkg['image'])) : ?>
                                                    <img class="img-feature" src="<?= esc($pkg['image']) ?>" alt="">
                                                <?php endif; ?>
                                                <?php if (!empty($pkg['image_apps'])) : ?>
                                                    <div class="d-flex flex-wrap gap-2 align-items-center">
                                                        <?php foreach ($pkg['image_apps'] as $image_apps) : ?>
                                                            <img src="<?= esc($image_apps) ?>" alt="" style="height: 40px; width:110px;">
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <ul class="text-start list-unstyled mt-3">
                                                    <?php foreach ($pkg['features'] as $feature) : ?>
                                                        <li class="mb-2 d-flex align-items-start">
                                                            <i class="fas fa-check-circle text-danger me-2 mt-1"></i>
                                                            <span class="txt_feature"><?= nl2br(esc($feature)) ?></span>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <?php if (!empty($pkg['add_ons_title'])) : ?>
                                                    <span class="add_ons_title"><b><?= esc($pkg['add_ons_title']) ?>:</b></span>
                                                <?php endif; ?>
                                                <?php if (!empty($pkg['add_ons'])) : ?>
                                                    <ul class="text-start list-unstyled mt-3">
                                                    <?php foreach ($pkg['add_ons'] as $add_ons) : ?>
                                                        <li class="mb-2 d-flex align-items-start">
                                                            <i class="fas fa-check-circle text-danger me-2 mt-1"></i>
                                                            <span class="txt_feature"><?= esc($add_ons) ?></span>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <?php endif; ?>
                                            </div>

                                            <?php if (!empty($pkg['waiting_list'])) : ?>
                                                <div class="btn-wrapper mb-2">
                                                    <button class="btn-waitlist"><?=esc($pkg['waiting_list'])?></button>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (!empty($pkg['users'])) : ?>
                                                <span class="total-users mb-2"><?= esc($pkg['users']) ?></span>
                                            <?php endif; ?>

                                            <div class="btn-container mb-3">
                                                <button class="btn btn-contact">CONTACT US</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php
                        endforeach;
                    endforeach;
                    ?>
                </div>
                <!-- Swiper Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </section>

    <section data-aos="fade-up">
      <div><?= $this->include('layout/footer') ?></div>
    </section>
</div>

<div class="only-mobile">
    <nav id="navbar-mobile-pricelist" class="navbar navbar-expand-lg navbar-dark custom-navbar-mobile">
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
    <div class="tab-sticky pt-3">
        <div class="container-fluid">
            <h2 class="h2-roboto-mobile">PRICELIST</h2>
            <p class="p-lato-mobile">We have several Pricelists that can meet your needs.</p>
        </div>
        <div class="filter-tab-container">
            <button class="btn filter-btn-mobile" data-category="private"><span class="txt_category">PRIVATE PACKAGES</span></button>
            <button class="btn filter-btn-mobile" data-category="cctv"><span class="txt_category">CCTV PACKAGES</span></button>
            <button class="btn filter-btn-mobile" data-category="corporate"><span class="txt_category">CORPORATE PACKAGES</span></button>
            <button class="btn filter-btn-mobile" data-category="it_acquisition"><span class="txt_category">IT ACQUISITION PACKAGE</span></button>
            <button class="btn filter-btn-mobile" data-category="tourist_property"><span class="txt_category">TOURIST PROPERTY COVERAGE</span></button>
            <button class="btn filter-btn-mobile" data-category="comp_asset"><span class="txt_category">COMPREHENSIVE ASSET AND PERSONAL PROTECTION</span></button>
            <button class="btn filter-btn-mobile" data-category="by_request"><span class="txt_category">BY REQUEST</span></button>
        </div>
    </div>
    <section class="pricelist-mobile" data-aos="fade-up">
        
        <div class="swiper mySwiper-mobile">
            <div class="swiper-wrapper">
            <?php
                // Ambil semua kategori unik dari $packages
                $all_categories = array_unique(array_column($packages, 'category'));

                foreach ($all_categories as $category) :
                    // Filter berdasarkan kategori

                    $filtered = array_filter($packages, fn($pkg) => $pkg['category'] === $category);
                    // Bagi per 3 item
                    $chunked = array_chunk($filtered, 5);
                    foreach ($chunked as $group) :
                ?>
                    <div class="swiper-slide-mobile package-item-mobile" data-category-mobile="<?= esc($category) ?>">
                        <div class="d-flex gap-2 flex-wrap justify-content-start px-2">
                            <?php foreach ($group as $pkg) : ?>
                                <div class="stat-card-wrapper">
                                    <div class="stat-card-mobile mt-3">
                                        <?php if (!empty($pkg['special_offer'])) : ?>
                                            <div class="card-offer">
                                                <div class="special-offer-banner-mobile">
                                                    <?= esc($pkg['special_offer']) ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="card-price-mobile">
                                            <div class="price-mobile">
                                                <h5 class="text-danger fw-bold mt-3"><?= esc($pkg['title']) ?></h5>
                                                <?php if (!empty($pkg['utilities'])) : ?>
                                                    <h4 class="txt_utilities_mobile"><?= esc($pkg['utilities']) ?></h5>
                                                <?php endif; ?>
                                                <?php if (!empty($pkg['price'])) : ?>
                                                    <h4 class="fw-bold idr"><?= esc($pkg['price']) ?> <small class="text-muted">/ month</small></h4>
                                                <?php endif; ?>
                                                <?php if (!empty($pkg['sub_title'])) : ?>
                                                    <span class="sub-title-mobile"><?= esc($pkg['sub_title']) ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php if (!empty($pkg['feature_desc'])) : ?>
                                            <span class="feature-desc-mobile"><b><?= esc($pkg['feature_desc']) ?></b></span>
                                        <?php endif; ?>
                                        <div class="feature-mobile">
                                            <?php if (!empty($pkg['image'])) : ?>
                                                <img src="<?= esc($pkg['image']) ?>" alt="" style="width:150px;">
                                            <?php endif; ?>
                                            <?php if (!empty($pkg['image_apps'])) : ?>
                                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                                    <?php foreach ($pkg['image_apps'] as $image_apps) : ?>
                                                        <img src="<?= esc($image_apps) ?>" alt="" style="height: 40px; width:80px;">
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                            <ul class="text-start list-unstyled mt-3">
                                                <?php foreach ($pkg['features'] as $feature) : ?>
                                                    <li class="mb-2 d-flex align-items-start">
                                                        <i class="fas fa-check-circle text-danger me-2 mt-1"></i>
                                                        <span class="txt_feature_mobile"><?= nl2br(esc($feature)) ?></span>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <?php if (!empty($pkg['add_ons_title'])) : ?>
                                                <span class="add_ons_title"><b><?= esc($pkg['add_ons_title']) ?>:</b></span>
                                            <?php endif; ?>
                                            <?php if (!empty($pkg['add_ons'])) : ?>
                                                <ul class="text-start list-unstyled mt-3">
                                                <?php foreach ($pkg['add_ons'] as $add_ons) : ?>
                                                    <li class="mb-2 d-flex align-items-start">
                                                        <i class="fas fa-check-circle text-danger me-2 mt-1"></i>
                                                        <span class="txt_feature_mobile"><?= esc($add_ons) ?></span>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <?php endif; ?>
                                        </div>

                                        <?php if (!empty($pkg['waiting_list'])) : ?>
                                            <div class="btn-wrapper mb-2">
                                                <button class="btn-waitlist-mobile"><?=esc($pkg['waiting_list'])?></button>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($pkg['users'])) : ?>
                                            <span class="total-users-mobile mb-2"><?= esc($pkg['users']) ?></span>
                                        <?php endif; ?>

                                        <div class="btn-container-mobile">
                                            <button class="btn btn-contact-mobile"><span class="txt_contact">CONTACT US</span></button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php
                    endforeach;
                endforeach;
                ?>
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