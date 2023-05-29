
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
              <a href="<?= BASE_URL ?>/" class="nav-link">Home</a>
            </li>
            <li class="nav-item <?= ($_SERVER["REQUEST_URI"] === BASE_URL.'/destinations') ? 'active' : ''; ?>">
              <a href="<?= BASE_URL ?>/destinations" class="nav-link">Destinasi</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" data-target="#navbar-search3" href="#" role="button">
              <i class="fas fa-search"></i>
              </a>
                <div class="navbar-search-block" id="navbar-search3">
                <form action="<?= BASE_URL ?>/search" class="form-inline" action="" method="get">
                  <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Cari Destinasi" aria-label="Search" name="s">
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
            <a href="<?= BASE_URL ?>/login" class="nav-link btn btn-primary">Login</a>
          </li>
          <li class="nav-item">
            <a href="<?= BASE_URL ?>/register" class="nav-link btn btn-primary">Register</a>
          </li>
          <?php endif ?>
        </ul>
      </div>

    </div>
  </nav>
  <!-- /.navbar -->
