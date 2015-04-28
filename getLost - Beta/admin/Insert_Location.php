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

    	$pid_l= $_POST["pid_l"];
		$latitude = $_POST["latitude"];
		$longitude = $_POST["longitude"];		
		
	
		$query = $db->insert("LOCATION", array('PID' => $pid_l, 'LATITUDE' => $latitude, 'LONGITUDE' => $longitude));
		
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