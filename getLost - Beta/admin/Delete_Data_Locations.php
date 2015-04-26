<html>
<body>
<?php
	include('Connect_DB.php');
	$id=$_GET['id'];
	$query = $handler->query("DELETE FROM LOCATION WHERE LID = '$id'");
	header('location:View_Locations.php');
?>
</body>
</html>