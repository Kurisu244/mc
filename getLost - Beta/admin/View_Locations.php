<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Data Handling</title>
</head>

<body background="pic01.jpg">
<table>
  <tr>
    <td align="center"><strong>EDIT OR DELETE LOCATIONS</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?php
		require_once 'Connect_DB.php';
    	require_once 'dbHandler.php';
		$db = new dbHandler();
		
		$result = $db -> select("LOCATION", array());
		
		echo "<tr> <th>Place ID</th> <th>Latitude</th> <th>Longitude</th></tr>";
		while ($rows = $result->fetch())
		{
			echo ("<tr><td>$rows[PID]</td>");
			echo ("<td>$rows[LATITUDE]</td>");
			echo ("<td>$rows[LONGITUDE]</td>");
			echo ('<td><a href="Edit_Form_Locations.php?id=' . $rows['LID'] . '">Edit</a></td>');
			echo ('<td><a href="Delete_Data_Locations.php?id=' .$rows['LID'] . '">Delete</a></td>');
		} 
      ?>
      </table>
    </td>
   </tr>
</table>
<br>
<center>
<h1><a href=<?php echo "mainDataHandling.html"; ?>>Main Page</a></h1>
</center>
</body>

</html>