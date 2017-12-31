<?php

$name=$email=$gender=$password=$location=$phone="";

if($_SERVER["REQUEST_METHOD"]=="POST") {
			function secureSignUp($data) 
			{
				$data=trim($data);
				$data=stripslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}
			$name=secureSignUp($_POST["n1"]);
			$email=secureSignUp($_POST["e1"]);
			$gender=secureSignUp($_POST["g1"]);
			$password=secureSignUp($_POST["pa1"]);
			$location=secureSignUp($_POST["l1"]);
			$phone=secureSignUp($_POST["ph1"]);	



			//Getting Resource ID
			include('mysql.php');   //  Will return $resid as database connector
			if(MySQLi_Connect_Errno()) {
				echo "<tr align='center'> <td colspan='5'> Failed to connect to MySQL </td> </tr>";
			}
			else 
			{
				$check_email=MySQLi_Query($resid,"select user_name from Users where user_email='".$email."'");
				$r_email=MySQLi_Fetch_Row($check_email);
			
				if($r_email) {
					echo "<tr align='center'> <td colspan='5'> <font color='red'> Email already Registered, Registration Failed!  </font>  </td> </tr>";
				}
			
				else 
				{
					$query="insert into Users (user_name, user_email, user_pass, user_location, user_phone, user_gender) values ('$name','$email','$password','$location','$phone', '$gender')";
//					echo $query;
					$res=MySQLi_Query($resid,$query);
					if($res) {
					echo "<tr align='center'> <td colspan='5'> <font color='green'> Registration Successful! </font> You may login now from here:- <a href='login.php'>Login</a></td> </tr>";
					}
					else {
						echo "<tr align='center'> <td colspan='5'> <font color='red'> Registration Failed! </font> </td> </tr>";
					}
				}
				MySQLi_Close($resid);
			}
}

?> 