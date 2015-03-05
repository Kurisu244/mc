
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
    	$pid = $_POST["pid"];
		$pid_l = $_POST["pid"];
		$pid_r = $_POST["pid"];
		$pid_p = $_POST["pid"];
		$pname = $_POST["pname"];
		$pdescription = $_POST["pdescription"];
		$ptype = $_POST["ptype"];
		$lid = $_POST["lid"];
		$latitude = $_POST["latitude"];
		$longitude = $_POST["longitude"];
		$rid = $_POST["rid"];
		$stars = $_POST["stars"];
		$picid = $_POST["picid"];
		$url = $_POST["url"];
		

        $queryString1 = "INSERT INTO PLACES (PID, PNAME, PDESCRIPTION, PTYPE) VALUES ($pid, '$pname', '$pdescription', '$ptype')";
    	if (!$connection->query($queryString1))
		{
			echo "Submission failed: (" . $connection->errno . ") " . $connection->error;

		}
		
		$queryString2 = "INSERT INTO LOCATION (LID, PID, LATITUDE, LONGITUDE) VALUES ($lid, $pid_l, $latitude, $longitude)";
    	if (!$connection->query($queryString2))
		{
			echo "Submission failed: (" . $connection->errno . ") " . $connection->error;

		}
		
		$queryString3 = "INSERT INTO RATING (RID, PID, STARS) VALUES ($rid, $pid_r, $stars)";
    	if (!$connection->query($queryString3))
		{
			echo "Submission failed: (" . $connection->errno . ") " . $connection->error;

		}
		
		$queryString4 = "INSERT INTO PICTURE (PICID, PLID, LINK) VALUES ($picid, $pid_p, '$url')";
    	if (!$connection->query($queryString4))
		{
			echo "Submission failed: (" . $connection->errno . ") " . $connection->error;

		}


		

	}
?>