<?php
	include('Connect_DB.php');

	$query = $handler->query("UPDATE PICTURE SET PLID = '$_POST[plid]', LINK = '$_POST[link]'  WHERE PICID = '$_POST[picid]'");
	header("location: View_Pictures.php");
?>