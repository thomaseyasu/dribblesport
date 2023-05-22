<!DOCTYPE html>
<html lang="en">

<head>
	<!-- required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IF=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--  title  -->

	<title>Dribble Sport</title>
<link rel="stylesheet" href="css/togle.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/news.css">
	<link rel="stylesheet" href="css/magazine.css">
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="style/slider-def.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

	<script src="ovc/counter.js"></script>
	<link rel="stylesheet" href="magicscroll/magicscroll.css"/>
    <script src="magicscroll/magicscroll.js"></script>





</head>

<body style="margin-top: 0px; width: 100%; background-color: #fff">

	<?php
	  include('header.php');

	?>
	<div style="margin-top: 100px; width: 100%">
	<div style="width: 55%; height: 400px; float: left;">
        <?php
	        include('headerSlider.php');
	    ?>
	</div>
	<div style="width: 45%; float: right">
        <?php
	        include('newsheadline.php');
	    ?>
	</div>
	<div>
	</div>
	</div>

	<div class="MagicScroll" data-options="autoplay: 1000; step: 1; mode: carousel; speed: 4000;" style="margin-top: 20px; width: 100%; height: 180px">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
    </div>
<div style="width: 100%; height: 600px">

          <?php
	  include('newsSlider.php');

	?>
	</div>

	<section id="news" style="background-color: #fff; padding: 0px; margin: 0px">
            <?php
	  include('news.php');

	?>
	</section>

	<section id="mainNews" style="background-color: transparent; padding: 0px; margin-top: -220px">
	<div class="mainnewsheader" style="width: 70%; height: auto">
        <h2 style="padding: 20px;">Atheletics Sport News</h2>
       <?php
	  include('easyslider.php');

	?>
    </div>

	</section>

	<div class="MagicScroll" data-options="step: 0; speed: 4000;">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
    </div>
	<section id="magazine" style="background-color: #fff; padding: 0px; margin: 0px">
            <?php
	  include('magazine.php');

	?>
	</section>

	<div class="MagicScroll" data-options="speed: 2400; autoplay: 1000; items: 3;">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
        <img src="./source/image/birhanbank.jpg">
    </div>


	<?php include('homefooter.php'); ?>

    <?php
	  include('down.php');
	?>

	<!-- jquery -->
	<script src="js/jquery.js"></script>
	<!-- bootstrap js -->
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<!-- wow animate js -->
	<script src="js/wow/wow.min.js"></script>
	<!-- magnific-popup js -->
	<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="../nav2/script.js"></script>
	<script src="js/owl-carousel/owl.carousel.min.js"></script>
		<!-- custom css -->
		<script src = "js/custom.js" >
	</script>




</body>

</html>