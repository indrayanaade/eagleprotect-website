<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<?php $uri = service('uri'); ?>
<div class="only-desktop">
  <nav id="navbar" class="navbar navbar-expand-lg navbar-dark custom-navbar-detail-2">
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
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb-custom text-uppercase">
              <li><a href="<?= base_url() ?>">Home</a></li>
              <li><a href="<?= base_url('news_room') ?>">News</a></li>
              <li class="active"><?= esc($news['slug']) ?></li>
          </ol>
      </nav>

      <!-- Category Tag -->
      <div class="text-badge mt-5">
        <span class="badge-category text-uppercase"><?= esc($news['category_name']) ?></span>
      </div>

      <!-- Title -->
      <h1 class="txt_detail_title"><?= esc($news['title']) ?></h1>

      <!-- Author + Date -->
      <p class="txt_author">
        by <?= esc($news['news_author']) ?> <br>
        <small class="txt_publish"><?= date('H:i A', strtotime($news['created_at'])) ?> | <?= date('d F Y', strtotime($news['published_at'])) ?></small>
      </p>
    </div>
  </section>

  <section class="news-content position-relative pb-5">
    <!-- Offset Featured Image -->
    <div class="image-wrapper ratio-wrapper">
      <img src="<?= base_url('assets/img/news/' . $news['thumbnail']) ?>" 
          alt="<?= esc($news['title']) ?>" 
          class="img-detail">
    </div>

    <div class="container mt-5">
      <div class="d-flex align-items-start flex-md-row flex-column">
          
          <!-- Social Icons -->
          <div class="social-icons d-none d-md-flex flex-column align-items-center pt-2">
          <a href="#" class="text-danger"><i class="bi bi-instagram fs-4"></i></a>
          <a href="#" class="text-danger"><i class="bi bi-facebook fs-4"></i></a>
          <a href="#" class="text-danger"><i class="bi bi-linkedin fs-4"></i></a>
          </div>

          <!-- News Content -->
          <div class="flex-grow-1 news-contents">
              <h1 class="txt_content_title"><?= esc($news['title']) ?></h1>
              <p class="txt_content_desc"><?= $news['news_content'] ?></p>
          </div>

      </div>

      <?php if (!empty($relatedNews)): ?>
      <div class="pt-5">
        <h3 class="txt_read_another">Read Another News</h3>
        <div class="row g-4">
          <?php foreach ($relatedNews as $item): ?>
          <div class="col-md-4">
            <a href="<?= base_url('news_room/detail/view/' . $item['slug']) ?>" class="text-decoration-none text-dark">
              <div class="card h-100 shadow-sm border-0">
                <img src="<?= base_url('assets/img/news/' . $item['thumbnail']) ?>" 
                    class="card-img-top news-thumbnail" 
                    alt="<?= esc($item['title']) ?>">
                <div class="card-body">
                  <p class="text-category mb-1"><?= $item['category_name'] ?> • <small class="text-publish"><?= date('M jS Y', strtotime($item['published_at'])) ?></small></p>
                  <h5 class="text-title"><?= esc($item['title']) ?></h5>
                  <p class="text-excerpt"><?= esc($item['excerpt']) ?></p>
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

</div>

<div class="only-mobile">

</div>

<?= $this->endSection() ?>