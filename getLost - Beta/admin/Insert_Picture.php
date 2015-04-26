<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Submission Status</title>
</head>
<body>

<?php
	include('Connect_DB.php');

		$pid_p = $_POST["pid_p"];
		$url = $_POST["url"];
		
		$query = $handler->query("INSERT INTO PICTURE (PLID, LINK) VALUES ($pid_p, '$url')");
    	if (!$query)
		{
			die('Invalid query: ' . mysql_error());
		}
		else
		{
			echo "Submission succeeded!!!";
		}
?>