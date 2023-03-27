<?php
	session_start();
	// if(!isset($_SESSION['id_admin'])) header("Location: login.php");
	if(isset($_GET['menu'])) $menu = $_GET['menu']; else $menu = '';
	
	include './config/konfigurasi-umum.php';

    function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>

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
    <meta property="og:image" content="./assets/logo.png" />
    <meta property="og:keywords" content="Pasundan Tourism"/>
    <title>Pasundan Tourism </title>
    <link rel="shortcut icon" href="./assets/logo-2.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="./assets/back-office/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./assets/back-office/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="./assets/back-office/css/adminlte.min.css">
    <link rel="stylesheet" href="./assets/back-office/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="./assets/back-office/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="./assets/back-office/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="./assets/back-office/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="./assets/back-office/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="./assets/back-office/plugins/summernote/summernote-bs4.min.css">
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php include('app/back-office/components/navbar.php') ?>

        <?php include('app/back-office/components/sidebar.php') ?>
        
        <?php
            /* Menentukkan halaman berdasarkan menu yang dipilih */
            $app_dir = 'app/back-office';

            $menu = ''; // variable untuk menentukkan halaman yang dituju
            if(isset($_GET['menu'])) { // memeriksa variable
                $menu = $_GET['menu'];
            }

            /* Lakukan include file *.php sesuai halaman yang dituju */
            if(!empty($menu)) {
                $file = $app_dir . '/' . $menu . '.php';

                if(file_exists($file)) { // memeriksa apakah file *.php tersedia?
                    include $file;
                } else {
                    include $app_dir . '/404.php';
                }
            } else {
                include $app_dir . '/home.php';
            }
        ?>
        
        <?php include('app/back-office/components/footer.php') ?>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="./assets/back-office/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="./assets/back-office/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="./assets/back-office/js/adminlte.min.js"></script>
    <script src="./assets/back-office/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="./assets/back-office/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="./assets/back-office/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="./assets/back-office/plugins/toastr/toastr.min.js"></script>
    <script type="text/javascript" src="./assets/vendor/moment/js/momentjs.min.js"></script>
    <script type="text/javascript" src="./assets/vendor/moment/js/locale/id.min.js"></script>
    
    <?php if(!empty($scripts)) echo $scripts;  ?>
    
</body>
</html>