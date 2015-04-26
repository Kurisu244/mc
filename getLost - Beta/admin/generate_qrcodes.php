<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
<title>Data Handling</title>
</head>

<body background="pic01.jpg">
<table>
  <tr>
    <td align="center">QR Code Generation</td>
  </tr>
  <tr>
    <td>
      <table border="1">
      <?php
		include('Connect_DB.php');

		$query = $handler->query("SELECT * FROM LOCATION, PLACE WHERE LOCATION.PID = PLACE.PID ");
		$query->setFetchMode(PDO::FETCH_ASSOC);	
		
		echo "<tr> <th>Location ID</th> <th>Place Name</th> <th>Latitude</th> <th>Longitude</th></tr>";
		while ($result = $query->fetch())
		{
			echo ("<tr><td>$result[PID]</td>");
			echo ("<td>$result[NAME]</td>");
			echo ("<td>$result[LATITUDE]</td>");
			echo ("<td>$result[LONGITUDE]</td>");
			echo ('<td><a href="displayqr.php?la='.$result['LATITUDE'].'&ln='.$result['LONGITUDE'].' ">Generate QR Code</a></td>');
		} 
      ?>
      </table>
    </td>
   </tr>
</table>
</body>

</html>