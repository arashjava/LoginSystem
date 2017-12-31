<!doctype html>
<html>
<head>
	<link rel='stylesheet' href='./css/main.css'>
	<title> Project Share </title>
	<script type='text/javascript' src='/LoginSystem/js/login.js'>

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
					<form method='POST' name='f1' action='saveUser.php'>
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
			
		</table>
			<footer align='center'>
			&copy; All Rights Reserved.	
			</footer>
</body>
</html>





















