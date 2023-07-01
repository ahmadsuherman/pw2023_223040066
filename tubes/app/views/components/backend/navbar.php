<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-sm-inline-block">
            <a href="<?= BASE_URL ?>/" class="nav-link">Home</a>
        </li>
        
    </ul>
    <ul class="navbar-nav ml-auto">
        <?php if($_SESSION['user']['is_demo']): ?>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link rounded text-center bg-warning pe-auto">Akun Demo</a>
        </li>
        <?php endif; ?>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="<?= BASE_URL ?>/img/default-profile.png" class="user-image img-circle elevation-2" alt="Gambar <?= $_SESSION['user']['name']; ?>">
                <span class="d-none d-md-inline">
                <?php if(isset($_SESSION['user'])) : echo $_SESSION['user']['name']; endif; ?>
                </span>
            </a>
            
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                <li class="user-header bg-primary">
                    <img src="<?= BASE_URL ?>/img/default-profile.png" class="img-circle elevation-2 prof_image" alt="Gambar <?= $_SESSION['user']['name']; ?>">
                    <p>
                    <?php if(isset($_SESSION['user'])) : echo $_SESSION['user']['name']; endif; ?>
                        <small style="color:white"><?php if(isset($_SESSION['user'])) : echo $_SESSION['user']['email']; endif; ?></small>
                    </p>
                </li>
                <li class="user-footer">
                    <a  href="<?= BASE_URL ?>/profile" class="btn btn-default btn-flat">Profile</a>
                    <a href="<?= BASE_URL ?>/logout" class="btn btn-default btn-flat float-right">Keluar</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>