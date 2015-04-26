<html>
<body>
<?php
	include('Connect_DB.php');
	$id=$_GET['id'];
	$query = $handler->query("DELETE FROM PICTURE WHERE PICID = '$id'");
	header('location:View_Pictures.php');
?>
</body>
</html>