<html>
<body>
<?php
	include('Connect_DB.php');
	$id=$_GET['id'];
	$query = $handler->query("DELETE FROM PLACE WHERE PID = '$id'");
	header('location:View_Places.php');
?>
</body>
</html>