<?php
session_start();

// If user already logged in, redirect to main index
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
	{ header("Location: ../index.html"); } 
else 
	{  }	
 
if (isset($_POST['username'])) {
        	
    // Include the databas connection script
	include_once("../connect.php");
	
	// Set the posted data from the form into local variables
    $usname = strip_tags($_POST['username']);
	$paswd = strip_tags($_POST['password']);

	// Check for User in the database and retrieve stored values
	$query = $handler->query("SELECT USERID, Username, Password FROM Users WHERE username = '$usname' LIMIT 1");
	$query->setFetchMode(PDO::FETCH_ASSOC);
	
	//init value
	$dbUsname = '';
	
	while($r = $query->fetch())	
	{
		$uid = $r['USERID'];
		$dbUsname = $r['Username'];
		$dbPassword = $r['Password'];
	}
	
	// Check if the username and the password they entered was correct
	if ($usname == $dbUsname && $paswd == $dbPassword) {
		// Set session 
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $usname;
		$_SESSION['id'] = $uid;
		// Now direct to database page
		header("Location: ../index.html");
	} else {
		echo "<h2 align='center'>Oops that username or password combination was incorrect.
		<br /> Please try again.</h2>";
	}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/login.css">
<title> Get Lost Login </title>
</head>

<body>
<div id="wrapper">
<h1> Please login to access the Database </h1>
<form id="form" action="login.php" method="post" enctype="multipart/form-data">
Username: <input type="text" name="username" /> </br>
Password <input type="password" name="password" /> </br></br>
<input type="submit" value="Login" name="Submit" />
</form>
</div>
</body>
</html>