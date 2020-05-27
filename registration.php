


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<div class="container">
		<div class="header">		
			<h2>Register</h2>
			
		</div>
		<form action="registration.php" method="post">
		<div>
			<label for="Name">Name</label>
			<input type="text" name="Name" required>
		</div>	

<div>
			<label for="Registration Number">Registration Number </label>
			<input type="text" name="Registration Number" required>
		</div>	

<div>
			<label for="Email Address">Email address</label>
			<input type="email" name="Email Address" required>
		</div>	
<div>
			<label for="Password">Password</label>
			<input type="Password" name="Password_1" required>
		</div>	
<div>
			<label for="Password">Confirm Password</label>
			<input type="Password" name="Password_2" required>
		</div>	
		<button type="submit" name="register_user"></button>
		<p>Already a user?<a href="login.php>">log in</a></p>
		</form>
	</div>

</body>
</html>