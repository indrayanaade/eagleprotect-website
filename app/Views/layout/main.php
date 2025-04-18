<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Top Security Service Company in Bali | Tailored Solutions | Bali'); ?></title>
    <link href="<?=base_url('assets/adminlte/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/adminlte/plugins/font-awesome-free/css/all.min.css')?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url()?>/assets/img/eagle-logo-desc.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- CSS -->
    <?php if (!empty($cssFiles)) : ?>
        <?php foreach ($cssFiles as $css) : ?>
            <link rel="stylesheet" href="<?= base_url($css); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>

    <!-- Konten Utama -->
    <?= $this->renderSection('content') ?>

    <!-- JS -->
    <?php if (!empty($jsFiles)) : ?>
        <?php foreach ($jsFiles as $js) : ?>
            <script src="<?= base_url($js); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>