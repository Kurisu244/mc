<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Data</title>
</head>

<body background="pic01.jpg">
<table border=1>
  <tr>
    <td align=center>Edit Data</td>
  </tr>
  <tr>
    <td>
      <table>
      <?php
		include('Connect_DB.php');
		
		$id = $_GET['id'];
		$query = "SELECT * FROM ARCLOCATION WHERE LID = '$id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
      ?>
      <form method="post" action="Edit_Data_Locations.php">
	  
	  <input type="hidden" name="lid" size="4" value="<?php echo "$row[LID]"?>">
	  
        <tr>        
          <td>Place ID:</td>
          <td>
            <input type="text" name="pid" size="4" value="<?php echo "$row[PID]"?>">
          </td>
        </tr>
		
        <tr>
          <td>Latitude:</td>
          <td>
            <input type="text" name="latitude" size="10" value="<?php echo "$row[LATITUDE]"?>">
          </td>
        </tr>
		
		<tr>
          <td>Longitude:</td>
          <td>
            <input type="text" name="longitude" size="10" value="<?php echo "$row[LONGITUDE]"?>">
          </td>
        </tr>
		
        <tr>
          <td align="center">
            <input type="submit" name="submit" value="Save">
          </td>
        </tr>
		
      </form>
      </table>
    </td>
  </tr>
  
</table>
</body>
</html>