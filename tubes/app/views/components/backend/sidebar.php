<aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="javascript:;" class="brand-link text-center navbar-primary">
        <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <div class="form-inline mt-5 d-flex p-2">
        <img src="<?= BASE_URL ?>/logo-2.png" class="img-fluid bg-white p-2 img-thumbnails">
    </div>
    
    <div class="sidebar" style="margin-top: 0px">
        <nav class="">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item active">
                    <a href="<?= BASE_URL ?>/dashboard" class="nav-link <?= ($_SERVER["REQUEST_URI"] === BASE_URL.'/dashboard') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <?php if ($_SESSION['user']['level'] == 'Admin'): ?>
                
                
                <li class="nav-header">Fitur</li>
                <li class="nav-item">
                    <a aria-current="page" href="<?= BASE_URL ?>/category" class="nav-link <?= ($_SERVER["REQUEST_URI"] === BASE_URL.'/category') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a aria-current="page" href="<?= BASE_URL ?>/destination" class="nav-link <?= ($_SERVER["REQUEST_URI"] === BASE_URL.'/destination') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-map-marker"></i>
                        <p>Destinasi</p>
                    </a>
                </li>

                <li class="nav-header">Data</li>
                <li class="nav-item">
                    <a aria-current="page" href="<?= BASE_URL ?>/user" class="nav-link <?= ($_SERVER["REQUEST_URI"] === BASE_URL.'/user') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside>