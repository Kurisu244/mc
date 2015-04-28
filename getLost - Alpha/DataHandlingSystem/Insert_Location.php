<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Submission Status</title>
</head>
<body>

<?php
	include('Connect_DB.php');

    	$pid_l= $_POST["pid_l"];
		$latitude = $_POST["latitude"];
		$longitude = $_POST["longitude"];
		
		$query = $handler->query("INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES ($pid_l, $latitude, $longitude)");
		
    	if (!$query)
		{
			die('Invalid query: ' . mysql_error());
		}
		else
		{
			echo "Submission succeeded!!!";
		}
?>