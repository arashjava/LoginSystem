<!doctype html>
<html>
<head>
	<link rel='stylesheet' href='page_css.css'>
	<title> Login System </title>
	
	<script src='jquery.js'></script>
	<script type='text/javascript'>
	$(document).ready(function() 
	{
		$("#sam").hide(3000);
	});
	</script>
</head>
<body>
		<table cellpadding='3' cellspacing='3' class='tab_main'>
			<!--Logo-->
			<tr>
				<td  colspan='5'><img src='images/logo.png' height='65%' width='100%' ></td> <!--1350x160-->
			</tr>
			<!--Nav_Tabs-->
			<tr align='center' bgcolor='lightgrey' class='td_bor'>
				<td width='5%'> <?php Session_start(); if(IsSet($_SESSION["user_id"])) {echo "<a href='user_page.php'>"; } else {echo "<a href='home.php'>";}?>Home </a></td>
				<td width='5%'> <a href='signout.php'>Signout </a></td>

			</tr>
			
			<tr>
				<td> <hr> </td> 
				<td> <hr> </td> 

			</tr>
			
			<?php
			//Session_start();
			$email=$password=$no_msg="";
			
			if(!isset($_SESSION['user_id']) && !isset($_POST['h1'])) {
			 Header("Location: home.php");
			}
			

			if(isset($_SESSION['user_id'])) {
				$_POST['h1'] = "holla";
				$_POST['e1'] = $_SESSION['email'];
				$_POST['p1'] = $_SESSION['password'];
				$no_msg = 1;
			}

		function sec($data) {
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
			if($_POST['h1']=="holla") {
			$email=sec($_POST["e1"]);
		    $password=$_POST["p1"];
			}
			$query="select * from Users where user_email='$email' and user_pass='$password'";

			$resid=MySQLi_Connect('localhost','root','','ProjectShare');
			if(MySQLi_Connect_Errno()) {
				echo "<tr align='center'> <td colspan='5'> Failed to connect to MySQL </td> </tr>";
			}
			else {
				$result=MySQLi_Query($resid,$query);
				
				$array=MySQLi_Fetch_Assoc($result);
					if($array) {
						//Session_start();
						$_SESSION["user_id"] = $array["user_id"]; 
						$user_here = $_SESSION["user_id"];
						$_SESSION["name"] = $array["user_name"];
						$_SESSION["password"] = $array["user_pass"];
						$_SESSION["email"] = $array["user_email"];
						$_SESSION["gender"] = $array["user_gender"];
						$_SESSION["location"] = $array["user_location"];
						$_SESSION["phone"] = $array["user_phone"];

						if($no_msg!=1) {
							?>
							<script type="text/javascript" src="notify.js"></script>
							<script>
							$(document).ready(function() {
							  $.notify(
							  "Login Successful!","success");
							});
							</script>
						
						<?php }
						echo "<tr> 
						<td width='5%' valign='top'> 
							<table>
								<tr align='center' bgcolor='lightgrey' class='td_bor'>
									<td width='5%'> <a href='user_list.php'>Users List</a></td></tr>
							</table>
						</td>
				
				<td colspan='4'>";
				
						echo "<table  cellpadding='4' cellspacing='5' width='100%' style='table-layout:fixed'> <col width='100%'> <tr align='centre'> <th> <h3> Updates from your Friends: </h3> </th> </tr> ";
				
						$count = MySQLi_Query($resid,"select user_id from Users");
						if($count) {
						$f=1;

						echo "</table>";
						
					}
					

						echo "</td>
							
						</tr>";
					}
					else {
						echo "<tr align='center'> <td colspan='5'> <font color='red'> Login Failed! </font> Make sure you input your email and password correctly and login again:- <a href='login.php'>Login</a> </td> </tr>";
					}
			MySQLi_Close($resid);
			}
		
		?>	
		</table>
			<footer align='center'>
		    	&copy; All Rights Reserved.	<?php if(isset($_SESSION["user_id"])) {echo $_SESSION["name"]; } ?>
			</footer>
</body>
</html>
