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

<section class="project-detail">
  <!-- <div class="container-fluid"> -->
    <div class="detail-title">
      <h4>Projects</h4>
      <h1><?= esc($projectData['title']) ?></h1>
    </div>

    <div class="cover-image">
        <img src="<?= base_url('assets/img/' . esc($projectData['cover_image'])) ?>" alt="<?= esc($projectData['title']) ?>" />
    </div>

    <div class="content">
        <div class="content-left">
          <h2><?= esc($projectData['content']['main']) ?></h2>
          <p><?= nl2br($projectData['content']['main_desc']) ?></p>
          <h2><?= esc($projectData['content']['extra']) ?></h2>
          <p><?= nl2br($projectData['content']['extra_desc']) ?></p>
        </div>

        <div class="content-right">
            <div class="info-box">
                <h4>Information</h4>
                <p><strong>Date:</strong> <?= esc($projectData['info']['date']) ?></p>
                <p><strong>Location:</strong> <?= esc($projectData['info']['location']) ?></p>
                <p><strong>Time:</strong> <?= esc($projectData['info']['time']) ?></p>
            </div>

            <div class="organizer-box">
                <h4>Contact Organizer</h4>
                <p><strong><?= esc($projectData['organizer']['name']) ?></strong><br>
                <?= esc($projectData['organizer']['title']) ?></p>
                <p>📞 &nbsp <?= esc($projectData['organizer']['phone']) ?></p>
            </div>
        </div>
    </div>
  <!-- </div> -->
</section>

<section>
  <div><?= $this->include('layout/footer') ?></div>
</section>

<?= $this->endSection() ?>