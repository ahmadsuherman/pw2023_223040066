<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <link rel="shortcut icon" href="./logo-2.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- pace-progress -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/css/adminlte.min.css">
    <?php if (!empty($data['dataTable'])) { ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	  <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <?php } ?>

    <?php if (!empty($data['toastr'])) { ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/toastr/toastr.min.css">
    <?php } ?>

    <?php if (!empty($data['daterangepicker'])) { ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/daterangepicker/daterangepicker.css">
    <?php } ?>

    <?php if (!empty($data['toastr'])) { ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/back-office/plugins/summernote/summernote-bs4.min.css">
    <?php } ?>
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed pace-success">
<div class="wrapper">