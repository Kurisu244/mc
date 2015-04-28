<?php
	include('Connect_DB.php');
	
	$query = $handler->query("UPDATE PLACE SET NAME = '$_POST[pname]', DESCRIPTION = '$_POST[pdescription]', TYPE = '$_POST[ptype]'  WHERE PID = '$_POST[pid]'");
	header("location: View_Places.php");
?>