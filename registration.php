


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<?php
include ('includes/nav.php');
	?>
	<section id="credentials">
	<div class="dark">
				
			<h2>Register</h2>
			
		</div>
		<form action="registration.php" method="post">
		<div>
			<label for="User Name">Name</label>
			<input type="text" name="name" required>
		</div>	

<div>
			<label for="Registration Number">Registration Number </label>
			<input type="text" name="reg" required>
		</div>	

<div>
			<label for="CUK Student Email">Email address</label>
			<input type="text" name="email" required>
		</div>	
	<div>
			<label for="Course">Course</label>
			<input type="text" name="course" required>
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

		<p>
      Already a member? <a href="login.html">Login</a>
      <br>
       </p>
		</form>
		
	</div>
</section>
</body>
</html>