<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourism - Home </title>
    <link rel="shortcut icon" href="{{ asset('/img/logo.png')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../../assets/back-office/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../assets/back-office/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../../assets/back-office/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php include('components/navbar.php') ?>

        <?php include('components/sidebar.php') ?>
        
        <div class="content-wrapper">
            
                <div class="content">
                    <div class="container-fluid">
                        <!-- <?php include('components/alert.php') ?> -->
                    </div>
                </div>
            
        </div>
        <?php include('components/footer.php') ?>
    </div>
    <!-- ./wrapper -->

        <!-- jQuery -->
    <script src="../../assets/back-office/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../assets/back-office/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script src="../../assets/back-office/js/adminlte.min.js"></script>
    <script src="../../assets/back-office/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/back-office/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    
    <script src="../../assets/back-office/plugins/sweetalert2/sweetalert2.all.min.js"></script>
</body>
</html>