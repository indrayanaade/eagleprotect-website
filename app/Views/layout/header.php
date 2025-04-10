<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($title ?? 'Web Profil Saya') ?></title>

  <!-- Bootstrap CSS -->
  <link href="<?=base_url('adminlte/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Font Awesome (kalau kamu pakai) -->
  <link href="<?=base_url('adminlte/plugins/font-awesome-free/css/all.min.css')?>" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('css/style.css')?>">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('/') ?>">Web Saya</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/tentang') ?>">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/kontak') ?>">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
