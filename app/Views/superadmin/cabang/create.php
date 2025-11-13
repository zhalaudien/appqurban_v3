<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <h3><?= esc($title) ?></h3>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="post" action="<?= isset($cabang) ? base_url('superadmin/cabang/update/' . $cabang['id']) : base_url('superadmin/cabang/store') ?>">
        <?= csrf_field() ?>

        <div class="form-group">
            <label>Nama Cabang</label>
            <input type="text" name="nama_cabang" class="form-control" value="<?= old('nama_cabang', $cabang['nama_cabang'] ?? '') ?>">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"><?= old('alamat', $cabang['alamat'] ?? '') ?></textarea>
        </div>

        <div class="form-group">
            <label>Nama Ketua</label>
            <input type="text" name="nama_ketua" class="form-control" value="<?= old('nama_ketua', $cabang['nama_ketua'] ?? '') ?>">
        </div>

        <div class="form-group">
            <label>No HP Ketua</label>
            <input type="text" name="no_hp_ketua" class="form-control" value="<?= old('no_hp_ketua', $cabang['no_hp_ketua'] ?? '') ?>">
        </div>

        <div class="form-group">
            <label>Perwakilan</label>
            <select name="perwakilan" class="form-control">
                <option value="sragen" <?= old('perwakilan', $cabang['perwakilan'] ?? '') == 'sragen' ? 'selected' : '' ?>>Sragen</option>
                <option value="karanganyar" <?= old('perwakilan', $cabang['perwakilan'] ?? '') == 'karanganyar' ? 'selected' : '' ?>>Karanganyar</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success mt-3">Simpan</button>
        <a href="<?= base_url('superadmin/cabang') ?>" class="btn btn-secondary mt-3">Kembali</a>
    </form>
</div>

<?= $this->endSection() ?>