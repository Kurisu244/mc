<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Data Handling</title>
</head>

<body background="pic01.jpg">
<table>
  <tr>
    <td align="center"><strong>EDIT OR DELETE PLACES</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?php
		require_once 'Connect_DB.php';
    	require_once 'dbHandler.php';
		$db = new dbHandler();
		
		$result = $db -> select("PLACE", array());
		
		echo "<tr> <th>Name</th> <th>Description</th> <th>Type</th></tr>";
		while($rows = $result->fetch())
		{
			echo ("<tr><td>$rows[NAME]</td>");
			echo ("<td>$rows[DESCRIPTION]</td>");
			echo ("<td>$rows[TYPE]</td>");
			echo ('<td><a href="Edit_Form_Places.php?id=' . $rows['PID'] . '">Edit</a></td>');
			echo ('<td><a href="Delete_Data_Places.php?id=' .$rows['PID'] . '">Delete</a></td>');
		} 
      ?>
      </table>
    </td>
   </tr>
</table>
<br>
<center>
<h1><a href=<?php echo "mainDataHandling.html"; ?>>Main Page</a></h1>;
</center>
</body>
</html>