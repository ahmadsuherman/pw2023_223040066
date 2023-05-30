<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Site Maintenance - <?= APP_NAME ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/css/adminlte.min.css">
</head>
<body class="hold-transition">
<div class="wrapper">
    <section class="content text-center">
        
      <div class="error-page" style="margin-top:15%;">
        <h2 class="headline text-warning"> <img src="<?= BASE_URL ?>/logo.png" class="img-fluid" alt="Gambar <?= APP_NAME ?>"></h2>

        <div class="maintenance-content">
          <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Saat ini website dalam pemeliharaan.</h3>

          <p>
          Mohon maaf atas ketidaknyamanannya. Kami sedang melakukan pemeliharaan terhadap website ini.
          </p>

          <p>Kamu bisa mengunjungi media sosial kami di:</p>

          <ul>
            <li>Instagram: <a href=""><?= AUTHOR ?></a></li>
            <li>Whatsapp: <a href=""><?= AUTHOR ?></a>  </li>
            <li>Facebook:  <a href=""><?= AUTHOR ?></a> </li>
            
          </ul>

        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
  </div>
</div>
<!-- jQuery -->
<script src="<?= BASE_URL ?>/back-office/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= BASE_URL ?>/back-office/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASE_URL ?>/back-office/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= BASE_URL ?>/back-office/js/demo.js"></script>
</body>
</html>
