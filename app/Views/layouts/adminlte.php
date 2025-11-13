<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'AppQurban V3' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/adminlte3/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/adminlte3/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a></li>
                <li class="nav-item d-none d-sm-inline-block"><a href="<?= base_url('dashboard') ?>" class="nav-link">Dashboard</a></li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="<?= base_url() ?>" class="brand-link">
                <span class="brand-text font-weight-light">AppQurban V3</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">
                        <li class="nav-item"><a href="<?= base_url('dashboard') ?>" class="nav-link"><i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a></li>
                        <li class="nav-item"><a href="<?= base_url('superadmin/cabang') ?>" class="nav-link"><i class="nav-icon fas fa-building"></i>
                                <p>Data Cabang</p>
                            </a></li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper p-3">
            <?= $this->renderSection('content') ?>
        </div>

        <footer class="main-footer text-center">
            <small>© <?= date('Y') ?> AppQurban V3</small>
        </footer>

    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/adminlte3/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte3/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>