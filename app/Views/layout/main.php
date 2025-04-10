
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= \$title ?? 'My App' ?></title>
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('adminlte/plugins/bootstrap/css/bootstrap.min.css') ?>">
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="<?= base_url('adminlte/dist/css/adminlte.min.css') ?>">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?= \$this->renderSection('content') ?>
  </div>

<!-- jQuery -->
<script src="<?= base_url('adminlte/plugins/jquery/jquery-3.7.1.min.js') ?>"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE JS -->
<script src="<?= base_url('adminlte/dist/js/adminlte.min.js') ?>"></script>
<!-- Custom JS -->
<script src="<?= base_url('js/script.js') ?>"></script>

</body>
</html>
