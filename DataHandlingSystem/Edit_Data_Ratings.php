<?php
	include('Connect_DB.php');
	
	$query = "UPDATE ARCRATING SET PID = '$_POST[pid]', STARS = '$_POST[stars]' WHERE RID = '$_POST[rid]'";
	mysql_query($query);
	header("location: View_Ratings.php");
?>