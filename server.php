<?php 
session_start();


//initializing variables
$Name="";
$Email="";
$error=array

//connect to db
$db=mysql_connect("http://localhost/phpmyadmin/tbl_recent_favorite.php?db=credentials&table=user")or die("could not connect to database");

//Register users

$Name=mysql_real_escape_string($db, $POST["Name"]);
$EmailAddress=mysql_real_escape_string($db, $POST["Email Address"]);
$Password_1=mysql_real_escape_string($db, $POST["Password_1"]);
$Password_2=mysql_real_escape_string($db, $POST["Password_2"]);

//form validation
if (empty($Name)) {array_push($error, "Name is required")};
	if (empty($EmailAddress)) {array_push($error, "Email is required")};
		if (empty(Password_1)) {array_push($error, "Password_1 is required")};
		if ($Password_1!=$Password_2)($array_push($error, "Password do not match")};
			
	//check db for existing email
	$user_check_query="SELECT *FROM user WHERE EmailAddress='$EmailAddress'LIMIT 1";

	$results=mysql_query($db, $user_check_query);
	$user=mysql_fetch_assoc($results?);

	if ($user) {
		if ($user['Email Address']***$EmailAddress){array_push($error,"This email id already exists")};
		}

		//register user if no errors
		if ($Password=md5($Password_1); //this will encrypt password
		$query ="INSERT INTO user (Name,RegistrationNumber, EmailAddress, Password) VALUES ('$NAME',$RegistrationNumber',$EmailAddress',$Password',)";
		}
		mysql_query($db, $query);
		$_SESSION['Name']=$Name;
		$_SESSION['success']="you are now logged in";
		header('location;index.html')

















 ?>