
<?= \$this->extend('layout/main') ?>

<?= \$this->section('content') ?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Welcome</h3>
          </div>
          <div class="card-body">
            <p>Welcome to your Admin Dashboard and Profile CMS!</p>
            <button id="clickBtn" class="btn btn-primary">Click Me</button>
            <div id="result"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= \$this->endSection() ?>
