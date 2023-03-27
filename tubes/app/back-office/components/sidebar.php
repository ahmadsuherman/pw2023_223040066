<aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="javascript:;" class="brand-link text-center navbar-primary">
        <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <div class="form-inline mt-3 d-flex mb-2">
        <img src="./assets/logo-2.png" class="img-fluid bg-white p-2 img-thumbnails">
    </div>
    
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link <?php if($menu == "dashboard") echo "active";?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header">Fitur</li>

                <li class="nav-item">
                    <a href="dashboard.php?menu=categories" class="nav-link  <?php if($menu == "categories") echo "active";?>">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="dashboard.php?menu=destinations" class="nav-link  <?php if($menu == "destinations") echo "active";?>">
                        <i class="nav-icon fas fa-map-marker"></i>
                        <p>Destinasi</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="dashboard.php?menu=blogs" class="nav-link  <?php if($menu == "blogs") echo "active";?>">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>Blog</p>
                    </a>
                </li>

                <li class="nav-header">Data</li>
                <li class="nav-item">
                    <a href="dashboard.php?menu=users" class="nav-link  <?php if($menu == "users") echo "active";?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Pengguna</p>
                    </a>
                </li>

                <!-- <li class="nav-header">Master Data</li>
                <li class="nav-item">
                    <a href="dashboard.php?menu=settings" class="nav-link  <?php if($menu == "settings") echo "active";?>">
                        <i class="nav-icon fas fa-wrench"></i>
                        <p>Pengaturan </p>
                    </a>
                </li> -->

            </ul>
        </nav>
    </div>
</aside>