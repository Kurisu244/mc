<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Data Handling</title>
</head>

<body background="pic01.jpg">
<table>
  <tr>
    <td align="center"><strong>EDIT OR DELETE PICTURES</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?php
		require_once 'Connect_DB.php';
    	require_once 'dbHandler.php';
		$db = new dbHandler();
		
		$result = $db -> select("PICTURE", array());
		
		echo "<tr> <th>Place ID</th> <th>URL</th></tr>";
		while($rows = $result->fetch())
		{
			echo ("<tr><td>$rows[PLID]</td>");
			echo ("<td>$rows[LINK]</td>");
			echo ('<td><a href="Edit_Form_Pictures.php?id=' . $rows['PICID'] . '">Edit</a></td>');
			echo ('<td><a href="Delete_Data_Pictures.php?id=' .$rows['PICID'] . '">Delete</a></td>');
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