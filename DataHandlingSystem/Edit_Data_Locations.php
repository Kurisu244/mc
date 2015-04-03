<?php
	include('Connect_DB.php');
	
	$query = "UPDATE LOCATION SET PID = '$_POST[pid]', LATITUDE = '$_POST[latitude]', LONGITUDE = '$_POST[longitude]'  WHERE LID = '$_POST[lid]'";
	mysql_query($query);
	header("location: View_Locations.php");
?>