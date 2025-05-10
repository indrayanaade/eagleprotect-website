<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="project-detail-section">
    <div class="detail-container">
        <div class="detail-image" style="background-image: url('<?= base_url('assets/img/' . esc($project['img'])) ?>');"></div>
        <div class="detail-content">
            <h1><?= esc($project['title']) ?></h1>
            <p><?= esc($project['desc']) ?></p>
            <a href="<?= base_url('projects') ?>" class="back-button">← Back to Projects</a>
        </div>
    </div>
</section>
<?= $this->endSection() ?>