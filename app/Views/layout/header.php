<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="<?= base_url('favicon.png') ?>" type="image/x-icon">
  <title><?= esc($title ?? 'Top Security Service Company in Bali | Tailored Solutions | Bali') ?></title>
  <link href="<?=base_url('assets/adminlte/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?=base_url('assets/adminlte/plugins/font-awesome-free/css/all.min.css')?>" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>
<body>
</html>

<!-- Navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark w-100 top-20 z-3" style="background-color: rgba(0, 0, 0, 0.6);"> -->
  <div class="container-fluid">
    <a class="navbar-brand ps-5 fw-bold" href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/eagle-logo.png') ?>"><span class="txt_nav_bold fs-5"> EAGLE PROTECT</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto text-end">
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay" href="<?= base_url('about_us') ?>"><span class="txt_nav">ABOUT US</span></a>
        </li>
        <li class="nav-item px-2 ">
          <a class="nav-link hover-overlay" href="<?= base_url('/pricelist') ?>"><span class="txt_nav">PRICELIST</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay" href="<?= base_url('/services') ?>"><span class="txt_nav">SERVICES</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay" href="<?= base_url('/projects') ?>"><span class="txt_nav">PROJECTS</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay" href="<?= base_url('/news_room') ?>"><span class="txt_nav">NEWS ROOM</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link hover-overlay" href="<?= base_url('/careers') ?>"><span class="txt_nav">CAREERS</span></a>
        </li>
        <li class="nav-item px-2">
            <button class="btn contact-btn" onclick="location.href='<?= base_url('/contact_us') ?>'"><span class="txt_nav">CONTACT US</span></button>
        </li>
      </ul>
    </div>
  </div>
<!-- </nav> -->