<?php
	require_once 'Connect_DB.php';
    require_once 'dbHandler.php';
	$db = new dbHandler();
	$db->update("LOCATION", array("PID" => $_POST[pid], "LATITUDE" => $_POST[latitude], "LONGITUDE" => $_POST[longitude]), array("LID" => $_POST[lid]));
	header("location: View_Locations.php");
?>