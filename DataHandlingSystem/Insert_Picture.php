<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Submission Status</title>
</head>
<body>

<?php
	$host = '127.0.0.1';
	$username = 'user';
	$password = '';
	$database = 'team';
	
	$connection = new mysqli($host, $username, $password, $database);
	
    if ($connection->connect_error)
    {
        echo "<p>Unable to establish a connection to the database:".$connection->connect_error."</p>";
    }
    else
    {
		$pid_p = $_POST["pid_p"];
		$picid = $_POST["picid"];
		$url = $_POST["url"];
		
		$queryString = "INSERT INTO PICTURE (PICID, PLID, LINK) VALUES ($picid, $pid_p, '$url')";
    	if (!$connection->query($queryString))
		{
			echo "Submission failed: (" . $connection->errno . ") " . $connection->error;

		}
		else 
		{
			echo "Submission succeeded!!!";
		}
	}
	mysql_close($connection);
?>