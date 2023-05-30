
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <div class="container">
      <a href="<?= BASE_URL ?>/logo-2.png" class="navbar-brand">
        <img src="<?= BASE_URL ?>/logo-2.png" alt="<?= $APP_SORT_NAME ?>" class="brand-image">
        <!-- <span class="brand-text font-weight-light">asdf</span> -->
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item <?= ($_SERVER["REQUEST_URI"] === BASE_URL .'/' || $_SERVER["REQUEST_URI"] === BASE_URL.'/home') ? 'active' : ''; ?>">
              <a data-toggle="tooltip" data-placement="top" title="Home" href="<?= BASE_URL ?>/" class="nav-link"><i class="fa fa-house-user"></i></a>
            </li>
            <li class="nav-item <?= ($_SERVER["REQUEST_URI"] === BASE_URL.'/destinations') ? 'active' : ''; ?>">
              <a data-toggle="tooltip" data-placement="top" title="Destinasi" href="<?= BASE_URL ?>/destinations" class="nav-link"><i class="fas fa-map-marker"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" data-toggle="tooltip" data-placement="top" title="Cari Destinasi" data-widget="navbar-search" data-target="#navbar-search3" href="#" role="button">
              <i class="fas fa-search"></i>
              </a>
                <div class="navbar-search-block" id="navbar-search3">
                <form autocomplete="off" data-form="validate" action="<?= BASE_URL ?>/search" class="form-inline" action="" method="get">
                  <div class="input-group input-group-sm">
                  <input required class="form-control form-control-navbar" type="search" placeholder="Cari Destinasi" aria-label="Search" name="s">
                    <div class="input-group-append">
                      <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                      </button>
                      <button type="submit" class="btn btn-navbar" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                      </button>
                  </div>
                </div>
              </form>
            </div>
          </li>
          <?php if(isset($_SESSION['user'])) : ?>
          <li class="nav-item">
            <a href="<?= BASE_URL ?>/dashboard" class="nav-link btn btn-primary">Dashboard</a>
          </li>
          <?php else : ?>
          <li class="nav-item">
            <a href="<?= BASE_URL ?>/login" data-toggle="tooltip" data-placement="top" title="Login" class="nav-link btn btn-primary"><i class="fas fa-sign-in-alt"></i></a>
          </li>
          <li class="nav-item">
            <a href="<?= BASE_URL ?>/register" data-toggle="tooltip" data-placement="top" title="Register" class="nav-link btn btn-primary"><i class="fa fa-user-plus"></i></a>
          </li>
          <?php endif ?>
        </ul>
      </div>

    </div>
  </nav>
  <!-- /.navbar -->
