<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Submission Status</title>
</head>
<body>

<?php
		require_once 'Connect_DB.php';
    	require_once 'dbHandler.php';
		$db = new dbHandler();
		
		$pid_r = $_POST["pid_r"];
		$stars = $_POST["stars"];
	
		$query = $db->insert("RATING", array('PID' => $pid_r, 'STARS' => $stars));
		
		if (!$query)
		{
			die('Invalid query: ' . mysql_error());
		}
		else
		{
			echo "Submission succeeded!!!";
		}

?>
<h1><a href=<?php echo "insertAll.html"; ?>>Insert Data</a></h1>;
</body>
</html>