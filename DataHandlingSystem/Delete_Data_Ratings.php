<html>
<body>
<?php
	include('Connect_DB.php');
	$id=$_GET['id'];
	$query = mysql_query("DELETE FROM ARCRATING WHERE RID = '$id'");
	header('location:View_Ratings.php');
?>
</body>
</html>