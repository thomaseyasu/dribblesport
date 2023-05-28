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


	<div class='lav' style="width: 95%">
		<a href="javascript:void(0);" class="ic menu">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</a>
		<a href="javascript:void(0);" class="ic close"></a>
		<ul>
			<li id="active"><a href='index.php #thecontainer'>Home</a></li>
			<li><a href='index.php #allsportheadlines'>Sport News</a></li>
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
					<li><a href='history.php'>Dribble Sport</a></li>
					<li><a href='index.php #Mission_And_Vision'>This Website</a></li>
					<li><a href='index.php #information'>Developer</a></li>
					<li><a href='index.php #bestFooter'>Contact Us</a></li>
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
				<li id="active"><a href='index.php #thecontainer'>Home</a></li>
			<li><a href='index.php #allsportheadlines'>Sport News</a></li>
			<li><a href='news%20paper.php'>Magazine</a></li>
			<li><a href='materials.php'>Sport Interviews</a></li>
			<li><a href='advertise.php'>Advertisement</a></li>
			<li><a href='#'>Sport News<img src="down.png" width="20px" height="20px"></a>
				<ul class="logolist2">
					<li><a href='#'>Local Sport News</a></li>
					<li><a href='#'>Foreign Sport News</a></li>
					<li><a href='#'>Other Sport News</a></li>
				</ul>
			</li>
			<li><a href='#'>Football Games<img src="down.png" width="20px" height="20px"></a>
				<ul class="logolist2">
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
				<ul class="logolist2">
					<li><a href='history.php'>Dribble Sport</a></li>
					<li><a href='index.php #Mission_And_Vision'>This Website</a></li>
					<li><a href='index.php #information'>Developer</a></li>
					<li><a href='index.php #bestFooter'>Contact Us</a></li>
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
