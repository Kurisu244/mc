<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Data Handling</title>
</head>

<body background="pic01.jpg">
<table>
  <tr>
    <td align="center">EDIT OR DELETE PLACES</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?php
		include('Connect_DB.php');

		$query = $handler->query("SELECT * FROM PLACE");
		$query->setFetchMode(PDO::FETCH_ASSOC);		
		
		echo "<tr> <th>Name</th> <th>Description</th> <th>Type</th></tr>";
		while ($result = $query->fetch())
		{
			echo ("<tr><td>$result[NAME]</td>");
			echo ("<td>$result[DESCRIPTION]</td>");
			echo ("<td>$result[TYPE]</td>");
			echo ('<td><a href="Edit_Form_Places.php?id=' . $result['PID'] . '">Edit</a></td>');
			echo ('<td><a href="Delete_Data_Places.php?id=' .$result['PID'] . '">Delete</a></td>');
		} 
      ?>
      </table>
    </td>
   </tr>
</table>
</body>

</html>