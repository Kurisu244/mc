<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Submission Status</title>
</head>
<body>

<?php
	include('Connect_DB.php');
		$pid_r = $_POST["pid_r"];
		//$rid = $_POST["rid"];
		$stars = $_POST["stars"];

		$query = $handler->query("INSERT INTO RATING (PID, STARS) VALUES ($pid_r, $stars)");
    	if (!$query)
		{
			die('Invalid query: ' . mysql_error());
		}
		else
		{
			echo "Submission succeeded!!!";
		}

?>