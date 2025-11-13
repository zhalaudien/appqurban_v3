<?= $this->extend('layout/adminlte') ?>
<?= $this->section('content') ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Panitia</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('superadmin/panitia/store') ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>User</label>
                <select name="user_id" class="form-control" required>
                    <option value="">-- Pilih User --</option>
                    <?php foreach ($users as $u): ?>
                        <option value="<?= $u['id'] ?>"><?= $u['username'] ?> (<?= $u['role'] ?>)</option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Cabang</label>
                <select name="cabang_id" class="form-control" required>
                    <option value="">-- Pilih Cabang --</option>
                    <?php foreach ($cabang as $c): ?>
                        <option value="<?= $c['id'] ?>"><?= $c['nama_cabang'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Nama Panitia</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>
            <div class="form-group">
                <label>Seksi</label>
                <input type="text" name="seksi" class="form-control">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="Koordinator">Koordinator</option>
                    <option value="Anggota">Anggota</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?= base_url('superadmin/panitia') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

<?= $this->endSection() ?>