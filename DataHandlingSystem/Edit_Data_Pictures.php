<?php
	include('Connect_DB.php');
	
	$query = "UPDATE PICTURES SET PLID = '$_POST[plid]', LINK = '$_POST[link]'  WHERE PICID = '$_POST[picid]'";
	mysql_query($query);
	header("location: View_Pictures.php");
?>