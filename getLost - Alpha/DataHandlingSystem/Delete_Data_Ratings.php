<html>
<body>
<?php
	include('Connect_DB.php');
	$id=$_GET['id'];
	$query = $handler->query("DELETE FROM RATING WHERE RID = '$id'");
	header('location:View_Ratings.php');
?>
</body>
</html>