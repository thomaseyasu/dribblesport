<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  z-index: 999;

}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>
</head>
<body>



<div class="header" id="myHeader">
  <?php
	  include('language.php');

	?>


	<div class='lav' style="width: 90%">
		<a href="javascript:void(0);" class="ic menu">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</a>
		<a href="javascript:void(0);" class="ic close"></a>
		<ul>
			<li><a href='index.php'>Home</a></li>
			<li><a href='new%20post.php'>Sport News</a></li>
			<li><a href='news%20paper.php'>Magazine</a></li>
			<li><a href='materials.php'>Sport Interviews</a></li>
			<li><a href='advertise.php'>Advertisement</a></li>
			<li><a href='#'>Sport News<img src="down.png" width="20px" height="20px"></a>
				<ul>
					<li><a href='#'>Local Sport News</a></li>
					<li><a href='#'>Foreign Sport News</a></li>
					<li><a href='#'>Other Sport News</a></li>
				</ul>
			</li>
			<li><a href='#'>Football Games<img src="down.png" width="20px" height="20px"></a>
				<ul>
					<li><a href='#'>Ethiopia Premiur leage</a></li>
					<li><a href='#'>English Premiur leage</a></li>
					<li><a href='#'>Spain Laliga</a></li>
					<li><a href='#'>Germen Bundesliga</a></li>
					<li><a href='#'>Italian Seria A</a></li>
					<li><a href='#'>France Leage 1</a></li>
				</ul>
			</li>

			<li><a href='users/index.php'>Live Sport</a></li>
			<li><a href='#'>About Us<img src="down.png" width="20px" height="20px"></a>
				<ul>
					<li><a href='history.php'>History of ANRS STICC</a></li>
					<li><a href='index.php #Mission_And_Vision'>Mision & vission</a></li>
					<li><a href='index.php #information'>messages</a></li>
					<li><a href='#'>Plan</a></li>
					<li><a href='#'>Information Disk</a></li>
					<li><a href='index.php #team'>Developers</a></li>
				</ul>

			</li>
		</ul>
	</div>
	<div id="sidebar">
			<div class="toggle-btn" onclick="toggleSidebar();">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<ul id="logolist">
				<li><a href="index.php">HOME</a></li>
				<li><a href="new%20post.php">POST GALLERY</a></li>
				<li><a href="news%20paper.php">NEWS PAPER</a></li>
				<li><a href="materials.html">MATERIAL</a></li>
				<li><a href="./users/index.php">ACCOUNTS</a></li>
				<li><a href="index.php #information">MESSAGES</a>
					<ul class="logolist2">
						<li><a href="index.php #information">
								commissioner

							</a></li><br>
						<li><a href="index.php #information">
								vise commissioner

							</a></li><br>
						<li><a href="index.php #information">
								organization leader

							</a></li><br>
					</ul>
				</li>

				<li><a href="index.php #Mission_And_Vision">mission and vision</a></li>
				<li><a href="index.php #footer">contuct</a>
					<ul class="logolist2">
						<li><a href="#"><img src="img2/facebook.jpg" width="30px"> ANRS STICC</a></li><br>
						<li><a href="#"><img src="img2/mobile.jpg" width="30px"> 0920874415@twiter</a></li><br>
						<li><a href="#"><img src="img2/gmail.jpg" width="30px"> thisemail@gmail.com</a></li><br>
						<li><a href="#"><img src="img2/telegram.png" width="30px"> this@anrssticctelegram</a></li><br>
						<li><a href="#"><img src="img2/instagram.jpg" width="30px"> this@anrssticcinstragram</a></li><br>
						<li><a href="#"><img src="img2/phone.gif" width="30px"> 0920875515</a></li><br>
						<li><a href="#"><img src="img2/fax.png" width="30px"> 55552213</a></li><br>
					</ul>
				</li>
			</ul>
		</div>
</div>



<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</body>
</html>
