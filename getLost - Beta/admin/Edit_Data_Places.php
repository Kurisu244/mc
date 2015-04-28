<?php
	require_once 'Connect_DB.php';
    require_once 'dbHandler.php';
	$db = new dbHandler();
	$db->update("PLACE", array("NAME" => $_POST[pname], "DESCRIPTION" => $_POST[pdescription], "TYPE" => $_POST[ptype]), array("PID" => $_POST[pid]));
	header("location: View_Places.php");
?>