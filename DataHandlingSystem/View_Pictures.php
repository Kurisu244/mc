<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Data Handling</title>
</head>

<body background="pic01.jpg">
<table>
  <tr>
    <td align="center">EDIT OR DELETE PICTURES</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?php
		include('Connect_DB.php');

		$query = "SELECT * FROM PICTURE";
		$result = mysql_query($query);
		echo "<tr> <th>Place ID</th> <th>URL</th></tr>";
		while ($row = mysql_fetch_array($result))
		{
			echo ("<tr><td>$row[PLID]</td>");
			echo ("<td>$row[LINK]</td>");
			echo ('<td><a href="Edit_Form_Pictures.php?id=' . $row['PICID'] . '">Edit</a></td>');
			echo ('<td><a href="Delete_Data_Pictures.php?id=' .$row['PICID'] . '">Delete</a></td>');
		} 
      ?>
      </table>
    </td>
   </tr>
</table>
</body>

</html>