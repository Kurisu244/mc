<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<body>
<?php
	require_once 'Connect_DB.php';
    require_once 'dbHandler.php';
	$db = new dbHandler();
	$id=$_GET['id'];
	$db->delete("PICTURE", array("PICID" => $id));
	header('location:View_Pictures.php');
?>
</body>
</html>