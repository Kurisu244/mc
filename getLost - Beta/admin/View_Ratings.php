<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!-- Display all data from RATING table -->
<head>
<title>Data Handling</title>
</head>

<body background="pic01.jpg">
<table>
  <tr>
    <td align="center"><strong>EDIT OR DELETE RATINGS</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?php
	
		require_once 'Connect_DB.php';
    	require_once 'dbHandler.php';
		$db = new dbHandler();
		
		// Retrieve results from database and display them in a table.
		
		$result = $db -> select("RATING", array());	
		
		echo "<tr> <th>Place ID</th> <th>Stars</th></tr>";
		while ($rows = $result->fetch())
		{
			echo ("<tr><td>$rows[PID]</td>");
			echo ("<td>$rows[STARS]</td>");
			echo ('<td><a href="Edit_Form_Ratings.php?id=' . $rows['RID'] . '">Edit</a></td>');
			echo ('<td><a href="Delete_Data_Ratings.php?id=' .$rows['RID'] . '">Delete</a></td>');
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