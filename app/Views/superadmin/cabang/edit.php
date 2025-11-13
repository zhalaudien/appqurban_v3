<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <h3><?= esc($title) ?></h3>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('superadmin/cabang/update/' . $cabang['id']) ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="nama_cabang" class="form-label">Nama Cabang</label>
            <input type="text" class="form-control" name="nama_cabang" id="nama_cabang"
                value="<?= old('nama_cabang', $cabang['nama_cabang']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat"><?= old('alamat', $cabang['alamat']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="nama_ketua" class="form-label">Nama Ketua</label>
            <input type="text" class="form-control" name="nama_ketua" id="nama_ketua"
                value="<?= old('nama_ketua', $cabang['nama_ketua']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="no_hp_ketua" class="form-label">No HP Ketua</label>
            <input type="text" class="form-control" name="no_hp_ketua" id="no_hp_ketua"
                value="<?= old('no_hp_ketua', $cabang['no_hp_ketua']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="perwakilan" class="form-label">Perwakilan</label>
            <select name="perwakilan" class="form-select" id="perwakilan">
                <option value="sragen" <?= old('perwakilan', $cabang['perwakilan']) == 'sragen' ? 'selected' : '' ?>>Sragen</option>
                <option value="karanganyar" <?= old('perwakilan', $cabang['perwakilan']) == 'karanganyar' ? 'selected' : '' ?>>Karanganyar</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Update</button>
        <a href="<?= base_url('superadmin/cabang') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection() ?>