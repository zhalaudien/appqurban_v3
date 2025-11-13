<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<h3>Dashboard Super Admin</h3>
<p>Selamat datang, <?= esc(session()->get('nama')) ?>.</p>
<p>Anda dapat mengelola seluruh data cabang, pequrban, dan realisasi besek.</p>
<?= $this->endSection() ?>