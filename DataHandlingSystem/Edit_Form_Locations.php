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

		$query = $handler->query("SELECT * FROM LOCATION WHERE LID = '$id'");
		$query->setFetchMode(PDO::FETCH_ASSOC);
		
		while($result = $query->fetch())
		{
			$lid = $result['LID'];
			$pid = $result['PID'];
			$latitude = $result['LATITUDE'];
			$longitude = $result['LONGITUDE'];
		}
      ?>
      <form method="post" action="Edit_Data_Locations.php">
	  
	  <input type="hidden" name="lid" size="4" value="<?php echo $lid?>">
	  
        <tr>        
          <td>Place ID:</td>
          <td>
            <input type="text" name="pid" size="4" value="<?php echo $pid?>">
          </td>
        </tr>
		
        <tr>
          <td>Latitude:</td>
          <td>
            <input type="text" name="latitude" size="10" value="<?php echo $latitude?>">
          </td>
        </tr>
		
		<tr>
          <td>Longitude:</td>
          <td>
            <input type="text" name="longitude" size="10" value="<?php echo $longitude?>">
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