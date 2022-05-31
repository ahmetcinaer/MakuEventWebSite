<!DOCTYPE html>
<html lang="tr">
	<head>

		<?php 
			include_once("data/baglanti.php");

            $sql="SELECT * FROM `site_ayarlar` ";
            $sorgu=mysqli_query($baglan,$sql);
                
            $sonuc=mysqli_fetch_row($sorgu);
 
            

		?>

		<!-- Basic -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel=”shortcut icon” href="img/header/logo.ico" />
		<title><?php echo $sonuc[1];?></title>	
		<?php
		define("adres", $sonuc[13]);
		?>
		<meta name="keywords" content="<?php echo $sonuc[2];?>" />
		<meta name="description" content="Etkinliğin Sosyal Hali">
		<meta name="author" content="<?php echo $sonuc[3];?>">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/header/logo.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
		<link rel="stylesheet" href="css/makuevent.css"> 
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

 <?php
    include_once("include/header.php");

    if ($_GET && !empty($_GET{"sayfa"})) {

        $sayfa=$_GET["sayfa"].".php";

        if (file_exists( "include/".$sayfa)){
            include_once("include/".$sayfa);
        }
        else{
        	include_once("include/404.php");
        }
    }
    else{
    	 include_once("include/home.php");
    }

    
    include_once("include/footer.php");
    ?>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/vide.min.js"></script>>
<script src="js/theme.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/views/view.contact.js"></script>
<script src="js/demos/demo-law-firm.js"></script>	
<script src="js/custom.js"></script>
<script src="js/theme.init.js"></script>



</body>
</html>

			