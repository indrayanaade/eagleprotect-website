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
<section class="project">
    <div class="container-fluid p-50 text-md-start order-md-last align-items-center justify-content-end">
        <div class="project-title">
            <h2 class="roboto-h2-red">PROJECTS</h2>
            <p class="lato-regular-desc text-white">These projects are just the beginning of our journey to make Bali a safer, cleaner, and more advanced place to live, work, and visit. With these initiatives, EAGLE PROTECT is at the forefront of bringing innovative solutions to the island's unique challenges.</p>
        </div>
    </div>
</section>
<section class="program-section">
  <div class="program-grid">
    <!-- Item 1 -->
    <div class="program-card" style="background-image: url('assets/img/rubish-free.png');">
      <div class="program-content">
        <h3>Rubbish-Free Initiative</h3>
        <p>We are committed to enhancing the quality of life and environment in our patrolled areas...</p>
      </div>
    </div>

    <!-- Item 2 -->
    <div class="program-card" style="background-image: url('assets/img/smart-city.png');">
      <div class="program-content">
        <h3>Creating a Smart City</h3>
        <p>In partnership with Profs Badung, we share the goal of transforming Bali into a smart city...</p>
      </div>
    </div>

    <!-- Item 3 -->
    <div class="program-card" style="background-image: url('assets/img/medical-emergency.png');">
      <div class="program-content">
        <h3>Medical Emergency Response</h3>
        <p>We are developing more efficient emergency response methods with healthcare partners...</p>
      </div>
    </div>

    <!-- Item 4 -->
    <div class="program-card" style="background-image: url('assets/img/aerial-control.png');">
      <div class="program-content">
        <h3>Aerial Control</h3>
        <p>As part of smart city evolution, we implement aerial control using drones to enhance safety...</p>
      </div>
    </div>

    <!-- Dummy 1 -->
    <div class="program-card" style="background-image: url('assets/img/dummy-layout.png');">
      <div class="program-content">
        <h3>Dummy Layout</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
      </div>
    </div>

    <!-- Dummy 2 -->
    <div class="program-card" style="background-image: url('assets/img/dummy-layout.png');">
      <div class="program-content">
        <h3>Dummy Layout</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
      </div>
    </div>

    <!-- Dummy 3 -->
    <div class="program-card" style="background-image: url('assets/img/dummy-layout.png');">
      <div class="program-content">
        <h3>Dummy Layout</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
      </div>
    </div>

    <!-- Dummy 4 -->
    <div class="program-card" style="background-image: url('assets/img/dummy-layout.png');">
      <div class="program-content">
        <h3>Dummy Layout</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div><?= $this->include('layout/footer') ?></div>
</section>


<?= $this->endSection() ?>