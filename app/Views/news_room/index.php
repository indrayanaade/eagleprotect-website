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

<section class="py-5 bg-white headline-section">
  <div class="container-fluid">
    <h2 class="display-5 mb-2 text-header">Our Newsroom</h2>
    <p class="text-quotes mb-5">Stay informed with the latest updates, insights, and stories from Eagle Protect. We bring you timely news on safety, innovation, and the people behind our mission to protect what matters most.</p>

    <?php if ($headline): ?>
    <a href="<?= base_url('news_room/detail/view/' . $headline->slug) ?>" class="text-decoration-none text-dark">
      <div class="card headline-card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="row g-0 align-items-stretch">
          <!-- Left Content -->
          <div class="col-lg-6 p-5 d-flex flex-column justify-content-between headline-desc">
            <div>
              <span class="text-category text-uppercase"><?= esc($headline->category_name) ?></span>
              <h3 class="mt-2 mb-3 text-title"><?= esc($headline->title) ?></h3>
              <p class="text-excerpt mb-0">
                <?= esc($headline->excerpt) ?>
              </p>
            </div>
            <div class="mt-4">
              <small class="text-publish"><?= date('F jS Y', strtotime($headline->published_at)) ?></small>
            </div>
          </div>

          <!-- Right Image -->
          <div class="col-lg-6">
            <div class="headline-image h-100">
              <img 
                src="<?= base_url('assets/img/news/' . $headline->thumbnail) ?>" 
                alt="<?= esc($headline->title) ?>" 
                class="img-fluid h-100 w-100 object-fit-cover rounded-end-4">
            </div>
          </div>
        </div>
      </div>
    </a>
    <?php else: ?>
      <div class="alert alert-warning">No headline news available.</div>
    <?php endif; ?>
  </div>
</section>

<section class="news-related" data-exclude="<?= esc($headline->slug ?? '') ?>">
  <div class="container-fluid">
    <h1 class="text-related">News Related to Eagle Protect</h1>
    
    <div class="categories">
      <button class="category active" data-category="all">All</button>
      <?php foreach ($categories as $cat): ?>
        <button class="category" data-category="<?= esc($cat['category_name']) ?>">
          <?= esc($cat['category_name']) ?>
        </button>
      <?php endforeach; ?>
    </div>

    <div class="cards" id="cards-container">
      <!-- Cards loaded by jQuery AJAX -->
    </div>

    <div class="pagination">
      <button id="prevPage">Previous</button>
      <span id="pageIndicator">1</span>
      <button id="nextPage">Next</button>
    </div>
  </div>

</section>

<section>
    <div><?= $this->include('layout/footer') ?></div>
</section>


<?= $this->endSection() ?>