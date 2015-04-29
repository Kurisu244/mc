<?php
session_start();
// Check if the session is set and return the appropriate message
if (isset($_SESSION['username'])) { 
		session_destroy();
        $msg = "You are now logged out";
} else {
	$msg = "<h2>Could not log you out</h2>";
} 
?> 
<html>
<body>
<?php echo $msg; ?><br>
<p><a href="login.php">Click here</a> to return to our login page </p>
</body>
</html>