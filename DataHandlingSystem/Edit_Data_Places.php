<?php
	include('Connect_DB.php');
	
	$query = "UPDATE PLACES SET PNAME = '$_POST[pname]', PDESCRIPTION = '$_POST[pdescription]', PTYPE = '$_POST[ptype]'  WHERE PID = '$_POST[pid]'";
	mysql_query($query);
	header("location: View_Places.php");
?>