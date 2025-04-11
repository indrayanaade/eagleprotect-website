<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.png') ?>" type="image/x-icon">
  <title><?= esc($title ?? 'Top Security Service Company in Bali | Tailored Solutions | Bali') ?></title>

  <!-- Bootstrap CSS -->
  <link href="<?=base_url('assets/adminlte/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="<?=base_url('assets/adminlte/plugins/font-awesome-free/css/all.min.css')?>" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>
<body>
</html>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark w-100 top-20 z-3" style="background-color: rgba(0, 0, 0, 0.6); position: fixed;">
  <div class="container-fluid">
    <a class="navbar-brand ps-5" href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/eagle-logo.png') ?>"> EAGLE PROTECT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay" href="<?= base_url('about_us') ?>"><span>ABOUT US</span></a>
        </li>
        <li class="nav-item px-2 ">
          <a class="nav-link hover-overlay" href="<?= base_url('/pricelist') ?>"><span>PRICELIST</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay" href="<?= base_url('/services') ?>"><span>SERVICES</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay" href="<?= base_url('/projects') ?>"><span>PROJECTS</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay" href="<?= base_url('/news_room') ?>"><span>NEWS ROOM</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay" href="<?= base_url('/careers') ?>"><span>CAREERS</span></a>
        </li>
        <li class="nav-item px-2">
            <button class="btn contact-btn" onclick="location.href='<?= base_url('/contact_us') ?>'">CONTACT US</button>
        </li>
      </ul>
    </div>
  </div>
</nav>