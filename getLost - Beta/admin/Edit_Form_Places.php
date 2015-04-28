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
		require_once 'Connect_DB.php';
    	require_once 'dbHandler.php';
		$db = new dbHandler();
		
		$id = $_GET['id'];
	
		$result = $db -> select("PLACE", array('PID'=>$id));
		
		while($rows = $result->fetch())
		{
			$pid = $rows['PID'];
			$name = $rows['NAME'];
			$desc = $rows['DESCRIPTION'];
			$type = $rows['TYPE'];
		}
		
      ?>
      <form method="post" action="Edit_Data_Places.php">
	  
		<input type="hidden" name="pid" size="4" value="<?php echo $pid?>">
	  
        <tr>        
          <td>Name:</td>
          <td>
            <input type="text" name="pname" size="60" value="<?php echo $name?>">
          </td>
        </tr>
		
        <tr>
          <td>Description:</td>
          <td>
			<textarea rows="10" cols="100" name="pdescription"><?php echo $desc?></textarea>
          </td>
        </tr>
		
		<tr>
          <td>Type:</td>
          <td>
            <input type="text" name="ptype" size="20" value="<?php echo $type?>">
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