<html lang="en">
	<head>
	
			<title>visitor counter</title>
		<style>
			
			body{text-align: center;background: #877;font-family: Helvetica, Arial, sans-serif;}
			
			.container{height: 50px;width: 10%;float: inherit;margin: 0px; padding: 0px;}
			.round{width: 60px;height: 60px;border-radius: 50%;background: #fff;margin: 0px auto;}
			.values{color: #888;line-height: .8em;font-size: 20px;margin-top: 40px;padding: 20px;}
			p{font-size: 12px;color: #fff;font-weight: bold;}
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
	     
		<?php
		  session_start();
		  $_SESSION['session'] = session_id();
		  if(!$_SESSION['session']){
			  echo "session id not set";
		  }
		  $con = mysqli_connect('localhost','root','','newp') or die('not connect');
		function total_online(){
			$current_time = time();
			$timeout = $current_time - (60);
			$session_exiist = mysqli_query($con,"SELECT session FROM total_visitors where session='".$_SESSION['session']."'");
			if(!$session_exiist){
				echo "session not insert";
			}
			$sessio_check = mysqli_num_rows($session_exiist);
			if(!$sessio_check){
				echo "sessio_check not insert";
			}
			
			if($sessio_check==0 && $_SESSION['session']!=""){
				$ins = mysqli_query($con,"INSERT INTO total_visitors values ('','".$_SESSION['session']."','".$current_time."')");
				if(!$ins){
				echo "total visitors not insert";
			}
			}else{
				$sql = mysqli_query($con,"update total_visitors set time='".time()."' where session='".$_SESSION['session']."'");
				if(!$sql){
				echo "total visitor not update";
			}
			}
			$select_total = mysqli_query($con,"select * from total_visitors where time>='$timeout'");
			if(!$select_total){
				echo "total visitor not select";
			}
			$total_online_visitors = mysqli_num_rows($select_total);
			return $total_online_visitors;
		}
		if(isset($_POST['get_online_visitor'])){
			$total_online = total_online();
			echo $total_online;
			exit();
		}
		
		?>
		<?php
		    //to get total online visitor
		    $total_visitor = mysqli_query($con,"select * from total_visitors");
		  if(!$total_visitor){
			  echo "total visitorss not selected correctly";
		  }
		    $total_visitors = mysqli_num_rows($total_visitor);
		    // to insert page view and select total pageview
		$user_ip = $_SERVER['REMOTE_ADDR'];
		$page = $_SERVER['PHP_SELF'];
		mysqli_query($con,"insert into pageviews values('','$page','$user_ip')");
		$pageviews = mysqli_query($con,"select * from pageviews");
		$total_pageviews = mysqli_num_rows($pageviews);
		?>
		<div class="container">
		     <div class="round" id="today"><p class="values"><?php echo $total_pageviews; ?></p> </div>
			  <p>Total PageViews</p>
		</div>
		<div class="container">
		     <div class="round"><p class="values"><?php echo $total_visitors; ?></p> </div>
			  <p>Total Visitor</p>
		</div>
		
		<div class="container">
		     <div class="round"><p class="values" id="online_visior_val"><?php echo $total_online_visitors; ?></p> </div>
			  <p>Visitors Online</p>
		</div>
		
		
	</body>
	
</html>