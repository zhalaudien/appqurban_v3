<?= $this->extend('layout/adminlte') ?>
<?= $this->section('content') ?>

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3 class="card-title">Data Panitia</h3>
        <a href="<?= base_url('superadmin/panitia/create') ?>" class="btn btn-primary btn-sm">Tambah</a>
    </div>
    <div class="card-body">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Panitia</th>
                    <th>User</th>
                    <th>Cabang</th>
                    <th>Seksi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($panitia as $i => $p): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= $p['nama'] ?></td>
                        <td><?= $p['username'] ?> (<?= $p['role'] ?>)</td>
                        <td><?= $p['nama_cabang'] ?></td>
                        <td><?= $p['seksi'] ?></td>
                        <td><?= $p['status'] ?></td>
                        <td>
                            <a href="<?= base_url('superadmin/panitia/edit/' . $p['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('superadmin/panitia/delete/' . $p['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus panitia ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>