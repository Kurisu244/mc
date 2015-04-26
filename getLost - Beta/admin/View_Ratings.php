<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Data Handling</title>
</head>

<body background="pic01.jpg">
<table>
  <tr>
    <td align="center">EDIT OR DELETE RATINGS</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?php
		include('Connect_DB.php');

		$query = $handler->query("SELECT * FROM RATING");
		$query->setFetchMode(PDO::FETCH_ASSOC);	
		
		echo "<tr> <th>Place ID</th> <th>Stars</th></tr>";
		while ($result = $query->fetch())
		{
			echo ("<tr><td>$result[PID]</td>");
			echo ("<td>$result[STARS]</td>");
			echo ('<td><a href="Edit_Form_Ratings.php?id=' . $result['RID'] . '">Edit</a></td>');
			echo ('<td><a href="Delete_Data_Ratings.php?id=' .$result['RID'] . '">Delete</a></td>');
		} 
      ?>
      </table>
    </td>
   </tr>
</table>
</body>

</html>