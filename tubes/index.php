<?php
	session_start();
	// if(!isset($_SESSION['id_admin'])) header("Location: login.php");
	// if(isset($_GET['menu'])) $menu = $_GET['menu']; else $page = '';
	
	include './config/konfigurasi-umum.php';

    function generateRandomString($length = 10) {
        $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Pasundan Tourism" />
    <meta
      name="description"
      content="Pasundan Tourism adalah sebuah istilah yang merujuk pada pariwisata di seluruh dunia. Dunia kita ini memiliki kekayaan alam dan budaya yang luar biasa, dan Pasundan Tourism memungkinkan wisatawan untuk menjelajahi dan menikmati keindahan tersebut."
    />
    <meta property="og:image" content="./assets/logo.png" />
    <meta property="og:keywords" content="Pasundan Tourism"/>
    <title>Pasundan Tourism</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/logo-2.png">
  
    <!-- CSS here -->
    <link rel="stylesheet" href="./assets/front-office/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/front-office/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/front-office/css/magnific-popup.css">
    <link rel="stylesheet" href="./assets/front-office/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/front-office/css/themify-icons.css">
    <link rel="stylesheet" href="./assets/front-office/css/nice-select.css">
    <link rel="stylesheet" href="./assets/front-office/css/flaticon.css">
    <link rel="stylesheet" href="./assets/front-office/css/gijgo.css">
    <link rel="stylesheet" href="./assets/front-office/css/animate.css">
    <link rel="stylesheet" href="./assets/front-office/css/slick.css">
    <link rel="stylesheet" href="./assets/front-office/css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="./assets/vendor/daterangepicker/css/daterangepicker.min.css" />

    <link rel="stylesheet" href="./assets/front-office/css/style.css">
    <!-- <link rel="stylesheet" href="./assets/front-office/css/responsive.css"> -->
</head>

<body>
    <?php include('./app/front-office/components/navbar.php') ?>

	<?php
		/* Menentukkan halaman berdasarkan menu yang dipilih */
		$app_dir = 'app/front-office';

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
	
    <?php include('./app/front-office/components/footer.php') ?>

	<!-- Modal -->
	<div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="serch_form">
				<input type="text" placeholder="Search" >
				<button type="submit">search</button>
			</div>
		</div>
		</div>
	</div>
    <!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="./assets/front-office/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/front-office/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/front-office/js/popper.min.js"></script>
    <script src="./assets/front-office/js/bootstrap.min.js"></script>
    <script src="./assets/front-office/js/owl.carousel.min.js"></script>
    <script src="./assets/front-office/js/isotope.pkgd.min.js"></script>
    <script src="./assets/front-office/js/ajax-form.js"></script>
    <script src="./assets/front-office/js/waypoints.min.js"></script>
    <script src="./assets/front-office/js/jquery.counterup.min.js"></script>
    <script src="./assets/front-office/js/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/front-office/js/scrollIt.js"></script>
    <script src="./assets/front-office/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/front-office/js/wow.min.js"></script>
    <script src="./assets/front-office/js/jquery-ui.min.js"> </script>
    <script src="./assets/front-office/js/nice-select.min.js"></script>
    <script src="./assets/front-office/js/jquery.slicknav.min.js"></script>
    <script src="./assets/front-office/js/jquery.magnific-popup.min.js"></script>
    <script src="./assets/front-office/js/plugins.js"></script>
    <script src="./assets/front-office/js/range.js"></script>
        <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="./assets/front-office/js/slick.min.js"></script>
   
    <!--contact js-->
    <script src="./assets/front-office/js/contact.js"></script>
    <script src="./assets/front-office/js/jquery.ajaxchimp.min.js"></script>
    <script src="./assets/front-office/js/jquery.form.js"></script>
    <script src="./assets/front-office/js/jquery.validate.min.js"></script>
    <script src="./assets/front-office/js/mail-script.js"></script>
    <script type="text/javascript" src="./assets/vendor/moment/js/momentjs.min.js"></script>
    <script type="text/javascript" src="./assets/vendor/moment/js/locale/id.min.js"></script>
    
    <script type="text/javascript" src="./assets/vendor/daterangepicker/js/daterangepicker.min.js"></script>
    <script src="./assets/front-office/js/main.js"></script>
    <script>
        $('#datepicker').daterangepicker(
        {
            autoUpdateInput: false,
            locale: {
                format: 'YYYY-MM-DD'
            },
        }, 
        
        function(start, end, label) {
            $('#datepicker').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
            });

            $('#datepicker').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });
        });
    </script>
    <script src="./assets/vendor/parsley/js/parsley.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./assets/vendor/parsley/js/parsleyInit.js"></script>
</body>

</html>