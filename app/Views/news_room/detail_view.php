<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<?php $uri = service('uri'); ?>

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

<section class="detail-news">
  <div class="container-fluid">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('news_room') ?>">News</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail News</li>
      </ol>
    </nav>

    <!-- Category Tag -->
    <div class="text-center mb-3">
      <span class="badge bg-danger px-3 py-2 text-white text-uppercase"><?= esc($news['category_name']) ?></span>
    </div>

    <!-- Title -->
    <h1 class="fw-bold text-center mb-2"><?= esc($news['title']) ?></h1>

    <!-- Author + Date -->
    <p class="text-center text-muted mb-4">
      by <?= esc($news['news_author']) ?> <br>
      <small><?= date('H:i A', strtotime($news['created_at'])) ?> | <?= date('d F Y', strtotime($news['published_at'])) ?></small>
    </p>

    <!-- Featured Image -->
    <div class="text-center mb-5">
      <img src="<?= base_url('assets/img/news/' . $news['thumbnail']) ?>" alt="<?= esc($news['title']) ?>" class="img-fluid rounded w-100" style="max-height: 500px; object-fit: cover;">
    </div>

    <!-- Share Icons -->
    <div class="mb-4 d-flex flex-column align-items-start gap-2" style="position: absolute; left: 40px;">
      <a href="#" class="text-danger"><i class="bi bi-instagram fs-4"></i></a>
      <a href="#" class="text-danger"><i class="bi bi-linkedin fs-4"></i></a>
      <a href="#" class="text-danger"><i class="bi bi-envelope fs-4"></i></a>
    </div>

    <!-- Content -->
    <div class="news-content mb-5" style="max-width: 900px; margin: auto;">
      <?= $news['news_content'] ?> <!-- Sudah berupa HTML -->
    </div>

    <!-- Another News -->
    <?php if (!empty($relatedNews)): ?>
    <div class="pt-5 border-top">
      <h3 class="fw-bold mb-4">Read Another News</h3>
      <div class="row g-4">
        <?php foreach ($relatedNews as $item): ?>
        <div class="col-md-4">
          <a href="<?= base_url('news_room/detail/view/' . $item['slug']) ?>" class="text-decoration-none text-dark">
            <div class="card h-100 shadow-sm border-0">
              <img src="<?= base_url('assets/img/news/' . $item['thumbnail']) ?>" class="card-img-top" alt="<?= esc($item['title']) ?>" style="height: 200px; object-fit: cover;">
              <div class="card-body">
                <p class="text-danger small mb-1"><?= $item['category_name'] ?> • <?= date('M jS Y', strtotime($item['published_at'])) ?></p>
                <h5 class="fw-bold"><?= esc($item['title']) ?></h5>
                <p class="text-muted small"><?= esc($item['excerpt']) ?></p>
              </div>
            </div>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>

<section>
    <div><?= $this->include('layout/footer') ?></div>
</section>

<?= $this->endSection() ?>