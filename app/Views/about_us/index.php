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
        <div class="card">
            <img src="assets/img/card-content-01" alt="Mission Image" class="card-img" />
            <div class="card-content">
            <h2>Our Mission</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                a galley of type and scrambled it to make a type specimen book
            </p>
            </div>
        </div>

        <div class="card">
            <img src="assets/img/card-content-02" alt="Vision Image" class="card-img" />
            <div class="card-content">
            <h2>Our Vision</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                a galley of type and scrambled it to make a type specimen book
            </p>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>