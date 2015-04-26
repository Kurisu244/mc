<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Submission Status</title>
</head>
<body>

<?php
		include('Connect_DB.php');
    	
		
		$pname = $_POST["pname"];
		$pdescription = $_POST["pdescription"];
		$ptype = $_POST["ptype"];
		
		$query = $handler->query("INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('$pname', '$pdescription', '$ptype')");

		if (!$query)
		{
			die('Invalid query: ' . mysql_error());
		}
		else
		{
			echo "Submission succeeded!!!";
		}

?>