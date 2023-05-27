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
    <title><?= $data['title'] . ' - ' . APP_NAME ?></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/css/adminlte.min.css">

    <?php if (!empty($data['leaflet'])) { ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
        integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
        crossorigin=""/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
    <?php } ?>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
