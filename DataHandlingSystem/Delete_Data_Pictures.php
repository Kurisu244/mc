<html>
<body>
<?php
	include('Connect_DB.php');
	$id=$_GET['id'];
	$query = mysql_query("DELETE FROM PICTURE WHERE PICID = '$id'");
	header('location:View_Pictures.php');
?>
</body>
</html>