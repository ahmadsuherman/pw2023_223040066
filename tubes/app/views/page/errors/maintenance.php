<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Pasundan Tourism" />
  <meta
    name="description"
    content="Pasundan Tourism adalah sebuah istilah yang merujuk pada pariwisata di seluruh dunia. Dunia kita ini memiliki kekayaan alam dan budaya yang luar biasa, dan Pasundan Tourism memungkinkan wisatawan untuk menjelajahi dan menikmati keindahan tersebut."
  />
  <meta property="og:image" content="<?= BASE_URL ?>/logo.png" />
  <meta property="og:keywords" content="Pasundan Tourism"/>
  <title>Site Maintenance - <?= APP_NAME ?></title>
  <link rel="shortcut icon" href="<?= BASE_URL ?>/logo-2.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter+Tight&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/css/boostrap.min.css">
  <style>
    body{
      font-family: 'Inter Tight', arial;
    }
  </style>
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
          <ul class="text-left">
            <li>Instagram: <a target="_black" href="https://www.instagram.com/<?= AUTHOR_IG ?>"><?= AUTHOR_IG ?></a></li>
            <li>Whatsapp: <a target="_black" href="https://api.whatsapp.com/send?phone=62<?= AUTHOR_WA ?>&text=Hi%20Ahmad%2C%20I%20want%20to%20contact%20you"><?= AUTHOR_WA ?></a>  </li>
            <li>Gmail: <a target="_black" href="mailto:<?= AUTHOR_EMAIL ?>"><?= AUTHOR_EMAIL ?></a> </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</div>
<script src="<?= BASE_URL ?>/back-office/plugins/jquery/jquery.min.js"></script>
<script src="<?= BASE_URL ?>/back-office/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL ?>/back-office/js/boostrap.min.js"></script>
</body>
</html>
