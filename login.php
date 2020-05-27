<?php include('server.php')?>

<!DOCTYPE html>


<html>
<head>
	<title>Login</title>
</head>
<body>
	<div class="container">
		<div class="header">		
			<h2>Log in</h2>
			
		</div>
		<form action="login.php" method="post">
			

<div>
			<label for="Registration Number">Registration Number </label>
			<input type="text" name="Registration Number" required>
		</div>	
			
<div>
			<label for="Password">Password</label>
			<input type="Password" name="Password_1" required>
		</div>	
				
		<button type="submit" name="login_user"></button>
		<p>Don't have an account?<a href="registration.php>">sign up</a></p>
		</form>
	</div>

</body>
</html>