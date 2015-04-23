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
		
		$query = $handler->query("SELECT * FROM PICTURE");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		
		echo "<tr> <th>Place ID</th> <th>URL</th></tr>";
		while($result = $query->fetch())
		{
			echo ("<tr><td>$result[PLID]</td>");
			echo ("<td>$result[LINK]</td>");
			echo ('<td><a href="Edit_Form_Pictures.php?id=' . $result['PICID'] . '">Edit</a></td>');
			echo ('<td><a href="Delete_Data_Pictures.php?id=' .$result['PICID'] . '">Delete</a></td>');
		}
      ?>
      </table>
    </td>
   </tr>
</table>
</body>

</html>