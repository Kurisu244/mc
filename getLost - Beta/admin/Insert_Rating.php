<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Submission Status</title>
</head>
<body>

<?php
// PHP code to save data to RATING table
	if(isset($_POST["pid_r"]) && isset($_POST["stars"]))
	{
		require_once 'Connect_DB.php';
    	require_once 'dbHandler.php';
		$db = new dbHandler();
		
		// Retrieve data inserted by the system admin in the insert form and execute the query
		$pid_r = $_POST["pid_r"];
		$stars = $_POST["stars"];
	
		$query = $db->insert("RATING", array('PID' => $pid_r, 'STARS' => $stars));
		
		if (!$query)
		{
			die('Invalid query: ' . mysql_error());
		}
		else
		{
			// Informative message
			echo "Submission succeeded!!!";
		}
	}
	else
	{
		// Informative message
		echo "An error occurred. Please try again!";
	}

?>
<h1><a href=<?php echo "insertAll.html"; ?>>Insert Data</a></h1>;
</body>
</html>