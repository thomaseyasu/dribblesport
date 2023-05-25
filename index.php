<!DOCTYPE html>
<html lang="en">

<head>
	<!-- required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IF=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--  title  -->

	<title>Dribble Sport</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/togle.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/news.css">
	<link rel="stylesheet" href="css/magazine.css">
	<link rel="stylesheet" href="style/main.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="magicscroll/magicscroll.css"/>
    <script src="magicscroll/magicscroll.js"></script>
    <script src="ovc/counter.js"></script>






</head>

<body>


<div id="thecontainer" class="thecontainer">

    <div class="headermenu">
        <?php
          include('header.php');
        ?>
    </div>
    <div id="top" class="top">

        <div class="topLeft">
            <?php
              include('headerSlider.php');
            ?>
        </div>
        <div class="topRight">
            <?php
              include('newsheadline.php');
            ?>
        </div>
    </div>
    <div>
        <h3 class="headingC3">All Sport Heading News</h3>
    </div>
    <div id="headlines" class="headlines">
        <?php
              include('easyslider.php');
            ?>
    </div>
    <div class="MagicScroll" data-options="speed: 4000; autoplay: 1; mode: carousel; arrows: inside; pagination: true; draggable: true;">
        <img class="MSimg1" src='./source/image/birhanbank.jpg' />
        <img class="MSimg1" src='./source/image/birhanbank.jpg' />
        <img class="MSimg1" src='./source/image/birhanbank.jpg' />
        <img class="MSimg1" src='./source/image/birhanbank.jpg' />
        <img class="MSimg1" src='./source/image/birhanbank.jpg' />


    </div>

    <div id="newsSliding" class="newsSliding">
        <div class="newsSlideLeft">
            <div class="newsSlideLeft1">
            <div>
            <h3 class="headingC3">Sport Headline one</h3>
            </div>

            <div>
                <?php
              include('easyslider.php');
            ?>
            </div>

            </div>
            <div class="newsSlideLeft2">
            <div>
            <h3 class="headingC3">Sport Headline two</h3>
            </div>

            <div>
                <?php
              include('easyslider.php');
            ?>
            </div>
            </div>
            <div class="newsSlideLeft1">
            <div>
            <h3 class="headingC3">Sport Headline three</h3>
            </div>

            <div>
                <?php
              include('easyslider.php');
            ?>
            </div>
            </div>
            <div class="newsSlideLeft2">
            <div>
            <h3 class="headingC3">Sport Headline four</h3>
            </div>

            <div>
                <?php
              include('easyslider.php');
            ?>
            </div>
            </div>

        </div>
        <div class="newsSlideRight">
            <div class="newsSlideRight1">
                <div class="MagicScroll" data-options="speed: 2000; autoplay: 3; mode: carousel; orientation: vertical; arrows: inside; pagination: true; draggable: true;"><img class="slideimg" src='./source/image/birhanbank.jpg' />
        <img class="MSimg2" src='./source/image/birhanbank.jpg' />
        <img class="MSimg2" src='./source/image/birhanbank.jpg' />
        <img class="MSimg2" src='./source/image/birhanbank.jpg' />
        <img class="MSimg2" src='./source/image/birhanbank.jpg' />


    </div>
            </div>
            <div class="newsSlideRight2">
            </div>
        </div>

    </div>

    <div id="newsScrolling" class="newsScrolling">
    </div>

    <div id="bestFooter" class="bestFooter">

    <div class="socialMediaIcons">
    </div>


    <div class="developby">
    <p class="footerText">Web Developed by BuyIt Technology Solution INC, 2023 G.C @coppyright reserved.</p>
    </div>
    <div class="address">
    <p class="footerText">Addis Ababa, Ethiopia</p>

    </div>
           <!--
	<?php include('homefooter.php'); ?>
	-->

    <?php
	  include('down.php');
	?>
    </div>

</div>





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
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>





</body>

</html>