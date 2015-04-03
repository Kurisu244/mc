<html>
<body>
<?php
	include('Connect_DB.php');
	$id=$_GET['id'];
	$query = mysql_query("DELETE FROM ARCPLACE WHERE PID = '$id'");
	header('location:View_Places.php');
?>
</body>
</html>