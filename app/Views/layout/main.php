<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_token() ?>">
    <meta name="csrf-hash" content="<?= csrf_hash() ?>">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">

    <title><?= esc($title ?? 'Top Security Service Company in Bali | Tailored Solutions | Bali'); ?></title>
    <link href="<?=base_url('assets/adminlte/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/adminlte/plugins/font-awesome-free/css/all.min.css')?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url()?>/assets/img/eagle-logo-desc.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="<?=base_url('assets/css/normalize.css')?>" rel="stylesheet" type="text/css">
    <script>
        function initMap() {
            const mapDiv = document.getElementById("map");
            if (!mapDiv) {
                console.warn("Map container not found. Skipping initMap.");
                return;
            }

            const location = { lat: -8.672459, lng: 115.207538 };

            const map = new google.maps.Map(mapDiv, {
                zoom: 15,
                center: location,
                disableDefaultUI: true,
                styles: [ /* your styles here */ ]
            });

            new google.maps.Marker({
                position: location,
                map: map,
                icon: {
                url: "https://maps.google.com/mapfiles/ms/icons/red-dot.png"
                }
            });
        }
    </script>
    <script 
        async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd_cW8JOG0TfD-6Xe1fW0J9ExheFqTR_8&callback=initMap">
    </script>


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
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>const base_url = "<?= base_url() ?>";</script>

</body>
</html>