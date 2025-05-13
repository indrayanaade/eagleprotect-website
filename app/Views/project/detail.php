<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<?php $uri = service('uri'); ?>
<div id="navbar-spacer-detail"></div>
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark custom-navbar-detail">
    <div class="container-fluid">
        <a class="navbar-brand ps-5 fw-bold" href="<?= base_url('/') ?>"><img id="navbar-logo" src="<?= base_url('assets/img/eagle-logo-img-black.svg') ?>"></a>
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
    <div class="detail-title">
      <h4 class="site-title">Projects</h4>
      <h1 class="title-project"><?= esc($projectData['title']) ?></h1>
    </div>

    <div class="cover-image">
        <img src="<?= base_url('assets/img/' . esc($projectData['cover_image'])) ?>" alt="<?= esc($projectData['title']) ?>" />
    </div>

    <div class="content">
        <div class="content-left">
          <span class="txt_title_left mb-5"><?= nl2br($projectData['content']['main']) ?></span>
          <p class="txt_desc"><?= nl2br($projectData['content']['main_desc']) ?></p>
          <span class="txt_title_left mb-5"><?= nl2br($projectData['content']['extra']) ?></span>
          <p class="txt_desc"><?= nl2br($projectData['content']['extra_desc']) ?></p>
        </div>

        <div class="content-right">
            <div class="info-box">
                <h4>Information</h4>
                <div class="row">
                    <div class="col">
                        <p><span class="info_bold">Date</span></p>
                        <p><span class="info_bold">Location</span></p>
                        <p><span class="info_bold">Time</span></p>
                    </div>
                    <div class="col">
                        <p><?= esc($projectData['info']['date']) ?></p>
                        <p><?= esc($projectData['info']['location']) ?></p>
                        <p><?= esc($projectData['info']['time']) ?></p>
                    </div>
                </div>
            </div>

            <div class="organizer-box">
                <h4>Contact Organizer</h4>
                <div class="organizer-content">
                    <img src="<?= base_url('assets/img/'.esc($projectData['organizer']['photo'])) ?>" alt="Profile Photo" class="profile-img" />
                    <div class="organizer-info">
                        <p class="txt_organizer"><strong><?= esc($projectData['organizer']['name']) ?></strong>
                        <span class="title_organizer"><?= esc($projectData['organizer']['title']) ?></span></p>
                    </div>
                </div> <br>
                <div class="organizer-phone">
                    📞 &nbsp; <strong>Call More Info</strong> &nbsp; <span class="phone-org"><?= esc($projectData['organizer']['phone']) ?></span>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
  <div><?= $this->include('layout/footer') ?></div>
</section>

<?= $this->endSection() ?>