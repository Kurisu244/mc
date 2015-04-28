<?php
	require_once 'Connect_DB.php';
    require_once 'dbHandler.php';
	$db = new dbHandler();
	$db->update("RATING", array("PID" => $_POST[pid], "STARS" => $_POST[stars]), array("RID" => $_POST[rid]));
	header("location: View_Ratings.php");
?>