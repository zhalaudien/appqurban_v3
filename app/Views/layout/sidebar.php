<?php $session = session(); ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= base_url('dashboard') ?>" class="brand-link text-center">
        <span class="brand-text font-weight-light">🐮 AppQurban V3</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block"><?= esc($session->get('nama')) ?></a>
                <small class="text-muted">
                    <?= getRoleName($session->get('role_id')) ?>
                </small>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <?php if ($session->get('role_id') == 1): // Super Admin 
                ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="nav-icon fas fa-database"></i>
                            <p>Manajemen Data</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="nav-icon fas fa-box"></i>
                            <p>Realisasi Besek</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if ($session->get('role_id') == 6): // Admin Cabang 
                ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="nav-icon fas fa-users"></i>
                            <p>Data Pequrban</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="nav-icon fas fa-list"></i>
                            <p>Permintaan Cabang</p>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if ($session->get('role_id') == 2): // Admin Penerimaan 
                ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="nav-icon fas fa-truck"></i>
                            <p>Penerimaan Hewan</p>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside>