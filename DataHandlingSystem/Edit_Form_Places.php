<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Data</title>
</head>

<body>
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
		$query = "SELECT * FROM PLACES WHERE PID = '$id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
      ?>
      <form method="post" action="Edit_Data_Places.php">
	  
		<input type="hidden" name="pid" size="4" value="<?php echo "$row[PID]"?>">
	  
        <tr>        
          <td>Name:</td>
          <td>
            <input type="text" name="pname" size="40" value="<?php echo "$row[PNAME]"?>">
          </td>
        </tr>
		
        <tr>
          <td>Description:</td>
          <td>
			<textarea rows="10" cols="100" name="pdescription"><?php echo "$row[PDESCRIPTION]"?></textarea>
          </td>
        </tr>
		
		<tr>
          <td>Type:</td>
          <td>
            <input type="text" name="ptype" size="20" value="<?php echo "$row[PTYPE]"?>">
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