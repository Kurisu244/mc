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
	
		$result = $db -> select("RATING", array('RID'=>$id));
		
		while($rows = $result->fetch())
		{
			$rid = $rows['RID'];
			$pid = $rows['PID'];
			$stars = $rows['STARS'];
		}

      ?>
      <form method="post" action="Edit_Data_Ratings.php">
		
		<input type="hidden" name="rid" size="4" value="<?php echo $rid?>">
		
        <tr>        
          <td>Place id:</td>
          <td>
            <input type="text" name="pid" size="4" value="<?php echo $pid?>">
          </td>
        </tr>
		
        <tr>
          <td>Stars:</td>
          <td>
            <input type="text" name="stars" size="4" value="<?php echo $stars?>">
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