<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= esc($title ?? 'Dashboard') ?> - AppQurban V3</title>
    <link rel="stylesheet" href="<?= base_url('assets/adminlte3/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte3/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?= $this->include('layout/header') ?>
        <?= $this->include('layout/sidebar') ?>

        <!-- Main Content -->
        <div class="content-wrapper p-4">
            <?= $this->renderSection('content') ?>
        </div>

        <?= $this->include('layout/footer') ?>
    </div>

    <script src="<?= base_url('assets/adminlte3/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte3/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>