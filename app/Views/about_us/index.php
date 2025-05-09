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
    <section class="about-section">
        <h1 class="about-title">ABOUT US</h1>
        <img src="assets/img/hero-7.png" alt="About Team" class="team-image" />
    </section>

    <section class="who-we-are">
        <div class="container-fluid">
            <p class="section-label">Who We Are</p>
            <h1 class="main-heading">
            EAGLE PROTECT is a Leading Private Security and Protection Company with Global Expertise
            </h1>
            <p class="description">
            EAGLE PROTECT is a premier private security and protection company with extensive global expertise, proudly delivering top-tier security solutions specifically tailored to meet the diverse and evolving needs of individuals, businesses, and organizations throughout Bali. Founded on the principles of integrity, vigilance, and excellence, our company is dedicated to providing unmatched safety and peace of mind to our clients, whether they require personal protection, event security, corporate safeguarding, or residential surveillance. With a strong and unwavering commitment to safety and professionalism, we integrate cutting-edge technology, strategic risk assessment, and proactive planning into every operation. Our team consists of highly trained and experienced personnel, law enforcement, and international security operations, ensuring that our clients receive world-class protection at all times. By combining global standards with local expertise, EAGLE PROTECT has earned its reputation as a trusted and dependable partner in the security industry, known for delivering reliable, discreet, and comprehensive security services that exceed expectations and adapt to the dynamic nature of modern threats.
            </p>

            <div class="features-grid">
                <div class="feature-item">
                    <img src="assets/img/about-01.png" alt="Icon" />
                    <p><strong>EAGLE PROTECT</strong> is a leading private security and protection company with global expertise, committed to delivering safety, reliability, and unmatched professionalism.</p>
                </div>
                <div class="feature-item">
                    <img src="assets/img/about-02.png" alt="Icon" />
                    <p><strong>CYBERSECURITY SYSTEM</strong> ensures robust protection for digital assets through advanced threat detection, proactive risk management, and continuous monitoring...</p>
                </div>
                <div class="feature-item">
                    <img src="assets/img/about-03.png" alt="Icon" />
                    <p><strong>TECHNOLOGY INTEGRATION</strong> combines cutting-edge systems and tools into seamless solutions, optimizing efficiency, enhancing security...</p>
                </div>
                <div class="feature-item">
                    <img src="assets/img/about-04.png" alt="Icon" />
                    <p><strong>PERSONAL PROTECTION</strong> offers customized security services designed to ensure the safety and well-being of individuals...</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-vision-section">
        <div class="card-row1">
            <div class="card-img-col">
                <img src="<?= base_url('assets/img/card-content-03.png') ?>" alt="Mission Image" class="card-img" />
            </div>
            <div class="card-text-col">
                <h2>Our Mission</h2>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book
                </p>
            </div>
        </div>

        <div class="card-row2">
            <div class="card-img-col">
                <img src="<?= base_url('assets/img/card-content-04.png') ?>" alt="Mission Image" class="card-img" />
            </div>
            <div class="card-text-col">
                <h2>Our Vision</h2>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book
                </p>
            </div>
        </div>
    </section>

    <section class="our-team">
        <div class="container-fluid">
            <p class="section-label">Our Team</p>
            <h1 class="main-heading">Meet Our Team</h1>
            <div class="team-grid">
                <!-- Anggota Tim -->
                <div class="team-member">
                <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/galuh.png') ?>');"></div>
                    <h4 class="mt-2">Galuh Ayu Ningrum</h4>
                    <p>PRESIDENT DIRECTOR</p>
                </div>
                <div class="team-member">
                    <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/zuni.png') ?>');"></div>
                    <h4 class="mt-2">Zuni Indriani</h4>
                    <p>HEAD OFFICE OPERATIONS</p>
                </div>
                <div class="team-member">
                <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Kadek Bayu Adi Putra</h4>
                    <p>OPERATIONAL COMMAND</p>
                </div>
                <div class="team-member">
                <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/galih.png') ?>');"></div>
                    <h4 class="mt-2">Galih Wisnu Triatmojo</h4>
                    <p>SALES DEPARTMENT</p>
                </div>

                <div class="team-member">
                <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/kevin.png') ?>');"></div>
                    <h4 class="mt-2">Kevin Paulus Riahtas</h4>
                    <p>IT DEPARTMENT</p>
                </div>
                <div class="team-member">
                    <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Anas Rahman</h4>
                    <p>DRONE DEPARTMENT</p>
                </div>
                <div class="team-member">
                <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Putu Bagus Adi Wibawa. S.T</h4>
                    <p>LEGAL DEPARTMENT </p>
                </div>
                <div class="team-member">
                <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/mega.png') ?>');"></div>
                    <h4 class="mt-2">Kadek Mega Yuliantari</h4>
                    <p>PROCUREMENT & INVENTORY CONTROL DEPARTMENT</p>
                </div>

                <div class="team-member">
                <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Tamara Sallila Natasha Saini</h4>
                    <p>QUALITY CONTROL DEPARTMENT</p>
                </div>
                <div class="team-member">
                    <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Gabriella Tri Wahyuni</h4>
                    <p>HUMAN RESOURCES (HR) DEPARTMENT</p>
                </div>
                <div class="team-member">
                <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">I Made Agus Dwipayana</h4>
                    <p>FINANCIAL DEPARTMENT</p>
                </div>
                <div class="team-member">
                <div class="team-photo" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Oscar Tan Eagles</h4>
                    <p>EXCLUSIVE MARKETING PARTNER PT. FUTURIFY – CEO</p>
                </div>
            </div>
        </div>
    </section>

    <section class="tech-section">
        <div class="tech-container">
            <div class="tech-left">
            <img src="assets/img/tech-drone.png" alt="Drone" class="drone-img">
            </div>
            <div class="tech-right">
            <p class="section-label">Who We Are</p>
            <h2 class="section-title">
                We Have the Latest<br>
                Technology Ready to Help<br>
                Performance
            </h2>
            <ul class="tech-features">
                <li>
                <img src="assets/img/tech-icon-drone.png" alt="Check Icon" />
                <span class="tech-desc">We use drone technology and have trained drone pilots to assist in every handling.</span>
                </li>
                <li>
                <img src="assets/img/tech-icon-sos.png" alt="Check Icon" />
                <span class="tech-desc">Our SOS Button Service is a premium safety feature designed to provide rapid emergency assistance with unparalleled reliability.</span>
                </li>
                <li>
                <img src="assets/img/tech-icon-walkie.png" alt="Check Icon" />
                <span class="tech-desc">Featuring high-level security technology, EGLNet shields and ensuring your privacy also data are always secure.</span>
                </li>
            </ul>
            </div>
        </div>
    </section>

    <section class="documentation-section">
        <div class="container-fluid p-100">
            <div class="doc-header">
            <div class="text-left">
                <p class="label">Documentation</p>
                <h1 class="title">We Treat Every Eagle Protect Member as Family</h1>
            </div>
            <div class="text-right">
                <p>
                At Eagle Protect, we foster a strong sense of belonging by treating every member as family, valuing their dedication, supporting their growth, and prioritizing their well-being. We also document every activity and achievement to recognize their contributions, ensure transparency, and continuously improve our team's performance and unity.
                </p>
            </div>
            </div>
        </div>

        <div class="doc-gallery-wrapper">
            <div class="doc-gallery-grid">
                <div class="doc-item" style="grid-column: 1; grid-row: 1 / span 2;">
                    <img class="img-doc1" src="assets/img/docs/doc-1.png" alt="Doc 1">
                </div>
                <div class="doc-item" style="grid-column: 2; grid-row: 1;">
                    <img class="img-short"src="assets/img/docs/doc-2.png" alt="Doc 2">
                </div>
                <div class="doc-item" style="grid-column: 2; grid-row: 2;">
                    <img class="img-short"src="assets/img/docs/doc-3.png" alt="Doc 3">
                </div>
                <div class="doc-item" style="grid-column: 3; grid-row: 1 / span 2;">
                    <img class="img-tall"src="assets/img/docs/doc-4.png" alt="Doc 4">
                </div>
                <div class="doc-item" style="grid-column: 4; grid-row: 1;">
                    <img class="img-short"src="assets/img/docs/doc-5.png" alt="Doc 5">
                </div>
                <div class="doc-item" style="grid-column: 4; grid-row: 2;">
                    <img class="img-short"src="assets/img/docs/doc-6.png" alt="Doc 6">
                </div>
            </div>
        </div>
    </section>

    <section>
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

    <section class="about-section-mobile">
        <h1 class="about-title-mobile">ABOUT US</h1>
        <img src="assets/img/hero-7-mobile.png" alt="About Team" class="team-image-mobile" />
    </section>

    <section class="who-we-are-mobile">
        <div class="container-fluid">
            <p class="section-label-mobile">Who We Are</p>
            <h1 class="main-heading-mobile">
            EAGLE PROTECT is a Leading Private Security and Protection Company with Global Expertise
            </h1>
            <p class="description-mobile">
            EAGLE PROTECT is a premier private security and protection company with extensive global expertise, proudly delivering top-tier security solutions specifically tailored to meet the diverse and evolving needs of individuals, businesses, and organizations throughout Bali. Founded on the principles of integrity, vigilance, and excellence, our company is dedicated to providing unmatched safety and peace of mind to our clients, whether they require personal protection, event security, corporate safeguarding, or residential surveillance. With a strong and unwavering commitment to safety and professionalism, we integrate cutting-edge technology, strategic risk assessment, and proactive planning into every operation. Our team consists of highly trained and experienced personnel, law enforcement, and international security operations, ensuring that our clients receive world-class protection at all times. By combining global standards with local expertise, EAGLE PROTECT has earned its reputation as a trusted and dependable partner in the security industry, known for delivering reliable, discreet, and comprehensive security services that exceed expectations and adapt to the dynamic nature of modern threats.
            </p>

        <div class="features-grid-mobile">
            <div class="feature-item-mobile">
                <img src="assets/img/about-01.png" alt="Icon" />
                <p><strong>EAGLE PROTECT</strong> is a leading private security and protection company with global expertise, committed to delivering safety, reliability, and unmatched professionalism.</p>
            </div>
            <div class="feature-item-mobile">
                <img src="assets/img/about-02.png" alt="Icon" />
                <p><strong>CYBERSECURITY SYSTEM</strong> ensures robust protection for digital assets through advanced threat detection, proactive risk management, and continuous monitoring...</p>
            </div>
            <div class="feature-item-mobile">
                <img src="assets/img/about-03.png" alt="Icon" />
                <p><strong>TECHNOLOGY INTEGRATION</strong> combines cutting-edge systems and tools into seamless solutions, optimizing efficiency, enhancing security...</p>
            </div>
            <div class="feature-item-mobile">
                <img src="assets/img/about-04.png" alt="Icon" />
                <p><strong>PERSONAL PROTECTION</strong> offers customized security services designed to ensure the safety and well-being of individuals...</p>
            </div>
        </div>

        </div>
    </section>

    <section class="mission-vision-section-mobile">
        <div class="card-row1-mobile">
            <div class="card-img-col-mobile">
                <img src="<?= base_url('assets/img/card-content-03.png') ?>" alt="Mission Image" class="card-img" />
            </div>
            <div class="card-text-col-mobile">
                <h2>Our Mission</h2>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book
                </p>
            </div>
        </div>

        <div class="card-row2-mobile">
            <div class="card-img-col-mobile">
                <img src="<?= base_url('assets/img/card-content-04.png') ?>" alt="Mission Image" class="card-img" />
            </div>
            <div class="card-text-col-mobile">
                <h2>Our Vision</h2>
                <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book
                </p>
            </div>
        </div>
    </section>

    <section class="our-team-mobile">
        <div class="container-fluid">
            <p class="section-label-mobile">Our Team</p>
            <h1 class="main-heading-mobile">Meet Our Team</h1>
            <div class="team-grid-mobile">
                <div class="team-member-mobile">
                <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/galuh.png') ?>');"></div>
                    <h4 class="mt-2">Galuh Ayu Ningrum</h4>
                    <p>PRESIDENT DIRECTOR</p>
                </div>
                <div class="team-member-mobile">
                    <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/zuni.png') ?>');"></div>
                    <h4 class="mt-2">Zuni Indriani</h4>
                    <p>HEAD OFFICE OPERATIONS</p>
                </div>
                <div class="team-member-mobile">
                <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Kadek Bayu Adi Putra</h4>
                    <p>OPERATIONAL COMMAND</p>
                </div>
                <div class="team-member-mobile">
                <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/galih.png') ?>');"></div>
                    <h4 class="mt-2">Galih Wisnu Triatmojo</h4>
                    <p>SALES DEPARTMENT</p>
                </div>
                <div class="team-member-mobile">
                    <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/kevin.png') ?>');"></div>
                    <h4 class="mt-2">Kevin Paulus Riahtas</h4>
                    <p>IT DEPARTMENT</p>
                </div>
                <div class="team-member-mobile">
                <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Anas Rahman</h4>
                    <p>DRONE DEPARTMENT</p>
                </div>
                <div class="team-member-mobile">
                <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Putu Bagus Adi Wibawa. S.T</h4>
                    <p>LEGAL DEPARTMENT </p>
                </div>
                <div class="team-member-mobile">
                    <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/mega.png') ?>');"></div>
                    <h4 class="mt-2">Kadek Mega Yuliantari</h4>
                    <p>PROCUREMENT & INVENTORY CONTROL DEPARTMENT</p>
                </div>
                <div class="team-member-mobile">
                <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Tamara Sallila Natasha Saini</h4>
                    <p>QUALITY CONTROL DEPARTMENT</p>
                </div>
                <div class="team-member-mobile">
                <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Gabriella Tri Wahyuni</h4>
                    <p>HUMAN RESOURCES (HR) DEPARTMENT</p>
                </div>
                <div class="team-member-mobile">
                    <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">I Made Agus Dwipayana</h4>
                    <p>FINANCIAL DEPARTMENT</p>
                </div>
                <div class="team-member-mobile">
                <div class="team-photo-mobile" style="background-image: url('<?= base_url('assets/img/team/sample.png') ?>');"></div>
                    <h4 class="mt-2">Oscar Tan Eagles</h4>
                    <p>EXCLUSIVE MARKETING PARTNER
                    PT. FUTURIFY – CEO</p>
                </div>
                
            </div>
        </div>
    </section>

    <section class="tech-section-mobile">
        <div class="tech-hero-mobile">
            <img src="assets/img/tech-drone-mobile.png" alt="Drone" class="drone-img-mobile">
            <div class="tech-content-mobile">
            <p class="section-label-mobile">Who We Are</p>
            <h2 class="section-title-mobile">
                We Have the Latest Technology<br>
                Ready to Help Performance
            </h2>
            </div>
        </div>
        
        <ul class="tech-features-mobile">
            <li>
            <img src="assets/img/tech-icon-drone.png" alt="Drone Icon">
            <span>We use drone technology and have trained drone pilots to assist in every handling.</span>
            </li>
            <li>
            <img src="assets/img/tech-icon-sos.png" alt="SOS Icon">
            <span>Our SOS Button Service is a premium safety feature designed to provide rapid emergency assistance with unparalleled reliability.</span>
            </li>
            <li>
            <img src="assets/img/tech-icon-walkie.png" alt="Walkie Icon">
            <span>Featuring high-level security technology, EGLNet shields and ensuring your privacy also data are always secure.</span>
            </li>
        </ul>
    </section>


    <section class="documentation-section-mobile">
        <div class="container-fluid">
            <div class="doc-header-mobile">
            <div class="text-left">
                <p class="label-mobile">Documentation</p>
                <h1 class="title-mobile">We Treat Every Eagle Protect Member as Family</h1>
            </div>
            <div class="text-right mb-4">
                <p>
                At Eagle Protect, we foster a strong sense of belonging by treating every member as family, valuing their dedication, supporting their growth, and prioritizing their well-being. We also document every activity and achievement to recognize their contributions, ensure transparency, and continuously improve our team's performance and unity.
                </p>
            </div>
            </div>
        </div>

        <div class="doc-gallery-wrapper-mobile">
        <div class="doc-gallery-grid-mobile">
            <div class="doc-item-mobile img-doc1-mobile">
                <img src="assets/img/docs/doc-1.png" alt="Doc 1">
            </div>
            <div class="doc-item-mobile img-doc2-mobile">
                <img src="assets/img/docs/doc-2.png" alt="Doc 2">
            </div>
            <div class="doc-item-mobile img-doc3-mobile">
                <img src="assets/img/docs/doc-3.png" alt="Doc 3">
            </div>
            <div class="doc-item-mobile img-doc4-mobile">
                <img src="assets/img/docs/doc-4.png" alt="Doc 4">
            </div>
            <div class="doc-item-mobile img-doc5-mobile">
                <img src="assets/img/docs/doc-5.png" alt="Doc 5">
            </div>
            <div class="doc-item-mobile img-doc6-mobile">
                <img src="assets/img/docs/doc-6.png" alt="Doc 6">
            </div>
        </div>
    </section>
    
    <section class="footer-mod">
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
                    
                    <div class="col-12 mb-5">
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