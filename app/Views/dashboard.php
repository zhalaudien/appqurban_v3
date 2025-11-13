<?= $this->extend('layouts/adminlte') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="content-wrapper p-4">
        <h3>Selamat datang, <?= esc($session['nama']) ?> 👋</h3>
        <p>Role ID: <?= esc($session['role_id']) ?></p>
        <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
    </div>
</div>
<?= $this->endSection() ?>