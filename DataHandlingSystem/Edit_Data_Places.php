<?php
	include('Connect_DB.php');
	
	$query = "UPDATE ARCPLACE SET NAME = '$_POST[pname]', DESCRIPTION = '$_POST[pdescription]', TYPE = '$_POST[ptype]'  WHERE PID = '$_POST[pid]'";
	mysql_query($query);
	header("location: View_Places.php");
?>