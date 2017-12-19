<!doctype html>
<html>
<head>
	<link rel='stylesheet' href='page_css.css'>
	<title> Project Share </title>
	<script type='text/javascript'>
		function secureSignUp() {
			var name=document.f1.n1.value;
			var email=document.f1.e1.value;
			var phone=document.f1.ph1.value;
			var location=document.f1.l1.value;
			var password=document.f1.pa1.value;
			
			
			if(name.length==0||email.length==0||password.length==0) {
				
				if(name.length==0) {
				s1.innerHTML="<font color='red'>Field is Required</font>";
				
				}
				
				if(email.length==0) {
				s2.innerHTML="<font color='red'>Field is Required</font>";
				
				}
				
				if(phone.length==0) {
				s4.innerHTML="<font color='red'>Field is Required</font>";
				
				}
		
				if(password.length==0) {
				s9.innerHTML="<font color='red'>Field is Required</font>";
				
				}
			}
			
			else if (name.length>50||email.length>30||password.length>20) {
				
				if(name.length>50) {
				s5.innerHTML="<font color='red'>Characters should be less than 50 </font>";
				
				}
				
				if(email.length>30) {
				s6.innerHTML="<font color='red'>Characters should be less than 30 </font>";
				
				}
				
				if(password.length>20) {
				s10.innerHTML="<font color='red'>Characters should be less than 20 </font>";
				
				}
			}
			
			else {
				document.f1.submit();
			}
			
			
			
						
			
		}
	</script>
</head>
<body>
		<table cellpadding='3' cellspacing='3' class='tab_main'>
			<!--Logo-->
			<!--Nav_Tabs-->
			<tr align='center' bgcolor='lightgrey' class='td_bor'>
				<td width='5%'> <a href='home.php'>Home </a></td>
				<td width='5%'> <a href='login.php'>Login </a></td>
				<td width='5%'> <a href='secure_signup.php'>Sign-up </a></td> 
			</tr>
			
			<tr>
				<td> <hr> </td> 
				<td> <hr> </td> 
				<td> <hr> </td> 
			</tr>
			
			<tr align='center'> 
				<td colspan='5'>
					<form method='POST' name='f1' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
						<table>
							<tr>
								<td> Name: </td> <td> <input type='text' name='n1' maxlength='50'> </td> <td> <span id='s1'> </span> </td> <td> <span id='s5'> </span> </td>
							</tr>
							<tr>
								<td> Email: </td> <td> <input type='email' name='e1' maxlength='30'> </td> <td> <span id='s2'> </span> </td> <td> <span id='s6'> </span> </td>
							</tr>
							<tr>
								<td> Location: </td> <td> <input type='text' name='l1' maxlength='50'> </td> <td> <span id='s3'> </span> </td>
							</tr>
							<tr>
								<td> Phone: </td> <td> <input type='number' name='ph1' maxlength='50'> </td> <td> <span id='s4'> </span> </td> <td> <span id='s8'> </span> </td>
							</tr>
							<tr>
							 <td> Gender: </td>  
							 <td> <select name='g1'> 
												<option value='M'>Male
												<option value='F'>Female
								  </select> 
							 </td>
							</tr>
							
							<tr>
								<td> Password: </td> <td> <input type='password' name='pa1' maxlength='50'> </td> <td> <span id='s9'> </span> </td> <td> <span id='s10'> </span> </td>
							</tr>
				

							<tr>
								<td> <br> <input type='button' value='Sign-up' name='s1' onclick='secureSignUp()'> </td> <td> <br> OR  <a href='login.php'>Login</a></td>
							</tr>
						</table>
					</form>
				</td>
			</tr>
	<?php

	$name=$email=$gender=$password=$location=$phone="";
//			echo $_SERVER["REQUEST_METHOD"];
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


			//$query="INSERT INTO studs VALUES('$name','$email',$age);";
		//MySQL Magic :D
			//Getting Resource ID
			$res_id=MySQLi_Connect('localhost','root','','ProjectShare');
			if(MySQLi_Connect_Errno()) {
				echo "<tr align='center'> <td colspan='5'> Failed to connect to MySQL </td> </tr>";
			}
			else {
			$check_email=MySQLi_Query($res_id,"select user_name from Users where user_email='".$email."'");
			$r_email=MySQLi_Fetch_Row($check_email);
			
			if($r_email) {
				echo "<tr align='center'> <td colspan='5'> <font color='red'> Email already Registered, Registration Failed!  </font>  </td> </tr>";
			}
			
			else {
				$query="insert into Users (user_name, user_email, user_pass, user_location, user_phone, user_gender) values ('$name','$email',$password,'$location','$phone', '$gender')";
				

//			$count=MySQLi_Query($res_id,"select (max(id)+1) as count  from Users");
//			$count_id=MySQLi_Fetch_Assoc($count);
//			if($count_id["count"]) {
//				$query="insert into students values (".$count_id["count"].",'$name','$email',$age,'$gender','$password')";
//			}
//			else {
//				$query="insert into students values (1,'$name','$email',$age,'$gender','$password')";
//			}

			$res=MySQLi_Query($res_id,$query);
			if($res) {
			echo "<tr align='center'> <td colspan='5'> <font color='green'> Registration Successful! </font> You may login now from here:- <a href='login.php'>Login</a></td> </tr>";
			}
			else {
				echo "<tr align='center'> <td colspan='5'> <font color='red'> Registration Failed! </font> </td> </tr>";
			}
			}
			MySQLi_Close($res_id);
			}
	}
		
		
	
	
	?> 			
		</table>
			<footer align='center'>
			&copy; All Rights Reserved.	
			</footer>
</body>
</html>





















