<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_token() ?>">
    <meta name="csrf-hash" content="<?= csrf_hash() ?>">

    <title><?= esc($title ?? 'Top Security Service Company in Bali | Tailored Solutions | Bali'); ?></title>
    <link href="<?=base_url('assets/adminlte/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/adminlte/plugins/font-awesome-free/css/all.min.css')?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url()?>/assets/img/eagle-logo-desc.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="assets/css/normalize.css" rel="stylesheet" type="text/css">
    <script>
        function initMap() {
            const location = { lat: -8.6717976, lng: 115.1724393 };

            const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: location,
            disableDefaultUI: true,
            styles: [
                { elementType: "geometry", stylers: [{ color: "#f5f5f5" }] },
                { elementType: "labels.icon", stylers: [{ visibility: "off" }] },
                { elementType: "labels.text.fill", stylers: [{ color: "#616161" }] },
                { elementType: "labels.text.stroke", stylers: [{ color: "#f5f5f5" }] },
                { featureType: "road", elementType: "geometry", stylers: [{ color: "#ffffff" }] },
                { featureType: "road.arterial", elementType: "labels.text.fill", stylers: [{ color: "#757575" }] }
            ]
            });

            new google.maps.Marker({
            position: location,
            map: map,
            icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png"
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