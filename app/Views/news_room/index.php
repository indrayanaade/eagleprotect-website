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
  <div class="container">
    <h2 class="fw-bold display-5 mb-2">Our Newsroom</h2>
    <p class="text-muted mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

    <div class="card headline-card border-0 shadow-sm rounded-4 overflow-hidden">
      <div class="row g-0 align-items-stretch">
        <!-- Left Content -->
        <div class="col-lg-6 p-5 d-flex flex-column justify-content-between headline-desc">
          <div>
            <span class="text-danger fw-semibold text-uppercase small">Category</span>
            <h3 class="fw-bold mt-2 mb-3 fs-4">Lorem Ipsum Is Simple Dummy Text</h3>
            <p class="text-muted mb-0">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
          </div>
          <div class="mt-4">
            <small class="text-muted">May 23th 2025</small>
          </div>
        </div>

        <!-- Right Image -->
        <div class="col-lg-6">
          <div class="headline-image h-100">
            <img src="<?= base_url('assets/img/rubbish-free-projects.png') ?>" alt="Headline News" class="img-fluid h-100 w-100 object-fit-cover rounded-end-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="news-related">
    <div class="container">
      <h1>News Related to Eagle Protect</h1>
      
      <div class="categories">
        <button class="category active">CATEGORY 1</button>
        <button class="category">CATEGORY 2</button>
        <button class="category">CATEGORY 3</button>
        <button class="category">CATEGORY 2</button>
      </div>

      <div class="cards">
        <div class="card">
          <img src="<?= base_url('assets/img/rubbish-free-projects.png') ?>" alt="News Image">
          <div class="card-body">
            <p class="meta"><span class="tag">Category</span> • May 23th 2025</p>
            <h3>Lorem Ipsum Is Simple Dummy Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>

        <div class="card">
          <img src="<?= base_url('assets/img/rubbish-free-projects.png') ?>" alt="News Image">
          <div class="card-body">
            <p class="meta"><span class="tag">Category</span> • May 23th 2025</p>
            <h3>Lorem Ipsum Is Simple Dummy Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>

        <div class="card">
          <img src="<?= base_url('assets/img/rubbish-free-projects.png') ?>" alt="News Image">
          <div class="card-body">
            <p class="meta"><span class="tag">Category</span> • May 23th 2025</p>
            <h3>Lorem Ipsum Is Simple Dummy Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>

        <div class="card">
          <img src="<?= base_url('assets/img/rubbish-free-projects.png') ?>" alt="News Image">
          <div class="card-body">
            <p class="meta"><span class="tag">Category</span> • May 23th 2025</p>
            <h3>Lorem Ipsum Is Simple Dummy Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>

        <div class="card">
          <img src="<?= base_url('assets/img/rubbish-free-projects.png') ?>" alt="News Image">
          <div class="card-body">
            <p class="meta"><span class="tag">Category</span> • May 23th 2025</p>
            <h3>Lorem Ipsum Is Simple Dummy Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>

        <div class="card">
          <img src="<?= base_url('assets/img/rubbish-free-projects.png') ?>" alt="News Image">
          <div class="card-body">
            <p class="meta"><span class="tag">Category</span> • May 23th 2025</p>
            <h3>Lorem Ipsum Is Simple Dummy Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>

        <div class="card">
          <img src="<?= base_url('assets/img/rubbish-free-projects.png') ?>" alt="News Image">
          <div class="card-body">
            <p class="meta"><span class="tag">Category</span> • May 23th 2025</p>
            <h3>Lorem Ipsum Is Simple Dummy Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>

        <div class="card">
          <img src="<?= base_url('assets/img/rubbish-free-projects.png') ?>" alt="News Image">
          <div class="card-body">
            <p class="meta"><span class="tag">Category</span> • May 23th 2025</p>
            <h3>Lorem Ipsum Is Simple Dummy Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>

        <div class="card">
          <img src="<?= base_url('assets/img/rubbish-free-projects.png') ?>" alt="News Image">
          <div class="card-body">
            <p class="meta"><span class="tag">Category</span> • May 23th 2025</p>
            <h3>Lorem Ipsum Is Simple Dummy Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
      <div><?= $this->include('layout/footer') ?></div>
  </section>


<?= $this->endSection() ?>