<!doctype html>
<html>
<head>
	<link rel='stylesheet' href='./css/main.css'>
	<title> Login System </title>
	<script type='text/javascript' src='/LoginSystem/js/login.js'></script>
	
</head>
<body>
		<table cellpadding='3' cellspacing='3' class='tab_main'>
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
					<form method='POST' name='f1' action='user_page.php'>
						<table>
							<tr>
								<td> Email:- </td> <td> <input type='email' name='e1' maxlength='50'> </td> <td> <span id='s1'> </span> </td>  <td> <span id='s3'> </span> </td>
							</tr>
							
							<tr>
								<td> Password:- </td> <td> <input type='password' name='p1' maxlength='50'> </td> <td> <span id='s2'> </span> </td> <td> <span id='s4'> </span> </td>
							</tr>
							
							<tr>
								<td> </td> <td> <input type='hidden' name='h1' value='hello'>  </td>
							</tr>
							
							<tr>
								<td> <br> <input type='button' value='Login' name='s1' onclick='sec()'> </td> <td> <br> OR <a href='secure_signup.php'>Sign-up</a></td> 
							</tr>
						</table>
					</form>
				</td>
			</tr>
		</table>
		<footer align='center'>
			&copy; All Rights Reserved.	
			</footer>
</body>
</html>




