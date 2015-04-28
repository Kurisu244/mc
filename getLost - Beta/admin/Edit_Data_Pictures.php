<?php
	require_once 'Connect_DB.php';
    require_once 'dbHandler.php';
	$db = new dbHandler();
	$db->update("PICTURE", array("PLID" => $_POST[plid], "LINK" => $_POST[link]), array("PICID" => $_POST[picid]));
	header("location: View_Pictures.php");
?>