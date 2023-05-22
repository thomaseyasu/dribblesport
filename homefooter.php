<html lang="en">
	<head>
	
			<title></title>
	        <style>
			
			
			
			.contain{height: 40px;width: 10%;float: inherit;margin-bottom: 25px; padding: 0px;}
			.round{width: 90px;height: 30px;border-radius: 50%;background: #222;margin: 10px auto;}
			.values{color: #fff;line-height: .8em;font-size: 15px;margin: 0px;padding-left: 35px;padding-top: 15px;}
			.para{font-size: 12px;color: #222;font-weight: bold;width: 150px;}
		</style>
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript">
		  $(document).ready(function(){
			  setInterval(function(){
				  $.ajax({
					  type:'post',
					  url:'',
					  data:{
						  get_online_visitor:"online_visitor",
					  },
					  success:function(response){
						  if(response!=""){
							  $("#online_visior_val").html(response);
						  }
					  }
				  });
			  },1000000)
		  });
		
		</script>
	</head>
	<body>
	    <section id="footer">
		<div class="container">
			<div class="row" data-wow-duration="1s" data-wow-delay=".5s">
				<div class="col-md-4 litable">
					<table>
						<tr class="tr3">
							Adrress
						</tr>
						<tr>
							<td><img src="img2/facebook.jpg" width="50px"></td>
							<td>ANRS STICC</td>
						</tr>
						<tr>
							<td><img src="img2/gmail1.png" width="50px"></td>
							<td>sticc@gmail.com</td>
						</tr>
						<tr>
							<td><img src="img2/instagram.jpg" width="50px"></td>
							<td>STICC@instagram</td>
						</tr>
						<tr>
							<td><img src="img2/telegram.png" width="50px"></td>
							<td>STICC@telegram</td>
						</tr>
						<tr>
							<td><img src="img2/fax.png" width="50px"></td>
							<td>21212</td>
						</tr>
						<tr>
							<td><img src="img2/fax.png" width="50px"></td>
							<td>P.O.BOX 79.</td>
						</tr>

						<tr>
							<td><img src="img2/phone.gif" width="50px"></td>
							<td>+251920202030</td>
						</tr>
						<tr>
							<td><img src="img/dial.JPG" width="50px"></td>
							<td>888</td>
						</tr>
					</table>
				</div>
				<div class="col-md-4 litable">
					<table>
						<tr class="tr3">
							Quick Links
						</tr>
						<tr>
							<td><a href="index.php">Home</a></td>
						</tr>
						<tr>
							<td><a href="new%20post.php">gallery</a></td>
						</tr>
						<tr>
							<td><a href="users/index.php">profile</a></td>
						</tr>
						<tr>
							<td><a href="news%20paper.php">News Paper</a></td>
						</tr>
						<tr><br><br><br>
							<td>Location</td><br>
							<td><img src="img/maps/11.PNG" class="maplocation" width="100%" height="250px"></td>
						</tr>
					</table>
				</div>
				<div class="col-md-4 litable">
					<table>
						<tr class="tr3">
							Services
						</tr>
						<tr>
							
							<td><a href='development/software.php'>Software Development</a></td>
						</tr>
						<tr>
							
							<td><a href='development/software.php'>Software Testing</a></td>
						</tr>
						<tr>
							
							<td><a href='development/networking.php'>Network Installetion</a></td>
						</tr>
						<tr>
							
							<td><a href='development/networking.php'>Network Security</a></td>
						</tr>
						<tr>
							
							<td><a href='development/networking.php'>Ict Training</a></td>
						</tr>
						<tr>
							
							<td><a href='development/networking.php'>Video Conference</a></td>
						</tr>
						<tr>
							
							<td><a href='development/webdevelopment.php'>Web Development</a></td>
						</tr>
						<tr>
							
							<td><a href='development/database.php'>DataBase Design</a></td>
						</tr>
						<tr>
							
							<td><a href='development/database.php #databasedevelopment'>DataBase Development</a></td>
						</tr>
						<tr><br>

						
					</table>
				</div>
				<div class="col-md-4 litable nav-comment">
					<iframe src="comment.php" width="100%" height="400px" style="border-radius: 0px"></iframe>
					<ul class="likesul">

						<li class="likesli"><a href=""><img src="done.png" class="likesliimg"></a></li>
						<li class="likesli"><a href=""><img src="done.png" class="likesliimg"></a></li>
						<li class="likesli"><a href=""><img src="error-icon-4.png" class="likesliimg"></a></li>
						<li class="likesli"><a href=""><img src="error-icon-4.png" class="likesliimg"></a></li>
					</ul>
				</div>

			</div>
		</div>
	</section>
	<div class="lastfooter">
		<p style="background-color: darkblue; padding: 30px; text-align: center; color: #fff">Designed By Dribble Sport @2015E.C copyright @ 2023 -DribbleSport</p>
	</div>
	</body>
	
</html>