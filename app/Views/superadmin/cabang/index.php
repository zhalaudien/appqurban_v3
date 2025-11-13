<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <h3 class="mb-3"><?= esc($title) ?></h3>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <a href="<?= base_url('superadmin/cabang/create') ?>" class="btn btn-primary mb-3">+ Tambah Cabang</a>

    <table id="dataTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Cabang</th>
                <th>Ketua</th>
                <th>No HP</th>
                <th>Perwakilan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($cabang as $c): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= esc($c['nama_cabang']) ?></td>
                    <td><?= esc($c['nama_ketua']) ?></td>
                    <td><?= esc($c['no_hp_ketua']) ?></td>
                    <td><?= esc($c['perwakilan']) ?></td>
                    <td>
                        <a href="<?= base_url('superadmin/cabang/edit/' . $c['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('superadmin/cabang/delete/' . $c['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>