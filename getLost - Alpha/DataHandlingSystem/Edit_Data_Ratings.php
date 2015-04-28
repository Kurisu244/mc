<?php
	include('Connect_DB.php');

	$query = $handler->query("UPDATE RATING SET PID = '$_POST[pid]', STARS = '$_POST[stars]' WHERE RID = '$_POST[rid]'");
	header("location: View_Ratings.php");
?>