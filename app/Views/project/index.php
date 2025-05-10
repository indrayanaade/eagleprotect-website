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
        <?php foreach ($project_slides as $slide): ?>
          <div class="program-card" data-id="<?= esc($slide['id']) ?>" style="background-image: url('assets/img/<?= esc($slide['img']) ?>');">
            <div class="program-content">
                <h3><?= esc($slide['title']) ?></h3>
                <p><?= esc($slide['desc']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
    </div>
</section>

<section>
  <div><?= $this->include('layout/footer') ?></div>
</section>


<?= $this->endSection() ?>